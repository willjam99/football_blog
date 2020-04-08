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



    <title>Admin Page- create Users</title>
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
           <div class ="button group">
               <a href="create.php" class="btn btn-big contact-btn">Add Users</a>
               <a href="index.php" class ="btn btn-big contact-btn">manage users</a>
           </div>
           <div class="content">
               <h2 class="page-title"> admin-Add User</h2>
               <form action="create.php" method="post">
                   <div>
                    <div>
                        <label>Username</label>
                        <input type="text" name="username" class="text-input">
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" class="text-input">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" class="text-input">
                    </div>
                    <div>
                        <label> Repeat Password</label>
                        <input type="password" name="passwordconf" class="text-input">
                    </div>
                    <div>
                        <label>Role</label>
                        <select name="role" class="text-input"> 
                            <option value="User">User</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>
                    <div>
                       <button type="submit" class="btn btn-big">Add user</button>
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