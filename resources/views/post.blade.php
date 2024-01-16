<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>


      <div class="container" >
        <div class="card"  style="max-width:600px;margin:auto">
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <img src="{{ $post->user->image }}" class="rounded-circle" width="40" height="40" alt="">
                    </div>
                    <div class="col">
                        <p class=" h5">{{ $post->user->username }}</p>
                    </div>
                </div>
                <p>{{ $post->id }}</p>
                <div class="c-img m-auto text-center mt-4">
                    <img src="{{ $post->image }}" alt="" width="200" height="200" class="rounded">
                </div>
              
                <h5>{{ $post->content }}</h5>
               

            </div>
        </div>

        <div class="card mt-4">
          <div class="card-body">
            <h3>Daftar Komen</h3>

            <form action="{{ route('sendComment',['post' => $post->id]) }}" method="post">
              @csrf
              <div class="mb-3">
                <label for="form-comment" class="form-label">comment </label>
                <input type="text" class="form-control" name="comment" id="form-comment" placeholder="Masukan Komen">
              </div>

              <button type="submit" class="btn btn-primary">Komen</button>
            </form> 


             <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">User</th>
                    <th scope="col">Komen</th>
                    <th scope="col">Hapus Komen</th>
                    <th scope="col">Balasan</th>
                  </tr>
                </thead>
            
                <tbody>
                    @foreach ($post->comment as $comment)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $comment->user->username }}</td>
                        <td>{{ $comment->comment }} </td>
                        <td>
                          <form action="{{ route('sendReply',['post' => $post->id,'comment' => $comment->id]) }}" method="post">
                            @csrf
                            <input type="text" name="reply" >
                            <button class="btn btn-primary" type="submit">Balas</button>
                           </form>
                            @auth
                            @if (Auth::user()->id == $comment->user_id)
                                <form action="{{ route('deleteComment',['post' => $post->id,'comment' => $comment->id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            @endif
                        @endauth
                        </td>
                        <td>
                          <h6>Balasan</h6>
                          @foreach ($comment->reply as $reply)
                            <p> <span class="fw-semibold">{{ $reply->user->username }}</span> : {{ $reply->reply }}</p>
                            @if (Auth::user()->id == $reply->user_id)
                              <form action="{{ route('deleteReply',['reply' => $reply->id]) }}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger">Hapus</button>
                              </form>
                            @endif
                            {{-- <p>{{ $reply->comment_id }}</p>
                            <p>{{ $reply->post_id }}</p> --}}
                          @endforeach
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
       
          </div>
        </div>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>