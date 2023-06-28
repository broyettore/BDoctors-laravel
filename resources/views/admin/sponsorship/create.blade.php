@extends('layouts.app')


@section('content')
    <div class="container py-3">
        <h1 class="mb-3">Scegli una Sponsorship:</h1>

        <div>
            @include('partials.errors')
        </div>

        <form class="d-flex flex-column align-items-center" action="{{ route('admin.sponsorship.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center mt-5">
                @foreach ($sponsorships as $sponsorship)
                    <label class="p-2 rounded me-2 col-3 border sponsorship-box" for="{{ $sponsorship->name }}">
                        <h3>{{ $sponsorship->name }}</h3>
                        <span class="d-block">{{ $sponsorship->duration . ' hours' }}</span>
                        <span>{{ $sponsorship->price }}€</span>
                        <p>Questa è la {{ $sponsorship->name }} sponsorisation. Se sccegli questa sponsorship il tuo profilo apparirà in prima pagina per {{ $sponsorship->duration }} ore</p>
                        <input class="d-none sponsorship-option" type="radio" name="sponsorship"
                            id="{{ $sponsorship->name }}" value="{{ $sponsorship->id }}">
                    </label>
                @endforeach
            </div>
            <button type="submit" class="text-center btn ms-btn-primary mt-5 buy-sponsorship d-none">Acquista Sponsorship</button>
        </form>
    </div>
@endsection
