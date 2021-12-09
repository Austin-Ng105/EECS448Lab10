<html>
    <?php
        $user = $_POST['test'];
        echo $user . " Post's: " ."<br>" ;
        

        $mysqli = new mysqli("mysql.eecs.ku.edu", "a086n181", "Aich9Eeg", "a086n181");

        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
        }
        /
        $sql = "SELECT post_id, content, author_id FROM Posts WHERE ='$user' ";
        $results = $mysqli->query($sql);

        if($results -> num_rows > 0) {
            while($row = $results->fetch_assoc()) {
                echo $row["content"] "<br>";
            }
        }
        else {
            echo "There are no users";
        }

        $mysqli->close();
            
    ?>
</html>