



<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        echo "Connected successfully <br>";
        $marina = $_GET["marina_button"];
        $marina = str_replace("_", " ", $marina);
        echo $marina;
        echo "<br>";
        $conn->select_db("bluerosesdb");
        $sql = "SELECT * FROM site WHERE name = '$marina'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Latitude: " . $row["latitude"]. " - Longitude: " . $row["longitude"]."<br>";
            }
        } else {
            echo "0 results";
        }

        // $sql = "INSERT INTO site (name) VALUES ('Algarve')";
        // if (mysqli_query($conn, $sql)) {
        //     echo "New record created successfully";
        // } else {
        //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        // }
    }  
    

?>

    