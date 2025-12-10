@extends('layouts.app')
@section('title', 'Alumnos')
@section('content')
<h1>Estudiantes</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Lenguaje de programacion favorito</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $student)
            <tr>
                <td>{{ $student['id'] }}</td>
                <td>{{ $student['name'] }}</td>
                <td>{{ $student['email'] }}</td>
                <td>{{ $student['phone'] }}</td>
                <td>{{ $student['language'] }}</td>
                <td>
                    <a href="{{ route('student.view', $student['id']) }}">Revisar</a>
                    <a href="{{ route('student.delete', $student['id']) }}">Borrar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
