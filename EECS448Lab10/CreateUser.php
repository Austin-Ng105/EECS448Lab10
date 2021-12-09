<html>
 <?php
        $user = $_POST["user"];
        //echo "This is " . $user;

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
                $sql = "INSERT INTO Users (user_id)
                VALUES ('$user')";
                
                if($mysqli ->query($sql) == TRUE) {
                    echo "The User was Added";
                }
                else {
                    echo "Error" . $sql . "<br>" . $mysqli ->error;
                }
            }
            else {
                echo "The User already exist";
            }


        } 

        $mysqli->close();
    ?>

</html>
