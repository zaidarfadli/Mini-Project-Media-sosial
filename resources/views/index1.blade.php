<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>


      <div class="container">
        <h2>Daftar Postingan</h1>
        @guest
            <a href="{{ route('login') }}"  class="btn btn-primary">Login</a>
        @endguest

        @auth
          <div class="my-2">
              <form action="{{ route('logout') }}" method="post">
                  @csrf
                  <button type="submit" class="btn btn-danger" >Logout</button>
              </form>
          </div>
          <div class="my-2">
                <a href="{{ route('formPost') }}" class="btn btn-primary">Buat Postingan</a>
          </div>
          <div class="my-2">
            <a href="{{ route('myProfile') }}" class="btn btn-primary">My Profile</a>
          </div>
          <div class="my-2">
            <a href="{{ route('myBookmark') }}" class="btn btn-primary">My Bookmark</a>
          </div>
          <div class="my-2">
            <a href="{{ route('myNotifikasi') }}" class="btn btn-primary">My Notifikasi</a>
          </div>
          <div class="my-2">
            <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
          </div>
          <div class="my-2">
            <a href="{{ route('home2') }}" class="btn btn-primary">Postingan My Following</a>
          </div>
        @endauth
        

       
        <table class="table my-3">
          <thead class="table-primary">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Image user</th>
              <th scope="col">Username</th>
              <th scope="col">Image Post</th>
              <th scope="col">Content</th>
              <th scope="col">Lihat</th>
              <th scope="col">Like</th>
              <th scope="col">Hapus</th>
              <th scope="col">Bookmark</th>
              


            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img src="{{ $post->user->image }}" width="30" height="30" class="rounded-circle" alt="Foto_profil">
                    </td>
                    <td><a href="{{ route('seeProfile',['user' => $post->user->id]) }}">{{ $post->user->username }}</a></td>
                    <td>
                        <img src="{{ $post->image }}" width="60" height="60" class="rounded" alt="Foto_profil">
                    </td>
                    <td>{{ $post->content }}</td>
                    <td>
                        <a href="{{ route('seePost',['post' => $post->id]) }}">Lihat</a>
                    </td>
                    <td>
                      <p><a href="{{ route('seeWhoLike',['post'=> $post->id]) }}">Total likes : {{ $post->likes_count }}</a></p>
                      <form action="{{ route('likePost',['post' => $post->id]) }}" method="post">
                        @csrf
                        @if ($post->isLikedByUser())
                          <button type="submit" class="btn btn-danger">Unlike</button>
                        @else
                          <button type="submit" class="btn btn-primary">Like</button>
                        @endif
                      </form>
                    </td>
                    <td>
                    @auth
                        @if (Auth::user()->id == $post->user_id)
                            <form action="{{ route('deletePost',['post' => $post->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        @endif
                    @endauth
                    
                    </td>
                    <td>
                      <form action="{{ route('addBookmark',['post' => $post->id]) }}" method="post">
                        @csrf
                        @if ($post->isBookmarkedByUser())
                          <button type="submit" class="btn btn-danger">Unbookmark</button>
                        @else
                          <button type="submit" class="btn btn-primary">Bookmark</button>
                        @endif
                      </form>
                    </td>
                </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>