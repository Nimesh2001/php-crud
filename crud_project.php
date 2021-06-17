<?php
$insert=false;
$server="localhost";
$username="root";
$password="";
$database="php_crud";
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn)
   die("not connect successfully");
if($_SERVER['REQUEST_METHOD']=='POST'){
  $title=$_POST['title'];
  $description=$_POST['description'];
  $in="INSERT INTO `notes` (`Title`, `Description`) VALUES ( '$title', '$description')";
  $inq= mysqli_query($conn,$in);
  if (!$inq) {
    die("Error inserting table: " . mysqli_error($conn));
  }
  else
    $insert=true;
  }
  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
 
    <title>PHP Crud</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PHPcrud</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<?php
if($insert)
{
  echo'<div class="alert alert-success" role="success">
  <strong>success</strong> Your note has been submitted successfully.
  </button>
</div>';
}
?>
<div class="container my-3">
<form action="crud_project.php" method="post">
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title">
  </div>
  <div class="mb-3">
  <label for="description" class="form-label">Description</label>
  <textarea class="form-control" id="description" rows="3" name="description"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Add Note</button>
</form>
</div>
<div class="container">
<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
 <?php
$sql="SELECT * FROM notes";
$result=mysqli_query($conn,$sql);
$Sno=0;
while($row=mysqli_fetch_assoc($result))
{
  $Sno=$Sno+1;
  echo "<tr>
      <th scope='row'>".$Sno."</th>
      <td>".$row['Title']."</td>
      <td>".$row['Description']."</td>
      <td> <a href='/edit'>edit</a>  <a href='/delete'>delete</a>
    </tr>";
}
?>
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  
  <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
    } );
    </script>
  

  </body>
</html>