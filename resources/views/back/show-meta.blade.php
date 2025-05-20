@extends('layouts.master')
@section('title')
    Meta tags
@endsection
@section('page-title')
    Meta Tags
@endsection
@section('body')

    <body>
    @endsection
    @section('content')



    <div>
        <h1>Meta Tag List</h1>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>There were some problems with your input:</strong>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Meta Description</th>
                <th>Meta Keywords</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($metas as $meta)
            <tr>
                <td>{{$meta->id}}</td>
                <td>{{$meta->title}}</td>
                <td>{{$meta->des}}</td>
                <td>{{$meta->keywords}}</td>
                <td>
                    <a href="{{route('edit.meta', $meta->id)}}">Edit</a>
                    <form action="{{ route('delete.meta', $meta->id) }}" method="POST" style="display:inline;">
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