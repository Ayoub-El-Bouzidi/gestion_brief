<?php
include('config/connect.php');
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>

  <body>
    <header>
      
      <div class="navbar navbar-primary bg-primary box-shadow" style="height: 90px;">
        <div class="container d-flex justify-content-between">
          <a class="navbar-brand" href="#"><img class="so" src="images/solicode (2).png" style="width: 120px;" alt=""></a>
        <div class="hed">
            <a class="a" href="index.php" style="color: #fff;">Home</a>
            <a class="a" href="brief.php" style="color: #fff;">Briefs</a>
            <a class="a" href="suivi.php" style="color: #fff;">Suivi</a>
        </div>
        
          <button class="navbar-toggler" type="submit" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            Profile
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
      <?php

      if(isset($_SESSION['id'])){
        $id=$_SESSION['id'];
        $query='SELECT NOM FROM formateur WHERE ID_FORMATEUR=1';
        $stmt=$conn->prepare($query);
        $stmt->execute();
        $result=$stmt->fetchAll(PDO::FETCH_OBJ);

        foreach ($result as $formateur) {
            ?>
            <div class="hello">
                <h1>HELLO, <?=$formateur->NOM?></h1>
            </div>
            <?php
        }
      }
          
        
        
        ?>
        <div class="search">
          <form action="" method="post">
          <label class="" for="Search">Search</label>
          <input name="search" class="" type="search" placeholder="Search">
          <button name="submit" type="submit" class="">Search</button>
          </form>
        </div>
      </section>

      <?php      
        $querysh = 'SELECT * FROM breif WHERE DATE_FIN > NOW() AND ID_FORMATEUR=0';
        $stmtsh=$conn->prepare($querysh);
        $stmtsh->execute();
        $res=$stmtsh->fetchAll(PDO::FETCH_OBJ);
        echo'<h2>your briefs</h2>';
        foreach($res as $show){
          ?>
          <div class="album py-5 bg-light all">
            
        <div class="container">
          <div class="row d-flex">
            
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <h2 class="card-text"><?= $show->TITRE ?></h2>
                  <div class="d-flex justify-content-between align-items-center">
                    
                    <small class="text-muted">Date debut:<?= $show->DATE_DEBUT ?></small>
                    <small class="text-muted">Date debut:<?= $show->DATE_FIN ?></small>
                    <div class="btn-group">
                      <button type="submit" class="btn btn-sm btn-outline-primary">View</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
        }

        echo'<h2>All briefs</h2>';
        $querysh = 'SELECT * FROM breif WHERE DATE_FIN > NOW()';
        $stmtsh=$conn->prepare($querysh);
        $stmtsh->execute();
        $res=$stmtsh->fetchAll(PDO::FETCH_OBJ);
        foreach($res as $show){
          ?>
          <div class="album py-5 bg-light all">
        <div class="container">
          <div class="row" style="display: flex; flex-wrap: wrap;">
            
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <h2 class="card-text"><?= $show->TITRE ?></h2>
                  <div class="d-flex justify-content-between align-items-center">
                    
                    <small class="text-muted">Date debut:<?= $show->DATE_DEBUT ?></small>
                    <small class="text-muted">Date debut:<?= $show->DATE_FIN ?></small>
                    <div class="btn-group">
                      <button type="submit" class="btn btn-sm btn-outline-primary">View</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
        }
        
        ?>
      
        
            

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>

</body>
</html>