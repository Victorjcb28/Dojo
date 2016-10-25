@extends('layouts.admin')
@section('content')
<div class="row">
<div class="col-md-9 col-md-offset-1">

    <div class="panel panel-default">

        <div class="panel-heading">Atletas</div>
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
                <div class="col-md-6">
                    <form class="navbar-form navbar-left pull-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>

        </div>

        <!-- Table -->
        <table class="table">
            <thead>
            <th>Nombre</th>
            <th>Clave</th>


            </thead>
            @foreach($atletas as $atleta)
                <tbody>
                <td>{{ $atleta -> name}}</td>
                <td>{{ $atleta -> apellido}}</td>

                </tbody>
            @endforeach
        </table>
    </div>
</div>

</div>
@endsection