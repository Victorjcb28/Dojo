@extends('layouts.admin')
@section('content')
    <table class="table">
        <thead>
        <th>Nombre</th>
        <th>Apellido</th>

        </thead>
        @foreach($atletas as $atleta)
            <tbody>
            <td>{{ $atleta-> name}}</td>
            <td>{{ $atleta-> apellido}}</td>
            <td>

            </td>
            </tbody>
        @endforeach
    </table>
@endsection