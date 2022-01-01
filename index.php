<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Hello, world!</title>
</head>

<body>
    <div class="container mt-5" style="background-color: black; border-radius: 10px;">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">4Front</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="home" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" d="aboutlink" href="#">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
            </li>
            <li class="nav-item">
                <button type="button" class="btn btn-success" id="regbutton">Registration</button>
            </li>
            <li class="nav-item">
                <button type="button" class="btn btn-info" id="logbutton">Log-in</button>
            </li>
        </ul>
    </div>
    <div class="container mt-5" style="width: 50%;">
        <form id="regForm" style="display: none;">
            <h1 class="mb-5">Registration Form</h1>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" id="Name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" id="emailID">
            </div>
            <div class="mb-3">
                <label class="form-label">User Name</label>
                <input type="text" class="form-control" id="UserName">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" id="Password">
            </div>
            <div class="alert alert-danger" role="alert" id="message" style="display: none;"></div>
            <div class="alert alert-success" role="alert" id="sucess" style="display: none;"></div>
            <button class="btn btn-primary" name="register" id="RegButton">Registration</button>
        </form>
    </div>


    <div class="container mt-5" style="width: 50%;">
        <form id="logForm" style="display: none;">
            <h1 class="mb-5">Login Form</h1>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" id="logemailID">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" id="logPassword">
            </div>
            <div class="alert alert-danger" role="alert" id="logmessage" style="display: none;"></div>
            <div class="alert alert-success" role="alert" id="logsucess" style="display: none;"></div>
            <button class="btn btn-primary" name="Login" id="LogButton">Log-in</button>
        </form>
    </div>

    <div class="container" id="imgslider">
        <h2>image Gallary</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="/Img-upload-galary/upload/download.jpg" alt="Los Angeles" style="width:100%;">
                </div>

                <div class="item">
                    <img src="/Img-upload-galary/upload/5396447-from-nature-with-love.webp" alt="Chicago" style="width:100%;">
                </div>

                <div class="item">
                    <img src="/Img-upload-galary/upload/2514219.jpg" alt="New york" style="width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>



    <script src="/php-ajax/js/jquery.js"></script>
    <script src="/reg and login/js/ajaxjs.js"></script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript">
        $("#logbutton").click(function() {
            $("#logForm").show(function() {
                $("#imgslider").hide();
                $("#aboutpage").hide();
                $("#regForm").hide();
            });
        });

        $("#regbutton").click(function() {
            $("#regForm").show(function() {
                $("#imgslider").hide();
                $("#aboutpage").hide();
                $("#logForm").hide();

            });
        });

        $("#home").click(function() {
            $("#imgslider").show();
            $("#logForm").hide();
            $("#regForm").hide();
        });

        $("#aboutlink").click(function() {
            $("#aboutpage").show();
            $("#imgslider").hide();
            $("#logForm").hide();
            $("#regForm").hide();
        });
    </script>
</body>

</html>