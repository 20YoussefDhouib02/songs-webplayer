<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SoundShare</title>
    <link
      rel="shortcut icon"
      href="https://png.pngtree.com/png-vector/20221213/ourmid/pngtree-old-cd-vector-design-png-image_6521891.png"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <style>
      a {
        text-decoration: none;
      }
      .banner {
        background: url("https://ew.com/thmb/DPnVY0NSsaA1EeD2sV-F7Va_D8A=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Best-Albums-of-the-year3-62c57b70b0e74a9d8a0311d225def8cf.jpg");
        background-position: center;
        color: rgba(255, 255, 255, 0.8);
        text-shadow: 2px 2px 20px rgb(0, 0, 0);
        font-size: 16px;
      }
      .banner-overlay {
        background-color: rgba(0, 0, 0, 0.8);
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding-inline: 5vw;
        backdrop-filter: blur(1px);
      }

      .banner h1 {
        font-size: 3.5rem;
        font-weight: 700;
      }

      .banner p {
        font-size: 1.2rem;
        font-weight: 500;
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

      .song-title {
        font-size: 1.5rem;
        font-weight: 700;
      }

      .song-card {
        height: 100%;
        width: 100%;
      }
      .song-card .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }

      .watch-youtube {
        background-color: #ff0000;
        color: white;
        font-weight: 700;
      }
      .youtube-background {
        border: 1px solid #ff0000;
      }
      .song-title-youtube {
        color: #ff0000;
      }

      .watch-spotify {
        background-color: #1dd05d;
        color: white;
        font-weight: 700;
      }
      .spotify-background {
        border: 1px solid #1dd05d;
      }
      .song-title-spotify {
        color: #1dd05d;
      }

      @media screen and (max-width: 500px) {
        .banner h1 {
          font-size: 2rem;
        }

        .banner p {
          font-size: 0.8rem;
        }
      }
    </style>
  </head>
  <body>
    <nav
      class="navbar navbar-expand-lg fixed-top navbar-dark"
      style="background-color: rgba(0, 0, 0, 0.7); backdrop-filter: blur(5px)"
    >
      <div class="container-fluid">
        <div class="ms-auto">
          <ul class="navbar-nav me-5 mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Discover</a
              >
            </li>
          </ul>
        </div>
        <a class="navbar-brand" href="{{ route('index') }}">SoundShare</a>
        <div class="me-auto">
          <ul class="navbar-nav ms-5 mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('share') }}">Share</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section id="banner" class="text-center banner">
      <div class="banner-overlay">
        <h1 class="py-5">Share & Discover Great Music</h1>
        <p class="pb-5">
          Welcome to SoundShare, the ultimate platform for sharing and
          discovering music. Dive into a world of endless melodies, where music
          lovers come together to share their favorite tracks and explore new
          sounds. Join the community and let the rhythm lead the way!
        </p>
      </div>
    </section>
    <section class="songs container py-5">
  <div class="row">
    @foreach ($songs as $song)
    <div class="col-12 col-md-6 col-lg-4 my-4 d-flex justify-content-center align-items-center">
      <div class="card my-4 mx-2 {{$song->platform}}-background song-card">
        <div class="card-body">
          <a href="{{ route('song', ['id' => $song->id]) }}">
            <h5 class="card-title song-title song-title-{{$song->platform}}">{{$song->title}}</h5>
          </a>
          <h6 class="card-subtitle mb-2 text-muted">{{$song->artist}}</h6>
          <p class="card-text my-3 mb-4">{{$song->description}}</p>
          <div class='d-flex justify-content-center align-items-center'>
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
            <form id="deleteForm" action="{{ route('delete', ['id' => $song->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-reset text-none" style="background: transparent;border: transparent;" onclick="return confirmDelete()">
                    <div class="watch watch-{{$song->platform}}">
                        <i class="fas fa-trash"></i>
                    </div>
                </button>
            </form>

            <a href="{{ route('edit', ['id' => $song->id]) }}" class="text-reset text-none" target="_blank">
              <div class="watch watch-{{$song->platform}}">
                <i class="fas fa-edit"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>
    <script>
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"

      function confirmDelete() {
        return confirm("Are you sure you want to delete this song?");
      }


    </script>
  </body>
</html>
