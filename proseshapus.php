<?php

include ('crudmhs.php');

    $nim = $_GET['nim'];

    $hasil = hapusMhs($nim);

    if ($hasil == true){
        header("Location: hapusmhs.php");
    } else {
        header("Location: gagalhapusmhs.php");
    }

?>