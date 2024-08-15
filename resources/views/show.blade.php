@extends('layout')

@section('titulo', 'Persona | ' .$persona->nPerCodigo)


@section('content')
    <table class="table table-striped">
        <tr>
            <th colspan="3">Empleado con Id: {{$persona->nPerCodigo}} <a href="{{route('servicios.edit',$persona->nPerCodigo)}}">Editar</a></th>
            
        </tr> 
        <tr>
            <td colspan="3">
                <form action="{{route('servicios.destroy', $persona->nPerCodigo)}}" method="post">
                    @csrf @method('DELETE')
                    <button>Eliminar</button>
                </form>
            </td>
        </tr>
        
        <tr>
            <td colspan="3">{{$persona->cPerApellido}}</td>
        </tr>
        <tr>
            <td colspan="3">{{$persona->cPerNombre}}</td>
        </tr>
        <tr>
            <td colspan="3">{{$persona->cPerSexo}}</td>
        </tr>
        <tr>
            <td colspan="3">{{$persona->cPerDireccion}}</td>
        </tr>
        <tr>
            <td colspan="3">{{$persona->nPerEdad}}</td>
        </tr>
        
        <tr>
            <td colspan="3">{{$persona->created_at->diffForHumans()}}</td>
        </tr>
    </table>
    

@endsection


