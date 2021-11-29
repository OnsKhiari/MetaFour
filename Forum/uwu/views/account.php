<?php 
include 'C:\xampp\htdocs\ONS\uwu\controller\showaccount.php';
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
    <title>account</title>
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
          <li class="active">
            Account
            <span></span><span></span><span></span><span></span>
            <input type="submit" name="account" style="width: 200px;height:100px;color: transparent; background-color: transparent; border-color: transparent; cursor: pointer; position:absolute;left:0px;">
            <?php if(isset($_POST['account'])){
            header('Location: ../views/account.php');
            }?>
          </li>
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

    <div class="post333"></div>
    <div class="postsec"></div>
    <div class="po333"></div>
    
    
    <div class="photo3333"></div>

    <?php if(isset($getpostsofuser)){
    while($post=$getpostsofuser->fetch()){
      echo'<a href="#user" class="username333">'.$post['post_username'].'</a>';
    echo '
    <div class="kekw">  
    <br><br><br><br><br><br>
    <div class="post"></div>';
    echo'
    <div class="postreal"></div>
    <div class="underpostreal"></div>';

    $post_id=$post['post_id'];
    $likes= $pdo->prepare('SELECT like_id FROM likes WHERE like_postid=?');
    $likes->execute(array($post_id));
    $likes=$likes->rowCount();
    $dislikes= $pdo->prepare('SELECT dislike_id FROM dislikes WHERE dislike_postid=?');
    $dislikes->execute(array($post_id));
    $dislikes=$dislikes->rowCount();
    
    echo'
    <a href="../controller/likedislikepost.php?t=1&post_id='.$post['post_id'].'" class="like"> '.$likes.' Like</a>
    <a href="../controller/likedislikepost.php?t=2&post_id='.$post['post_id'].'" class="dislike">'.$dislikes.' Dislike</a>
    <a href="../views/post.php?post_id='.$post['post_id'].'" class="comment">Comment</a>
    <a href="../views/categorie.php" class="cat" >'.$post['post_categoryname'].'</a>';
    echo '<a href="#user" class="username"> '.$post['post_username'].' </a>';
    echo '<div class="texting">'.$post['post_description'].'</div>';
    echo' <a href="../controller/deletepost.php?post_id='.$post['post_id'].'" class="buttondelete">Delete</a>
    <a href="../views/modifypost.php?post_id='.$post['post_id'].'" class="buttonmodify">Modify</a>';
    echo '
    <div class="photo2" ></div>
    <div class="photo3" ></div>
    </div>
     <br><br>';
     } ?>
    <?php } ?>
    

    <input type="text" class="post2333" placeholder="Create Post"></input>
    <input type="submit" name="createuw" style="color: transparent; background-color: transparent; border-color: transparent; cursor: pointer;width: 200px;height:100px; left: 630px;top: 106px;width: 700px;height: 40px;position:absolute;left:px;">
    <?php if(isset($_POST['createuw'])){
    header('Location: ../views/addpost.php');
    }?>

    <div class="lastone"> </div>
  


    </form>
</div>



    <script src="uwu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>