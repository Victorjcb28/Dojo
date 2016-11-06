
    <table class="table">
        <thead>
        <th>Nombre</th>
        <th>Claves</th>

        </thead>
        @foreach($users as $user)
            <tbody>
            <td>{{ $user -> name}}</td>
            <td></td>
            <td>

            </td>
            </tbody>
        @endforeach
    </table>
