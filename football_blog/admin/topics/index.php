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



    <title>Admin Page- Edit Topics</title>
</head>

<body>
<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>



<!--admin wrap start-->
<div class="admin-wrapper">
    <!--left sidebar-->
    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
    <!-- left sidebar-->
    <!--Admin content-->
    <div class="admin-content">
           <div class ="button group">
               <a href="create.php" class="btn btn-big contact-btn">Add Topic</a>
               <a href="index.php" class ="btn btn-big contact-btn">manage Topic</a>
           </div>
           <div class="content">
               <h2 class="page-title">Manage Topics</h2>
               <?php include(ROOT_PATH . "/app/includes/messages.php")?>
               <table>
                   <thead>
                       <th>SN</th>
                       <th>Name</th>
                       <th colspan="2">Action</th>
                   </thead>
                   <tbody>
                       <?php foreach($topics as $key => $topic):?>
                       <tr>
                           <td><?php echo $key + 1;?></td>
                           <td><?php echo $topic['name']; ?></td>
                           <td><a href="edit.php?id=<?php echo $topic['id'];?>" class="edit">edit</a></td>
                           <td><a href='#'class="delete">Delete</a></td>
                       </tr>
                       <?php endforeach; ?>
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