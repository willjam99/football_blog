<?php include("../../path.php"); ?>
<?php include( ROOT_PATH . "/app/controllers/topics.php") ?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://kit.fontawesome.com/3e7f9e49ab.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/css/style.css">

    <link rel="stylesheet" href="../../assets/css/admin.css">



    <title>Admin Page- create Topics</title>
</head>

<body>
<header>
<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
        </header>



<!--admin wrap start-->
<div class="admin-wrapper">
    <!--left sidebar-->
    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
    <!-- left sidebar-->
    <!--Admin content-->
    <div class="admin-content">
        <div class="button group">
            <a href="create.php" class="btn btn-big contact-btn">Add topics</a>
            <a href="index.php" class="btn btn-big contact-btn">manage topics</a>
        </div>
        <div class="content">
            <h2 class="page-title"> admin-Add Topics</h2>
            <form action="create.php" method="post">
                <div>
                    <label>Name</label>
                    <input type="text" name="name" class="text-input">
                    <div>
                        <label>Description</label>
                        <textarea name="Description" id="body"></textarea>
                    </div>
                </div>
                <div>
                    <button type="submit" name="add-topic" class="btn btn-big">Add Topic</button>
                </div>
            </form>
        </div>
    </div>
    <!-- // admin content-->



</div>
<!--admin wrap end-->
<!--footer-->


<!--jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!--Ckeditor-->
<script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
<!--custom script-->
<script src="../..//assets/js/script.js"></script>
</body>


</html>