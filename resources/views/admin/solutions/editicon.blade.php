@extends('layout')

@section('content')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Icon Title</strong>
            <input type="text" name="icon_title" class="form-control" placeholder="Icon Title"
                value="{{ $menu->icon_title }}">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Icon</strong>
            <div class="col-sm-9 text-secondary">
                <input type="file" name="icon" class="form-control" id="icon" />
                <img id="icon" src="#" alt="icon" src="{{ asset('storage/' . $menu->icon) }}"
                    style="display: none; max-height: 100px; margin-top: 10px;" />
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Icon Description</strong>
            <input type="text" name="icon_description" class="form-control" placeholder="Icon Description"
                value="{{ $menu->icon_description }}">
        </div>
    </div>
@endsection
