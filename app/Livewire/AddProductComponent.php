<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AddProductComponent extends Component
{
    use WithFileUploads; // Menggunakan trait untuk fitur upload file.

    public $title, $description, $price, $image, $categories, $category_id;

    public function mount()
    {
        // Mengambil semua kategori dari database.
        $this->categories = Category::all();
    }

    public function saveProduct()
    {
        // Menyimpan gambar ke direktori 'products' di disk publik.
        $path = $this->image->store('products', 'public');

        // Menggunakan Factory Method untuk membuat produk baru.
        Product::create([
            'title' => $this->title,
            'category_id' => $this->category_id,
            'description' => $this->description,
            'price' => $this->price,
            'image' => $path,
        ]);

        // Mengirim notifikasi sukses ke user.
        notify()->success('Product added successfully!');
    }

    public function render()
    {
        // Mengembalikan view dengan layout khusus admin.
        return view('livewire.add-product-component')->layout('components.layouts.admin');
    }
}
