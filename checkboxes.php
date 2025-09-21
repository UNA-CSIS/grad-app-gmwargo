<?php 
session_start();

// referenced w3schools PHP Sessions sectionand discussion board
if (isset($_POST['fname'])) { $_SESSION['fname'] = $_POST['fname']; }
if (isset($_POST['lname'])) { $_SESSION['lname'] = $_POST['lname']; }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <strong>User:</strong> <?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?>

        <form action="accomplishments.php" method="POST">
            <!-- value is what displays on submission.php -->
            <h4>Completed Courses:</h4> 
            <label><input type="checkbox" name="course1" value="Object-oriented programming"> Object-oriented programming</label><br>
            <label><input type="checkbox" name="course2" value="Systems analysis & design"> Systems analysis & design</label><br>
            <label><input type="checkbox" name="course3" value="Advanced programming"> Advanced programming</label><br>
            <label><input type="checkbox" name="course4" value="Introduction to Networking"> Introduction to Networking</label><br>
            <label><input type="checkbox" name="course5" value="Introduction to Computer Security"> Introduction to Computer Security</label><br><br>
            <input type="submit">
        </form>
    </body>
</html>
