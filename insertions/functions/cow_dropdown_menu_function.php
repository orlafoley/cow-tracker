<?php

include("../includes/cowsDatabase.php");

function optMothers(){
    global $conn;
    $get_mothers = "SELECT DISTINCT(name) FROM cows ORDER BY name";
    $run_mothers = mysqli_query($conn, $get_mothers);
    while ($row_mothers = mysqli_fetch_assoc($run_mothers)) {
        $mothers_name = $row_mothers['name'];
        echo "<option>$mothers_name</option>";
    }
}