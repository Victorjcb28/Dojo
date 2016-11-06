
    <table class="table">
        <thead>
        <th>Nombre</th>
        <th>Clavess</th>

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
