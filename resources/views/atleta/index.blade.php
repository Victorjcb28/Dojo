@extends('layouts.admin')
@section('content')
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">

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
        <table class="display" width="100%" cellspacing="0" id="table">
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

    <script src="http://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>

    <script src="http://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="http://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'print',
                        customize: function ( win ) {
                            $(win.document.body)
                                    .css( 'font-size', '10pt' )
                                    .prepend(
                                            '<img src="http://datatables.net/media/images/logo-fade.png" style="position:absolute; top:0; left:0;" />'
                                    );

                            $(win.document.body).find( 'table' )
                                    .addClass( 'compact' )
                                    .css( 'font-size', 'inherit' );


                        }

                    }
                ]
            } );
        } );
    </script>
@endsection