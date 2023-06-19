@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="fs-1">User #{{ $user->id }}</h1>

            @if ($user->doctor)
                <div class="d-flex">
                    <a href="{{ route('admin.doctor.show', $user->doctor->id) }}" class="btn ms-btn-primary me-2">See Doctor
                        Profile</a>
                    <a href="{{ route('admin.doctor.edit', $user->doctor->id) }}" class="btn ms-btn-primary">Edit Doctor
                        Profile</a>
                </div>
            @else
                <a href="{{ route('admin.doctor.create', ['id' => $user->id]) }}" class="btn ms-btn-primary">Create Doctor
                    Profile</a>
            @endif
        </div>

        <ul class="my-3">
            <li>First name: {{ $user->first_name }}</li>
            <li>Last Name: {{ $user->last_name }}</li>
            <li>Email: {{ $user->email }}</li>
            @if (isset($user->doctor->specialisations))
                @foreach ($user->doctor->specialisations as $specialisation)
                    <li>
                        Specialisation: {{ $specialisation->name }}
                    </li>
                @endforeach
            @endif
        </ul>

        <div class="row d-flex align-items-start">
            <div class="col-7">
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
            </div>
            <div class="col-4">
                @if (isset($user->doctor->votes))
                    <section>
                        <h3>Your valutation ({{ count($user->doctor->votes) }})</h3>
                        <ul class="my-1">
                            <hr>
                            @foreach ($user->doctor->votes as $vote)
                                <li>
                                    <div class="d-flex">
                                        @for ($i = 0; $i < $vote->value; $i++)
                                            <i class="fa-solid fa-star valutation-star"></i>
                                        @endfor
                                    </div>

                                </li>
                                <hr>
                            @endforeach
                        </ul>
                    </section>
                @endif
            </div>
        </div>

    </div>
@endsection
