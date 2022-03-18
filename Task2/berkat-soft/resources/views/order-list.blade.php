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

      <div class="container">
        <div class="container margin-t">
            <div class="mt-4">
                <div class="text-center m-top">
                <h2>Order List</h2>
                </div>
                <table class="table table-hover mt-4">
                  <thead>
                    <tr class="text-center">
                      <th scope="col">NO</th>
                      <th scope="col">Name</th>
                      <th scope="col">Address</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Order Item</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    <tr>
                      <th scope="row">1</th>
                      <td>Albert</td>
                      <td>WallStreet</td>
                      <td>08123456789</td>
                      <td>Wheat</td>

                      <td>
                        <div class="row align-items-center" style="justify-content: center; align-items:center">
                          <div class="col-3">
                            <a href="#">
                              <button class="btn btn-danger button-aksi">Delete</button>
                            </a>
                          </div>
                          <div class="col-4">
                            <a href="/edit-data-product">
                              <button class="btn btn-warning button-aksi margin-aksi">Edit</button>
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
            </div>
            </div>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>