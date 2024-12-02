@extends('layout')

@section('content')   



    <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @if ($errors->any())
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <ul style="margin-top: 10px;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
        <div class="page-wrapper">
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <div class="page-pretitle">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('dashboard') }}">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">Pages</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            <h1 class="mb-0 d-inline-block fs-6 lh-1">Create New Page</h1>
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="col-auto ms-auto d-print-none"></div>
                    </div>
                </div>
            </div>

            <div class="page-body page-content">
                <div class="container-xl">
                    <div class="row">
                        <div class="col-md-12" style="width: 700px;">
                            <div class="card mb-3">
                                <div class="card-body " >
                                    <div class="form-body">
                                        <div class="mb-3">
                                            <label for="label" class="form-label required">Label</label>
                                            <input class="form-control" placeholder="Label" required name="label" type="text" id="label">
                                        </div>
                                        <div class="mb-3">
                                            <label for="title" class="form-label required">Title</label>
                                            <input class="form-control" placeholder="Title" required name="title" type="text" id="title">
                                        </div>
                                        <div class="mb-3">
                                            <label for="slug" class="form-label required">Slug</label>
                                            <input class="form-control" placeholder="Slug" required name="slug" type="text" id="slug">
                                        </div>
                                        <div class="mb-3">
                                            <label for="page_title" class="form-label required">Page Title</label>
                                            <input class="form-control" placeholder="Page Title" required name="page_title" type="text" id="page_title">
                                        </div>
                                        <div class="mb-3">
                                            <label for="short_description" class="form-label required">Short Description</label>
                                            <textarea class="form-control" id="short_description" name="short_description" placeholder="Short Description" style="height:150px"></textarea>
                                        </div>
                                        @foreach (range(1, 3) as $i)
                                            <div class="mb-3">
                                                <label for="image{{ $i }}" class="form-label required">Image{{ $i }}</label>
                                                <input type="file" name="image{{ $i }}" class="form-control" id="image{{ $i }}-input">
                                                <img id="image{{ $i }}-preview" src="#" alt="image{{ $i }}" style="display: none; max-height: 100px; margin-top: 10px;">
                                            </div>
                                        @endforeach
                                        <div class="mb-3">
                                            <label for="questions" class="form-label required">Questions</label>
                                            <input class="form-control" placeholder="Questions" required name="questions" type="text" id="questions">
                                        </div>
                                        <div class="mb-3">
                                            <label for="answer_description" class="form-label required">Answer Description</label>
                                            <input class="form-control" placeholder="Answer Description" required name="answer_description" type="text" id="answer_description">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label required">List</label>
                                            <div id="list-container">
                                                <div class="input-group mb-2">
                                                    <input type="text" name="list[]" class="form-control" placeholder="List item">
                                                    <button type="button" class="btn btn-danger btn-sm ms-2" onclick="removeItem(this)">
                                                        <i class="bi bi-trash"></i> Remove
                                                    </button>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-secondary mt-2" onclick="addListItem()">
                                                <i class="bi bi-plus-circle"></i> Add another item
                                            </button>
                                        </div>
                                        <button class="btn btn-primary" type="submit">
                                            <i class="bi bi-save"></i> Save & Exit
                                        </button>
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
            const inputGroup = document.createElement('div');
            inputGroup.className = 'input-group mb-2';

            const input = document.createElement('input');
            input.type = 'text';
            input.name = 'list[]';
            input.className = 'form-control';
            input.placeholder = `List item ${container.children.length + 1}`;

            const removeButton = document.createElement('button');
            removeButton.type = 'button';
            removeButton.className = 'btn btn-danger btn-sm ms-2';
            removeButton.innerHTML = '<i class="bi bi-trash"></i> Remove';
            removeButton.onclick = () => inputGroup.remove();

            inputGroup.appendChild(input);
            inputGroup.appendChild(removeButton);

            container.appendChild(inputGroup);
        }

        function removeItem(button) {
            button.parentElement.remove();
        }
    </script>
@endsection
