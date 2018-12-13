<!DOCTYPE html>
<html>
    <body>
        <?php
        //Create Connection
        $connection = new SQLite3('schedule.sqlite');

        //query
        $sql = "
        SELECT Schedule.ID || ': ' || Schedule.Title as Name,Schedule.Term,Schedule.College,ID_UMD,End_Term_UMD,Credit
        FROM Schedule JOIN Transfer ON (Schedule.ID = Transfer.ID_From AND Schedule.College = Transfer.College)
        ORDER BY ID";

        //query
        $result = $connection->query($sql);

        //create table
        #echo "<div class=col-md-12><table class=table table-striped><tr><th>ID</th><th>Title</th><th>Term</th><th>College</th><th>UMD Equivalent</th></tr>";

        //print rows
        while($row = $result->fetchArray(SQLITE3_ASSOC)) {
          echo "<tr>
                    <td>".$row['Name']."</td>
                    <td>".$row['College']."</td>
                    <td>".$row['Term']."</td>
                    <td>".$row['End_Term_UMD']."</td>
                    <td>".$row['ID_UMD']."</td>
                    <td>".$row['Credit']."</td>
                </tr>";

        }
        echo "</table></div>";

        ?>
    </body>
</html>
