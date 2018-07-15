@extends('layouts.app')
    @section('content')
    <div class="container">
        <form>
            <h1>{{$title}}</h1>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" id="loginBtn" class="btn btn-primary">Login</button>
            <script type="text/javascript">
                document.getElementById("loginBtn").onclick = function () {
                    location.href = "/home";
                };
            </script>
        </form>
    </div>
    @endsection