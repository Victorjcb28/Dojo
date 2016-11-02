@extends('layouts.admin')
@section('content')
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

    <div class="page-header">
        <h2>Atletas</h2>

    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <p>
                    <a class="btn btn-primary" href="" role="button">
                        Nuevo Atleta
                    </a>
                </p>
                <p>
                    Hay {{count($atletas)}} atletas
                </p>

            </div>
        </div>
        <table class="table table-bordered" id="table">
            <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            </thead>
            <tbody>
            @foreach($atletas as $atleta)
                <tr>
                    <td>{{ $atleta -> name}}</td>
                    <td>{{ $atleta -> apellido}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <script src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function(){
    $('#table').DataTable();
    });
    </script>
@endsection