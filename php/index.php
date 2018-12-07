<!DOCTYPE html>
<html>
    <body>
        <?php
            require_once 'meekrodb.2.3.class.php';
            DB::$user = 'master';
            DB::$password = '25791484';
            DB::$dbName = 'courses377';

            $results = DB::query("SELECT * FROM courses");
            foreach ($results as $row) {
                echo "School: " . $row['school'] . "<br>";
                echo "Course: " . $row['course'] . "<br>";
                echo "Credits: " . $row['credits'] . "<br>";
                echo "Equivalent: " . $row['equivalent'] . "<br><br>";
            }
        
        
        echo $_GET["class"];
        echo $_GET["subject"];
        echo $_GET["semester"];
        ?>
    </body>
</html>