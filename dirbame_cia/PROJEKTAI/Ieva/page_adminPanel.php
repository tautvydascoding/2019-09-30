<?php require("header.php");?>
    
<?php include("config/connectToDB.php");?>
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
                <h4>List of Users </h4>
                
                <div class="users"> 
                  <?php    
                        include("model/users.php");   
                        $userObject = getUsers();
                      
                        $usersList = mysqli_fetch_assoc($userObject);

                        while ($usersList) {
                            echo "<h5> <a href='user-details.php?id={$usersList['id']}'>
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
           
            <div class="challenges"> 
                <?php      
                    include("model/challenges.php");
                    $challengeObject = getChallenges();

                    $challengesList = mysqli_fetch_assoc($challengeObject);
                    
                    while ($challengesList) {
                        echo "<h5> <a href='challenge-details.php?id={$challengesList['id']}'>
                        {$challengesList['title']}
                        {$challengesList['tag']}
                        </a> </h5>";

                    $challengesList = mysqli_fetch_assoc($challengeObject);
                    }
                    
                    ?> 

            </div>   <!-- Challenges list is closed -->
           <hr>
           <a href="challengeCreateForm.php" class="btn btn-outline-success"> Create </a>

        </div> <!--Tab Challenges is closed -->
        
        <div id="Suggested" class="tabcontent">
            <h4>List of Suggested Challenges</h4>
            
            <div class="suggested"> 
                <?php      
                   include("model/suggested_challenges.php"); 
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
            
        </div>
        
        <div id="About" class="tabcontent">
            <h4> About-page items</h4>
           
            <div class="aboutItems"> 
                <?php      
                   include("model/aboutItems.php");

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
    </div> 


    <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>

    <script src="JS/main.js"></script>

</body>
</html>

