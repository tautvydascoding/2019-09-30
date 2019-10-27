<header class="main">

<?php include("nav.php");?>

    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="video/indexVideo.mp4" type="video/mp4">
    </video>

    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
            <div id="loginErrors"><?php if(!empty($_GET['loginErrors'])){echo $_GET['loginErrors'];} ?></div>
                <h1 class="display-3 main">Challenge yourself</h1>

                <p class="lead mb-0">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos laborum illo debitis numquam earum ab iusto labore culpa. Eveniet sunt provident necessitatibus possimus aut deserunt fugit quis deleniti molestiae maiores.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid reiciendis sed nemo debitis beatae quod rerum hic voluptatem odit! Sed quam tenetur vitae dolorem inventore, odio beatae omnis id dignissimos!
                </p>
                <a href="page_registration.php" class="btn btn btn-primary register">REGISTER</a>
                <br>
                <a href="#contactPage" class="contactMain"> CONTACT US </a>
            
            </div>
        </div>
    </div>

</header>   