<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap 5 Example</title>
  <?php include 'links.php'?>
</head>

<body>

<?php include 'navbar.php'?>
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/p.jpg" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/p2.jpg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/p3.jpg" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center animated-text">About Us</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="img/p3.jpg" class="img-fluid picture">
        </div>
        <div class="col-lg-6 col-md-6 col-12 hover">
          <h2 class="display-4">About Our company</h2>
          <p class="py-4 ">A standard navigation bar is created with the .navbar class, followed by a responsive
            collapsing class: .navbar-expand-xl|lg|md|sm (stacks the navbar vertically on extra large, large, medium or
            small screens).</p>
          <a href="about.php" class="btn btn-success">check more</a>
        </div>
      </div>
    </div>
  </section>


  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center animated-text">Our Services</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" >
            <img class="card-img-top" src="img/p7.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" >
            <img class="card-img-top" src="img/p7.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" >
            <img class="card-img-top" src="img/p7.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<section class="my-5">
  <div class="py-5">
      <h2 class="text-center animated-text">Our Gallery</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 hover">
        <img src="img/p5.jpg" class="img-fluid pb-3 pt-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12 hover">
        <img src="img/p7.jpg" class="img-fluid pb-3 pt-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12 hover">
        <img src="img/p7.jpg" class="img-fluid pb-3 pt-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12 hover">
        <img src="img/p7.jpg" class="img-fluid pb-3 pt-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12 hover">
        <img src="img/p7.jpg" class="img-fluid pb-3 pt-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12 hover">
        <img src="img/p7.jpg" class="img-fluid pb-3 pt-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12 hover">
        <img src="img/p7.jpg" class="img-fluid pb-3 pt-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12 hover">
        <img src="img/p7.jpg" class="img-fluid pb-3 pt-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12 hover">
        <img src="img/p7.jpg" class="img-fluid pb-3 pt-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12 hover">
        <img src="img/p7.jpg" class="img-fluid pb-3 pt-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12 hover">
        <img src="img/p7.jpg" class="img-fluid pb-3 pt-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12 hover">
        <img src="img/p7.jpg" class="img-fluid pb-3 pt-3">
      </div>
     
    </div>
  </div>
</section>

<section class="my-5 ">
    <div class="py-5">
      <h2 class="text-center animated-text ">FEEDBACK</h2>
    </div>
    <div class="w-50 m-auto ">
      <form action="" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Mobile</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>comments</label>
          <textarea name="comments" id="" class="form-control" rows="10" require></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </section>
<footer>
    <p class="p-3 bg-light text-black text-center">@nishnatrana924gmail.com</p>
  </footer>
</section>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php 
include 'connection.php'; 
if(isset($_POST['submit']))
{
$user= $_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comments=$_POST['comments'];
$query ="insert into userinfo (user , email , mobile , comments) values ('$user','$email','$mobile','$comments')";
$req=mysqli_query($con,$query); 
if($req){
  ?>
  <script>
    alert("success send");
  </script>
  <?php
}
else
{
  ?>
  <script>
  alert("success not send");
</script>
<?php
}
header('location:index.php');

}
?>
