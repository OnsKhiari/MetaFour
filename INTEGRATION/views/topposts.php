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
    <title>top posts</title>
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



      <nav class="owo1">
        <ul>
          <li class="active">
            Top posts
            <span></span><span></span><span></span><span></span>
          </li>
        </ul>
      </nav>
      <nav class="owo">
        <ul>
          <li>
          All Categories
            <span></span><span></span><span></span><span></span>
          </li>
        </ul>
      </nav>

    
    
  

    <div class="post"></div>
    <div class="postsec"></div>
    <div class="po"></div>
    <input type="text" class="post2" placeholder="Create Post"></input>
    <div class="photo" ></div>
    <div class="postreal" ></div>
    <div class="underpostreal"></div>
    <div class="texting"></div>
    <a href="#like" class="like">Like</a>
    <a href="#dislike" class="dislike">Dislike</a>
    <a href="#comment" class="comment" >Comment</a>
    <a href="#category" class="cat">c/Category</a>
    <a href="#user" class="username" >u/user</a>
    <div class="photo2" ></div>
    <div class="photo3"></div>


    <div class="lastone"> </div>


          </form>
</div>


    <script src="uwu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>