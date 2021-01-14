<!DOCTYPE html>
<html>

<head>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <body>
        <div id="login">
            <h3 class="text-center text-white pt-5">Login form</h3>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="backend.php" method="post">
                                <h3 class="text-center text-info">Login</h3>
                                <div class="form-group">

                                    <label for="username" class="text-info">Username:</label><br>
                                    <input type="text" name="loginUsername" id="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-info">Password:</label><br>
                                    <input type="password" name="loginPassword" id="password" class="form-control">
                                </div>

                                <div class="form-group">

                                    <button class="btn btn-info btn-md" name="submit">Login</button>
                                </div>
                                <div id="register-link" class="text-right">
                                    <a href="register.php" class="text-info">Register here</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>


</html>