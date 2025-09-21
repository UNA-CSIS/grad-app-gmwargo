<?php 
session_start();

// from w3schools and class discussion
if (isset($_POST['essay'])) { $_SESSION['essay'] = $_POST['essay']; }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3><u>Confirmation</u></h3>
        <p><strong>Name:</strong>
            <?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?>
        </p>

        <h4>Courses:</h4>
        <ul>
            <?php if ($_SESSION['course1']) { echo '<li>' . $_SESSION['course1'] . '</li>'; } ?>
            <?php if ($_SESSION['course2']) { echo '<li>' . $_SESSION['course2'] . '</li>'; } ?>
            <?php if ($_SESSION['course3']) { echo '<li>' . $_SESSION['course3'] . '</li>'; } ?>
            <?php if ($_SESSION['course4']) { echo '<li>' . $_SESSION['course4'] . '</li>'; } ?>
            <?php if ($_SESSION['course5']) { echo '<li>' . $_SESSION['course5'] . '</li>'; } ?>
        </ul>

        <h4>Personal Accomplishments:</h4>
        <p>
            <?php echo $_SESSION['essay']; ?>
        </p>
        <p>_____________________________________</p>
        
        <form action="results.php" method="POST">
            Does this information look correct? <input type="submit">
        </form>
    </body>
</html>
