@extends('layouts.admin')
@section('content')
    <table class="table">
        <thead>
        <th>Nombre</th>
        <th>Clave</th>

        </thead>
        @foreach($users as $user)
            <tbody>
            <td>{{ $user -> name}}</td>
            <td></td>
            <td>
                {!! link_to_route('usuario.edit',$title='Editar', $parameters=$user->id, $attributes=['class'=>'btn btn-primary'] ) !!}
            </td>
            </tbody>
        @endforeach
    </table>
@endsection