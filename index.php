<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <!-- Start inclue to php นะจ๊ะ -->
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- End inclue to php นะจ๊ะ -->
    <meta charset="UTF-8">
    <meta 
    name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo '<script src="jquery.js"></script>
    <script src="script.js"></script>';
    include 'sidebar&hamburger.php';
    '<script src="js/bootstrap.bundle.min.js"></script>';
    ?>
   <header id="the_sidebar"></header>
   <script>
    $(function(){
        $('#the_sidebar').load('sidebar&hamburger.html');
        $('#the_sidebar').addClass('sticky-top');
    })
   </script>
   <main>
    <section>
        <div class="container mt-5"><h2 class="display-5 text-center">Welcome to my restaurant.</h2></div>
    </section>
   </main>
</body>
</html>