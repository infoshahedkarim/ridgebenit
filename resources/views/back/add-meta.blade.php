@extends('layouts.master')
@section('title')
    Add Meta Tag
@endsection
@section('page-title')
    Add Meta Tag
@endsection
@section('body')

    <body>
    @endsection
    @section('content')


    <div>
        <h1>Add Meta Tag</h1>

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


        <form action="{{route('store.meta')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title</label>
                <input type="text" id="title" placeholder="Title" name="title" required>
            </div>
            <div>
                <label>Meta Keywords</label>
                <textarea type="text" id="title" placeholder="Add Meta Keywords" name="keywords" class="form-control" required></textarea>
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label for="horizontal-firstname-input" class="col-form-label">Meta Description</label>
                <textarea id="detail" name="des" type="text" class="form-control"
                    placeholder="Add Meta Description"></textarea>
            </div>
            <div class="row mb-4" style="align-items: center;">
                <button type="submit" value="Save the data" class="btn btn-outline-success waves-effect waves-light">Save Changes</button>
            </div>

        </form>
    </div>


@endsection