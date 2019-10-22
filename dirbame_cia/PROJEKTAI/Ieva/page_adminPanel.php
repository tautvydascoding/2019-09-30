<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <?php include("config/connectToDB.php"); 
          include("model/users.php");?>
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
                        $userObject = getUsers();
                        // print_r($userObject); //TEST
                        $usersList = mysqli_fetch_assoc($userObject);
                        // print_r($usersList); // TEST

                        while ($usersList) {
                            echo "<h4> 
                                    {$usersList['id']}
                                    {$usersList['user_name']} 
                                    {$usersList['email']} 
                                    {$usersList['name']} 
                                    {$usersList['lname']} 
                                    {$usersList['rights']}
                                    {$usersList['registration_time']} 
                                    {$usersList['last_login']} 
                                </h4>";
                           echo "<hr>";

                           $usersList = mysqli_fetch_assoc($userObject);
                        }
                        ?> 
                </div>   <!-- Users list is closed -->

        </div> <!--Tab users is closed -->

        <div id="Challenges" class="tabcontent">
            <h3>Challenges</h3>
            <p>Challenge list</p>
        </div>
        
        <div id="Suggested" class="tabcontent">
            <h3>Suggested Challenges</h3>
            <p>Suggested Challenges list</p>
        </div>
        
        <div id="About" class="tabcontent">
            <h3>About</h3>
            <p>About-page item list</p>
    </div> 


    <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>

    <script src="JS/main.js"></script>

</body>
</html>

