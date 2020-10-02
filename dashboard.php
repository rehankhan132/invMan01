<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Inventory Management System</title>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="./js/main.js"></script>
  </head>
  <body>
    <!-- Navbar -->
    <?php include_once("./templates/header.php");  ?>
    <br /><br />
    <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card mx-auto">
            <img src="./images/user.png" class="card-img-top mx-auto" style="width: 60%;" alt="..">
            <div class="card-body">
              <h5 class="card-title">Profile Info</h5>
              <p class="card-text"><i class="fa fa-user">&nbsp;</i>Rehan Khan</p>
              <p class="card-text"><i class="fa fa-user">&nbsp;</i>Admin</p>
              <p class="card-text">Last Login : xxxx-xx-xx</p>
              <a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i> Edit Profile</a>
            </div>
            </div>
          </div> <!-- Column 4 -->
          <div class="col-md-8">
            <div class="jumbotron" style="width: 100%; height: 100%;">
              <h1>Welcome Admin, </h1>
              <div class="row">
                <div class="col-sm-6">
                  <iframe src="http://free.timeanddate.com/clock/i7fyf60c/n4782/szw160/szh160/hoc09f/hbw0/hfc09f/cf100/hnce1ead6/hcw2/fas30/fdi66/mqc000/mql15/mqw4/mqd98/mhc000/mhl15/mhw4/mhd98/mmc000/mml10/mmw1/mmd98/hhs2/hms2/hsv0" frameborder="0" width="160" height="160"></iframe>
                </div> <!-- Left Half -->
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">New Orders</h5>
                      <p class="card-text">Here you can make Invoices and create new Orders.</p>
                      <a href="#" class="btn btn-primary">New Orders</a>
                    </div>
                  </div> <!-- Card -->
                </div> <!-- Right Half -->
              </div> <!-- Row --> 
            </div> <!-- Jumbotron --> 
          </div> <!-- Column8 -->
        </div> <!-- Header Row -->
    </div> <!-- Container -->
  <br />   
  <br />   
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Categories</h5>
              <p class="card-text">Here you can manage your categories and you can add new parent and sub-categories.</p>
              <a href="#" class="btn btn-primary">Add</a>
              <a href="#" class="btn btn-primary">Manage</a>
            </div>
          </div> <!-- Card Categories -->

        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Brands</h5>
              <p class="card-text">Here you can manage your brands and you can add new brands.</p>
              <a href="#" class="btn btn-primary">Add</a>
              <a href="#" class="btn btn-primary">Manage</a>
            </div>
          </div> <!-- Card Brands -->
          
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Products</h5>
              <p class="card-text">Here you can manage your products and you can add new products.</p>
              <a href="#" class="btn btn-primary">Add</a>
              <a href="#" class="btn btn-primary">Manage</a>
            </div>
          </div> <!-- Card -->
          
        </div>
      </div>
    </div>
  
  </body>
</html>