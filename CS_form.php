<?php
    session_start();
    
    $mahang = $_POST['mahang'];
    $ten = $_POST['tenhang'];
    $dongia = $_POST['dongia'];
    $soluong = $_POST['slg'];
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty($mahang) || empty($ten) || empty($dongia) || empty($soluong)){
            echo "Vui lòng nhập đầy đủ";
        }
        $_SESSION['mh'] = $mahang;
        $_SESSION['ten'] = $ten;
        $_SESSION['don'] = $dongia;
        $_SESSION['solg'] = $soluong;

        $time_c = time() + (24 * 3600);
        setcookie('mh', $mahang, $time_c);
        setcookie('ten', $ten, $time_c);
        setcookie('don', $dongia, $time_c);
        setcookie('solg', $soluong, $time_c);
        header("Location: xuly.php");
        exit;
    }
?>