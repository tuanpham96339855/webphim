<?php
    include 'admin/db.php';
    $sql = "SELECT * FROM theloai";
    $theloai = mysqli_query($conn, $sql);
    $sql = "SELECT * FROM quocgia";
    $quocgia = mysqli_query($conn, $sql);
    $sql = "SELECT * FROM phimle";
    $phimle = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webphim</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->


</head>

    <div class="banner">
        <div class="top">
            <div class="left">
                <img class="logo" src="img/logotrangphimz.png" alt="" />
            </div>
            <div class="right">
                <div class="search">
                    <form action="timkiem.php" method="get">
                        <input type="text" name="timkiem" placeholder="Tìm kiếm tên phim">
                        <button type="submit">
                            <img src="img/icon search.png" alt="">
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="bottom">
            <ul>
                <li>
                    <a href="home.php">Trang chủ</a>
                </li>
                <li>
                    <a href="#">Thể loại</a>
                    <ul>
                        <?php
                            if(mysqli_num_rows($theloai)){
                            while($row_tl=mysqli_fetch_assoc($theloai))
                            {
                        ?>
                            <a href="theloai_phim.php?ID=<?=$row_tl['ID_TheLoai']?>"><?=$row_tl['TenTheLoai']?></a>
                        <?php }
                        }
                        ?> 
                    </ul>
                </li>
                <li>
                    <a href="#">Quốc gia</a>
                    <ul>
                    <?php
                            if(mysqli_num_rows($quocgia)){
                            while($row_qg=mysqli_fetch_assoc($quocgia))
                            {
                        ?>
                            <a href="quocgia_phim.php?ID=<?=$row_qg['ID_QuocGia']?>"><?=$row_qg['TenQuocGia']?></a>
                        <?php }
                        }
                        ?> 
                    </ul>
                </li>
                <li>
                    <a href="#">Phim lẻ</a>
                    <ul>
                    <?php
                            if(mysqli_num_rows($phimle)){
                            while($row_pl=mysqli_fetch_assoc($phimle))
                            {
                        ?>
                            <a href="phimle.php?ID=<?=$row_pl['ID_PhimLe']?>"><?=$row_pl['TenPhimLe']?></a>
                        <?php }
                        }
                        ?> 
                    </ul>
                </li>
                <li>
                    <a href="bangxephang.php">Bảng xếp hạng</a>
                </li>
                <li><a href="gioithieu.php">Giới Thiệu</a></li>
            </ul>
        </div>
    </div>

<style>

* {
    border: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    font-family: sans-serif;
    width: 1200px;
    background-color: #081b27;
    margin: 0px auto;
}

.banner {
    width: 1200px;
    height: 160px;
    background-color: #081b27;
}

    .banner .top {
        width: 1200px;
        height: 90px;
        background-color: #081b27;
        border: 1px solid #081b27;
        border-radius: 5px;
    }

        .banner .top .left {
            width: 500px;
            line-height: 80px;
            float: left;
        }

            .banner .top .left img {
                width: 250px;
                height: 35px;
                margin-left: 110px;
                margin-top: 20px;
            }

        .banner .top .right .search {
            margin-top: 25px;
            height: 40px;
            width: 550px;
            margin-left: 600px;
            background-color: white;
            border-radius: 7px;
        }

            .banner .top .right .search input {
                width: 450px;
                height: 40px;
                border: 0px;
                padding-left: 15px;
                font-size: 15px;
                border-radius: 5px;
            }

            .banner .top .right .search button {
                width: 93px;
                height: 31px;
                border-radius: 3px;
                background-color: #3898ec;
                cursor: pointer;
            }

                .banner .top .right .search button img {
                    width: 30px;
                    height: 31px;
                    vertical-align: middle;
                }

    .banner .bottom {
        width: 1200px;
        background-color: #0c2738;
        border: 1px solid#0c2738;
        border-radius: 5px;
        box-shadow: 0 2px 10px 0 #000000;
        display: flex;
        flex-wrap: wrap;
    }

        .banner .bottom ul {
            margin: 0px;
            padding: 0px;
        }

            .banner .bottom ul li {
                list-style: none;
                float: left;
                position: relative; /* điều chỉnh các phần nhưng ko ảnh hưởng đến vị trí ban đầu hay các phần khác*/
            }

                .banner .bottom ul li a {
                    text-decoration: none;
                    display: block;
                    height: 70px;
                    line-height: 70px; /*chỉnh sửa chiều cao của khung ul li*/
                    padding: 0px 70px 0px 17px;
                    font-size: 25px;
                    color: white;
                    text-transform: unset; /* các chữ đc tự động viết hoa*/
                    background: #0c2738;
                }

                    .banner .bottom ul li a:hover {
                        color: yellow;
                    }

            .banner .bottom ul ul {
                position: absolute;
                display: none;
                width: 300px;
                Z-index: 999;
            }

                .banner .bottom ul ul li {
                    width: 230px;
                }

            .banner .bottom ul li:hover > ul {
                display: block;
            }

</style>