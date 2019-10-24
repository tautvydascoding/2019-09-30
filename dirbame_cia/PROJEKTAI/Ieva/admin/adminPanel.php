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
    <body>
    
<?php include("../config/connectToDB.php");?>
    <div>
        <h2>Hello, Ieva!</h2>
    </div>

    <div class="tab">
            <button class="tablinks" onclick="openInfo(event, 'Users')">Users</button>
            <button class="tablinks" onclick="openInfo(event, 'Challenges')">Challenges</button>
            <button class="tablinks" onclick="openInfo(event, 'IMGadmin')">Images</button>
            <button class="tablinks" onclick="openInfo(event, 'Suggested')">Suggested Challenges</button>
            <button class="tablinks" onclick="openInfo(event, 'About')">About</button>
    </div>
        
        <!-- Tab content -->
        <div id="Users" class="tabcontent">
                <h4>List of Users </h4>
                
                <div class="users"> 
                  <?php    
                        include("../model/users.php");   
                        $userObject = getUsers();
                      
                        $usersList = mysqli_fetch_assoc($userObject);

                        while ($usersList) {
                            echo "<h5> <a href='details-user.php?id={$usersList['id']}'>
                                    {$usersList['user_name']}
                                    {$usersList['email']} 
                                </a> </h5>";

                           $usersList = mysqli_fetch_assoc($userObject);
                        }
                        ?> 
                </div>   <!-- Users list is closed --> 

        </div> <!--Tab users is closed -->

        <div id="Challenges" class="tabcontent">
            <h4>List of Challenges</h4>
            <a href="forms/challengeCreateForm.php" class="btn btn-outline-success"> Create </a>
            <div class="challenges"> 
                <?php      
                    include("../model/challenges.php");
                    $challengeObject = getChallenges();

                    $challengesList = mysqli_fetch_assoc($challengeObject);
                    
                    while ($challengesList) {
                        echo "<h5> <a href='details-challenge.php?id={$challengesList['id']}'>
                        {$challengesList['title']}
                        {$challengesList['tag']}
                        </a> </h5>";

                    $challengesList = mysqli_fetch_assoc($challengeObject);
                    }
                    
                    ?> 

            </div>   <!-- Challenges list is closed -->
           <hr>
           

        </div> <!--Tab Challenges is closed -->

        <div id="IMGadmin" class="tabcontent">
            <h4> List of Images</h4>
            <a href="forms/imgCreateForm.php" class="btn btn-outline-success"> Create </a>
            <div class="IMGadmin"> 
                <?php      
                   include("../model/img.php");

                   $imgObject = getIMGlist();

                   $imgList = mysqli_fetch_assoc($imgObject);
                   
                   while ($imgList) {
                      echo "<a href=details-img.php?id={$imgList['id']}>";
                      echo "<img src='../IMG/Challenges/{$imgList['name']}' placeholder='{$imgList['name']}' style='height: 150px; margin: 3px;'>";
                      echo "</a>";
                     
                    $imgList = mysqli_fetch_assoc($imgObject);
                   }

                    ?> 
            </div>   <!-- IMG list is closed -->
        </div> <!--Tab IMG is closed -->
        
        <div id="Suggested" class="tabcontent">
            <h4>List of Suggested Challenges</h4>
            
            <div class="suggested"> 
                <?php      
                   include("../model/suggested_challenges.php"); 
                   $suggestionObject = getSuggestions();

                    $suggestionsList = mysqli_fetch_assoc($suggestionObject);

                    while ($suggestionsList) {
                        echo "<h5> <a href='#'>
                        {$suggestionsList['title']}
                        {$suggestionsList['user_id']}
                        </a> </h5>";

                    $suggestionsList = mysqli_fetch_assoc($suggestionObject);
                    }

                    ?> 
            </div>   <!-- Suggested Challenges list is closed -->
            
        </div> <!--Tab Suggested is closed -->
        
        <div id="About" class="tabcontent">
            <h4> About-page items</h4>
           
            <div class="aboutItems"> 
                <?php      
                   include("../model/aboutItems.php");

                   $aboutItemsObject = getAboutItems();

                   $aboutItemsList = mysqli_fetch_assoc($aboutItemsObject);

                   while ($aboutItemsList) {
                      echo "<h5> <a href='#'>
                      {$aboutItemsList['title']}
                      </a> </h5>";

                      $aboutItemsList = mysqli_fetch_assoc($aboutItemsObject);
                   }

                    ?> 
            </div>   <!-- About-page items list is closed -->
        </div> <!--Tab About is closed -->
 
    <script type="text/javascript" src='../libs/jquery-3.4.1.min.js'> </script>

    <script src="../JS/main.js"></script>

</body>
</html>

