<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Share your song</title>
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
  </head>
  <body>
    <nav
      class="navbar navbar-expand-lg navbar-dark"
      style="background-color: rgba(0, 0, 0); backdrop-filter: blur(5px)"
    >
      <div class="container-fluid">
        <div class="ms-auto">
          <ul class="navbar-nav me-5 mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./index.html"
                >Discover</a
              >
            </li>
          </ul>
        </div>
        <a class="navbar-brand" href="./index.html">SoundShare</a>
        <div class="me-auto">
          <ul class="navbar-nav ms-5 mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="./share.html">Share</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <h2 class="text-center mb-4">Share your Song</h2>
          <form>
            <div class="form-group">
              <label for="title">Song Title</label>
              <input
                type="text"
                class="form-control"
                id="title"
                name="title"
                required
              />
            </div>
            <div class="form-group">
              <label for="artist">Artist</label>
              <input
                type="text"
                class="form-control"
                id="artist"
                name="artist"
                required
              />
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea
                class="form-control"
                id="description"
                name="description"
                rows="3"
              ></textarea>
            </div>
            <div class="form-group">
              <label for="link">Song Link</label>
              <input
                type="text"
                class="form-control"
                id="link"
                name="link"
                required
              />
            </div>
            <div class="form-group">
              <label for="lyrics">Lyrics</label>
              <textarea
                class="form-control"
                id="lyrics"
                name="lyrics"
                rows="5"
              ></textarea>
            </div>
            <div class="form-group">
              <label for="platform">Platform</label>
              <select class="form-control" id="platform" name="platform">
                <option value="spotify">Spotify</option>
                <option value="youtube">YouTube</option>
              </select>
            </div>
            <button type="submit" class="btn btn-secondary my-3">Share</button>
          </form>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
