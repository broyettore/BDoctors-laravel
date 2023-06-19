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
        {{-- offcanvas per la visualizazzione dei messaggi ricevuti --}}
        <button class="btn ms-btn-primary mb-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
            aria-controls="staticBackdrop">
            Messagges
        </button>

<<<<<<< HEAD
        <div class="offcanvas offcanvas-end"  tabindex="-1" id="staticBackdrop"
            aria-labelledby="staticBackdropLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="staticBackdropLabel">Messagges</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                @foreach ($user->doctor->messagges as $messagge)
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{ $messagge->first_name }}{{ $messagge->last_name }}</h5>
                      <p class="mb-1">{{ $messagge->body }}</p>
                      <span>{{ $messagge->email }}</span>
                    </div>
                  </div>
                @endforeach
            </div>
        </div>
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
=======
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

>>>>>>> 2614f6d00b8764f694ae6d01dfe07c958e5172a4
    </div>
@endsection
