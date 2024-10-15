<?php
require_once 'database.php';
if (!is_dir("Uploads")) {
    mkdir("Uploads", 0755, true);
}

if (isset($_POST['upload'])) {
    $name = htmlspecialchars($_POST['name']);
    $description =htmlspecialchars($_POST['description']);
    $fileName = $_FILES['photo']['name'];
    $date = $_POST['date'];

    $fileExtention = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $allowedExtentions = ['png', 'jpeg', 'jpg'];

    $uniqueFileName =uniqid(). '_' .$fileName ;
    $tmpName = $_FILES['photo']['tmp_name'];
    $targetPath = "Uploads/" . $uniqueFileName;

    if (in_array($fileExtention, $allowedExtentions)) {
        if (move_uploaded_file($tmpName, $targetPath)) {
            $query = "INSERT INTO memories (Name,Description,Photo,date) Values('$name','$description','$uniqueFileName','$date')";
            if (mysqli_query($conn, $query)) {
                echo "Successfully added a memory";
            } else {

                echo "Something went wrong the memory was not added";
            }
        }
    } else {
        echo "The file extention is not allowed";
    }
}
