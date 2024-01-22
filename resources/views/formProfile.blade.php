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


        <form action="{{ route('ubahProfile') }}" method="post">
          @csrf
          @method('put')
            <h1>Tambah Postingan</h1>
            <div class="mb-3">
                <label for="form-Name" class="form-label"  class=" @error('name') is-invalid border-danger @enderror" >Name</label>
                <input type="text" name="name" class="form-control" id="form-Name" value="{{ old('name',$user->name) }}" placeholder="Iamge Link">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="form-username" class="form-label"  class=" @error('username') is-invalid border-danger @enderror">username </label>
                <input type="text" name="username" class="form-control" id="form-username" value="{{ old('username',$user->username)  }}" placeholder="username">
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="form-bio" class="form-label"  class=" @error('bio') is-invalid border-danger @enderror">bio </label>
                <textarea name="bio" id="" class="form-control" cols="30" rows="10">{{ old('bio',$user->bio) }}</textarea>
                @error('bio')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>




            <button class="btn btn-primary w-100" type="submit">Ubah Profile</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>