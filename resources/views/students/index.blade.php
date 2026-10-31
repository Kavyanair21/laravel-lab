@extends('layouts.app')

@section('title', 'Student List')

@section('content')

    <h2>Student List</h2>

    @if(session('status'))
        <p>{{ session('status') }}</p>
    @endif

    <a href="{{ route('students.create') }}">Add Student</a>

    <ul>
        @foreach($students as $student)
            <li>
                {{ $student->roll_no }} -
                {{ $student->name }}
                <a href="{{ route('students.show', $student->id) }}">View</a>
            </li>
        @endforeach
    </ul>

@endsection