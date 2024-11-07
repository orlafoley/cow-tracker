<?php

include("includes/cowsDatabase.php");

function cow_count() {
    global $conn;
    $query = "SELECT COUNT(*) AS count FROM cows";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['count'];
}

function calf_count() {
    global $conn;
    $query = "SELECT COUNT(*) AS count FROM calf";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['count'];
}

// We have 0 calves, 1 calf, 2 calves, etc
function calf_calves() {
    $output = 'calves';
    if (calf_count() == 1) {
        $output = 'calf';
    } return $output;
}