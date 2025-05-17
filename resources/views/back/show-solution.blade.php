@extends('layouts.master')
@section('title')
    Solution
@endsection
@section('page-title')
    Solution
@endsection
@section('body')

    <body>
    @endsection
    @section('content')


<div class="container mt-4">
    <h1 class="mb-4">Solution List/h1>

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
            @foreach($solutions as $solution)
                <tr>
                    <td>{{ $solution->id }}</td>
                    <td>{{ $solution->title }}</td>
                    <td>{{ $solution->subtitle }}</td>
                    <td>
                        @if($solution->icon)
                            <img src="{{ asset('storage/' . $solution->icon) }}" alt="{{ $solution->title }}" width="100">
                        @else
                            <span>No Image</span>
                        @endif
                    </td>
                    <td>{!! $solution->des !!}</td>
                    <td>{{ $solution->service_id }}</td>
                    <td>
                        <a href="{{ route('solution.edit', $solution->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('solution.delete', $solution->id) }}" method="POST" style="display:inline;">
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
