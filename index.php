<!doctype html>
<html lang=''>
<?php
include 'init.php';
include 'head.php';
?>



<body>
 <?php
include 'navigation.php';
 ?>

<!--Index Page Layout-->
<div class="jumbotron">
  <div class="text-center">
      <h1>Website Name</h1>
      <p>Website Name is a place where you can share your greatest lifts with the world!</p>
  </div>
</div>


<div data-spy="scroll" data-target=".navbar" data-offset="5">
<div id="About">
<div class="container">
 <div class="row">
  <div class="col-md-4 col-sm-6">
    <h2>How does it work?</h2>
    <p>Website name allows users to...</p>
  </div>
  <div class="col-md-4 col-sm-6">
    <h2>Why use Name?</h2>
    <p>Website name allows users to...</p>
  </div>
  <div class="col-md-4 col-sm-12">
    <h2>Get the App</h2>
    <img class="img-responsive" src="images/MobileApp.jpg" alt="Mobile">
  </div>
 </div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>

<div class="text-center">
<h1>LEADERBOARDS<h1>
</div>
<div class="row">
<div class="table-responsive col-md-6">
<div class="container-fluid">
<div class="panel panel-primary">
<div class="panel-heading">Bench Press</div>
<table class="table table-striped table-hover table-bordered table-condensed">
  <thread>
  <tr class="info">
    <th>Rank</th>
    <th>UserName</th>
    <th>Lb's</th>
    <th>Link Video</th>
  </tr>
</tread>
  <tbody>
      <tr>
        <td>1</td>
        <td>222</td>
        <td>222</td>
        <td>222</td>
      </tr>
  </tbody>
</table>
</div>
</div>
</div>

<div class="table-responsive col-md-6">
<div class="container-fluid">
<div class="panel panel-primary">
<div class="panel-heading">Squat</div>
<table class="table table-striped table-hover table-bordered table-condensed">
  <thread>
  <tr class="info">
    <th>Rank</th>
    <th>UserName</th>
    <th>Lb's</th>
    <th>Link Video</th>
  </tr>
</tread>
  <tbody>
      <tr>
        <td>1</td>
        <td>222</td>
        <td>222</td>
        <td>222</td>
      </tr>
  </tbody>
</table>
</div>
</div>
</div>
</div>

<div class="row">
<div class="table-responsive col-md-6">
<div class="container-fluid">
<div class="panel panel-primary">
<div class="panel-heading">Deadlift</div>
<table class="table table-striped table-hover table-bordered table-condensed">
  <thread>
  <tr class="info">
    <th>Rank</th>
    <th>UserName</th>
    <th>Lb's</th>
    <th>Link Video</th>
  </tr>
</tread>
  <tbody>
      <tr>
        <td>1</td>
        <td>222</td>
        <td>222</td>
        <td>222</td>
      </tr>
  </tbody>
</table>
</div>
</div>
</div>

<div class="table-responsive col-md-6">
<div class="container-fluid">
<div class="panel panel-primary">
<div class="panel-heading">Curl</div>
<table class="table table-striped table-hover table-bordered table-condensed">
  <thread>
  <tr class="info">
    <th>Rank</th>
    <th>UserName</th>
    <th>Lb's</th>
    <th>Link Video</th>
  </tr>
</tread>
  <tbody>
      <tr>
        <td>1</td>
        <td>222</td>
        <td>222</td>
        <td>222</td>
      </tr>
  </tbody>
</table>
</div>
</div>
</div>
</div>

</div>




<!--Sign Up Modal-->
<div class="modal fade" id="SignUp" role="dialog" aria-labelledby="SignupModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
        <h3>Sign Up</h3>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="signup.php" method="post" role="form">

          <div class="form-group">
            <label for="inputfn" class="col-sm-3 control-label">First Name</label>
            <div class="col-sm-9">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                      <input type="text" class="form-control" id="inputfn" name="FirstName" placeholder="First Name">
                    </div>
            </div>
          </div>

          <div class="form-group">
            <label for="inputln" class="col-sm-3 control-label">Last Name</label>
            <div class="col-sm-9">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                      <input type="text" class="form-control" id="inputln" name="LastName" placeholder="Last Name">
                    </div>
            </div>
          </div>

          <div class="form-group">
            <label for="inputun" class="col-sm-3 control-label">Username</label>
            <div class="col-sm-9">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                      <input type="text" class="form-control" id="inputun" name="UserName" placeholder="Username">
                    </div>
            </div>
          </div>

          <div class="form-group">
                  <label for="inputEmail" class="col-sm-3 control-label">Email</label>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <span class="input-group-addon">@</span>
                      <input type="email" class="form-control" id="inputEmail" name="Email" placeholder="Email">
                    </div>
                  </div>
          </div>

          <div class="form-group">
                  <label for="inputPassword" class="col-sm-3 control-label">Password</label>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
                      <input type="password" class="form-control" id="inputPassword" name="Password" placeholder="Password">
                    </div>
                  </div>
          </div>

          <div class="form-group">
                  <label for="inputGender" class="col-sm-3 control-label">Gender</label>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <select class="form-control">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                    </div>
                  </div>
          </div>         
          <div class="modal-footer">
            <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">cancel</button>
            <button class="btn btn-success" name="ssubmit">Sign Up</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!--Login Modal-->
<div class="modal fade" id="Login" role="dialog" aria-labelledby="LoginModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3>Login</h3>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php" method="post" role="form">

           <div class="form-group">
                  <label for="inputEmail2" class="col-sm-3 control-label">Email</label>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <span class="input-group-addon">@</span>
                      <input type="email" class="form-control" id="inputEmail2" name="email2" placeholder="Email">
                    </div>
                  </div>
          </div>

          <div class="form-group">
                  <label for="inputPassword2" class="col-sm-3 control-label">Password</label>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
                      <input type="password" class="form-control" id="inputPassword2" name="password2" placeholder="Password">
                    </div>
                  </div>
          </div>

          <div class="modal-footer">
            <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">cancel</button>
            <button class="btn btn-success" name="lsubmit">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>




<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/main.js"></script>

</body>
<html>