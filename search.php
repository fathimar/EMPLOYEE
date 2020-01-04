<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: grey;" >
<!-- Grey with black text -->

<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item add">
      <a class="nav-link" href="index.php">Add</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="search.php">Search</a>
    </li>
  </ul>
</nav>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-4">

        </div>
            <div class="col col-12 col-sm-4">
              <form action="" method="POST">
                <table class="table">
                    <tr>
                    <td>Enter adm no</td>
                    <td><input type="text" class="form-control" name="admno"></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td><input type="submit" value="search" class="btn btn-success" name="search"></td>

                    </tr>
                    </table>
                    </form>
            </div>
            <div class="col col-12 col-sm-4">
            </div>    
    </body>
</html>
<?php
if(isset($_POST["search"]))
{
$admno=$_POST["admno"];
echo $admno;
}
?>



