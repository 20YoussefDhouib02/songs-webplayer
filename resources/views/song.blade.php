<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundShare</title>
    <link rel="shortcut icon" href="https://png.pngtree.com/png-vector/20221213/ourmid/pngtree-old-cd-vector-design-png-image_6521891.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      a {
        text-decoration: none;
      }
      .watch {
        border-radius: 25px;
        padding: 8px 20px;
        width: max-content;
        display: flex;
        align-items: center;
      }

      .watch i {
        font-size: 1.5rem;
      }

      .watch-youtube {
        background-color: #ff0000;
        color: white;
        font-weight: 700;
      }
      .youtube-background {
        border: 1px solid #ff0000;
      }

      .watch-spotify {
        background-color: #1dd05d;
        color: white;
        font-weight: 700;
      }
      .spotify-background {
        border: 1px solid #1dd05d;
      }
    </style>
  </head>
<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color: rgba(0, 0, 0, 0.7); backdrop-filter: blur(5px)">
    <div class="container-fluid">
        <div class="ms-auto">
            <ul class="navbar-nav me-5 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('index') }}">Discover</a>
                </li>
            </ul>
        </div>
        <a class="navbar-brand" href="">SoundShare</a>
        <div class="me-auto">
            <ul class="navbar-nav ms-5 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('share') }}">Share</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    @if($song)
    <div class="row mt-5">
        <div class="col-md-8 mx-auto">
          <h1 class="text-center">{{$song->title}}</h1>
          <h3 class="text-center pt-3">{{$song->artist}}</h3>
          <div class="d-flex justify-content-center align-items-center py-5">
          <a href="{{$song->link}}" class="text-reset text-none" target="_blank">
          <div class="watch watch-{{$song->platform}}">
                @if($song->platform == 'youtube')
                <i class="fa-brands fa-youtube"></i>
                <span class="ms-2">Watch now on Youtube</span>
                @elseif($song->platform == 'spotify')
                <i class="fa-brands fa-spotify"></i>
                <span class="ms-2">Listen now on Spotify</span>
                @endif
            </div>
            </a>
          </div>
          <p class="lead text-center"> {{$song->description}} </p>
        </div>
    </div>
      <div class="row mt-4">
        <div class="col-md-8 mx-auto">
          <h2 class="text-center">Lyrics</h2>
          <pre class="text-center">{{$song->lyrics}}</pre>
        </div>
      </div>
      @else
            <div class="alert alert-warning" role="alert">
                No song details found.
            </div>
      @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>