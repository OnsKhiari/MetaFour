<?php 
include '..\controller\commentpost.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="uwu.css">
    <title>add post</title>
</head>
<body>

<form method='POST'>
<div>


<nav class="uwu">
        <ul>
          <li>
            home
            <span></span><span></span><span></span><span></span>
            <input type="submit" name="home" style="width: 200px;height:100px;color: transparent; background-color: transparent; border-color: transparent; cursor: pointer; position:absolute;left:0px;">
            <?php if(isset($_POST['home'])){
            header('Location: ../views/homepage.php');
            }?>
          </li>
          <li>
            Account
            <span></span><span></span><span></span><span></span>
            <input type="submit" name="account" style="width: 200px;height:100px;color: transparent; background-color: transparent; border-color: transparent; cursor: pointer; position:absolute;left:0px;">
            <?php if(isset($_POST['account'])){
            header('Location: ../views/account.php');
            }?>
          </li>
          <li>
            ADD Category
            <span></span><span></span><span></span><span></span>
            <input type="submit" name="addcategory" style="width: 200px;height:100px;color: transparent; background-color: transparent; border-color: transparent; cursor: pointer; position:absolute;left:0px;">
            <?php if(isset($_POST['addcategory'])){
            header('Location: ../views/addcategory.php');
            }?>

          </li>
          <li>
            ADD Post
            <span></span><span></span><span></span><span></span>
            <input type="submit" name="addpost" style="width: 200px;height:100px;color: transparent; background-color: transparent; border-color: transparent; cursor: pointer; position:absolute;left:0px;">
            <?php if(isset($_POST['addpost'])){
            header('Location: ../views/selectcategory.php');
            }?>

          </li>
        </ul>
      </nav>

    <div class="post444"></div>
    <div class="postsec"></div>

    <div class="postreal_111"></div>
    <div class="underpostreal_111"></div>

    <div class="photo2_111"></div>
    <div class="photo3_111"></div>
    

    <?php
          if(isset($post_date)){
      ?>

          <form method='POST'>
    <a href="#category" class="cat_111">c/Category</a>
    <a href="#user" class="username_111"><?= $post_username ?></a>
    <div class="texting_111"><?= $post_description ?></div>
    <div class="texting_1112"></div>
    <input type="text" name="addcomment" class="post2_11" placeholder="Add comment"></input>
    <input type="submit" value="Comment" name="commentpls" class="buttondone"></input>

    <?php 
        while($comment=$getallcomments->fetch()){
    ?>
          <div class="commentuu"><?= $comment['comment_username'] ?> :   <?= $comment['comment_content'] ?></div>

    <?php } ?>

          </form>

    <?php } ?>
    <?php if(isset($error)){ echo'<p>'.$error.'<p>';} ?>
    

    


          </form>
</div>


    <script src="uwu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>