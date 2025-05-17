@extends('layouts.master')
@section('title')
    Products
@endsection
@section('page-title')
    Products
@endsection
@section('body')

    <body>
    @endsection
    @section('content')

    @php use Illuminate\Support\Str; @endphp


    <div>
        <h1>Products List</h1>
    </div>

    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Meta tag</th>
                <th>Short Text</th>
                <th>Icon</th>
                <th>Banner</th>
                <th>Descriptions</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->title}}</td>
                <td>{{$product->slug}}</td>
                <td>{{$product->short_text}}</td>
                <td>@if($product->icon)
                    <img src="{{ asset('storage/' . $product->icon) }}" alt="{{ $product->name }}" width="150">
                @else
                    <p>No Image Available</p>
                @endif
                </td>
                <td>@if($product->banner)
                    <img src="{{ asset('storage/' . $product->banner) }}" alt="{{ $product->name }}" width="150">
                @else
                    <p>No Image Available</p>
                @endif
                </td>
                <td>
    {!! \Illuminate\Support\Str::words(strip_tags($product->des ?? ''), 30, '...') !!}
</td>


                <td>
                    <a href="{{route('products.edit', $product->slug)}}">Edit</a>
                    <form action="{{ route('products.delete', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    
    @endsection