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
        <h1>Edit Product</h1>

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


        <form action="{{ route('update.blog', $blog->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label>Title</label>
                <input type="text" id="title" placeholder="Title" name="title" value="{{$blog->title}}" onkeyup="generateSlug()" required>
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label for="horizontal-firstname-input" class="col-form-label">Meta Tag</label>
                <input id="slug" name="slug" type="text" class="form-control" value="{{$blog->slug}}" placeholder="Add meta tag" />
            </div>
             <div>
                <label>Short Description</label>
                <input type="text" id="title" placeholder="Short Text" name="short_decs" value="{{$blog->short_decs}}" required>
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label for="horizontal-firstname-input" class="col-form-label" for="image">Add Icon</label>
               <img src="{{ asset('storage/' . $blog->img) }}" alt="{{ $blog->title }}" width="100px">
                <input type="file" name="img" id="image" accept="image/*" onchange="previewImage(event)">
                <br>
                <img id="imagePreview" src="" alt="Image Preview"
                    style="max-width: 200px; margin-top: 10px; display: none;">
            </div>
             <div>
                <label>Category</label>
                <input type="text" id="title" placeholder="Category" name="category" value="{{$blog->category}}">
            </div>
            <div>
                <label>Authur Name</label>
                <input type="text" id="title" placeholder="Author Name" name="author" value="{{$blog->author}}">
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label for="horizontal-firstname-input" class="col-form-label">Add Description</label>
                <textarea id="detail" name="des" type="text" value="{{$blog->des}}" class="ckeditor form-control"
                    placeholder="Add a details">{{$blog->des}}</textarea>
            </div>
            <div class="row mb-4" style="align-items: center;">
            <button type="submit" value="Save the data" class="btn btn-outline-success waves-effect waves-light">Save Changes</button>  
            </div>

        </form>
    </div>

    <script src="/ckeditor/ckeditor.js"></script>
    <script>
        let debounceTimer;

        function generateSlug() {
            const name = document.getElementById("title").value;
            let baseSlug = name.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^[-]+|[-]+$/g, '');

            clearTimeout(debounceTimer);

            if (baseSlug.length > 0) {
                debounceTimer = setTimeout(function () {
                    checkSlug(baseSlug).then(finalSlug => {
                        document.getElementById("slug").value = finalSlug;
                    });
                }, 500);
            } else {
                document.getElementById("slug").value = '';
            }
        }

        async function checkSlug(baseSlug) {
            let slug = baseSlug;
            let count = 0;
            let exists = true;

            while (exists) {
                const response = await fetch(`/blog-slug-check/${slug}`);
                const data = await response.json();

                exists = data.exists;

                if (exists) {
                    count++;
                    slug = `${baseSlug}-${count}`;
                }
            }

            if (slug !== baseSlug) {
                alert("Slug already exists. New unique slug generated.");
            }

            return slug;
        }
    </script>

    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('imagePreview');

            if (input.files && input.files[0]) {
                const file = input.files[0];
                const maxSize = 2 * 1024 * 1024; // 2MB in bytes

                if (file.size > maxSize) {
                    alert("Image too large! Maximum size allowed is 2MB.");
                    input.value = ""; // Reset the file input
                    preview.src = ""; // Remove preview
                    preview.style.display = "none";
                    return; // Prevent FileReader from executing
                }

                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.style.display = "block";
                };
                reader.readAsDataURL(file);
            }
        }

    </script>


@endsection