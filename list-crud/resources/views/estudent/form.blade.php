@extends('theme.base')
@section('content')
    <div class="container py-5 text-center">
        @if(isset($estudent))
          <h1>Editar Estudiante</h1>
        @else
          <h1>Crear Estudiante</h1>
        @endif

        @if(isset($estudent))
        <form action="{{ route('estudent.update', $estudent) }}" method="POST">
            @method('PUT')
        @else
        <form action="{{ route('estudent.store') }}" method="POST">
        @endif
        @csrf
        <div class="mb-3">
            <label for="fullName" class="form-lable">Nombre Completo</label>
            <input type="text" name="fullName" class="form-control" placeholder="Nombre Completo" value="{{ old('fullName') ??@$estudent->fullName}}">
            <p class="form-text">Escriba el nombre completo del estudiante</p>
            @error('fullName')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-lable">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') ??@$estudent->email}}">
            <p class="form-text">Escriba el email del estudiante</p>
            @error('email')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="semester" class="form-lable">Semestre</label>
            <input type="text" name="semester" class="form-control" placeholder="Semestre" value="{{ old('semester') ??@$estudent->semester}}">
            <p class="form-text">Escriba el semestre del estudiante</p>
            @error('semester')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="career" class="form-lable">Carrera</label>
            <input type="text" name="career" class="form-control" placeholder="Carrera" value="{{ old('career') ??@$estudent->career}}">
            <p class="form-text">Escriba la carrera del estudiante</p>
            @error('career')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>
        @if(isset($estudent))
        <button type="submit" class="btn btn-primary">Edit Student</button>
        @else
        <button type="submit" class="btn btn-primary">Save Student</button>
        @endif
        
    </form>
    </div
@endsection      