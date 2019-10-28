<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body class="registerForm">
    <div class="container-fluid">
        <main>
            <section class="container-fluid mt-2 ">
                <div class="row text-center">
                    <div class="col-12 form-group text-center">
                        <h3>Register to Challenge Yourself</h3>  
                            <div id="loginErrors" class="m-1 text-danger"><?php if(!empty($_GET['loginErrors'])){
                                echo $_GET['loginErrors'];} ?>
                            </div>
                        <div class="row justify-content-center transparent">
                            <div class="col-10 m-2 text-center" >
                              
                            </div>

                            <form class="form-group row justify-content-center bg-light" id='login' action='registerUser.php' method='post'>
                            
                            <div class="col-10 m-1">
                                <label for="userName">User name</label>
                                <input class="form-control" type="text" id="userName" name="userName" placeholder="Enter user name" required/>
                            </div>

                            <div class="col-10 m-1">
                                <label for="loginEmail">Email</label>
                                <input class="form-control" type="email" id="loginEmail" name="email" placeholder="E-mail" required/>
                            </div>

                            <div class="col-10 m-1">
                                <label for="loginPass">Password</label>
                                <input class="form-control" type="password" id="loginPass" name="password" placeholder="Password" required/>
                            </div>

                            <div class="col-10 m-1">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" id="name" name="name" placeholder="Enter your name"/>
                            </div>

                            <div class="col-10 m-1">
                                <label for="lname">Last Name</label>
                                <input class="form-control" type="text" id="lname" name="lname" placeholder="Enter your last name"/>
                            </div>

                                <button type="submit"  class="btn btn btn-primary register w-50 m-3">Login</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
    </div>

    <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
    <script src="JS/main.js"></script>
</body>
</html>
