<?php 
include_once '..\controller\affichagepost.php';

	

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
    <link rel="stylesheet" href="assets/css/header.css">
    <title>forum</title>
</head>

<body>
<header>

<nav>
    <div class="posit">

    <div class="dropdown">
            <a class="dropbtn" href="Shop.php">Produit</a>
            
            <div class="dropdown-content"><?php
        foreach($listecategorie as $categorie){
    ?>
<a href="Ordinateur_portable.php?id_c=<?php echo $categorie['id_categorie'];?>"><?php echo $categorie['nom_categorie'];?></a>
    <?php	}
    ?></div>
            
        </div>
        <a href="homepage.php">Forum</a>

        <a href="CoursesPage.php">courses</a>
        <a href="#">AboutUs</a>
    </div>
    <img class="sign" src="assets/img/sign.png" alt="Banner" width="50"><br>
    <div class="p">
        <span style='font-size:50px;'>&#9474;</span>

    </div>
    <div class="account">
        <a href="Dashboard.html">MyAccount</a>
    </div>
</nav>
<div class="p1">
    <span style='font-size:50px;'>&#9474;</span>

</div>
<div id="logo">
    <a href="home.php"><img hre src="assets/img/logofinal.png" alt="Banner" width="76"><br></a>
    <strong>Meta four</strong>
</div>


</header>


<form method='POST'>


<div>

    <div class="uwu">
        <ul>
          <li class="active">
            home
            <span></span><span></span><span></span><span></span>
            <input type="submit" name="home" style="width: 200px;height:100px;color: transparent; background-color: transparent; border-color: transparent; cursor: pointer; position:absolute;left:0px;">
            <?php if(isset($_POST['home'])){
            header('Location: ../views/homepage.php');
            }?>
          <li class="fixedu">
            Account
            <span></span><span></span><span></span><span></span>
            <input type="submit" name="account" style="width: 200px;height:100px;color: transparent; background-color: transparent; border-color: transparent; cursor: pointer; position:absolute;left:0px;">
            <?php if(isset($_POST['account'])){
            header('Location: ../views/account.php');
            }?>
          </li>
          </li>
          <li class="fixedu2">
            ADD Category
            <span></span><span></span><span></span><span></span>
            <input type="submit" name="addcategory" style="width: 200px;height:100px;color: transparent; background-color: transparent; border-color: transparent; cursor: pointer; position:absolute;left:0px;">
            <?php if(isset($_POST['addcategory'])){
            header('Location: ../views/addcategory.php');
            }?>

          </li>
          <li class="fixedu3">
            ADD Post
            <span></span><span></span><span></span><span></span>
            <input type="submit" name="addpost" style="width: 200px;height:100px;color: transparent; background-color: transparent; border-color: transparent; cursor: pointer; position:absolute;left:0px;">
            <?php if(isset($_POST['addpost'])){
            header('Location: ../views/selectcategory.php');
            }?>

          </li>
        </ul>
      </div>


      <div class="postsec"></div>





      <div class="owo">
        <ul>
          <li>
          All Categories
            <span></span><span></span><span></span><span></span>
            <input type="submit" name="mycategories" style="width: 200px;height:100px;color: transparent; background-color: transparent; border-color: transparent; cursor: pointer; position:absolute;left:0px;">
            <?php if(isset($_POST['mycategories'])){
            header('Location: ../views/topcategories.php');
            }?>
          </li>
        </ul>
      </div>
    




    <div class="po"></div>
    <input type="text" class="post2" placeholder="Create Post"></input>
    <input type="submit" name="createuw" style="color: transparent; background-color: transparent; border-color: transparent; cursor: pointer;width: 200px;height:100px; left: 630px;top: 106px;width: 700px;height: 40px;position:absolute;left:px;">
    <?php if(isset($_POST['createuw'])){
    header('Location: ../views/addpost.php');
    }?>
    <div class="photo"></div>




    <form method='GET'>


    <?php while($post=$getmyposts->fetch()) {
    echo '
    <div class="kekw">
    <br><br><br><br><br>
    <div class="post"></div>
    <div class="postreal"></div>
    <div class="texting">'.$post['post_description'].'</div>';

    $post_id=$post['post_id'];
    $likes= $pdo->prepare('SELECT like_id FROM likes WHERE like_postid=?');
    $likes->execute(array($post_id));
    $likes=$likes->rowCount();
    $dislikes= $pdo->prepare('SELECT dislike_id FROM dislikes WHERE dislike_postid=?');
    $dislikes->execute(array($post_id));
    $dislikes=$dislikes->rowCount();

    echo'
    <div class="underpostreal"></div>
    <a href="../controller/likedislikepost.php?t=1&post_id='.$post['post_id'].'" class="like"> '.$likes.' Like</a>
    <a href="../controller/likedislikepost.php?t=2&post_id='.$post['post_id'].'" class="dislike">'.$dislikes.' Dislike</a>
    <a href="../views/post.php?post_id='.$post['post_id'].'" class="comment">Comment</a>
    <a href="../views/categorie.php" class="cat" >'.$post['post_categoryname'].'</a>;';

    if($post['post_user']==$_SESSION['user_id']){
    echo'
    <a href="../views/account.php?post_user='.$post['post_user'].'" class="username">'.$post['post_username'].'</a>';
    }else{
      echo'<a href="../views/accountall.php?post_user='.$post['post_user'].'" class="username">'.$post['post_username'].'</a>';
    }

    if($_SESSION['user_id']==$post['post_user']) {  echo'
    <a href="../controller/deletepost.php?post_id='.$post['post_id'].'" class="buttondelete">Delete</a>
    <a href="../views/modifypost.php?post_id='.$post['post_id'].'" class="buttonmodify">Modify</a>
    ';}

    echo '
    <div class="photo2" ></div>
    <div class="photo3" ></div>
    </div>
     <br><br>';}?>

    </form>

    <div class="lastone"> </div>



<!-- ********************************************************************************* -->
<!-- ********************************************************************************* -->


    </form>
</div>


    <script src="uwu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>