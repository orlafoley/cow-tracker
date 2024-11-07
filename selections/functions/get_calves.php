<?php

include("../includes/cowsDatabase.php");

function get_calves() {
    global $conn;
    $output = '';
    $query = "SELECT tag, name, breed, dob FROM calf ORDER BY tag";
    $result = mysqli_query($conn, $query);
    // We have calves :)
    if (mysqli_num_rows($result) > 0) {
        // Append headers to output variable
        $output .= "<table>
                        <tr>
                            <th>Tag</th>
                            <th>Name</th>
                            <th>Breed</th>
                            <th>Date of Birth</th>
                        </tr>";

        // Start listing out calves one by one
        while($row = mysqli_fetch_assoc($result)) {
            $output .= '<tr>
                            <td>'. $row["tag"] .'</td>
                            <td>'. $row["name"] .'</td>
                            <td>'. $row["breed"] .'</td>
                            <td>'. $row["dob"] .'</td>
                        </tr>';
        }
    echo $output; }

    // We have no calves :(
    else {
        echo "No calves born yet!";
    }
}