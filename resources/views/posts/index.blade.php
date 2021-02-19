<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>databese post</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <h1>Posts Admin</h1>
        <a href="{{route('posts.create')}}" class="btn btn-dark text-white">Create a new post</a>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>body</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->title}}</td>
                    <td>{{$value->body}}</td>
                    <td>
                        <a href="{{route('posts.show', ['post'=>$value->id])}}" class="btn btn-primary">View</a>
                        <a href="{{route('posts.edit', ['post'=>$value->id])}}" class="btn btn-warning">Edit</a>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modelId">
                          Delete
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Delete Post {{$value->title}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        sei sicuro? 
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <form action="{{route('posts.destroy', ['post'=>$value->id])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
    </body>
</html>