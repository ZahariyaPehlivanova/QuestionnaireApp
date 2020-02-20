<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>
<body>
@include('layout.partials.nav')

<div class="py-5 bg-light">

    <div class="container">
        <form action="{{route('register')}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label for="inputEmail">Name</label>
                <input name="name" type="text" class="form-control" placeholder="Name">
            </div>

            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input name="email" type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input name="password" type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="inputPassword">Confirm password</label>
                <input name="confirmPassword" type="password" class="form-control" placeholder="Confirm password">
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="remember_me" value="1"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</div>

@yield('content')
@include('layout.partials.footer')
@include('layout.partials.footer-scripts')
</body>
</html>