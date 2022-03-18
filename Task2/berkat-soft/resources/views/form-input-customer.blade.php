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
  <body>
      @include('layouts/navbar') <!-- navbar -->

      <div class="container-fluid">
        <div class="card margin-formSignUp width-form rounded border-primary">
            <div class="bg-primary rounded-top">
        </div>
            <div class="card-body">
                <h4 class="text-primary mb-4">Form Input Customer</h4>
                <form>
                <div class="mb-3">
                      <label for="exampleInputName" class="form-label">Name</label>
                      <input type="text" class="form-control border-primary"  placeholder="Input Name">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="text" class="form-control border-primary"  placeholder="Input Email">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Address</label>
                      <input type="text" class="form-control border-primary" placeholder="Input Adress">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Phone</label>
                      <input type="text" class="form-control border-primary" id="exampleInputPassword1" placeholder="Input Number Phone" id="pwd2">
                    </div>
                    <div class="d-grid p-2 mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                  </form>
            </div>
          </div>
        </div>

       

    </div>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>