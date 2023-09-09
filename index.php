<?php
global $conn;
require 'database.php';
require 'header.php';


$statements = $conn->prepare("SELECT * FROM  user");
$statements ->execute();
$posts = $statements->fetchAll();

?>
<body>
<div class="row container">
    <div class = "button_create_post">

        <a class="btn btn-primary" id="createPost" href="CreatePost.php">Create post</a>
    </div>

    <div class="col-sm-6 mb-3 mb-sm-0">
        <?php foreach($posts as $post) :?>
        <div class="card">
            <div class="card-body ">
                <h5 class="card-title"> <?php echo  $post['Name'] ?></h5>
                <p class="card-text"> <?php echo  $post['Surname'] ?></p>
                <a href="#" class="btn btn-primary">Delete</a>
                <a href="#" class="btn btn-primary">Edit</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>