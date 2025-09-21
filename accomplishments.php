<?php 
session_start();

// referenced w3schools PHP Sessions section and discussion board
$_SESSION['course1'] = '';
$_SESSION['course2'] = '';
$_SESSION['course3'] = '';
$_SESSION['course4'] = '';
$_SESSION['course5'] = '';

if (isset($_POST['course1'])) { $_SESSION['course1'] = $_POST['course1']; }
if (isset($_POST['course2'])) { $_SESSION['course2'] = $_POST['course2']; }
if (isset($_POST['course3'])) { $_SESSION['course3'] = $_POST['course3']; }
if (isset($_POST['course4'])) { $_SESSION['course4'] = $_POST['course4']; }
if (isset($_POST['course5'])) { $_SESSION['course5'] = $_POST['course5']; }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="confirmation.php" method="POST">
            <h4>Personal Accomplishments:</h4> 
            <textarea name="essay" placeholder="Answer here..."></textarea><br>
            <input type="submit">
        </form>
    </body>
</html>
