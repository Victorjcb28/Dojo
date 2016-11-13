@extends('layouts.admin')
@section('content')
    <br>
    <div class="row">
        <div class="col-md-12 ">

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
                        <div class="col-md-6" id="app">

                            {{Form::open(['route'=>'atleta.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'Search'])}}

                            <div class="form-group">
                                {{Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre'])}}

                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                            {{Form::close()}}

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