<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- search Bot'ai pvz: google neskanuos musu svetaines -->
         <meta name="robots" content="nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="libs/bootstrap-4/css/bootstrap.min.css">
        <!-- !! mano CSS failas visada pats zemiausias -->
        <link rel="stylesheet" href="css/master.css">

    </head>
    <body>

        <h1> Isijunk Inspect-console (mokomes js!) </h1>

<!--        <input id="gyd" type="text" name="13" placeholder="gydytojo id">-->
        <button type="button" class="16" id="gyd" onclick="trinti()">mygtukas</button>
        <div id='results'> AAA: </div>

<!---->

        <table>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>lname</th>

            </tr>

            <?php

            include ('db_functions.php');
            $visosPrekesMYSQL_Objektas = getDoctors();


            // su fetch paimam pirma MYSQL objekto eilute ir paverciam i tvarkinga pirmos eilutes masyva
            $preke_Masyvas = mysqli_fetch_assoc($visosPrekesMYSQL_Objektas);

            // su while ciklu atspausdinsim visas prekes

            while ($preke_Masyvas) {

                $prekeCikle = $preke_Masyvas['id'];
//                        $foteCikle = $preke_Masyvas['foto'];

                echo"<tr>";
                echo "<td>{$preke_Masyvas['id']} </td> ";
                echo "<td>{$preke_Masyvas['name']} </td> ";
                echo "<td>{$preke_Masyvas['lname']} </td> ";

//
                echo "<td><button type='button' class='{$prekeCikle}' onclick='keisti()' > update </button> </td> ";
                echo "<td><button type='button' class='{$prekeCikle}' onclick='trinti()' > delete </button> </td> ";
//                        <button type="button" class="16" id="gyd" onclick="trinti()">mygtukas</button>
                echo "</tr>";
                $preke_Masyvas = mysqli_fetch_assoc($visosPrekesMYSQL_Objektas);
            }


            ?>
            </tr>


        </table>




<!--        -->
        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script>

        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
