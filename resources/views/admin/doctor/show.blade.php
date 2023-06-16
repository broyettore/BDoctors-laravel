@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- @dd($doctor->user->first_name); --}}
        <div class="d-flex justify-content-between align-items-start mb-4">
            <h1 class="fs-1">Doctor Id: #{{ $doctor->id }}</h1>
            <div>
                <a href="{{ route('admin.doctor.edit', $doctor) }}" class="btn ms-btn-primary me-2">Edit Doctor
                    Profile</a>
                <a href="{{route('admin.user.show', $doctor->user->id)}}" class="btn ms-btn-primary">Back to User Profile</a>
            </div>
        </div>
        <div class="photo-ctn mb-3">
            <img src=" {{ asset("storage/" . $doctor->photo) }}" alt="{{ $doctor->last_name }}">
        </div>
        <ul class="mb-3">
            <li>First name: {{ $doctor->user->first_name }}</li>
            <li>Last Name: {{ $doctor->user->last_name }}</li>
            <li>Email: {{ $doctor->user->email }}</li>
        </ul>
        <ul class="mb-3">
            <li>Address: {{ $doctor->address }}</li>
            <li>Phone Number: {{ $doctor->phone_number }}</li>
            <li>Services: {{ $doctor->services }}</li>
        </ul>
        <ul class="mb-3">
            @foreach ($doctor->specialisations as $specialisation)
                <li>Specialisations: {{ $specialisation->name }}</li>
            @endforeach
        </ul>
        <a href="{{ asset("storage/" . $doctor->cv) }}" download="cv.pdf" class="btn ms-btn-primary">Download Cv</a>

    </div>
@endsection