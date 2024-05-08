<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>XL</p>
    <form method="post" action="#">
        <p>Mã hàng: <?php echo $_SESSION['mh'];?></p>
        <p>Tên: <?php echo $_SESSION['ten'];?></p>
        <p>Đơn giá: <?php echo $_SESSION['don'];?></p>
        <p>Số lượng: <?php echo $_SESSION['solg'];?></p>
        <p>Tổng tiền: <?php echo $_SESSION['don'] * $_SESSION['solg'];?></p>
        
    </form>
    <a href="dong.php">Đóng</a>

</body>
</html>