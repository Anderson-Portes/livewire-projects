<div class="container mx-auto py-16 px-8">
  <div class="mb-4">
    <input
      type="text"
      wire:model.lazy="search"
      placeholder="Search for products"
    >
  </div>
  <table class="table-auto w-full">
    <thead>
      <tr>
        <th class="py-2 px-3 bg-gray-100 border-b-2 text-left">ID</th>
        <th class="py-2 px-3 bg-gray-100 border-b-2 text-left">Image</th>
        <th class="py-2 px-3 bg-gray-100 border-b-2 text-left">Title</th>
        <th class="py-2 px-3 bg-gray-100 border-b-2 text-left">Price</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($products as $product)
        <tr>
          <td>{{ $product->id }}</td>
          <td>
            <img
              class="w-16"
              src="{{ $product->image }}"
            >
          </td>
          <td>{{ $product->title }}</td>
          <td>{{ $product->price }}</td>
        </tr>
      @empty
        <tr>
          <td colspan="4">No products found...</td>
        </tr>
      @endforelse
    </tbody>
  </table>
  {{ $products->links() }}
</div>
