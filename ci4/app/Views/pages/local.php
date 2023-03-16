<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest List</title>
</head>

<body>


    <?php
    $servername = "192.168.150.213";
    $username = "webprogmi212";
    $password = "b3ntRhino98";
    $dbname = "webprogmi212";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, name, email, website, comment, gender, reg_date FROM lppelor_myguests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - " .
                "Name: " . $row["name"] . "<br>" .
                "Email: " . $row["email"] . "<br>" .
                "Website: " . $row["website"] . "<br>" .
                "Comment: " . $row["comment"] . "<br>" .
                "Gender: " . $row["gender"] . "<br><br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>


</body>

</html>