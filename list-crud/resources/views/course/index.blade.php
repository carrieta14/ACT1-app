@extends('theme.base')
@section('content')
<div class="container py-5 text-center">
    <h2>Listado de Cursos</h2>

    <a href="{{ route('course.create') }}" class="btn btn-primary">Create Class</a>
    <table class="table">
        <tr>
            <th>Curso</th>
            <th>Nivel</th>
            <th>Horas Academicas</th>
            <th>Profesor Asignado</th>

        </tr>
        @foreach ($courses as $course)
        <tr>
            <td>{{ $course->name }}</td>
            <td>{{ $course->level }}</td>
            <td>{{ $course->hours }}</td>
            <td>{{ $course->teachers->fullName}}</td>
        </tr>
        @endforeach
    </table>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end"">
        <a href=" {{ route('attend.create') }}" class="btn btn-primary btn-sm">Register Class</a>
        </div>
</div>

@endsection