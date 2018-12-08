<!DOCTYPE html>
<html>
    <body>
        <?php
        //Create Connection
        $connection = new SQLite3('schedule.sqlite');

        //Get search
        if ($_POST['semester'] === 'NULL') {
          $_POST['semester'] = null;
                }

        if(isset($_POST['class'])){
        	$Search = htmlentities($_POST['class'], ENT_QUOTES, 'UTF-8');
          $Where = " WHERE Title LIKE '%$Search%' or ID_UMD LIKE '%$Search%'";
        }
        if(isset($_POST['semester']) and isset($_POST['class'])){
          $Semester = htmlentities($_POST['semester'], ENT_QUOTES, 'UTF-8');
          $Where = " WHERE (Title LIKE '%$Search%' or ID_UMD LIKE '%$Search%') AND Schedule.Term = '$Semester'";
        }


        //query
        $sql = "
        SELECT Schedule.ID, Schedule.Title,Schedule.Term,Schedule.College,ID_UMD,End_Term_UMD,Start_Term_UMD,Credit
        FROM Schedule JOIN Transfer ON (Schedule.ID = Transfer.ID_From AND Schedule.College = Transfer.College)";


        //add WHERE
        $sql = $sql.$Where;
        echo $sql;

        //query
        $result = $connection->query($sql);

        //create table
        #echo "<div class=col-md-12><table class=table table-striped><tr><th>ID</th><th>Title</th><th>Term</th><th>College</th><th>UMD Equivalent</th></tr>";

        //print rows
        while($row = $result->fetchArray(SQLITE3_ASSOC)) {
          echo "<tr><td>".$row['ID']."</td><td>".$row['Title']."</td><td>".$row['College']."</td><td>".$row['Term']."</td><td>".$row['Start_Term_UMD']."</td><td>".$row['End_Term_UMD']."</td><td>".$row['ID_UMD']."</td><td>".$row['Credit']."</td>";

        }
        echo "</table></div>";

        ?>
    </body>
</html>
