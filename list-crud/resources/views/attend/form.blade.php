@extends('theme.base')
@section('content')
    <div class="container py-5 text-center">
        @if(isset($attend))
          <h1>Editar Clase</h1>
        @else
          <h1>Inscribir Curso</h1>
        @endif

        @if(isset($attend))
        <form action="{{ route('attend.update', $course) }}" method="POST">
            @method('PUT')
        @else
        <form action="{{ route('attend.store') }}" method="POST">
        @endif
        @csrf
        <div class="mb-3">
            <label for="estudent_id" class="form-lable">Estudiante</label>
            <select name="estudent_id" id="inputTeacher" placeholder="-->Elegir Profesor <--">
                @foreach ($estudents as $estudent)
                    <option value="{{ $estudent->id }}">{{ $estudent['fullName']}}</option>
                @endforeach

            </select>
            <p class="form-text">Seleccionar estudiante</p>
            @error('estudent_id')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="course_id" class="form-lable">Curso</label>
            <select name="course_id" id="inputCourse">
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course['name']}}</option>
                @endforeach

            </select>
            <p class="form-text">Elija el curso</p>
            @error('course_id')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>
        @if(isset($attend))
        <button type="submit" class="btn btn-primary">Edit Inscription</button>
        @else
        <button type="submit" class="btn btn-primary">Save Class</button>
        @endif
        
    </form>
    </div
@endsection      