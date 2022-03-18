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
      <div class="row">
        <div class="col">
        <div class="card margin-formSignUp width-card rounded border-primary">
            <div class="bg-primary rounded-top">
            <h3 class="title-card text-center text-white mt-3">BerkatSoft</h3>
        </div>
            <div class="card-body">
                <h4 class="text-primary mb-4">Sign Up</h4>
                <form>
                <div class="mb-3">
                      <label for="exampleInputName" class="form-label">Name</label>
                      <input type="text" class="form-control border-primary" id="exampleInputName" aria-describedby="NameHelp" placeholder="Input Name">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input Email">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control border-primary" id="exampleInputPassword1" placeholder="Input Password" id="pwd1">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Re-Type Password</label>
                      <input type="password" class="form-control border-primary" id="exampleInputPassword1" placeholder="Input Password" id="pwd2">
                    </div>
                    <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="">
                  <label class="form-check-label" for="flexCheckDefault">
                    Check Password
                  </label>
                </div>
                    <div class="d-grid p-2 mt-3">
                    <button type="submit" class="btn btn-primary" onclick="check()">Sign Up</button>
                </div>
                  </form>
            </div>
          </div>
        </div>

        <div class="col-8 title-signup text-primary">
          <div class="container-fluid">
          <h2><b>We provide the right system</b></h2>
        </div>
        <div class="container">
          <h2 class=""><b> for your business needs</b></h2>
        </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>