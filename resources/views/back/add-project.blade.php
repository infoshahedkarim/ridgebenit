@extends('layouts.master')
@section('title')
    Add Project
@endsection
@section('page-title')
    Add Project
@endsection
@section('body')

    <body>
    @endsection
    @section('content')


    <div>
        <h1>Add Your Project Post</h1>

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


        <form action="{{route('store.project')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title</label>
                <input type="text" id="name" placeholder="Title" name="name" onkeyup="generateSlug()" required>
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label for="horizontal-firstname-input" class="col-form-label">Meta Tag</label>
                <input id="slug" name="slug" type="text" class="form-control" placeholder="Add meta tag" readonly />
            </div>
            <div>
                <label>Short Description</label>
                <input type="text" id="b" placeholder="Short Text" name="short_des" required>
            </div>
            <div>
                <label>Service 1</label>
                <input type="text" id="a" placeholder="Short Text" name="service_1" required>
            </div>
            <div>
                <label>Service 2</label>
                <input type="text" id="a" placeholder="Short Text" name="service_2" required>
            </div>
            <div>
    <label for="service_id">Select Service</label>
    <select name="service_id" id="service_id">
        <option value="">-- Select a Service --</option>
        @foreach($services as $service)
            <option value="{{ $service->id }}"
                {{ old('service_id') == $service->id ? 'selected' : '' }}>
                {{ $service->title }}
            </option>
        @endforeach
    </select>
</div>

<div>
    <label for="product_id">Select Project</label>
    <select name="product_id" id="product_id">
        <option value="">-- Select a Project --</option>
        @foreach($products as $product)
            <option value="{{ $product->id }}"
                {{ old('product_id') == $product->id ? 'selected' : '' }}>
                {{ $product->title }}
            </option>
        @endforeach
    </select>
</div>

            <div class="row mb-4" style="align-items: center;">
                <label for="horizontal-firstname-input" class="col-form-label" for="image">Add Image</label>
                <input type="file" name="img" id="image" accept="image/*" onchange="previewImage(event)">
                <br>
                <img id="imagePreview" src="" alt="Image Preview"
                    style="max-width: 200px; margin-top: 10px; display: none;">
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label for="horizontal-firstname-input" class="col-form-label">Add Description</label>
                <textarea id="detail" name="des" type="text" class="ckeditor form-control"
                    placeholder="Add a details"></textarea>
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
            const name = document.getElementById("name").value;
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
                const response = await fetch(`{{ url('/project-slug-check') }}/${slug}`);
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
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = "block";
                };
                reader.readAsDataURL(file);
            }
        }

    </script>

@endsection