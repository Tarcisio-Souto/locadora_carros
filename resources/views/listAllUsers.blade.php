@extends('layouts.listUser')

@section('content2')

    <div class="container conteudo">

        <header class="lista-usuarios">
            <p>Lista de usuários</p>
        </header>

        <table class="table table-sm">
            <thead>
                <tr class="table-secondary">
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Visualizar</th>
                    <th scope="col">Deletar</th>
                </tr>
            </thead>
            @foreach ($users as $user)
                <tbody>
                    <tr class="table-light">
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <form action="{{ route('user.show', ['user' => $user->id]) }}" method="GET">
                                <input type="submit" value="Visualizar"><br><br>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Deletar">
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>

        <div id="none">
            {{ $users->links() }}
        </div>

    </div>



@endsection
