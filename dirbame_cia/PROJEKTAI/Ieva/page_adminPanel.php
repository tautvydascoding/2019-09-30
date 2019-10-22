<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <?php include("config/connectToDB.php");?>
</head>
<body>
    <div>
        <h2>Hello, Ieva!</h2>
    </div>

    <div class="tab">
            <button class="tablinks" onclick="openInfo(event, 'Users')">Users</button>
            <button class="tablinks" onclick="openInfo(event, 'Challenges')">Challenges</button>
            <button class="tablinks" onclick="openInfo(event, 'Suggested')">Suggested Challenges</button>
            <button class="tablinks" onclick="openInfo(event, 'About')">About</button>
        </div>
        
        <!-- Tab content -->
        <div id="Users" class="tabcontent">
                <h3>Users List</h3>
                
                <div class="users"> 
                  <?php    
                        include("model/users.php");   
                        $userObject = getUsers();
                      
                        $usersList = mysqli_fetch_assoc($userObject);

                        while ($usersList) {
                            echo "<h4> <a href='user-details.php?id={$usersList['id']}'>
                                    {$usersList['user_name']}
                                    {$usersList['email']} 
                                </a> <h4>";

                           $usersList = mysqli_fetch_assoc($userObject);
                        }
                        ?> 
                </div>   <!-- Users list is closed --> 

        </div> <!--Tab users is closed -->

        <div id="Challenges" class="tabcontent">
            <h3>Challenges</h3>
           
            <div class="challenges"> 
                <?php      
                    include("model/challenges.php");
                    $challengeObject = getChallenges();

                    $challengesList = mysqli_fetch_assoc($challengeObject);

                    while ($challengesList) {
                        echo "<h4> <a href='#'>
                        {$challengesList['title']}
                        {$challengesList['tag']}
                        </a> <h4>";

                    $challengesList = mysqli_fetch_assoc($challengeObject);
                    }

                    ?> 
            </div>   <!-- Challenges list is closed -->

        </div> <!--Tab Challenges is closed -->
        
        <div id="Suggested" class="tabcontent">
            <h3>Suggested Challenges</h3>
            
            <div class="suggested"> 
                <?php      
                   include("model/suggested_challenges.php"); 
                   $suggestionObject = getSuggestions();

                    $suggestionsList = mysqli_fetch_assoc($suggestionObject);

                    while ($suggestionsList) {
                        echo "<h4> <a href='#'>
                        {$suggestionsList['title']}
                        {$suggestionsList['user_id']}
                        </a> <h4>";

                    $suggestionsList = mysqli_fetch_assoc($suggestionObject);
                    }

                    ?> 
            </div>   <!-- Suggested Challenges list is closed -->
            
        </div>
        
        <div id="About" class="tabcontent">
            <h3> About-page items</h3>
           
            <div class="aboutItems"> 
                <?php      
                   include("model/aboutItems.php");

                   $aboutItemsObject = getAboutItems();

                   $aboutItemsList = mysqli_fetch_assoc($aboutItemsObject);

                   while ($aboutItemsList) {
                      echo "<h4> <a href='#'>
                      {$aboutItemsList['title']}
                      </a> </h4>";

                      $aboutItemsList = mysqli_fetch_assoc($aboutItemsObject);
                   }

                    ?> 
            </div>   <!-- About-page items list is closed -->
    </div> 


    <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>

    <script src="JS/main.js"></script>

</body>
</html>

