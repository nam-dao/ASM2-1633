<link rel="stylesheet" href="{{ asset('css/createproject.css') }}">

@extends('templates.heading')
@section('content')
    <div class="create-container">
        <h1 class="create">
            Update issue
        </h1>
        <form action="/todos/{{ $todo->id }}" class="form" name="formCreate2" method="post"
            onsubmit="return validateForm2()">
            {{ method_field('PUT') }}
            @csrf
            <label for="" class="form__label-project">Name</label>
            <input type="text" value="{{ $todo->name }}" class="form__input-project" name="name">
            <label for="" class="form__label-type">Belong to project</label>
            <select aria-label="Select a project" class="form__input-type" name="project" required>
                @foreach ($projects as $project)
                    <option value="{{ $project->id }}"> {{ $project->name }}</option>
                @endforeach
            </select>
            <label for="" class="form__label-description">Description</label>
            <textarea class="form__input-description" name="desc" required></textarea>
            <label for="" class="form__label-time">Deadline</label>
            <input type="date" class="form__input-date" name="deadline" required>
            <div class="form-cta">
                <a href="{{ url('/projects/' . $todo->project_id) }}" class="form-cta__cancel">Cancel</a>
                <input type="submit" class="form-cta__create" value="Update">
            </div>
        </form>
    </div>
@endsection
