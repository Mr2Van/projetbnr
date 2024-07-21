<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
     <link href="../styles/style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
      <div class="container">
      <a class="navbar-brand" href="#">LOGO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav side-nav" >
          <li class="nav-item">
            <a class="nav-link" style="margin-left: 20px;" href="../index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admins.html" style="margin-left: 20px;">Admins</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../categories-admins/show-categories.html" style="margin-left: 20px;">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../products-admins/show-products.html" style="margin-left: 20px;">Products</a>
          </li>
         <!--  <li class="nav-item">
            <a class="nav-link" href="#" style="margin-left: 20px;">Comments</a>
          </li> -->
        </ul>
        <ul class="navbar-nav ml-md-auto d-md-flex">
          <li class="nav-item">
            <a class="nav-link" href="../index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              username
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Logout</a>
              
          </li>
                          
          
        </ul>
      </div>
    </div>
    </nav>
    <div class="container-fluid">
       <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Update Categories</h5>
          <form method="POST" action="/articles/{{$articles->id}}" enctype="multipart/form-data">
                 
                  @method('put')
                  @csrf

                <!-- Email input -->
                   <div class="form-outline mb-4 mt-4">
                     <input type="text" name="name" value="{{isset($articles->name) ? $articles->name:'' }}" id="form2Example1" class="form-control" placeholder="name" />
                 
                    </div>

                   <div class="form-group">
                   <label for="exampleFormControlTextarea1">Description</label>
                   <textarea name="description" value=" {{isset($articles->description) ? $articles->name:'' }}" placeholder="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                   </div>

                  <div class="form-outline mb-4 mt-4">
                  <label>Price</label>
                  <input type="text" name="price"  value="{{$articles->price }}"  id="form2Example1" class="form-control" placeholder="price" />
                  </div>

                  <div class="form-group">
                  <label for="exampleFormControlSelect1">Select Expiration Date</label>
                  <select name="dateExpirer"  value="{{$articles->dateExpirer }}"  class="form-control" id="exampleFormControlSelect1">
                    <option>--select expiration date--</option>
                    <option>2024-5-12</option>
                    <option>2025-5-3</option>
                    <option>2026-6-4</option>
      
                  </select>
                  </div>
                  <div class="form-outline mb-4 mt-4">
                  <label>Image</label>

                  <input type="file" name="image"  value="{{$articles->image}}" id="form2Example1" class="form-control" placeholder="image" />
                  </div>


                
      
                <!-- Submit button
                                    <button  href="#" class="btn btn-warning text-white text-center ">Update </button>
                -->

                <form action="/articles/show-products-" method="POST">
                  @csrf
                  <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">update</button>
                </form>

              </form>

            </div>
          </div>
        </div>
      </div>
  </div>
<script type="text/javascript">

</script>
</body>
</html>