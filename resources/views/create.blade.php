@extends('layout')

@section('titulo', 'Crear-Persona')

@section('content')

    <table cellpadding="3" cellspaceing="5">
        <tr>
            <th colspan="4">Agregar nuevo Cliente</th>
        </tr>


        <form action="{{ route('servicios.store') }}" method="POST">
            {{ csrf_field() }}
            <tr>
                <td>Apellido</td>
                <td><input type="text" name="cperApellido"  value="{{ old('cperApellido') }}"></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="cPerNombre" value="{{ old('cPerNombre') }}"></td>
            </tr>
            <tr>
                <td>Correo</td>
                <td><input type="email" name="cPerSexo" value="{{ old('cPerSexo') }}"></td>
            </tr>

            <tr>
                <td>Dirección</td>
                <td><input type="text" name="cPerDireccion" value="{{ old('cPerDireccion') }}"></td>
            </tr>
            <tr>
                <td>Fono</td>
                <td><input type="text" name="nPerEdad" value="{{ old('nPerEdad') }}"></td>
            </tr>
            <tr>
                <td colspan="2"><button>guardar</button></td>
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



