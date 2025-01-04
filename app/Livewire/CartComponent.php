<?php

namespace App\Livewire;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CartComponent extends Component
{
    public $cart = []; // Menyimpan data keranjang.
    public $total = 0; // Menyimpan total harga.

    public function mount()
    {
        // Memuat data keranjang dari sesi.
        $this->cart = session()->get('cart', []);
        $this->calculateTotal();
    }

    public function removeFromCart($productId)
    {
        // Menghapus produk dari keranjang jika ditemukan.
        if (isset($this->cart[$productId])) {
            unset($this->cart[$productId]);
            session()->put('cart', $this->cart);
            $this->calculateTotal();
            session()->flash('message', 'Product removed from cart.');
        }
    }

    public function updateQuantity($productId, $quantity)
    {
        // Memperbarui jumlah produk di keranjang.
        if (isset($this->cart[$productId]) && $quantity > 0) {
            $this->cart[$productId]['quantity'] = $quantity;
            session()->put('cart', $this->cart);
            $this->calculateTotal();
            session()->flash('message', 'Cart updated successfully.');
        }
    }

    public function confirmOrder()
    {
        // Validasi apakah keranjang kosong.
        if (empty($this->cart)) {
            session()->flash('error', 'Cart is empty. Add products to confirm an order.');
            return;
        }

        $orderTotal = 0;

        // Memproses pesanan untuk setiap item di keranjang.
        foreach ($this->cart as $productId => $item) {
            $productTotal = $item['price'] * $item['quantity'];
            $orderTotal += $productTotal;

            // Menggunakan Factory Method untuk membuat pesanan baru.
            Order::create([
                'product_id' => $productId,
                'user_id' => Auth::id(),
                'quantity' => $item['quantity'],
                'price_per_item' => $item['price'],
                'total_price' => $productTotal,
                'status' => 'pending',
            ]);
        }

        // Mengosongkan keranjang setelah pesanan dikonfirmasi.
        session()->forget('cart');
        $this->cart = [];
        $this->total = 0;

        session()->flash('message', "Order placed successfully! Your total is $orderTotal. We will notify you once it is approved.");
    }

    public function calculateTotal()
    {
        // Menghitung total harga keranjang.
        $this->total = array_reduce($this->cart, function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);
    }

    public function render()
    {
        // Mengembalikan view dengan data keranjang dan total harga.
        return view('livewire.cart-component', ['cart' => $this->cart, 'total' => $this->total]);
    }
}
