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


     <div>
        <h1>All the Products</h1>
    </div>


    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Meta tag</th>
                <th>Icon</th>
                <th>Banner</th>
                <th>Descriptions</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                <td>{{$service->id}}</td>
                <td>{{$service->title}}</td>
                <td>{{$service->slug}}</td>
                <td>@if($service->icon)
                    <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->name }}" width="150">
                @else
                    <p>No Image Available</p>
                @endif
                </td>
                <td>@if($service->banner)
                    <img src="{{ asset('storage/' . $service->banner) }}" alt="{{ $service->name }}" width="150">
                @else
                    <p>No Image Available</p>
                @endif
                </td>
                <td>{!! $service->des ?? '' !!}</td>

                <td>
                    <a href="{{route('services.edit', $service->slug)}}">Edit</a>
                    <form action="{{ route('services.delete', $service->id) }}" method="POST" style="display:inline;">
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