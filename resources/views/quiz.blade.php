<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Technical Quiz</h1>
<form action="/student_score" method="post">
    {{csrf_field()}}
@foreach($quiz->question as $ques)
<label for="question_1">{{$ques->body}}</label> <br>

@foreach($ques->answer as $ans)
            {{--<input type="hidden" value="{{$ans->is_correct}}" name="result">--}}
            <input type="radio" id="question_1" name="{{$ques->body }} " value="{{ $ans->is_correct }}"> {{ $ans->answer }}<br>
@endforeach

    @endforeach
    <button>submit</button>
</form>
</body>
</html>