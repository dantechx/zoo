<?php
    include('config.php');

    // Get all the animals
    $stmt = "SELECT * from zoo";
    $stmt_query = mysqli_query($conn, $stmt);

    $allAnimalsInTheZoo = mysqli_num_rows($stmt_query);
    echo "Animals in the zoo: ".$allAnimalsInTheZoo;
?>