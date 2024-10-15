<?php
require_once 'database.php';
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/Html.html to edit this template
-->
<html>

<head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"><!-- comment -->
    <style>
        body {
            display: flex;
            justify-content: center;
            background-color: #fff;
            margin: 0;
            height: 100vh;
            align-items: center;

        }

        .container {
            max-width: 400px;
            width: 100%;
            box-shadow: 0 2px 8px green;
            display: grid;
            justify-items: center;
            padding: 1rem;
            align-items: center;
            border-radius: 5px
        }

        .info {
            padding: 5px;
        }

        .btn-primary {
            width: 100%
        }
    </style>
</head>

<body>
    <div class="container">

        <form action="uploads.php" method="POST" enctype="multipart/form-data">
            <h1>Make a memory!</h1>
            <div class="info">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="info">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="info">
                <label for="photo" class="form-label">Picture</label>
                <input type="file" name="photo" class="form-control">
            </div>
            <div class="info">
                <label for="date" class="form-label">Date</label>
                <input type="date" name="date" class="form-control">
            </div>
            <div class="info">
                <input type="submit" value="Upload" class="btn btn-primary" name="upload">
            </div>
        </form>


    </div>
</body>

</html>