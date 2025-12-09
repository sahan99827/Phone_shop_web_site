<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_cud','root','admin@123');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

$search = $_POST['search'] ?? '';

if ($search) {
   
  $Statement = $pdo ->prepare('SELECT * FROM products WHERE title LIKE :title ORDER BY create_date DESC');
    $Statement->bindValue(':title',"%$search%");
}else{

  $Statement = $pdo ->prepare('SELECT * FROM products ORDER BY create_date DESC');
}

$Statement ->execute();
$products = $Statement ->fetchAll(PDO :: FETCH_ASSOC);

?>

<html>
<head>

<title>
	products_CRUD
</title>
<link rel="icon" href="shop.jpg">
 <link rel="stylesheet" href="bootstrap.min.css">
 <link rel="stylesheet" href="app.css">

   <style>
          body, html {
            height: 100%;
            margin: 0;
          }
          body{
          	padding: 0!important;
          }

       

          p{
              color: white;
              font-size: 14px;
            }
        ul>li>a{
        color:snow;
      }
    </style>
</head>
<body>
  <ul class="nav nav-pills bg-info">
      <li class="nav-item">
        <a class="nav-link" href="Home.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="View.php">Gallary</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Edit.php">Order</a>
      </li>
    </ul>
    <br />
    <center><h1>Products CRUD</h1></center>
    <table class="table table-striped" border="1">
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
  <?php foreach ($products as $i => $product): ?>
      <tr>
          <th scope="row"><?php echo $i +1 ?></th>
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

 <script src="jquery-3.6.0.js "></script>
    <script src="popper.min.js "></script>
    <script src="bootstrap.min.js "></script>
    <script src="jquery-ui.js "></script>
</body>
</html>
