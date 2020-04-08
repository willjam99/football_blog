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



    <title>Admin Page- Edit Posts</title>
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
               <h2 class="page-title">Manage posts</h2>
               <table>
                   <thead>
                       <th>SN</th>
                       <th>Title</th>
                       <th>Author</th>
                       <th colspan="3">Action</th>
                   </thead>
                   <tbody>
                       <tr>
                           <td>1</td>
                           <td> this is the first post</td>
                           <td>William</td>
                           <td><a href='#'class="edit">edit</a></td>
                           <td><a href='#'class="delete">Delete</a></td>
                           <td><a href='#'class="publish">publish</a></td>
                       </tr>
                       <tr>
                           <td>2</td>
                           <td> this is the second post</td>
                           <td>Morgan</td>
                           <td><a href='#'class="edit">edit</a></td>
                           <td><a href='#'class="delete">Delete</a></td>
                           <td><a href='#'class="publish">publish</a></td>
                       </tr>
                   </tbody>
               </table>
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