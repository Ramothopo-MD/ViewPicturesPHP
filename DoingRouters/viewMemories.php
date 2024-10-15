<?php
require_once 'database.php';

// Query to fetch all memories with their corresponding image paths
$query = "SELECT Name, Description, Photo, date FROM memories";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <style>
        body {
            background-color: #f8f9fa; 
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px; 
            width: 100%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); 
            padding: 1.5rem;
            border-radius: 8px;
            background-color: #ffffff; 
            margin-bottom: 20px;
        }
        .memory-image {
            max-width: 100%; 
            border-radius: 5px; 
        }
        h2 {
            color: #2c3e50; 
            margin-bottom: 0.5rem; 
        }
        p {
            color: #34495e;
        }
        .date-label {
            font-weight: bold; 
        }
        .hr-divider {
            border-top: 1px solid #ddd; 
            margin: 20px 0; 
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-4">My Memories</h1>
        <?php
        if ($result && mysqli_num_rows($result) > 0) {
            // Loop through each memory and display the details along with the image
            while ($row = mysqli_fetch_assoc($result)) {
                $name = htmlspecialchars($row['Name'], ENT_QUOTES, 'UTF-8');
                $description = htmlspecialchars($row['Description'], ENT_QUOTES, 'UTF-8');
                $photo = htmlspecialchars($row['Photo'], ENT_QUOTES, 'UTF-8'); // Sanitized photo path
                $date = htmlspecialchars($row['date'], ENT_QUOTES, 'UTF-8');
        ?>
                <div class="memory-card">
                    <h2><?= $name ?></h2>
                    <p><?= $description ?></p>
                    <p class="date-label"><strong>Date:</strong> <?= $date ?></p>
                    <img src="Uploads/<?= $photo ?>" alt="<?= $name ?>'s memory" class="memory-image">
                </div>
                <div class="hr-divider"></div>
        <?php
            }
        } else {
            echo "<div class='alert alert-warning' role='alert'>No memories found.</div>";
        }
        ?>
    </div>
</body>

</html>
