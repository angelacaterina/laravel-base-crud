<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>databese post</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <h1>Posts</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>body</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->title}}</td>
                    <td>{{$value->body}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>