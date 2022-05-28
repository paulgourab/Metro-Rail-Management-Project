<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "mohon";
        $password = "dragon007";
        $dbname = "metro";

        //create connection
        $conn = new mysqli($servername,$username,$password,$dbname);

        //connection checking
        if($conn == true){
            echo "success" . "<br>";
        }

        $from = $_REQUEST["From"];
        $to = $_REQUEST["To"];
        $dt = $_REQUEST["date"];

        // $sql = "INSERT INTO findrout(From,To,date) 
        // VALUES('$from','$to','$dt')";

        $mysql = "INSERT INTO findroute (`From`, `To`, `date`) 
        VALUES ('$from', '$to', '$dt')";


        if($conn->query($mysql)){
            echo "successfully inserted" . "<br>";
        }
        $sql = "SELECT * FROM getroute where id = '2';";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo $row['id'] . "<br>";
                echo $row['From'] . "<br>";
                echo $row['To'] . "<br>";
                echo $row['train_no'] . "<br>";
                echo $row['schedule'] . "<br>";
            }
        }
        $conn->close();

        
    ?>
</body>
</html>