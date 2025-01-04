<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class BrowseProductsComponent extends Component
{
    public function addToCart($productId)
    {
        // Mencari produk berdasarkan ID dan ini adalah implementasi Factory Method
        $product = Product::find($productId);

        // Validasi apakah produk ditemukan.
        if (!$product) {
            session()->flash('error', 'Product not found.');
            return;
        }

        // Mengambil keranjang dari sesi atau membuat yang baru.
        $cart = session()->get('cart', []);

        // Menambahkan produk ke keranjang atau memperbarui jumlah.
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                'title' => $product->title,
                'price' => $product->price,
                'quantity' => 1,
            ];
        }

        // Menyimpan keranjang ke sesi.
        session()->put('cart', $cart);

        // Memberikan pesan sukses.
        session()->flash('message', "{$product->title} added to cart.");
    }

    public function render()
    {
        // Mengembalikan view dengan semua produk.
        return view('livewire.browse-products-component', ['products' => Product::all()]);
    }
}
