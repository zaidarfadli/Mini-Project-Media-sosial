<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>


      <div class="container" style="max-width:600px" >

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <div class="c-img">
                            <img src="{{ $user->image }}" alt="Profile-img" width="60" height="60" class="rounded-circle">
                        </div>
                    </div>
                    <div class="col">
                        <h4>{{ $user->username }}</h4>
                        <h5>{{ $user->name }}</h5>
                        <p>{{ $user->bio }}</p>
                        {{-- <form action="{{ route('follow',['user' => ]) }}" method="post">
                            @csrf
                            butt
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h3>Daftar Postingan</h3>
                 <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Image Post</th>
                        <th scope="col">Content</th>
                        <th scope="col">Lihat</th>
                        <th scope="col">Hapus Post</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($user->post as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $post->image }}</td>
                            <td>{{ $post->content }}</td>
                            <td>  <td><a href="{{ route('seePost',['post' => $post->id]) }}">Lihat</a></td></td>
                            @auth
                            <td>

                                @if ($is_mine->id == $post->user_id)
                                    <form action="{{ route('deletePost',['post' => $post->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                @endif
                            </td>
                            @endauth
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