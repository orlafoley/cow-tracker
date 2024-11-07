<?php

include("../includes/cowsDatabase.php");

function get_cows(): void {
    // Connect to your database then run your query
    global $conn;
    $output = '';
    $query = "SELECT * FROM cows ORDER BY tag ASC";
    $result = mysqli_query($conn, $query);
    // Confirm that we have connected to the database here
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // We have connected and the cow table contains data
    if (mysqli_num_rows($result) > 0) {

        // Append table headers to your output
        $output .= '<div>
                    <table>
                        <tr>
                         <th> Tag </th>
                         <th> Name</th>
                         <th> Breed </th>
                        </tr>';

        // Keep appending the query output while we have rows in the table
        while($row = mysqli_fetch_array($result)) {
            $output .= '<tr>
                            <td>' . $row["tag"] . '</td>
                            <td>' . $row["name"] . '</td>
                            <td>' . $row["breed"] . '</td>
                        </tr>';
        }
    }

    // Give an error message if the cows were never preloaded into the project
    else {
        echo "All of your cows have escaped!";
    }
    echo $output;
}