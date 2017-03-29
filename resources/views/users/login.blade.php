@extends('layouts.master')

@section('content')

    <div class="container">
        <h1> Login form</h1>
        <form action="{{route('user.login')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" required="required">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" required="required">
            </div>

            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
            
            <div class="form-group">
                <input type="submit" name="submit" class="form-control btn btn-primary" value="Login">
            </div>



        </form>
    </div>
@endsection