<!--This is the navbar-->
<nav id="main-nav" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">

    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
      <!--Button When Collapsed-->
      <button class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!--collapsable navbar-->
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav">
        <li class="active"><a class="scroll-to" href="#About">About</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mens Leaderboards<b class="caret"></b></a>
           <ul class="dropdown-menu">
            <li><a href="#">Bench Press</a></li>
            <li><a href="#">Squat</a></li>
            <li><a href="#">Deadlift</a></li>
           </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Womens Leaderboards<b class="caret"></b></a>
           <ul class="dropdown-menu">
            <li><a href="#">Bench Press</a></li>
            <li><a href="#">Squat</a></li>
            <li><a href="#">Deadlift</a></li>
           </ul>
        </li>  
      </ul>
      <!--Right Side of the navbar-->
      <ul class="nav navbar-nav navbar-right">
        <li><form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </li>
        <li><a href="#" data-toggle="modal" data-target="#SignUp"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#" data-toggle="modal" data-target="#Login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>