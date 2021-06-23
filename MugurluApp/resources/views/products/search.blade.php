@extends('layouts.app')

@section('title', 'Search')

@section('content')
<h3 class="text-xl italic">
    @if (count($products) > 0)
        
    Products Found:
    @else
        
    No Product Found !
    @endif
</h3>
<div class="overflow-x-auto">
    <div
        class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
        <div class="w-full lg:w-5/6">
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Image</th>
                            <th class="py-3 px-6 text-left">Name</th>
                            <th class="py-3 px-6 text-center">Category</th>
                            <th class="py-3 px-6 text-center">Price</th>
                            <th class="py-3 px-6 text-center">Quantity</th>
                            <th class="py-3 px-6 text-center">Add To Cart</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($products as $product)


                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                    </div>
                                    <span class="font-medium">{{$product->img}}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <span>{{$product->product_name}}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <span>{{$product->category}}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span
                                    class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">{{$product->price}}
                                    €</span>
                            </td>
                            <form action="{{route('add')}}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <input type="hidden" name="user_id" value="{{$product->user_id}}">
                                <td class="border-gray-200"><input class="text-center text-dark" type="number"
                                        name="quantity" value="1" min="1"></td>
                                <td class=" text-center border-gray-200"><button type="submit" name="submit"
                                        class="bg-blue-200 text-white-600 py-1 px-3 rounded-full text-xs">Add</button>
                                </td>
                            </form>
                        </tr>


                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
