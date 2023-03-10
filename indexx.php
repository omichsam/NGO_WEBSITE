<?php

// Start the session
session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <?php include_once 'views/head.php'; ?>
    <script>
        $(document).ready(function() {
            $("#myModaal").modal('show');
        });
    </script>
</head>

<body>

  
    <?php include_once 'views/testimony.php'; ?>

    <?php include_once 'views/blog.php'; ?>
  

    <?php include_once 'views/footer.php'; ?>