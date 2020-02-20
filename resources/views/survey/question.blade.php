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

         <h1> QUESTION 1</h1>
        </form>
    </div>
</div>

@yield('content')
@include('layout.partials.footer')
@include('layout.partials.footer-scripts')
</body>
</html>