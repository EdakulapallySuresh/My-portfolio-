<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the "Name" field exists and is not empty
    if (isset($_POST["Name"]) && !empty($_POST["Name"])) {
        $name = $_POST["Name"];
        echo "Name: " . $name . "<br>";
    } else {
        echo "Name field is empty or not set.<br>";
    }

    // You can add similar checks for other form fields here

} else {
    echo "Form was not submitted.<br>";
}
?>
