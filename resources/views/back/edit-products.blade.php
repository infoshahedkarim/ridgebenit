@extends('layouts.master')
@section('title')
    Edit Product
@endsection
@section('page-title')
    Edit Product
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


        <form action="{{route('products.update', $product->slug)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label>Title</label>
                <input type="text" id="title" placeholder="Title" name="title" value="{{$product->title}}" onkeyup="generateSlug()" required>
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label for="horizontal-firstname-input" class="col-form-label">Meta Tag</label>
                <input id="slug" name="slug" type="text" class="form-control" value="{{$product->slug}}" placeholder="Add meta tag" readonly />
            </div>
             <div>
                <label>Short Description</label>
                <input type="text" id="title" placeholder="Short Text" name="short_text" value="{{$product->short_text}}" required>
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label for="horizontal-firstname-input" class="col-form-label" for="image">Add Icon</label>
                <img src="{{ asset('storage/' . $product->icon) }}" alt="{{$product->title}}" width="100">
                <input type="file" name="icon" id="image" accept="image/*" onchange="previewImage(event)">
                <br>
                <img id="imagePreview" src="" alt="Image Preview"
                    style="max-width: 200px; margin-top: 10px; display: none;">
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label for="horizontal-firstname-input" class="col-form-label" for="image">Add Banner Image</label>
                <img src="{{ asset('storage/' . $product->banner) }}" alt="{{$product->title}}" width="100">
                <input type="file" name="banner" id="image1" accept="image/*" onchange="previewImage1(event)">
                <br>
                <img id="imagePreview1" src="" alt="Image Preview1"
                    style="max-width: 200px; margin-top: 10px; display: none;">
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label for="horizontal-firstname-input" class="col-form-label">Add Description</label>
                <textarea id="detail" name="des" type="text" value="{{$product->des}}" class="ckeditor form-control"
                    placeholder="Add a details">{{$products->des}}</textarea>
            </div>
            <div>
                <label>Point 1</label>
                <input type="text" id="title" placeholder="Point 01" name="head1" value="{{$product->title}}">
            </div>
            <div>
                <label>Point 2</label>
                <input type="text" id="title" placeholder="Point 02" name="head2" value="{{$product->title}}">
            </div>
            <div>
                <label>Point 3</label>
                <input type="text" id="title" placeholder="Point 03" name="head3" value="{{$product->title}}">
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
                const response = await fetch(`/check-slug/${slug}`);
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


        function previewImage1(event) {
            const input = event.target;
            const preview = document.getElementById('imagePreview1');

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