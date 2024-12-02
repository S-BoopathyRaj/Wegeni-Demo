@extends('layout')

@section('content')




<form action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
   
    <div class="container">
        <div class="page-wrapper">
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Edit
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-body page-content">
                <div class="container-xl">
                    <div class="row">
                        <div class="gap-3 col-md-9">
                            <div class="card mb-3"  style="width: 700px;">
                                <div class="card-body" >
                                    <div class="form-body">
                                        <div class="mb-3">
                                            <label for="label" class="form-label required">Label</label>
                                            <input class="form-control" name="label" type="text" 
                                                value="{{ old('label', $menu->label) }}" placeholder="Label" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="title" class="form-label required">Title</label>
                                            <input class="form-control" name="title" type="text" 
                                                value="{{ old('title', $menu->title) }}" placeholder="Title" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="slug" class="form-label required">Slug</label>
                                            <input class="form-control" name="slug" type="text" 
                                                value="{{ old('slug', $menu->slug) }}" placeholder="Slug" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="page_title" class="form-label required">Page Title</label>
                                            <input class="form-control" name="page_title" type="text" 
                                                value="{{ old('page_title', $menu->page_title) }}" placeholder="Page Title" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="short_description" class="form-label required">Short Description</label>
                                            <textarea class="form-control" name="short_description" 
                                                placeholder="Short Description" style="height:150px">{{ old('short_description', $menu->short_description) }}</textarea>
                                        </div>

                                        @foreach (range(1, 3) as $i)
                                            <div class="mb-3">
                                                <label for="image{{ $i }}" class="form-label">Image {{ $i }}</label>
                                                <input type="file" name="image{{ $i }}" class="form-control">
                                                @if ($menu->{'image'.$i})
                                                    <img src="{{ asset('storage/'.$menu->{'image'.$i}) }}" alt="Image {{ $i }}" style="max-height: 100px; margin-top: 10px;">
                                                @endif
                                            </div>
                                        @endforeach

                                        <div class="mb-3">
                                            <label for="questions" class="form-label required">Questions</label>
                                            <input class="form-control" name="questions" type="text" 
                                                value="{{ old('questions', $menu->questions) }}" placeholder="Questions" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="answer_description" class="form-label required">Answer Description</label>
                                            <input class="form-control" name="answer_description" type="text" 
                                                value="{{ old('answer_description', $menu->answer_description) }}" placeholder="Answer Description" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label required">List</label>
                                            <div id="list-container">
                                                @foreach ($menu->list as $listItem)
                                                    <div class="input-group mb-2">
                                                        <input type="text" name="list[]" class="form-control" value="{{ $listItem }}" placeholder="List item">
                                                        <button type="button" class="btn btn-danger btn-sm ms-2" onclick="removeItem(this)">Remove</button>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <button type="button" class="btn btn-secondary mt-2" onclick="addListItem()">Add another item</button>
                                        </div>

                                        <button class="btn btn-primary" type="submit">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    function addListItem() {
        const container = document.getElementById('list-container');
        const div = document.createElement('div');
        div.className = 'input-group mb-2';
        div.innerHTML = `
            <input type="text" name="list[]" class="form-control" placeholder="List item">
            <button type="button" class="btn btn-danger btn-sm ms-2" onclick="removeItem(this)">Remove</button>
        `;
        container.appendChild(div);
    }

    function removeItem(button) {
        button.parentElement.remove();
    }
</script>

@endsection
