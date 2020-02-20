<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>
<body>
@include('layout.partials.nav')

<div class="py-5 bg-light">

    <div class="container">
        <form class="form" action="{{route('login')}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="remember_me" value="1"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>

@yield('content')
@include('layout.partials.footer')
@include('layout.partials.footer-scripts')
</body>
</html>