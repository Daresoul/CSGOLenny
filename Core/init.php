<?php
require 'database/db.php';
require 'functions/users.php';

$sql = "SELECT * From UserInfo";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $ID[] = $row["ID"];
        $UserInput[] = $row["UserInput"];
        $QueNumber[] = $row["Quenumber"];
        $Name[] = $row["Name"];
        $Totalpoints[] = $row["TotalPoints"];
    }
}else {
    echo "0 results";
}

echo "Works 1.0006";

?>