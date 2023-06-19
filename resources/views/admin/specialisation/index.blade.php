@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="d-flex justify-content-between">
            <h1 class="mb-3">Specialisations</h1>
            <div>
                <a class="btn ms-btn-primary" href="{{ route('admin.specialisation.create') }}">Create</a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Specialisation</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach ($specialisations as $specialisation)
                <tbody>
                    <tr>
                        <td>{{ $specialisation->name }}</td>
                        <td>{{ substr($specialisation->description, 0, -250) }}...</td>

                        <td>
                            <a href="{{ route('admin.specialisation.show', $specialisation->id) }}" class="see-profile">-->
                                See Specialisation <-- </a>
                        </td>

                    </tr>
                </tbody>
            @endforeach
        </table>


    </div>
@endsection
