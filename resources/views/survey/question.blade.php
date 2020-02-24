<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>
<body>
@include('layout.partials.nav')

<div class="py-5 bg-light">

    <div class="container">
        <form class="form" action="{{route('save-answers', $question->id)}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <h1> QUESTION {{$question->sort_order}}</h1>

            <div class="form-group">
                @if (!$question->multiple_answers_possible)
                    @foreach($question->answers as $answer)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="answers[]" value="{{$answer->id}}" id="{{$answer->id}}">
                            <label class="form-check-label" for="{{$answer->id}}">
                                {{$answer->value}}
                            </label>
                        </div>
                    @endforeach
                @else
                    <select name="answers[]" class="form-control">
                        <option>Choose</option>
                        @foreach($question->answers as $answer)
                            <option value="{{$answer->id}}">{{$answer->value}}</option>
                        @endforeach
                    </select>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>

@yield('content')
@include('layout.partials.footer')
@include('layout.partials.footer-scripts')
</body>
</html>