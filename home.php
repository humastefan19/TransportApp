
<!DOCTYPE html>
<?php include ('server.php'); ?>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .title-image{
            position: absolute;
            top: 25%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .text-image{
            position: absolute;
            top: 50%;
            left: 50%;
            font-size: larger;
            font-weight: bold;
            transform: translate(-50%, -50%);
        }
        .a{
            color: black;
            font-style: italic;
        }
    </style>
</head>
<body>
<?php
    if($_SESSION['logged_in']){
?>
    <script src = "JS/menuAfterLogin.js"></script>
<?php } else { ?>
    <script src = "JS/menu.js"></script>
<?php } ?>
    <div style = "width:100% float: left">
        <div class="row" >
            <div class="col-sm">
                <img src = "Imagini/PrimaImagineHome.jpg" style = "width:100%">
                <h2 class="title-image">Totul este mai usor acum</h2>
                <p class = "text-image">De acum cu aplicatia noastra vei putea acesa toata reteaua de trasport in comun Bucuresti si toata reteaua de tranuri
                                        din Romania. De acum gata cu statul la coada si mersul dupa abonamente , de acum cu un simplu click iti poti cumpara abonamentele
                                        si biletele de tren. Incerca si tu chiar azi!</p>

                <p class="text-image" style = "top:90%"><a href="login.php" class = "a">Conecteaza-te</a> sau <a href="new_user.php" class = "a">Inregistreaza-te</a> </p>
            </div>
        </div>
        <div class = "row">
            <div class="col-sm">
                <img src = "Imagini/SecondImageHome.jpg" style = "width:100%">
            </div>
        </div>
        <div class = row>
            <div class="col-sm">
                <img src = "Imagini/ThirdImageHome.jpg" style = "width:100%">
            </div>
        </div>
    </div>
</body>
