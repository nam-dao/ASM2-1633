<link rel="stylesheet" href="{{ asset('css/todolist.css') }}">


@extends('templates.heading')
@section('content')
    <div class="container">
        @if (count($todos) > 0)
            <table class="table">
                <thead>
                    <tr class="tr">
                        <th class="th">Name</th>
                        <th class="th">Belong to</th>
                        <th class="th">Deadline</th>
                        <th class="th">Description</th>
                        <th class="th"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($todos as $todo)
                        <tr class="tr">
                            <td class="td">{{ $todo->name }}</td>
                            <td class="td">{{ $todo->project->name }}</td>
                            <td class="td">{{ $todo->deadline }}</td>
                            <td class="td">{{ $todo->desc }}</td>
                            <td class="td">
                                <form action="{{ url('/todos/' . $todo->id) }}" method="post">
                                    {{ method_field('DELETE') }}
                                    @csrf
                                    <a href="{{ url('/projects/' . $todo->project_id) }}">View</a>
                                    <button type="submit" class="todo-item__delete"
                                        onclick="return confirm('Are you sure?');">Delete issue</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <div class="container">
                        <div class="zero">
                            <img src="{{ asset('logos/zero.svg') }}" alt="" class="zero__item">
                            <p class="zero__item">You haven’t worked on anything yet</p>
                        </div>
                    </div>
        @endif
        </tbody>
        </table>
    </div>
@endsection
