@extends('layouts.app')

@section('content')
<div class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <div class="leading-loose">
  <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" method="post" action="{{action('App\Http\Controllers\ProductsController@store')}}" enctype="multipart/form-data">
    @csrf
    <p class="text-gray-800 font-medium">Add a new product</p>
    <div class="">
      <label class="block text-sm text-gray-00" for="productname">Product Name</label>
      <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="productname" type="text" required="" placeholder="Product Name" aria-label="Product Name">
    </div>
    <div class="mt-2">
      <label class="block text-sm text-gray-600" for="category">Category Name</label>
      <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" name="category" type="text" required="" placeholder="Category Name" aria-label="Category Name">
    </div>
    <div class="mt-2">
      <label class=" block text-sm text-gray-600" for="price">Price</label>
      <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" name="price" type="number" required="" placeholder="Price" aria-label="Price">
    </div>
    <div class="mt-2">
      <label class="hidden text-sm block text-gray-600" for="img">Image</label>
      <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="img" type="file" required="" placeholder="Product Image" aria-label="Email">
    </div>

    <div class="mt-4">
      <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Submit</button>
    </div>
  </form>
</div>
</div>
@endsection