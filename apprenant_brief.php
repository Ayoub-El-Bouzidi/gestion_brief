<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Section & Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
      
      <div class="navbar navbar-primary bg-primary box-shadow" style="height: 90px;">
        <div class="container d-flex justify-content-between">
          <a class="navbar-brand" href="#"><img class="so" src="images/solicode (2).png" style="width: 120px;" alt=""></a>
        <div class="hed">
            <a class="a" href="index.php" style="color: #fff;">Home</a>
            <a class="a" href="brief.php" style="color: #fff;">Briefs</a>
        </div>
        
          <button class="navbar-toggler" type="submit" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            Profile
          </button>
        </div>
      </div>
    </header><br>
  <div class="container shadow">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="text-center p-5">
          <form method="POST">
            <div class="mb-3 row">
              <label for="subjectInput" class="col-sm-3 col-form-label text-end">drive link:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="subjectInput" aria-describedby="subjectHelp" name="driveLink">
              </div>
            </div>
              <div class="col-sm-9">
                <button type="submit" class="btn btn-primary" name="send" >Send Project</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
  include "config/connect.php";

  if(isset($_POST['send'])) { 
      $driveLink = $_POST['driveLink'];
  
      $query = "INSERT INTO realisation(LIEN) VALUES (?)";
      $stmt = $conn->prepare($query);
      
      $stmt->bindParam(1, $driveLink);

      if ($stmt->execute()) {
          echo "lien envoyer";
      } else {
          echo "ereur : " . $stmt->errorInfo();
      }
  }
?>