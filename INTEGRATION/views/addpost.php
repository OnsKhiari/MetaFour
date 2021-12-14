<?php 
include '..\controller\newpost.php';
?>

<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="uwu.css">
    <link rel="stylesheet" href="assets/css/header.css">

    <title>add post</title>
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
</div>
<div class="p1">
    <span style='font-size:50px;'>&#9474;</span>

</div>
<div id="logo">
    <a href="home.php"><img hre src="assets/img/logofinal.png" alt="Banner" width="76"><br></a>
    <strong>Meta four</strong>
</div>

</nav>
</header>

<form method='POST'>

<div>
  
<?php if(isset($error)){
    echo '<p>'.$error.'</p>';
  }else if(isset($success)){
    echo '<p>'.$success.'</p>';
  }
  ?>

<div class="uwu">
        <ul>
          <li>
            home
            <span></span><span></span><span></span><span></span>
            <input type="submit" name="home" style="width: 200px;height:100px;color: transparent; background-color: transparent; border-color: transparent; cursor: pointer; position:absolute;left:0px;">
            <?php if(isset($_POST['home'])){
            header('Location: ../views/homepage.php');
            }?>
          <li>
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
          <li class='active'>
            ADD Post
            <span></span><span></span><span></span><span></span>
            <input type="submit" name="addpost" style="width: 200px;height:100px;color: transparent; background-color: transparent; border-color: transparent; cursor: pointer; position:absolute;left:0px;">
            <?php if(isset($_POST['addpost'])){
            header('Location: ../views/selectcategory.php');
            }?>

          </li>
        </ul>
      </div>
    <div>
      <ul>
      <li class="create" name="create">
        Create
        <span></span><span></span><span></span><span></span>
        <input type="submit" name="create" style="width: 200px;height:100px;color: transparent; background-color: transparent; border-color: transparent; cursor: pointer; position:absolute;left:0px;">
      </li>
    </ul>
  </div>
  <div>
    <ul>
        <li class="delete">
        Delete
        <span></span><span></span><span></span><span></span>
      </li>
    </ul>
  </div>
  <div>
  <ul>
    <li class="select" name="selectcategory">
    Select Category
    <span></span><span></span><span></span><span></span>
    <input type="submit" name="selectcategory" style="width: 200px;height:100px;color: transparent; background-color: transparent;
    border-color: transparent; cursor: pointer; position:absolute; left:0px;">
    <?php if(isset($_POST['selectcategory'])){
    header('Location: ../views/selectcategory.php');
    }?>
  </li>
</ul>
</div>

      
    
      

    <div class="post444"></div>
    <div class="postsec"></div>
    <div class="postreal_99"></div>
    <input type="text" class="texting_99" name="post_description" placeholder="type..">

      <?php echo '<a href="#user" class="username_99" > '. $_SESSION['user_name'] .' </a>'; ?>

        <div class="photo2_99"></div>
</div>
</form>

    <script src="uwu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</php>