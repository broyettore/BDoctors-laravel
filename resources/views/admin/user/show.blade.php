@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-3 fs-1">User #{{ $user->id }}</h1>
        <ul class="mb-3">
            <li>First name: {{ $user->first_name }}</li>
            <li>Last Name: {{ $user->last_name }}</li>
            <li>Email: {{ $user->email }}</li>
        </ul>
        @if ($user->doctor)
            <a href="{{route('admin.doctor.edit', $user->doctor->id)}}" class="btn btn-primary">Edit Doctor Profile</a>
        @else
            <a href="{{route('admin.doctor.create', $user)}}" class="btn ms-btn-primary">Create Doctor Profile</a>
        @endif
    </div>
@endsection
