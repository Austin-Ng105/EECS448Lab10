<html>
    <?php
         $mysqli = new mysqli("mysql.eecs.ku.edu", "a086n181", "Aich9Eeg", "a086n181");

         if ($mysqli->connect_errno) {
             printf("Connect failed: %s\n", $mysqli->connect_error);
         }

         $sql = "SELECT user_id FROM Users";
         $results = $mysqli->query($sql);

         echo "<table border='.5'>
        <tr>
        <th>Users</th>
        </tr>";

         if($results -> num_rows > 0) {
             while($row = $results->fetch_assoc()) {
                 echo "<tr>";
                 echo "<td>" . $row["user_id"];
                 echo "<tr>";
             }
             echo "</table>";
         }
         else {
             echo "There are no users";
         }
     
         $mysqli->close();
    ?>
</html>
