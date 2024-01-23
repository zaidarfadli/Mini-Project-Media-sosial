<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Media Sosial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="margin:auto">
      @if (session()->has('failed'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('failed') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert"
              arial-label="Close"></button>
      </div>
      @endif
        <form action="{{ route('confirmPassword') }}" method="post">
          @csrf
            <h1>Password</h1>
            <div class="mb-3">
                <label for="form-password" class="form-label">password</label>
                <input type="password" name="password" class="form-control" id="form-password" placeholder="Masukan Password">
            </div>
          
            <button class="btn btn-primary w-100" type="submit">Konfirmasi itu anda</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>