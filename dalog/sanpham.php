<?php
// Kết nối đến cơ sở dữ liệu
  include "connect.php";
  include "routing.php";

$num_products_on_each_page = 4;
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
$offset = ($current_page - 1) * $num_products_on_each_page;

// Chuẩn bị truy vấn SQL với LIMIT và OFFSET
$query = "SELECT * FROM products ORDER BY date_added DESC LIMIT $num_products_on_each_page OFFSET $offset";

// Thực thi truy vấn
$result = mysqli_query($conn, $query);

// Chuyển kết quả thành một mảng kết hợp
$products = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Page</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
     <?php
      include("index.html");
     ?>
    <div class="container">
      <div class="product">
        <div class="product-img">
          <img src="../images/prd.png" alt="Product Image" />
          <div class="overlay"></div>
        </div>
        <div class="product-details">
          <h2>Ronaldo</h2>
          <p class="price">100.000.000 $</p>
          <p class="description">
            Mô tả sản phẩm: Biệt danh anh Liêm, cả 1 đời liêm khiết
          </p>
        </div>
        <a href="product1.html" class="product-link"></a>
      </div>
      <div class="product">
        <div class="product-img">
          <img src="../images/prd2.png" alt="Product Image" />
          <div class="overlay"></div>
        </div>
        <div class="product-details">
          <h2>Messi</h2>
          <p class="price">150.000.000 $</p>
          <p class="description">
            Mô tả sản phẩm: Biệt danh là Sa Tị vì những lần đi bộ vuốt râu
          </p>
        </div>
        <a href="product2.html" class="product-link"></a>
      </div>
      
      <div class="product">
        <div class="product-img">
          <img src="../images/prd.png" alt="Product Image" />
          <div class="overlay"></div>
        </div>
        <div class="product-details">
          <h2>Quả bóng vàng</h2>
          <p class="price">0 $</p>
          <p class="description">
            Mô tả sản phẩm:" Của thằng con tao rồi, không bán được nữa" Chủ tịch FIFA said
          </p>
        </div>
        <a href="product2.html" class="product-link"></a>
        <div class="add-to-cart">+</div>
      </div>

      <div class="product">
        <div class="product-img">
          <img src="../images/prd2.png" alt="Product Image" />
          <div class="overlay"></div>
        </div>
        <div class="product-details">
          <h2>Messi</h2>
          <p class="price">150.000.000 $</p>
          <p class="description">
            Mô tả sản phẩm: Biệt danh là Sa Tị vì những lần đi bộ vuốt râu
          </p>
        </div>
        <a href="product2.html" class="product-link"></a>
        <div class="add-to-cart">+</div>
      </div>

      <div class="product">
        <div class="product-img">
          <img src="../images/prd.png" alt="Product Image" />
          <div class="overlay"></div>
        </div>
        <div class="product-details">
          <h2>Messi</h2>
          <p class="price">150.000.000 $</p>
          <p class="description">
            Mô tả sản phẩm: Biệt danh là Sa Tị vì những lần đi bộ vuốt râu
          </p>
        </div>
        <a href="product2.html" class="product-link"></a>
        <div class="add-to-cart">+</div>
      </div>

      <div class="product">
        <div class="product-img">
          <img src="../images/prd2.png" alt="Product Image" />
          <div class="overlay"></div>
        </div>
        <div class="product-details">
          <h2>Messi</h2>
          <p class="price">150.000.000 $</p>
          <p class="description">
            Mô tả sản phẩm: Biệt danh là Sa Tị vì những lần đi bộ vuốt râu
          </p>
        </div>
        <a href="product2.html" class="product-link"></a>
        <div class="add-to-cart">+</div>
      </div>

      <div class="product">
        <div class="product-img">
          <img src="../images/prd.png" alt="Product Image" />
          <div class="overlay"></div>
        </div>
        <div class="product-details">
          <h2>Messi</h2>
          <p class="price">150.000.000 $</p>
          <p class="description">
            Mô tả sản phẩm: Biệt danh là Sa Tị vì những lần đi bộ vuốt râu
          </p>
        </div>
        <a href="product2.html" class="product-link"></a>
        <div class="add-to-cart">+</div>
      </div>

      <div class="product">
        <div class="product-img">
          <img src="../images/prd.png" alt="Product Image" />
          <div class="overlay"></div>
        </div>
        <div class="product-details">
          <h2>Messi</h2>
          <p class="price">150.000.000 $</p>
          <p class="description">
            Mô tả sản phẩm: Biệt danh là Sa Tị vì những lần đi bộ vuốt râu
          </p>
        </div>
        <a href="product2.html" class="product-link"></a>
        <div class="add-to-cart">+</div>
      </div>
    </div>
  </body>
</html>
