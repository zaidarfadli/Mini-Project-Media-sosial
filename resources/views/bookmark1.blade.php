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
        <h2>Daftar Bookmark {{ $user->name }}</h1>        

        <table class="table my-3">
          <thead class="table-primary">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Image user</th>
              <th scope="col">Username</th>
              <th scope="col">Image Post</th>
              <th scope="col">Lihat</th>
              <th scope="col">Hapus dari bookmark</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($bookmarks as $bookmark)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img src="{{ $bookmark->post->user->image }}" width="30" height="30" class="rounded-circle" alt="Foto_profil">
                    </td>
                     <td><a href="{{ route('seeProfile',['user' => $bookmark->post->user->id]) }}">{{ $bookmark->post->user->username }}</a></td>
                    <td>
                        <img src="{{ $bookmark->image }}" width="100" height="100" class="rounded" alt="Postingan-foto">
                    </td>
                    <td>
                        <a href="{{ route('seePost',['post' => $bookmark->id]) }}">Lihat</a>
                    </td>
                    <td>
                    @auth
                        <form action="{{ route('addBookmark',['post' => $bookmark->post->id]) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    @endauth
                    
                    </td>
                </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>