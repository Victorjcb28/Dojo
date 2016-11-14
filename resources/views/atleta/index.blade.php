@extends('layouts.admin')
@section('content')
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">


    <div class="page-header">
        <h2>Atletas</h2>

    </div>

    <table id="example" class="display" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
        </thead>
        <tfoot>

        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>

        </tfoot>
        <tbody>
        @foreach($atletas as $atleta)
        <tr data-id="{{$atleta->id}}">
            <td>{{$atleta->name}}</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>
                {!! link_to_route('atleta.edit',$title='Editar', $parameters=$atleta->id, $attributes=['class'=>'btn btn-primary'] ) !!}
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{Form::open(['route'=>['atleta.edit',':USER_ID'],'method'=>'GET','id'=>'form-buscar'])}}


    {{Form::close()}}


    <script src="http://code.jquery.com/jquery-1.12.3.js"></script>

    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

    <script>


        $(document).ready(function() {

            $('.btn btn-primary').click(function () {
                var row= $(this).parents('tr');
                var id= row.data('id');
                var form= $('#form-buscar');
                var url=form.attr('action').replace(':USER_ID',id);
                var data= form.serialize();
                alert(id);

            } );
            $('#example').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            } );
        } );

    </script>
@endsection