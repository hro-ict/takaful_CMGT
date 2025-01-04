<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
          
<nav class="navbar navbar-expand-sm bg-warning justify-content-center fixed-top  ">
  <div class="container-fluid ">
    <a class="navbar-brand fw-bold text-white" href="javascript:void(0)"><img width="120px" src="{{asset('img\test.png')}}"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link fw-bold text-white" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold text-white" href="#">Tarieven</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold text-white" href="#">Aanmelden</a>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fw-bold text-white" href="#" role="button" data-bs-toggle="dropdown">Over Ons</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Link</a></li>
            <li><a class="dropdown-item" href="#">Another link</a></li>
            <li><a class="dropdown-item" href="#">A third link</a>
            </li>
            
          </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-bold text-white" href="#" role="button" data-bs-toggle="dropdown">Contact</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Link</a></li>
              <li><a class="dropdown-item" href="#">Another link</a></li>
              <li><a class="dropdown-item" href="#">A third link</a>
              </li>
              
            </ul>
          </li>




      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5 py-5">
 <div class="row justify-content-center">
            <div class="col-5">
<img src="image1.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-5">
<img src="image2.jpg" alt="" class="img-fluid">                    
            </div>
 </div>
</div>