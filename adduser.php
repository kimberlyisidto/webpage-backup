<?php
include 'job_operations.php'; // Include your job operations file

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["operation"]) && $_POST["operation"] == "add") {
    // Get form data
    $position = $_POST["position"];
    $description = $_POST["description"];

    // Handle file upload (you may need to adjust this based on your requirements)
    $photo = ""; // Placeholder for file path
    if (isset($_FILES["photo"])) {
        $targetDir = "uploads/"; // Adjust this directory as needed
        $targetFile = $targetDir . basename($_FILES["photo"]["name"]);
        move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile);
        $photo = $targetFile;
    }

    // Call the function to add a new job vacancy
    $result = addJobVacancyWithFile($position, $description, $photo);

    // Handle the result
    if ($result === true) {
        echo "Job added successfully!";
    } else {
        echo "Error: " . $result;
    }
}
?>
