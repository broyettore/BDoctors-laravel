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
            <div class="d-flex">
                <a href="{{route('admin.doctor.show', $user->doctor->id)}}" class="btn ms-btn-primary me-2">See Doctor Profile</a>
                <a href="{{route('admin.doctor.edit', $user->doctor->id)}}" class="btn ms-btn-primary">Edit Doctor Profile</a>
            </div>
        @else
            <a href="{{route('admin.doctor.create', $user)}}" class="btn ms-btn-primary">Create Doctor Profile</a>
        @endif
    </div>
@endsection
