<div class="row">
    @foreach ($products as $product)
    <div class="col-lg-4">
        <div class="product_card">
          <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}">

          <div class="pc_content">
            <h2>{{ $product->title }}</h2>
            <p class="pcc_in">In <a href="{{'category.show', $product->category->id}}">{{ $product->category->name }}</a></p>
            <p class="pcc_price">${{ $product->price }}</p>

            <div class="pcc_btns">
              <button wire:click="addToCart({{ $product->id }})" class=" border-2 border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white py-2 px-4 rounded">Order Yuk</button>
              <a href="{{ route('product.show', $product->id) }}" class="viewbtn border-2 border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white py-2 px-4 rounded">View Details</a>
            </div>            
            
          </div>
        </div>
      </div>

      @endforeach

      @if (session()->has('message'))

        <div class="alert alert-success mt-2">{{ session('message') }}</div>

    @endif

    
</div>
