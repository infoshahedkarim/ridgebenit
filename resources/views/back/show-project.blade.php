@extends('layouts.master')
@section('title')
    Projects
@endsection
@section('page-title')
    Blogs
@endsection
@section('body')

    <body>
    @endsection
    @section('content')

    @php use Illuminate\Support\Str; @endphp


    <div>
        <h1>Project List</h1>
    </div>

    
    <table border="2">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Meta tag</th>
                <th>Short Description</th>
                <th>Service 1</th>
                <th>Service 2</th>
                <th>Service Name</th>
                <th>Product Name</th>
                <th>Image</th>
                <th>Descriptions</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alls as $project)
            <tr>
                <td>{{$project->id}}</td>
                <td>{{$project->title}}</td>
                <td>{{$project->slug}}</td>
                <td>{{$project->short_des}}</td>
                <td>{{$project->service_1}}</td>
                <td>{{$project->service_2}}</td>
                <td>{{$project->service->title ?? ''}}</td>
                <td>{{$project->product->title ?? ''}}</td>
                <td>@if($project->img)
                    <img src="{{ asset('storage/' . $project->img) }}" alt="{{ $project->name }}" width="150">
                @else
                    <p>No Image Available</p>
                @endif
                </td>
                <td>
    {!! \Illuminate\Support\Str::words(strip_tags($project->des ?? ''), 30, '...') !!}
</td>


                <td>
                    <a href="{{route('edit.project', $project->slug)}}">Edit</a>
                    <form action="{{ route('delete.project', $project->id) }}" method="POST" style="display:inline;">
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