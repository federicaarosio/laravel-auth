@extends('layouts.admin')

@section('title', 'Create new Project')

@section('main-content')

<section class="create-project">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7">
                @include('partials.errors')
    
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf
    
                    <div class="mb-3 input-group">
                        <label for="title" class="input-group-text">Title:</label>
                        <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
                    </div>
    
                    <div class="mb-3 input-group">
                        <label for="author" class="input-group-text">Author:</label>
                        <input class="form-control" type="text" name="author" id="author" value="{{ old('author') }}">
                    </div>
    
                    <div class="mb-3 input-group">
                        <label for="creation_date" class="input-group-text">Creation date:</label>
                        <input class="form-control" type="date" name="creation_date" id="creation_date" value="{{ old('creation_date') }}">
                    </div>
    
                    <div class="mb-3 input-group">
                        <label for="cover_image" class="input-group-text">Project image url:</label>
                        <input class="form-control" type="text" name="cover_image" id="cover_image" value="{{ old('cover_image') }}">
                    </div>

                    <div class="mb-3 input-group">
                        <label for="languages" class="input-group-text">Languages:</label>
                        <input class="form-control" type="text" name="languages" id="languages" value="{{ old('languages') }}">
                    </div>
    
                    <div class="mb-3 input-group">
                        <label for="description" class="input-group-text">Short description:</label>
                        <textarea class="form-control"  name="description" id="description" cols="30" rows="10">{{ old('description')  }}</textarea>
                    </div>
                    <div class="mb-3 input-group">
                        <button type="submit" class="btn btn-xl btn-primary">
                            Add a new project
                        </button>
                        <button type="reset" class="btn btn-xl btn-warning">
                            Reset all fields
                        </button>
                    </div>
    
                </form>
            </div>
        </div>
    </div>
</section>
    
@endsection