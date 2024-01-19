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
        <h2>My Notifikasi</h2>

        @foreach ($notifs as $notif)
            <div class="card">
                <div class="card-body">
                    @if ($notif->type == "Follow")
                        <h5>{{ $notif->user->username }} follow your account</h5>
                    @endif
                    @if ($notif->type == "Comment")
                    <div class="row">
                        <div class="col-3">
                            <div class="c-img">
                                <img src="{{ $notif->comment->post->image }}" alt="" width="130" height="150" class="rounded">
                            </div>
                        </div>
                        <div class="col">
                            <h5>{{ $notif->user->username }} comment in your post</h5>
                            <p>{{ $notif->comment->comment }}</p>
                        </div>
                    </div>
                    @endif
                    @if ($notif->type == "Reply")
                    <div class="row">
                        <div class="col-3">
                            <div class="c-img">
                                <img src="{{ $notif->reply->post->image }}" alt="" width="130" height="150" class="rounded">
                            </div>
                        </div>
                        <div class="col">
                            <h5>{{ $notif->user->username }} Reply your comment</h5>
                            <p>{{ $notif->reply->reply }}</p>
                        </div>
                    </div>
                    @endif
                    @if ($notif->type == "LikePost")
                    <div class="row">
                        <div class="col-3">
                            <div class="c-img">
                                <img src="{{ $notif->like->post->image }}" alt="" width="130" height="150" class="rounded">
                            </div>
                        </div>
                        <div class="col">
                            <h5>{{ $notif->user->username }} Like your post</h5>
                        </div>
                    </div>
                    @endif
                    @if ($notif->type == "LikeComment")
                    <div class="row">
                        <div class="col-3">
                            <div class="c-img">
                                <img src="{{ $notif->like->comment->post->image }}" alt="" width="130" height="150" class="rounded">
                            </div>
                        </div>
                        <div class="col">
                            <h5>{{ $notif->user->username }} Like your Comment</h5>
                        </div>
                    </div>
                    @endif
                </div>            
            </div>
        @endforeach
      </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>