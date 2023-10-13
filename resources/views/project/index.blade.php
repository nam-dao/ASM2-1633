<link rel="stylesheet" href="{{ asset('css/project.css') }}">


@extends('templates.heading')
@section('content')
    <main class="main">
        <div class="container">
            <h2 class="yourWork">
                Project
            </h2>
            <div class="heading-project">
                <h3 class="heading-project__item">
                    Recent project
                </h3>
                <a href="/todos" class="heading-project__item">
                    View To-do list
                </a>
            </div>
            <div class="list-project">
                @if (count($projects) > 0)
                    @foreach ($projects as $project)
                        <a href="{{ url('/projects/' . $project->id) }}">
                            <div class="list-project__item">
                                <span class="list-project__item-heading">{{ $project->name }}</span>
                                <p class="list-project__item-summary">{{ $project->summary }}</p>
                                <span class="list-project__item-todo">Todo list</span>
                                @foreach ($todos as $todo)
                                    @if ($todo->project_id == $project->id)
                                        <span class="list-project__item-todo-list">{{ $todo->name }}</span>
                                    @endif
                                @endforeach
                            </div>
                        </a>
                    @endforeach
                @else
                    <div class="container">
                        <div class="zero">
                            <img src="{{ asset('logos/zero.svg') }}" alt="" class="zero__item">
                            <p class="zero__item">You haven’t worked on anything yet</p>
                            <a href="/projects/create" class="header__create zero__item">Create Project</a>
                        </div>
                    </div>
                @endif
            </div>
            <div class="seperate"></div>
        </div>
    </main>
@endsection
