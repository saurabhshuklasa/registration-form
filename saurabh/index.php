<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>    
      </ul>
    </div>
  </div>
</nav>



    <div class="container">
<h3>Registration Form for Residential Rooftop Solar System (Advance Intimation)</h3>
<p>enter your details and submit this form to confirm your participation registration form</p>
 
<form action="welcome.php" method="post">
<input type="text" name="name" id="name" placeholder="enter your name"><br>
<input type="text" name="age" id="age" placeholder="enter your age"><br>
<input type="text" name="gender" id="gender" placeholder="enter your gender"><br>
<input type="email" name="email" id="email" placeholder="enter your email"><br>
<input type="phone" name="phone" id="phone" placeholder="enter your phone"><br>
<textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter any other information here"></textarea><br>

<button type="button" class="btn btn-outline-warning">Submit</button>

</form>
</div>

<footer class="bg-white">
    <div class="container-fluid py-5">
      <div class="row py-4">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><img src="img/logo.png" alt="" width="180" class="mb-3">
          <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
          <ul class="list-inline mt-4">
          <i class='fas fa-facebook' style='font-size:24px'></i>
            <li class="list-inline-item"><a href="#" class="fa fa-facebook"></a></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i class="fa fa-vimeo"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Shop</h6><hr>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><a href="#" class="text-muted">For Women</a></li>
            <li class="mb-2"><a href="#" class="text-muted">For Men</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Stores</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Our Blog</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Company</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><a href="#" class="text-muted">Login</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Register</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Wishlist</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Our Products</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Newsletter</h6>
          <p class="text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.</p>
          <div class="p-1 rounded border">
            <div class="input-group">
              <input type="email" placeholder="Enter your email address" aria-describedby="button-addon1" class="form-control border-0 shadow-0">
              <div class="input-group-append">
                <button id="button-addon1" type="submit" class="btn btn-link"><i class="fa fa-paper-plane"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Copyrights -->
    <div class="bg-light py-4">
      <div class="container text-center">
        <p class="text-muted mb-0 py-2">© 2022 saurabhshuklamgimt@gmail.com.</p>
      </div>
    </div>
  </footer>
</body>
</html>

