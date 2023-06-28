@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-3">Profili Utenti</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Cognome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            @foreach ($users as $user)
                <tbody>
                    <tr>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('admin.user.show', $user->id) }}" class="see-profile">--> Vedi Profilo <-- </a>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
