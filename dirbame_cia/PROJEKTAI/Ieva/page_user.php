<?php 
    session_start();
    if ( isset( $_SESSION['user_id'] ) ) {
    ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>challenge yourself</title>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
    <div class="container-fluid userWindow">

    <!--Header-->
    <?php include("header_user.php");?>

    <!--Main-->
        <main class="my-2">
            <div class="container">
                <div class = "row">
                        <div class = "col-4 mx-auto">  
                            <div class="card active">
                                    <div class="card-body">
                                        <h4 class="card-title">ACTIVE</h4>
                                        <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita blanditiis vel facere! Possimus tempore rerum, sed accusamus voluptatem, mollitia dignissimos nobis architecto animi ratione exercitationem ullam quasi magnam.
                                        </p>
                                        <a href="page_challenges.php" class="btn btn-primary w-100 startCha">Start</a>
                                    </div>
                            </div>
                        </div>   

                        <div class = "col-4 mx-auto"> 
                            <div class="card relaxation">
                                    <div class="card-body">
                                        <h4 class="card-title">RELAXATION</h4>
                                        <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus atque deserunt alias, aliquid neque optio. Earum non amet quam, molestias dolor tempora consequuntur repellendus ipsum nam nisi aliquam velit quo?
                                        </p>
                                        <a href="#!" class="btn btn-primary w-100 startCha">Start</a>
                                    </div>
                                </div>
                        </div>

                        <div class = "col-4 mx-auto">  
                            <div class="card random">
                                    <div class="card-body">
                                        <h4 class="card-title">RANDOM</h4>
                                        <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum aliquam eaque in iste eius illum, obcaecati cumque, blanditiis, laboriosam eveniet cupiditate fugiat expedita debitis voluptatum recusandae et adipisci sint corrupti?
                                        </p>
                                        <a href="#!" class="btn btn-primary w-100 startCha">Start</a>
                                    </div>
                            </div>
                        </div>       
                </div>   <!-- div row in main is closed -->    
            </div> <!-- div container for main is closed -->
        </main>

    <!-- Footer-->
    <?php include("footer_user.php");?> 
    <? } else {
        header("Location: adminLogin.php");
        exit;
    }
    ?>
