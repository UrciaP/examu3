@extends('layout')

@section('titulo', 'Editar-Clientes')

@section('content')

    <table cellpadding="3" cellspaceing="5">
        <tr>
            <th colspan="4">Editar Cliente</th>
        </tr>


        <form action="{{ route('servicios.update', $persona) }}" method="POST">
            @csrf @method('PUT')
            <tr>
                <td>Apellido</td>
                <td><input type="text" name="cperApellido"  value="{{ $persona->cPerApellido }}"></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="cPerNombre" value="{{ $persona->cPerNombre }}"></td>
            </tr>

            <tr>
                <td>Correo</td>
                <td><input type="email" name="cPerSexo" value="{{ $persona->cPerSexo }}"></td>
            </tr>

            <tr>
                <td>Dirección</td>
                <td><input type="text" name="cPerDireccion" value="{{ $persona->cPerDireccion }}"></td>
            </tr>
            
            <tr>
                <td>Celular</td>
                <td><input type="number" name="nPerEdad" value="{{ $persona->nPerEdad }}"></td>
            </tr>
            
            <tr>
                <td colspan="2"><button>Guardar cambios</button></td>
            </tr>
        </form>
    </table>

    @if ($errors->any())
            <div class="alert alert-danger alert-fixed-bottom">
                <strong>LLenar todos los campos:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    

@endsection



