<?php
global $conn;
require 'header.php';
require 'database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $postTitle = $_POST['name'];
    $postText = $_POST['text'];

    $statement = $conn->prepare('INSERT into user (name , surname) VALUES(:name , :text)');
    $statement->execute([
        'name' => $postTitle,
        'text' => $postText,
    ]);
    header('location: index.php');
}
?>

<form method="POST" action="" class="py-3 container">
    <h2>Create post</h2>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Post title </label>
        <input type="text" name='name' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">post</label>
        <input type="text" name='text' class="form-control" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
</form>
