@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-3">Users Profiles</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            
            @foreach ($users as $user)
                
                <tbody>
                    <tr>
                        <td>{{$user->first_name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->email}}</td>
                        {{-- <td>{{$user->doctor}}</td> --}}
                        
                        <td>
                            <a href="{{route('admin.user.show', $user->id)}}" class="see-profile">--> See Profile <--</a>
                        </td>
                        
                    </tr>
                </tbody>
            @endforeach
        </table>


    </div>
@endsection
