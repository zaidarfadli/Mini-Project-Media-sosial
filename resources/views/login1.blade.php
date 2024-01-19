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


        <form action="{{ route('action_login') }}" method="post">
          @csrf
            <h1>Login</h1>
            <div class="mb-3">
                <label for="form-email" class="form-label">Email </label>
                <input type="email" class="form-control" name="email" id="form-email" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="form-password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="form-password" placeholder="name@example.com">
              </div>
              <a href="{{ route('registrasi') }}" class="text-center my-2">Belum punya akun? Klik Disini</a>
              <button class="btn btn-primary w-100" type="submit">Login</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>