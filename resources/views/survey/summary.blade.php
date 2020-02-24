<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>
<body>
@include('layout.partials.nav')

<div class="py-5 bg-light">
    @foreach($answeredQuestions as $questionId => $answers)
        <div class="container">
            <div class="form-group">
                <h2>{{$answers->first()->question->title}}</h2>
                @foreach($answers as $answer)
                    <h6>{{$answer->answer->value}}</h6>
                @endforeach
            </div>
        </div>
    @endforeach
</div>

@yield('content')
@include('layout.partials.footer')
@include('layout.partials.footer-scripts')
</body>
</html>