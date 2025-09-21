<?php
session_start();

// referenced w3schools PHP Function & String section
function checkAccepted($essay, $numCoursesListed, $numCoursesTaken) {
    $keyword = "PHP";
    $percentage = 50;
    
    // boolean
    return strpos($essay, $keyword) !== false && ($numCoursesTaken / $numCoursesListed * 100) >= $percentage;
}


$numCoursesTaken = 0;
if ($_SESSION['course1']) { $numCoursesTaken++; }
if ($_SESSION['course2']) { $numCoursesTaken++; }
if ($_SESSION['course3']) { $numCoursesTaken++; }
if ($_SESSION['course4']) { $numCoursesTaken++; }
if ($_SESSION['course5']) { $numCoursesTaken++; }

$numCoursesListed = 5;
$accepted = checkAccepted($_SESSION['essay'], $numCoursesListed, $numCoursesTaken);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if ($accepted) {
            echo "<p>You are accepted for an phone interview!</p>";
        } else {
            echo "<p>Sorry, your application was rejected.</p>";
        }
        ?>
    </body>
</html>