@extends('theme.base')
@section('content')
    <div class="container py-5 text-center">
        <h1>List</h1>
        
        @if(Session::has('Mensaje'))
            <div class="alert alert-info my-5">
                {{ Session::get('Mensaje')}}
            </div>
        @endif

        <table class="table">
            <thead>
                <th>Estudiante</th>
                <th>Curso</th>
            </thead>
            <tbody>
            @forelse ($estudents->courses as $register)

                <tr>
                  <th>{{$register->name}}</th>
                  
                  <th> <a href="{{ route('attend.edit', $attend)}}" class="btn btn-warning">Edit</a>
                
                  <form action="{{ route('attend.destroy', $attend)}}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estas seguro que quieres eliminar este registro?')">Delete</button>
                  </form>
                </th>
                </tr>    
            </tbody>
            @empty

            @endforelse
        </table>    
        @if($attends->count())
        {{ $attends->links()}};
        @endif
    </div
@endsection   