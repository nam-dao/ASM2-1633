<link rel="stylesheet" href="{{ asset('css/createproject.css') }}">

@extends('templates.heading')
@section('content')
    <div class="create-container">
        <h1 class="create">
            Update project
        </h1>
        <form action="/projects/{{ $project->id }}" class="form" name="formCreate" method="post"
            onsubmit="return validateForm()">
            {{ method_field('PUT') }}
            @csrf
            <label for="" class="form__label-project">Project name</label>
            <input type="text" value="{{ $project->name }}" class="form__input-project" name="name">
            <label for="" class="form__label-type">Type of project</label>
            <select aria-label="{{ $project->type }}" class="form__input-type" name="type" required>
                <option class="form__input-type-project" value="Proioritize">Proioritize</option>
                <option class="form__input-type-project" value="Normal">Normal</option>
            </select>
            <label for="" class="form__label-summary">Summary</label>
            <input type="text" value="{{ $project->summary }}" class="form__input-summary" name="summary">
            <label for="" class="form__label-description">Description</label>
            <textarea class="form__input-description" name="desc" required></textarea>
            <label for="" class="form__label-time">Deadline</label>
            <input type="date" class="form__input-date" name="deadline" required>
            <div class="form-cta">
                <a href="/projects" class="form-cta__cancel">Cancel</a>
                <input type="submit" class="form-cta__create" value="Update">
            </div>
        </form>
    </div>
@endsection
