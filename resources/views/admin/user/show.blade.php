@extends('layouts.app')

@section('content')
    <div class="container py-3">
        <div class="ms-use d-md-flex justify-content-between align-items-start mb-3">
            <div class="left d-flex flex-column">
                <div>
                    <h1 class="fs-1">Welcome, Dott. {{ $user->first_name . ' ' . $user->last_name }}</h1>
                </div>

                <div>
                    {{-- User info --}}
                    <ul>
                        <li>Email: {{ $user->email }}</li>
                        @if (isset($user->doctor))
                            <li>Address: {{ $user->doctor->address }}</li>
                            <li>Phone Number: {{ $user->doctor->phone_number }}</li>
                            <li>Services: {{ $user->doctor->services }}.</li>
                            @if (isset($user->doctor->specialisations))
                                <li>
                                    Specialisation:
                                    @foreach ($user->doctor->specialisations as $specialisation)
                                        @if ($loop->last)
                                            <span>{{ $specialisation->name }}</span>.
                                        @else
                                            <span>{{ $specialisation->name }}</span>,
                                        @endif
                                    @endforeach
                                </li>
                            @endif
                    </ul>
                    @endif
                    {{-- /User info --}}
                </div>

                <div class="btn-nav d-flex align-items-start mt-4">
                    @if ($user->doctor)
                        {{-- Nav Buttons --}}
                        <a href="{{ route('admin.doctor.edit', $user->doctor->id) }}" class="btn ms-btn-primary me-2">Edit
                            Doctor
                            Profile
                        </a>
                        @if ($user->doctor->cv) 
                            <a href="{{ asset('storage/' . $user->doctor->cv) }}" download="cv.pdf"
                                class="btn ms-btn-primary me-2">Download Cv</a>
                        @endif

                        <button class="btn ms-btn-primary mb-3" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                            Messagges
                        </button>
                        {{-- /Nav Buttons --}}
                        {{-- offcanvas per la visualizazzione dei messaggi ricevuti --}}
                        @if (isset($user->doctor->messagges))
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="staticBackdrop"
                                aria-labelledby="staticBackdropLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="staticBackdropLabel">Messagges</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    @foreach ($user->doctor->messagges as $messagge)
                                        <div class="card mb-2">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    {{ $messagge->first_name }} {{ $messagge->last_name }}</h5>
                                                <p class="mb-1">{{ $messagge->body }}</p>
                                                <span>{{ $messagge->email }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        {{-- /offcanvas per la visualizazzione dei messaggi ricevuti --}}
                    @else
                        <a href="{{ route('admin.doctor.create') }}"
                            class="btn ms-btn-primary me-2">Create Doctor
                            Profile
                        </a>
                    @endif
                </div>
            </div>

            {{-- Doctor Photo  --}}
            @if (isset($user->doctor))
                <div class="d-none d-md-block right photo-ctn mb-3">
                    @if ($user->doctor->photo)
                        <img src=" {{ asset('storage/' . $user->doctor->photo) }}" alt="{{ $user->doctor->last_name }}">
                    @else
                        <img src="/avatar-medico-edited.jpg" alt="{{ $user->doctor->last_name }}">
                    @endif
                </div>
            @endif
        </div>
        {{-- /Doctor Photo  --}}

        @if (isset($user->doctor->sponsorships))
            <section class="mb-3">
                <h3>Sponsorships:</h3>
                <ol>
                    @foreach ($user->doctor->sponsorships as $sponsorship)
                        <li>
                            <span>Type: {{ $sponsorship->name }} - </span>
                            <span>End date: {{ $sponsorship->pivot->end_date }} - </span>
                            <span>Price: {{ $sponsorship->price }}€ </span>
                        </li>
                    @endforeach
                </ol>
                <span class="me-3">Total price: {{ $user->doctor->sponsorships->sum('price') }}€</span>
                <span>Sponsorship end: {{ $user->doctor->sponsorships->last()->pivot->end_date }}</span>
            </section>
        @endif

        @if (isset($user->doctor))
            {{-- Review Section  --}}
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
                {{-- /Review Section  --}}

                {{-- Rating Section  --}}
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
            {{-- /Rating Section  --}}
        @endif
    </div>
@endsection
