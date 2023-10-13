<link rel="stylesheet" href="{{ asset('css/todos.css') }}">

@extends('templates.heading')
@section('content')
    <main class="main">
        <div class="container">
            <div class="main-cover">
                <div class="main-cover__left">
                    <h1 class="main-cover__left-heading">{{ $project->name }}</h1>
                    <p class="main-cover__left-type">Type: {{ $project->type }}</p>
                    <p class="main-cover__left-desc">Software project</p>
                    <span class="planning">PLANNING</span>
                    <div class="planning-list">
                        <a href="/todos/create">
                            <span class="planning-item">
                                <svg width="24" height="24" viewBox="0 0 24 24" role="presentation">
                                    <path
                                        d="M6 2h10a3 3 0 010 6H6a3 3 0 110-6zm0 2a1 1 0 100 2h10a1 1 0 000-2H6zm4 5h8a3 3 0 010 6h-8a3 3 0 010-6zm0 2a1 1 0 000 2h8a1 1 0 000-2h-8zm-4 5h6a3 3 0 010 6H6a3 3 0 010-6zm0 2a1 1 0 000 2h6a1 1 0 000-2H6z"
                                        fill="currentColor" fill-rule="evenodd"></path>
                                </svg>
                                <p class="planning-item__inside">Create issue</p>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="main-cover__right">
                    <h2 class="main-cover__right-heading">To do list</h2>
                    <div class="main-cover__right-desc2">
                        <p class="main-cover__right-desc">To do</p>
                        <p class="main-cover__right-desc">Done</p>
                    </div>
                    <div class="main-cover__right-bottom">
                        <div class="not-done">
                            @foreach ($todos as $todo)
                                @if ($todo->project_id == $project->id)
                                    <div class="todo-item" draggable="true">
                                        <p class="todo-item__name">To do: {{ $todo->name }}</p>
                                        <p class="todo-item__desc">{{ $todo->desc }}</p>
                                        <p class="todo-item__time">Deadline: {{ $todo->deadline }}</p>
                                        <div class="todo-item__cta">
                                            <a href="{{ url('/todos/' . $todo->id . '/edit') }}"
                                                class="todo-item__update">Update</a>
                                            <form action="{{ url('/todos/' . $todo->id) }}" method="post">
                                                {{ method_field('DELETE') }}
                                                @csrf
                                                <button type="submit" class="todo-item__delete"
                                                    onclick="return confirm('Are you sure?');">Delete issue</button>
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="done">
                        </div>
                    </div>
                    <div class="main-cover__right-des-project">
                        <p class="main-cover__right-des-project__item"><b>Description of {{ $project->name }}</b>
                            <br /><br /> {{ $project->desc }}
                        </p>
                        <p class="main-cover__right-des-project__item">Deadline for {{ $project->name }}:
                            {{ $project->deadline }}</p>
                        <form action="{{ url('/projects/' . $project->id) }}" method="post">
                            {{ method_field('DELETE') }}
                            @csrf
                            <div class="form-cta">
                                <a href="{{ url('/projects/' . $project->id . '/edit') }}"
                                    class="form-cta__cancel">Update</a>
                                <button type="submit" class="form-cta__create"
                                    onclick="return confirm('Are you sure?');">Delete project</button>
                            </div>
                        </form>
                    </div>
                </div>
    </main>
@endsection
