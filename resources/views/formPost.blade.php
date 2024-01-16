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
                <label for="form-image" class="form-label">Image</label>
                <input type="text" name="image" class="form-control" id="form-image" placeholder="Iamge Link">
            </div>
            <div class="mb-3">
                <label for="form-content" class="form-label">Content </label>
                <input type="text" name="content" class="form-control" id="form-content" placeholder="Content">
            </div>
          
            <button class="btn btn-primary w-100" type="submit">Buat postingan</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>