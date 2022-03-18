<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/370e08b62d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>{{ $title }}</title>
  </head>
  <body style="background-image: url(../img/bgLogin.png)">
    <div class="container">
        <div class="card mx-auto margin-form width-card rounded border-primary">
            <div class="bg-primary rounded-top">
            <h3 class="title-card text-center text-white mt-3">BerkatSoft</h3>
        </div>
            <div class="card-body">
                <h4 class="text-primary mb-4">Login</h4>
                <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input Email">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control border-primary" id="exampleInputPassword1" placeholder="Input Password">
                    </div>
                    <a style="text-decoration: none" href="#">Forgot Password?</a>
                    <div class="text-center mt-5">
                        <p>Don't have an account?</p>
                        <a style="text-decoration: none;" href="{{ '/sign-up' }}">Create an account</a>
                    </div>
                    <div class="d-grid p-2 mt-3">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                  </form>
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>