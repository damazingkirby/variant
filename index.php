<?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "123456++";
    $dbname = "sonoo";
    $post = $_POST;
    $name = "superman";
    $name1 = "batman";
    $set = 0;
    $set1 = 0;
    $jeux = 0;
    $jeux1 = 0;
  
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("connection error: " . $conn->connect_error); 
    }

    if(isset($post['action']) && $post['action'] === "button1") {
            $jeux++;

        }
    
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leadearboard using php</title>
</head>
<body>
    <form action="index.php" method="post">
        <p><?php echo $name .' '. $set .' '. $jeux; ?></p>
        <button type="submit" name="action" value="button1">1</button>
        <p><?php echo $name1 .' '.$set1 .' '. $jeux1; ?></p>
        <button name="button2">2</button>
    </form>
</body>
</html>

<?php
  