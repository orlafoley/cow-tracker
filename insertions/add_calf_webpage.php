<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Add Calf</title>
    <link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
    <nav>
        <div class="logo">
            Cow Tracker
        </div>
        <div class="menu">
            <a href="../index.php">Home</a>
            <a href="add_calf_webpage.php">Add Calf</a>
            <a href="../selections/view_cows_webpage.php">View Cows</a>
            <a href="../selections/view_calves_webpage.php">View Calves</a>
        </div>
    </nav>

    <?php
    include("functions/cow_dropdown_menu_function.php");
    ?>
    <main>
        <h1>Add Calf</h1>
        <div class="container">
            <form action="add_calf_webpage.php" method="get" enctype="multipart/form-data">
                <label>
                    Tag:
                    <input type="number" name="tag" id="tag" min="100" max="999" required>
                </label>

                <br>

                <label>
                    Name:
                    <input type="text" name="calfName" id="calfName" class="form-control"
                           placeholder="Enter Calf Name" required>
                </label>

                <br>

                <table class="table ">
                    <div class="form-group">
                        <label for="mother">Mother:</label>
                        <select class="form-control" id="mother"
                                name="mother" required>
                            <?php optMothers(); ?>
                        </select>
                    </div>
                </table>

                <br>

                <label for="calf_dob">Date of Birth:
                    <input type="date" name="calf_dob" id="calf_dob" required>
                </label>
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>

<?php
global $conn;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["tag"]) && isset($_GET["calfName"]) &&
        isset($_GET["mother"]) && isset($_GET["calf_dob"])) {

        $calf_tag = $_GET["tag"];
        $name = $_GET["calfName"];
        $mother = $_GET["mother"];
        $dob = $_GET["calf_dob"];

        // Fetch breed and mother_tag from the database
        $breed_result = mysqli_query($conn, "SELECT breed FROM cows WHERE name='$mother'");
        $breed_row = mysqli_fetch_assoc($breed_result);
        $breed = $breed_row['breed'];

        $mother_tag_result = mysqli_query($conn, "SELECT tag FROM cows WHERE name='$mother'");
        $mother_tag_row = mysqli_fetch_assoc($mother_tag_result);
        $mother_tag = $mother_tag_row['tag'];

        // Insert into calf table
        $query = "INSERT INTO calf (tag, name, breed, dob) VALUES ('$calf_tag', '$name', '$breed', '$dob')";
        if (mysqli_query($conn, $query)) {
//            echo "New calf added successfully!";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }

        // Insert into parent_child table
        $query2 = "INSERT INTO parent_child (cow_tag, calf_tag) VALUES ('$mother_tag', '$calf_tag')";
        if (mysqli_query($conn, $query2)) {
//            echo "Parent-child relationship added successfully!";
        } else {
            echo "Error: " . $query2 . "<br>" . mysqli_error($conn);
        }
    }
}
?>