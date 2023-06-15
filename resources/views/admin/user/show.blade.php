@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            <li>{{ $user->first_name }}</li>
            <li>{{ $user->last_name }}</li>
            <li>{{ $user->email }}</li>
            @if ($user->doctor)
                <a href="{{route('admin.doctor.edit', $user->doctor->id)}}" class="btn btn-primary">Modifica Profilo Medico</a>
            @else
            <a href="{{route('admin.doctor.create', $user)}}" class="btn btn-primary">Crea Profilo Medico</a>
            @endif
        </ul>
    </div>
@endsection
