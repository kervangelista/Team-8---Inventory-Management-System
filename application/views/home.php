<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>IMS Sign Up or Login</title>

  </head>
  <body class="p-3 mb-2 bg-secondary">
 
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">           
        <div class="container-fluid">
      
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand fs-1" href="#" style="width: 1250px;" >Inventory Management System</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item m-3" style="width: 80px;"> 
                <a class="nav-link fs-3 "  aria-current="page" href="#">HOME</a>
                </li>
                <li class="nav-item m-4">
                <a class="nav-link active " href="<?=base_url('welcome/login')?>">Login</a>
                </li>
                
            </ul>
            </div>

        </div>
    </nav>

        <div class="container">
           <div class="row">
              <div class="col-md-4">

              </div>
              
                  <div class="col-md-5">
                    <div class="card position-absolute top-0 end-0 bg-dark" style="margin-right: 120px; margin-top: 190px; padding: 30px; "  >
                    <div class="card-header text-white text-center"  >
                        <h1>Sign Up</h1>
                    </div>
                    <div class="card-body p-5 mb-2 bg-warning" >
                    <form method="post" autocpmlete="off" action="<?=base_url('welcome/registerNow')?>">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fs-5">Name</label>
                            <input type="text" placeholder="Username" name="username"class="form-control fs-5" id="name" aria-describedby="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fs-5">Email address</label>
                            <input type="email" placeholder="Email Address" name="email" class="form-control fs-5" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label fs-5">Password</label>
                            <input type="password" placeholder="Password" name="password" class="form-control fs-5" id="exampleInputPassword1">
                        </div>
                        <div class="text-center">
                        <button type="submit" class="btn btn-dark fs-5">Sign Up</button>
                        </div>

                        <?php
                        if($this->session->flashdata('success')){  ?>
                            <p class="text-success text-center" style="margin_top: 10px;"> <?=$this->session->flashdata('success')?></p>
                        <?php } ?>
                      </form>
                    </div>
                </div>
            </div>
               <div class="col-md-4">
        </div>
     </div>


</div>
   


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>