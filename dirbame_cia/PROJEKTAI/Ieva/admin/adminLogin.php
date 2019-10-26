<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>challenge yourself</title>
    <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body class=" loginAdmin">
    <div class="container-fluid">
        <main>
            <section class="container-fluid mt-5 ">
                <div class="row text-center">
                        <div class="col-12 form-group text-center">
                            <h3>Login to Challenge Yourself Admin Panel</h3>
                            <div class="row justify-content-center">
                                <div class="col-sm-10 m-3 text-center" >
                                    <p id="registrationErrors"><?php if(!empty($_GET['errors'])){
                                    echo $_GET['errors'];} ?>
                                    </p>
                                </div>
                                <form class="form-group row justify-content-center bg-light" id='login' action='login.php' method='post'>
                                <div class="col-sm-10 m-3">
                                    <input class="form-control" type="email" name="email" placeholder="E-mail" required/>
                                </div>

                                <div class="col-sm-10 m-3">
                                    <input class="form-control" type="password" name="password" placeholder="Password" required/>
                                </div>

                                    <button type="submit"  class="btn btn-outline-dark w-50 m-3">Login</button>
                                </form>
                            </div>
                        </div>
                </div>
            </section>
        </main>
        
    </div>

    <script type="text/javascript" src='../libs/jquery-3.4.1.min.js'> </script>
    <script src="../JS/main.js"></script>
</body>
</html>