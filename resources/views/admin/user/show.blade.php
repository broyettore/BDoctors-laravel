@extends('layouts.app')

@section('content')
    <div class="container py-3">
        <div class="ms-use d-md-flex justify-content-between align-items-start mb-5">
            <div class="left mb-3">
                <h1 class="fs-1">User #{{ $user->id }} / Doctor #{{ $user->doctor->user_id }}</h1>
                <ul class="my-3">
                    <li>First name: {{ $user->first_name }}</li>
                    <li>Last Name: {{ $user->last_name }}</li>
                    <li>Email: {{ $user->email }}</li>
                </ul>
                <ul class="mb-3">
                    <li>Address: {{ $user->doctor->address }}</li>
                    <li>Phone Number: {{ $user->doctor->phone_number }}</li>
                    <li>Services: {{ $user->doctor->services }}</li>
                    @if (isset($user->doctor->specialisations))
                        @foreach ($user->doctor->specialisations as $specialisation)
                            <li>
                               Specialisation: {{ $specialisation }}
                            </li>
                        @endforeach
                    @endif
                </ul>
                <div class="btn-nav d-flex mb-4">
                    @if ($user->doctor)
                        <a href="{{ route('admin.doctor.edit', $user->doctor->id) }}" class="btn ms-btn-primary me-2">Edit Doctor
                            Profile
                        </a>
                    @else
                        <a href="{{ route('admin.doctor.create', ['id' => $user->id]) }}" class="btn ms-btn-primary me-2">Create Doctor
                            Profile
                        </a>
                    @endif
                    <a href="{{ asset("storage/" . $user->doctor->cv) }}" download="cv.pdf" class="btn ms-btn-primary">Download Cv</a>
                </div>
            </div>
            <div class="d-none d-md-block right photo-ctn mb-3">
                <img src=" {{ asset("storage/" . $user->doctor->photo) }}" alt="{{ $user->doctor->last_name }}">
            </div>
        </div>

        <div class="row d-flex align-items-start">
            <div class="col-12 col-md-7">
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
            <div class="col-12 col-md-4">
                @if (isset($user->doctor->votes))
                    <section>
                        <h3>Your Rating ({{ count($user->doctor->votes) }})</h3>
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
