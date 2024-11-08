<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <nav>
        <div class="logo">
            Cow Tracker
        </div>
        <div class="menu">
            <a href="index.php">Home</a>
            <a href="insertions/add_calf_webpage.php">Add Calf</a>
            <a href="selections/view_cows_webpage.php">View Cows</a>
            <a href="selections/view_calves_webpage.php">View Calves</a>
        </div>
    </nav>
    <?php include("selections/functions/get_counts.php");?>
    <main>
        <div class="container">
            <h1>Welcome!</h1>
            <p>
                I'm Orla and this is a little project I have created to test out creating something using the
                LAMP stack. LAMP stands for Linux, Apache, MySQL, PHP. The database I will be working with is
                composed of entirely fictional information about cows to mimic a small farmer's farm. The
                farm contains <b><?php echo cow_count();?></b> cows and <b><?php echo calf_count();?></b>
                <?php echo calf_calves();?>. However, this number will increase if you decide to add information
                about any new calves born. Want to get started? Look at the menu above, and you can add some
                new calves to your farm.
            </p>
        </div>
        <div class="container">
            <h2>What's in your database?</h2>
            <p>
                This project contains three tables within the <i>cows</i> database to record the number
                of cattle the farmer has. The tables record the cows, the calves, as well the
                relationships between the cows and calves. Each calf is linked to its mother in the third
                table.
            </p>
            <h3>Cows</h3>
            <p>
                The cow table contains 5 cows which are preloaded into the database farmer's farm.
                Each cow has a tag, a name, and a breed. You do not have an option to add more cows to
                the farm. This update may come if I revise this project in the future.
            </p>
            <h3>Calves</h3>
            <p>
                The calf table is empty to begin with. You may add calves by following the link
                <a href="insertions/add_calf_webpage.php">here</a> or by navigating to the menu at the
                top of the page. Each calf has a tag number and a name which you can choose. You must
                enter the mother's name when adding a calf to the database. It is assumed that all
                calves are the same breed as their mother. You must also enter the calf's date of
                birth prior to submitting the form.
            </p>
            <h3>Relationships</h3>
            <p>
                The relationships between the cows and the calves are recorded in a third database. The
                columns in this table consist of the unique tag number of the cow paired with the unique
                tag of her calf.
            </p>
        </div>
        <div class="container">
            <h2>Future Endeavours</h2>
            <p>
                How could this project be improved down the line? While this project was created in order
                for me to start using PHP and get to grips with the LAMP stack, it can be added to and
                expanded upon to mimic real life scenarios a little more closely.
            </p>
            <p>
                Anyone who is interested in technology, agriculture; or both; could add more tables to
                the database. We can link mother to baby based on our existing database. Why not add
                information about the father of a calf? This could be used to record the calf's full
                genetic history and prevent inbreeding within a farmer's herd.
            </p>
            <p>
                You also have the option to add new columns to the existing tables. For example the calf
                could be male or female. You could add a new column entitled "sex" to the calf table and
                allow it to take one character (M/F) as a value. Other information that could be of use
                is whether the calf is still alive; sometimes a farmer will have a stillborn calf.
            </p>
            <p>
                For people who are more familiar with technology than agriculture, there is also the
                option to build this entire project using a different tech stack or a different programming
                language. Why not try rebuilding the project in front of you using something like Python
                instead of PHP?
            </p>
        </div>
    </main>
</body>
</html>