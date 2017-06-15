<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <style>
    body {
      background: url(images/bg.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
  <body>
    <div class="jumbotron" style="background-color: rgba(192, 192, 192, 0.3); !important; margin-top: 50vh;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form action="">
              <h1>Hello!</h1>
              <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd">
              </div>
              <button type="submit" class="btn btn-primary btn-block">Log In</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
