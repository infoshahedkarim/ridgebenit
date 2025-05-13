@extends('layouts.master')
@section('title')
    Font Awesome 5
@endsection
@section('page-title')
    Font Awesome 5
@endsection
@section('body')

    <body>
    @endsection
    @section('content')

    @php use Illuminate\Support\Str; @endphp


    <div>
        <h1>All the Products</h1>
    </div>

    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Meta tag</th>
                <th>Short Description</th>
                <th>Image</th>
                <th>Category</th>
                <th>Author</th>
                <th>Descriptions</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
            <tr>
                <td>{{$blog->id}}</td>
                <td>{{$blog->title}}</td>
                <td>{{$blog->slug}}</td>
                <td>{{$blog->short_decs}}</td>
                <td>@if($blog->img)
                    <img src="{{ asset('storage/' . $blog->img) }}" alt="{{ $blog->name }}" width="150">
                @else
                    <p>No Image Available</p>
                @endif
                </td>
                <td>{{$blog->category}}</td>
                <td>{{$blog->author}}</td>
                <td>
    {!! \Illuminate\Support\Str::words(strip_tags($product->des ?? ''), 30, '...') !!}
</td>


                <td>
                    <a href="{{route('edit.blog', $blog->slug)}}">Edit</a>
                    <form action="{{ route('delete.blog', $blog->id) }}" method="POST" style="display:inline;">
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