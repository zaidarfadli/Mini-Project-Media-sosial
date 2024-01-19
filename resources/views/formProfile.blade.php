<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Media Sosial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="max-width: 800px;margin:auto">


        <form action="{{ route('createPost') }}" method="post">
          @csrf
            <h1>Tambah Postingan</h1>
            <div class="mb-3">
                <label for="form-Name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="form-Name" value="{{ $user->name }}" placeholder="Iamge Link">
            </div>
            <div class="mb-3">
                <label for="form-username" class="form-label">username </label>
                <input type="text" name="username" class="form-control" id="form-username" value="{{ $user->username }}" placeholder="username">
            </div>
            <div class="mb-3">
                <label for="form-bio" class="form-label">bio </label>
                <input type="text" name="bio" class="form-control" id="form-bio" value="{{ $user->bio }}" placeholder="bio">
            </div>
            <div class="mb-3">
                <label for="form-email" class="form-label">email </label>
                <input type="text" name="email" class="form-control" id="form-email" value="{{ $user->email }}" placeholder="bio">
            </div>
            <div class="mb-3">
                <label for="form-password" class="form-label">password </label>
                <input type="text" name="password" class="form-control" id="form-password"  placeholder="password">
            </div>



            <button class="btn btn-primary w-100" type="submit">Ubah Profile</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>