
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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT * FROM getroute where id = "findRoute";";
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
    ?>
</body>
</html>