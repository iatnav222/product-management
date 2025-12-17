<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản Lý Sản Phẩm</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #f2f2f2; }
        .header { background: #4CAF50; color: white; padding: 15px; text-align: center; }
    </style>
</head>
<body>
    <div class="header">
        <h1>HỆ THỐNG QUẢN LÝ KHO a (Render & Docker)</h1>
        <p>Sinh viên thực hiện: Trần Văn Tài</p>
    </div>

    <h2>Danh sách sản phẩm hiện có</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên Sản Phẩm</th>
            <th>Giá (VND)</th>
            <th>Trạng thái</th>
        </tr>
        <?php
        // Giả lập dữ liệu database
        $products = [
            ["id" => 1, "name" => "Laptop Gaming Acer", "price" => "20.000.000", "status" => "Còn hàng"],
            ["id" => 2, "name" => "Chuột Logitech G102", "price" => "400.000", "status" => "Hết hàng"],
            ["id" => 3, "name" => "Bàn phím cơ Keychron", "price" => "1.500.000", "status" => "Còn hàng"]
        ];

        foreach ($products as $product) {
            echo "<tr>";
            echo "<td>" . $product['id'] . "</td>";
            echo "<td>" . $product['name'] . "</td>";
            echo "<td>" . $product['price'] . "</td>";
            echo "<td>" . $product['status'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
