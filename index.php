<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MyCart</title>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  </head>
  <body>
  <!-- Navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">MyCart</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#"><i class="fab fa-product-hunt"></i> Product</a></li>
                <li style="width:300px;left:10px;top:10px;"><input type="text" placeholder="Bag,Mouse....etcs" class="form-control" id="search"></li>
                <li style="width:80px;left:20px;top:10px;"><input type="submit" class="btn btn-success" id="search_btn"></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-shopping-cart"></i> Cart <span class="badge">0</span></a>
                    <div  style="width:400px" class="dropdown-menu">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-3">
                                    Sl.No.
                                    </div>
                                    <div class="col-md-3">
                                    Product Image
                                    </div>
                                    <div class="col-md-3">
                                    Product Price
                                    </div>
                                    <div class="col-md-3">
                                    Rs. 
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body"></div>
                            <div class="panel-footer"></div>
                        </div>
                    </div>
                </li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> SignIn</a>
                    <ul class="dropdown-menu">
                        <div style="width:300px;">
                            <div class="panel panel-primary">
                                <div class="panel-heading">LogIn</div>
                                <div class="panel-heading">
                                <label for="email">Email : </label>
                                <input type="email" class="form-control" id="email" required>
                                <label for="password">password : </label>
                                <input type="password" class="form-control" id="password" required>
                                <br>
                                <a href="#" style="color:white;list-style:none;">Forgot Password</a>
                                <input type="submit" class="btn btn-success" style="float:right" id="login" value="login">
                                </div>
                                <div class="panel-footer" id="e_msg"></div>
                            </div> 
                        </div>
                    </ul>
                </li>
                <li><a href="#"><i class="glyphicon glyphicon-check"></i> SignUp</a></li>
            </ul>
        </div>
    </div>
    <!-- Categories -->
    <p><br><br><br></p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <div id="get_category">
                    <!-- get category call to action.php -->
                </div>
                <!-- <div class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#"><h4>Categories</h4></a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Categories</a></li>
                </div> -->
                <div id="get_brand">
                    <!-- get brand call to action.php-->
                    </div>
                <!-- <div class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#"><h4>Brand</h4></a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Categories</a></li>
                </div> -->
            </div>
            <div class="col-md-8">
                <div class="panel panel-info">
                    <div class="panel-heading">Products</div>
                    <div class="panel-body">
                        <div class="col-md-4">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    Samsung
                                </div>
                                <div class="panel-body">
                                    <img src="#" alt="alt">
                                </div>
                                <div class="panel-footer">
                                    Rs. 100.00
                                    <button style="float:right" class="btn btn-success btn-xs">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                    @CopyRight <b>SoumyaCart.com</b>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>

        </div>
    </div>
       
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
    </body>
</html>