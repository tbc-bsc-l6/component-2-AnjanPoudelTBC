@extends('layouts.masterlayout')
@section( 'content')
<div class="container ">
    <div class="auth-dashboard">
        @include('components.auth-nav',['activePanel'=>'users'])
        <div class="auth-page-content">

            <div class="table-header">
                <div class="table-header-text">
                    Users
                </div>

            </div>

            <table class="view-table">
                <thead>
                    <tr>
                        <th>ID</th>

                        <th>Name</th>
                        <th>Email</th>
                        <th>Verified At</th>
                        <th>Gender</th>
                        <th>Phone number</th>
                        <th>User Role </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($users as $user)

                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->email_verified_at}}</td>
                        <td>{{$user->gender}}</td>
                        <td>{{$user->phone_number}}</td>
                        <td>{{$user->user_role}}</td>


                    </tr>
                    @endforeach




                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection