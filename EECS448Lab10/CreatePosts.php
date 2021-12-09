<html>
 <?php
         $user = $_POST["userP"];
         $posts = $_POST["posts"];
        echo $user . "<br>";
        echo $posts . "<br>";
        
        $mysqli = new mysqli("mysql.eecs.ku.edu", "a086n181", "Aich9Eeg", "a086n181");

        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
        }

        if(!isset($user) || trim($user) == '')
        {
           echo "Please Enter a Username.";
        }
        else {
            
            $checkUser = $mysqli->query("SELECT * From Users WHERE user_id = '$user' ");
            if($checkUser -> num_rows == 0) {
                echo "User Does Not Exist.";
            }
            else {
                
                $sql = "INSERT INTO Posts (content, author_id)
                VALUES ('$posts', '$user')";
                
                if($mysqli ->query($sql) == TRUE) {
                    echo "The Post was Added";
                }
                else {
                    echo "Error" . $sql . "<br>" . $mysqli ->error;
                }
            }
        } 

        $mysqli->close();
        
    ?>

</html>
