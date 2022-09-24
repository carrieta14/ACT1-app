@extends('theme.base')
@section('content')
    <div class="container py-5 text-center">
        @if(isset($course))
          <h1>Editar Clase</h1>
        @else
          <h1>Crear Clase</h1>
        @endif

        @if(isset($course))
        <form action="{{ route('course.update', $course) }}" method="POST">
            @method('PUT')
        @else
        <form action="{{ route('course.store') }}" method="POST">
        @endif
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="mb-3">
            <label for="name" class="form-lable">Nombre del Curso</label>
            <input type="text" name="name" class="form-control" placeholder="Nombre del Curso" value="{{ old('name') ??@$course->name}}">
            <p class="form-text">Escriba el nombre del Curso</p>
            @error('name')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="hours" class="form-lable">Horas Academicas</label>
            <input type="text" name="hours" class="form-control" placeholder="Horas Academicas" value="{{ old('hours') ??@$course->hours}}">
            <p class="form-text">Escriba las Horas Academicas</p>
            @error('hours')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="level" class="form-lable">Nivel</label>
            <input type="text" name="level" class="form-control" placeholder="Nivel" value="{{ old('level') ??@$course->level}}">
            <p class="form-text">Escriba el nivel de curso</p>
            @error('level')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="teacher_id" class="form-lable">Profesor</label>
            <select name="teacher_id" id="inputTeacher" placeholder="-->Elegir Profesor <--">
                @foreach ($teachers as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher['fullName']}}</option>
                @endforeach

            </select>
            <p class="form-text">Asigne el profesor del curso</p>
            @error('teacher_id')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>
        @if(isset($course))
        <button type="submit" class="btn btn-primary">Edit Class</button>
        @else
        <button type="submit" class="btn btn-primary">Save Class</button>
        @endif
        
    </form>
    </div
@endsection      