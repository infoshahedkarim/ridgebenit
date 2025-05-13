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


<div class="container mt-4">
    <h1 class="mb-4">All the Feature</h1>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Sub Title</th>
                <th>Icon</th>
                <th>Descriptions</th>
                <th>Service ID</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($features as $feature)
                <tr>
                    <td>{{ $feature->id }}</td>
                    <td>{{ $feature->title }}</td>
                    <td>{{ $feature->subtitle }}</td>
                    <td>
                        @if($feature->icon)
                            <img src="{{ asset('storage/' . $feature->icon) }}" alt="{{ $feature->title }}" width="100">
                        @else
                            <span>No Image</span>
                        @endif
                    </td>
                    <td>{{!! $feature->des !!}}</td>
                    <td>{{ $feature->service_id }}</td>
                    <td>
                        <a href="{{ route('feature.edit', $feature->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('feature.delete', $feature->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
