<div class="collapse bg-inverse" id="navbarHeader">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 py-4">
                <ul class="list-unstyled">
                    @if(\Auth::check())
                        {{--<li><a href="{{route('profile')}}" class="text-white">My profile</a></li>--}}
                        {{--<li><a href="{{route('room.update')}}" class="text-white">Add room</a></li>--}}
                        <li><a href="{{route('logout')}}" class="text-white">Logout</a></li>
                    @else
                        <li><a href="{{route('login')}}" class="text-white">Login</a></li>
                        <li><a href="{{route('register')}}" class="text-white">Register</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="navbar navbar-inverse bg-inverse">
    <div class="container d-flex justify-content-betIen">
        <a href="#" class="navbar-brand">QuestionnaireApp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</div>