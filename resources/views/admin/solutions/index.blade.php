@extends('layout')

@section('content')
   
    <div class="container">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">

            <p>{{ $message }}</p>

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
                                        <li class="breadcrumb-item active" aria-current="page">
                                            <h1 class="mb-0 d-inline-block fs-6 lh-1">Pages</h1>
                                        </li>
                                    </ol>
                                </nav>
    
                            </div>
                        </div>
                        <div class="col-auto ms-auto d-print-none">
                            <div class="btn-list">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="page-body page-content">
                <div class="container-xl">
    
    
                    <div class="table-wrapper">
    
                        <div class="card has-actions has-filter">
                            <div class="card-header">
                                <div class="w-100 justify-content-between d-flex flex-wrap align-items-center gap-1">
                                    <div class="d-flex flex-wrap flex-md-nowrap align-items-center gap-1">
                                        <div class="dropdown d-inline-block">
                                            <button class="btn   dropdown-toggle" type="button" data-bs-toggle="dropdown">
    
                                                Bulk Actions
    
                                            </button>
    
                                            <div class="dropdown-menu">
                                                <div class="dropdown-submenu">
                                                    <button class="dropdown-item">
    
                                                        Bulk changes
    
                                                        <svg class="icon dropdown-item-icon ms-auto me-0 svg-icon-ti-ti-chevron-right"
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M9 6l6 6l-6 6" />
                                                        </svg> </button>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item bulk-change-item" data-key="name"
                                                            data-class-item="Botble\Page\Tables\PageTable"
                                                            data-save-url="#">
    
                                                            Name
    
                                                        </button>
                                                        <button class="dropdown-item bulk-change-item" data-key="template"
                                                            data-class-item="Botble\Page\Tables\PageTable"
                                                            data-save-url="#">
    
                                                            Template
    
                                                        </button>
                                                        <button class="dropdown-item bulk-change-item" data-key="status"
                                                            data-class-item="Botble\Page\Tables\PageTable"
                                                            data-save-url="#">
    
                                                            Status
    
                                                        </button>
                                                        <button class="dropdown-item bulk-change-item" data-key="created_at"
                                                            data-class-item="Botble\Page\Tables\PageTable"
                                                            data-save-url="#">
    
                                                            Created At
    
                                                        </button>
                                                    </div>
                                                </div>
    
                                                <a class="dropdown-item" href="#"
                                                    data-trigger-bulk-action="data-trigger-bulk-action" data-method="POST"
                                                    data-table-target="Botble\Page\Tables\PageTable"
                                                    data-target="Botble\Table\BulkActions\DeleteBulkAction"
                                                    data-confirmation-modal-title="Confirm to perform this action"
                                                    data-confirmation-modal-message="Are you sure you want to do this action? This cannot be undone."
                                                    data-confirmation-modal-button="Delete"
                                                    data-confirmation-modal-cancel-button="Cancel">
    
                                                    Delete
    
                                                </a>
                                            </div>
                                        </div>
    
                                        <button class="btn   btn-show-table-options" type="button">
    
                                            Filters
    
                                        </button>
    
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <button class="btn action-item btn-primary" tabindex="0"
                                            aria-controls="botble-page-tables-page-table" type="button"
                                            aria-haspopup="dialog" aria-expanded="false" data-action="create"
                                            data-href="{{ route('menu.create') }}">
                                            <span>
                                                <svg class="icon svg-icon-ti-ti-plus" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M12 5v14" />
                                                    <path d="M5 12h14" />
                                                </svg>
                                                Create
                                            </span>
                                        </button>
    
    
                                        <button class="btn" type="button" data-bb-toggle="dt-buttons"
                                            data-bb-target=".buttons-reload" tabindex="0"
                                            aria-controls="botble-page-tables-page-table">
                                            <svg class="icon icon-left svg-icon-ti-ti-refresh"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                                                <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
                                            </svg>
                                            Reload
    
                                        </button>
                                    </div>
                                </div>
                            </div>
    
                            <div class="card-table">
                                <div class="table-responsive table-has-actions table-has-filter">
                                    <table class="table card-table table-vcenter table-striped table-hover"
                                        id="botble-page-tables-page-table">
                                        <thead>
                                            <tr>
                                                <th title="Checkbox">
                                                    <input class="form-check-input m-0 align-middle table-check-all"
                                                        data-set=".dataTable .checkboxes" name="" type="checkbox">
                                                </th>
                                                <th title="ID" width="20"
                                                    class="text-center no-column-visibility column-key-0">ID</th>
                                                <th title="Label" class="text-start column-key-1">Label</th>
                                                <th title="Title" class="text-start column-key-2">Title</th>
                                                <th title="Slug" width="100" class="column-key-3">Slug</th>
                                                <th  title="Page Title" width="100" class="column-key-3">Page Title</th>
                                                <th  title="Short Description" width="100" class="column-key-3">Short Description</th>
                                                <th  title="Image1" width="100" class="column-key-3">Image1</th>
                                                <th  title="Image2" width="100" class="column-key-3">Image2</th>
                                                <th  title="Image3" width="100" class="column-key-3">Image3</th>
                                                <th  title="Question" width="100" class="column-key-3">Question</th>
                                                <th  title="Answer Description" width="100" class="column-key-3">Answer Description </th>
                                                <th  title="List" width="100" class="column-key-3">List</th>
                                                <th title="Operations">Operations</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($menu as $menu)
                                                <tr>
                                                    <td>
                                                        <input class="form-check-input m-0 align-middle" type="checkbox"
                                                            value="{{ $menu->id }}">
                                                    </td>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td>{{ $menu->label }}</td>
                                                    <td>{{ $menu->title }}</td>
                                                    <td>{{ $menu->slug }}</td>
                                                    <td>{{ $menu->page_title }}</td>
                                                    <td>{{ $menu->short_description }}</td>
                                                    <td>
                                                        @if ($menu->image1)
                                                            <img src="{{ asset('storage/' . $menu->image1) }}" width="50" alt="Image1">
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($menu->image2)
                                                            <img src="{{ asset('storage/' . $menu->image2) }}" width="50" alt="Image2">
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($menu->image3)
                                                            <img src="{{ asset('storage/' . $menu->image3) }}" width="50" alt="Image3">
                                                        @endif
                                                    </td>
                                                    <td>{{ $menu->questions }}</td>
                                                    <td>{{ $menu->answer_description }}</td>
                                                    <td>
                                                        @if (is_array($menu->list))
                                                            @foreach ($menu->list as $list)
                                                                <li>{{ $list }}</li>
                                                            @endforeach
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        <!-- Edit Button wrapped in a div -->
                                                        <div>
                                                            <a href="{{ route('menu.edit', $menu->id) }}"
                                                                class="btn btn-primary btn-sm" title="Edit">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                        </div>
    
                                                        <!-- Delete Button wrapped in a div -->
                                                        <div>
                                                            <form action="{{ route('menu.destroy', $menu->id) }}"
                                                                method="POST" style="display:inline-block;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-primary btn-sm"
                                                                    onclick="return confirm('Are you sure you want to delete this item?')"
                                                                    title="Delete">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
    
    
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
    
                        </div>
                    </div>
    
    
    
    
    
                </div>
            </div>
        </div>
    
    
    
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const createButton = document.querySelector('button[data-action="create"]');
    
            createButton.addEventListener("click", function() {
                const url = createButton.getAttribute('data-href'); // Get the URL from data-href attribute
                window.location.href = url; // Redirect to the create page
            });
        });
    </script>
@endsection



