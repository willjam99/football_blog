<?php include("../../path.php"); ?>
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



    <title>Admin Page- create posts</title>
</head>

<body>
<header>
            <a class="Logo" href="<?php echo BASE_URL . '/index.php';?>">
                <h1 class="logo-text"><span>Football</span>CrayZ</h1>
                </a>
            <i class="fa fa-bars menu-toggle"></i>
            <ul class="navigation">
             
                <li><a href="#">
                        <i class= "fa fa-user"></i>
                        William Morgan
                        <i class="fa fa-chevron-down" style="font-size: 4mm;"></i>
                    </a>
                    <ul>

                        <li><a href="#" class="logout">Logout</a></li>
                    </ul>
                </li>
        </header>



<!--admin wrap start-->
<div class="admin-wrapper">
    <!--left sidebar-->
    <div class="left-sidebar">
        <ul>
        <li><a href="<?php echo BASE_URL . '/admin/posts/index.php';?>">Manage posts</a></li>
            <li><a href="<?php echo BASE_URL . '/admin/users/index.php';?>">Manage users</a></li>
            <li><a href="<?php echo BASE_URL . '/admin/topics/index.php';?>">Manage topics</a></li>
        </ul>
    </div>
    <!-- left sidebar-->
    <!--Admin content-->
    <div class="admin-content">
           <div class ="button group">
               <a href="create.php" class="btn btn-big contact-btn">Add post</a>
               <a href="index.php" class ="btn btn-big contact-btn">manage post</a>
           </div>
           <div class="content">
               <h2 class="page-title"> admin-Create posts</h2>
               <form action="create.php" method="post">
                   <div>
                       <label>Title</label>
                       <input type="text" name="title"  class="text-input">
                       <div>
                           <label>Body</label>
                           <textarea name="body" id="body"></textarea>
                       </div>
                       <div>
                           <label>Image</label>
                           <input type="file" name="image" id="" class="text-input">
                       </div>
                   </div>
                   <div>
                       <label>Topic</label>
                       <select name="topic" class="text-input"> 
                           <option value="Poetry">Poetry</option>
                           <option value="Life lessons">Life Lessons</option>
                       </select>
                   </div>
                   <div>
                       <button type="submit" class="btn btn-big">Add post</button>
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