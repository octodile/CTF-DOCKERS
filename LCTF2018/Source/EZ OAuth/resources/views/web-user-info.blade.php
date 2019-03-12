<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/asserts/favicon.png">
    <link rel="shortcut icon" href="/asserts/favicon.png">
    <title>Task Management</title>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/asserts/css/cover.css">
  </head>

  <body class="text-center">
    <div class="cover-container d-flex w-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">MisakaNetwork</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link" href="/">Home</a>
            <a class="nav-link active" href="/user">User</a>
            <a class="nav-link" href="/admin">Admin</a>
          </nav>
        </div>
      </header>
      <main role="main" class="inner cover">
        <h1 class="cover-heading">User Info</h1>
        <form>
          <div class="form-group">
            <label for="inputTask">Email</label>
            <input type="data" class="form-control" value="{{ $email }}" disabled="disabled">
          </div>
          <div class="form-group">
            <label for="inputTask">Status</label>
            <input type="data" class="form-control" value="{{ $status }}" disabled="disabled">
          </div>
        </form>
      </main>
      <footer class="mastfoot mt-auto">
        <div class="inner">
        <p>2018-2019 <a href="https://www.xdsec.org" rel="nofollow">XDSEC</a> Some rights reserved.</p>
        </div>
      </footer>
    </div>
    <script src="//cdn.jsdelivr.net/npm/jquery-slim@3.0.0/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>
