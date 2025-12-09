<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_cud', 'root', 'admin@123');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$search = $_GET['search'] ?? '';

if ($search) {

  $Statement = $pdo->prepare('SELECT * FROM products WHERE title LIKE :title ORDER BY create_date DESC');
  $Statement->bindValue(':title', "%$search%");
} else {

  $Statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
}

$Statement->execute();
$products = $Statement->fetchAll(PDO::FETCH_ASSOC);

?>


<!doctype html>
<html lang="en">

<head>
  <title>products_CRUD</title>
  <!-- Required meta tags -->

  <style>
    body,
    html {
      height: 100%;
      margin: 0;
    }

    body {
      padding: 0 !important;
    }



    p {
      color: white;
      font-size: 14px;
    }
  </style>



  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="app.css">
  <link rel="icon" href="shop.jpg">

</head>

<body>
  <header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <a class="navbar-brand" href="Home.html">Page</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="Home.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="View.php">Gallary</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="Help.html">Phons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="Edit.php">Oner</a>
          </li>
        </ul>
        <a href="login.html"><button class="btn btn-outline-info my-2 my-sm-0" type="submit">login</button></a> &nbsp; &nbsp;
        <form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </header>


  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="phoneshop.jpg" alt="First slide" width="600" height="700">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="sild phone 2.jpg" alt="Second slide" width="600" height="890">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="rty.jpg" alt="Third slide" width="600" height="850">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <h1>Products CRUD</h1>

  <form>
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Search for products" name="search">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit">Search</button>
      </div>
    </div>

  </form>


  <table class="w-100 table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">price</th>
        <th scope="col">Create_date</th>

      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $i => $product) : ?>
        <tr>
          <th scope="row"><?php echo $i + 1 ?></th>
          <td>
            <img class="thumb-image" src="<?php echo $product['image'] ?>">
          </td>
          <td><?php echo $product['title'] ?></td>
          <td><?php echo $product['price'] ?></td>
          <td><?php echo $product['create_date'] ?></td>

        </tr>
      <?php endforeach; ?>





    </tbody>
  </table>
  <div class="card bg-primary">
    <div class="card-header">
      <p>Mobile City</p>
    </div>
    <div class="card-body bg-primary">
      <blockquote class="blockquote mb-0">
        <img class="d-inline" src="phoneshop.jpg" alt="Card image cap" style="width: 300px;" align="right">
        <p>078839256</p>
        <p>mobilecity@gmail.com</p>
        <p>"harshana",28 mail post,<br> mahasenpedesa,polonnaruwa,Srilanka</p>
        <footer class="blockquote-footer" style="color: white;">https://mobilecity.blogspot.com/ <cite title="Source Title">mobilecity</cite></footer>
      </blockquote>
    </div>
  </div>
  <script src="jquery-3.6.0.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="jquery-ui.js"></script>
  <script>
    $(function() {
      $("#datepicker").datepicker();
    });
  </script>
</body>

</html>