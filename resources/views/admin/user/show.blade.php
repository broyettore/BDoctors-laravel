@extends('layouts.app')

@section('content')
    <div class="container">
            <h1 class="fs-1">User #{{ $user->id }}</h1>

        <ul class="my-3">
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

        @if (isset($user->doctor->reviews))
        <section>
            <h3>Your reviews ({{ count($user->doctor->reviews) }})</h3>
            <ul class="my-1">
                <hr>
                @foreach ($user->doctor->reviews as $review)
                    <li>{{ $review->first_name . ' ' . $review->last_name }} ( {{ $review->email }})</li>
                    <li>{{ $review->description }}</li>
                    <hr>
                @endforeach
            </ul>
        </section>  
        @endif
        @if (isset($user->doctor->votes))
        <section>
            <h3>Your valutation ({{ count($user->doctor->votes) }})</h3>
            <ul class="my-1">
                <hr>
                @foreach ($user->doctor->votes as $vote)
                    <li>{{ $vote->value }}</li>
                    <hr>
                @endforeach
            </ul>
        </section>  
        @endif
    </div>
@endsection
