<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>
<body>
@include('layout.partials.nav')

<div class="py-5 bg-light">

    <div class="container">
        <div class="form-group">
            <label for="inputEmail">{{$user->email}}</label>
        </div>
        <label>Rooms</label>

        @foreach($rooms as $room)
            <label for="inputEmail">{{$room->title}}</label>
        @endforeach
    </div>
</div>

@yield('content')
@include('layout.partials.footer')
@include('layout.partials.footer-scripts')
</body>
</html>