<?php

include "connect.php"; // Điều chỉnh chính tả của tệp kết nối

$sql1 = "SELECT * FROM product ORDER BY `Date-added` DESC LIMIT 4"; 

$result1 = mysqli_query($conn, $sql1);

// Kiểm tra nếu có kết quả trả về
if ($result1 && mysqli_num_rows($result1) > 0) {
    // Tạo một mảng để lưu trữ các sản phẩm
    $recently_added_products = [];

    // Lấy các kết quả
    while ($row = mysqli_fetch_assoc($result1)) {
        $recently_added_products[] = $row;
    }
    // Hiển thị các sản phẩm (ví dụ minh họa)
    foreach ($recently_added_products as $product) {
        echo '<div class="product">';
        echo '<div class="product-img">';
        echo '<img src="' . $product['Img'] . '">';
        echo '</div>';
        echo '<div class="product-details">';
        echo '<h2>' . htmlspecialchars($product['Name']) . '</h2>';
        echo '<p class="price">$' . htmlspecialchars($product['Price']) . '</p>';
        echo '<p class="description">' . htmlspecialchars($product['Description']) . '</p>';
        echo '</div>';
        echo '<a href="product1.html" class="product-link"></a>';
        echo '</div>';
        
    }
} else {
    echo "Không có sản phẩm nào được tìm thấy.";
}
// Đóng kết nối
mysqli_close($conn);
?>