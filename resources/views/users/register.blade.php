@extends('layouts.master')

@section('content')

    <div class="container">
        <h1> Registeration form</h1>
        <form action="{{route('user.register')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" required="required">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" required="required">
            </div>

            <div class="form-group">
                <label for="confPassword">Confirm Password</label>
                <input type="password" name="confirmPassword" class="form-control" required="required">
            </div>


            <div class="form-group">
                <input type="submit" name="submit" class="form-control btn btn-primary" value="Submit">
            </div>

           @include('includes.error')

        </form>
    </div>
@endsection