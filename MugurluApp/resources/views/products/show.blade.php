@extends('layouts.app')

@section('title', 'Product details')

@section('content')
<!-- component -->
<!-- This is an example component -->
<div class="min-h-screen flex items-center justify-center px-4 mt-3">
    
    <div class="max-w-4xl  bg-gray-300 w-full rounded-lg shadow-xl">
        <div class="md:grid md:grid-cols-2 hover:bg-gray-600 md:space-y-0 space-y-1 p-4 border-b">
            <p class="text-gray-600 hover:text-white">
                Product Details
            </p>
            <img src="{{asset('images/hero.png')}}" alt="">
        </div>
        <div class="p-4 border-b">
            <h2 class="text-2xl ">
                {{$product->product_name}}
            </h2>
        </div>
        <div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Price
                </p>
                <p>
                    $ {{$product->price}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Product description
                </p>
                <p>
                    Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu. 
                </p>
            </div>
            <div class="flex items-center justify-center bg-white">
                <form action="{{url('cart/'.$product->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <input type="hidden" name="user_id" value="{{$product->user_id}}">
                    <input type="number" class="text-center bg-purple-100" name="quantity" value="1">
                    <button type="submit" class="bg-blue-300 m-3 text-lg ring-4 ring-blue-100 hover:bg-purple-300  btn-primary rounded" name="submit">
                    {{-- <input class="text-center bg-purple-100" type="number" name="quantity" placeholder="quantity" min="1"> --}}
                    {{-- <input type="hidden" name="user_id" value="{{auth()->user()->id}}"> --}}
            Add to cart</button>
        </form>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection