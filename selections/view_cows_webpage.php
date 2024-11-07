<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>View Cows</title>
    <link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
    <nav>
        <div class="logo">
            Cow Tracker
        </div>
        <div class="menu">
            <a href="../index.php">Home</a>
            <a href="../insertions/add_calf_webpage.php">Add Calf</a>
            <a href="view_cows_webpage.php">View Cows</a>
            <a href="view_calves_webpage.php">View Calves</a>
        </div>
    </nav>

    <?php include("./functions/get_cows.php"); ?>
    <main>
        <h1>Your Cows</h1>
        <div class="container">
            <?php get_cows();?>
        </div>
    </main>
</body>
</html>
