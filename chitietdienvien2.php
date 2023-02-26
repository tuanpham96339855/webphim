<?php
    include 'layout/mo.php';
    include 'admin/db.php';
    if (isset($_GET['ID'])) $id = $_GET['ID'];
    $sql = "SELECT * FROM dienvien2 WHERE ID_DienVien2 = $id";
    $dienvien2 = mysqli_query($conn, $sql);
    $row_dv2=mysqli_fetch_assoc($dienvien2);

    $quoctich = $row_dv2['QuocTich'];
    $sql = "SELECT * FROM quoctich WHERE ID_QuocTich = $quoctich";
    $query= mysqli_query($conn, $sql);
    $row_qt=mysqli_fetch_assoc($query);

    $nghenghiep = $row_dv2['NgheNghiep'];
    $sql = "SELECT * FROM nghenghiep WHERE ID_NgheNghiep = $nghenghiep";
    $query= mysqli_query($conn, $sql);
    $row_nn=mysqli_fetch_assoc($query);
?>
<div class="trai">
    <a href="">Chi tiết diễn viên / <?=$row_dv2['TenDienVien2']?></a>
</div>
<div class="phai">
    <a href="bangxephang.php">Bảng xếp hạng </a>
</div>

<div class="than">
    <div class="leftthan">
        <div class="top">
            <div class="left">
                    <img src="admin/img/<?=$row_dv2['Anh_DV2']?>"/>
            </div>
                <div class="right">
                        <p>Tên diễn viên: <?=$row_dv2['TenDienVien2']?></p>
                        <p>Ngày sinh: <?=$row_dv2['NgaySinh']?></p>
                        <p>Nơi sinh: <?=$row_dv2['NoiSinh']?></p>
                        <p>Quốc tịch: <?=$row_qt['TenQuocTich']?></p>
                        <p>Chiều cao: <?=$row_dv2['ChieuCao']?></p>
                        <p>Cân nặng: <?=$row_dv2['CanNang']?></p>
                        <p>Nghề nghiệp: <?=$row_nn['TenNgheNghiep']?></p>
                        <p>Hoạt động: <?=$row_dv2['HoatDong']?></p>
                </div>
        </div>
        <div class="mid1">
            <a href="phimcuadv2.php?ID=<?=$row_dv2['ID_DienVien2']?>">Xem phim của <?=$row_dv2['TenDienVien2']?></a>
        </div>
        <div class="mid2">
            <h1>Tiểu sử</h1>
            <p><?=$row_dv2['MoTa']?></p>
        </div>
    </div>
    <div class="rightthan">
        <?php
            $sql = "SELECT * FROM phim ORDER BY LuotXem desc limit 5";
            $phim = mysqli_query($conn, $sql);
            $index = 0;
            while($row = mysqli_fetch_assoc($phim)){
            $index ++;
            $id = $row['TheLoai'];
            $sql = "SELECT * FROM theloai WHERE ID_TheLoai = $id";
            $tl =mysqli_query($conn, $sql);
            $theloai = mysqli_fetch_assoc($tl);
        ?>
        <div class="top">
            <div class="left">
                <a href="chitietphim.php?ID=<?=$row['ID']?>">
                    <div class="ba"><img src="admin/img/<?=$row['Anh']?>"/></div>
                    <div class="bon"><img src="img/film.png" alt=""></div>
                </a>
            </div>
            <div class="right">
                <h1>Top <?=$index?></h1>
                <div class="gachngang">
                    <hr width="63px" size="3px" color="red" />
                </div>
                <a href="chitietphim.php?ID=<?=$row['ID']?>"> <?=$row['TenPhim']?></a><br><br>
                <a href="theloai_phim.php?ID=<?=$theloai['ID_TheLoai']?>"><u>Phim <?=$theloai['TenTheLoai']?></u></a>
            </div>
        </div>
        <?php }
        ?>
    </div>
</div>
<?php
    include 'layout/ket.php'
?>

<style>
    .trai {
        width: 920px;
        height: 70px;
        margin-top: 40px;
        float: left;;
    }
        .trai a {
            color: yellow;
            font-size: 22px;
            background-color: #0c2738;
            text-decoration: none;
           
        }
    .phai {
        width: 280px;
        height: 70px;
        margin-top: 40px;
        float: left;
    }
        .phai a {
            color: yellow;
            font-size: 22px;
            background-color: #0c2738;
            text-decoration: none;  
        }

    .than {
        width: 1200px;
        display: flex;
        flex-wrap: wrap;
    }

        .than .leftthan {
            width: 900px;
            float: left;
        }

            .than .leftthan .top {
                width: 900px;
                height: 440px;
            }

                .than .leftthan .top .left {
                    width: 310px;
                    height: 440px;
                    float: left;
                }

                    .than .leftthan .top .left img {
                        width: 310px;
                        height: 440px;
                        border-radius: 3%;
                        -moz-border-radius: 3%;
                        -webkit-border-radius: 3%;
                    }

                .than .leftthan .top .right {
                    width: 570px;
                    height: 440px;
                    margin-left: 20px;
                    float: left;
                }

                    .than .leftthan .top .right h1 {
                        color: yellow;
                        font-size: 20px;
                    }

                    .than .leftthan .top .right p {
                        color: white;
                        font-size: 20px;
                        padding-top: 0px;
                    }

            .than .leftthan .mid1 {
                width: 900px;
                height: 65px;
                margin-top: 30px;
                background-color: dodgerblue;
                text-align: center;
                border-radius: 5px;
            }

                .than .leftthan .mid1 a {
                    color: white;
                    font-size: 22px;
                    text-decoration: none;
                    display: block; /* hiển thị theo từng hàng độc lập */
                    padding: 21px 10px;
                }

                    .than .leftthan .mid1 a:hover {
                        background-color: deepskyblue;
                        border-radius: 5px;
                        width: 900px;
                        height: 65px;
                    }

        .than .mid2 {
            margin-top: 30px;
        }

            .than .mid2 h1 {
                color: yellow;
                font-size: 22px;
            }

            .than .mid2 p {
                color: #899ead;
                font-size: 18px;
            }

        .than .mid3 {
            width: 900px;
            height: 430px;
            margin-top: 50px;
        }

            .than .mid3 h1 {
                color: yellow;
                font-size: 20px;
                margin-bottom: 5px;
            }

            .than .mid3 .mot {
                width: 216px;
                height: 300px;
                float: left;
            }

                .than .mid3 .mot img {
                    width: 216px;
                    height: 300px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
                }

                .than .mid3 .mot a {
                    color: #11e2d1;
                    font-size: 21px;
                    text-decoration: none;
                }

                .than .mid3 .mot p {
                    color: white;
                    font-size: 15px;
                    padding-top: 2px;
                }

                .than .mid3 .mot a u {
                    color: white;
                    font-size: 15px;
                }

            .than .mid3 .hai {
                width: 216px;
                height: 300px;
                margin-left: 12px;
                float: left;
            }

                .than .mid3 .hai img {
                    width: 216px;
                    height: 300px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
                }

                .than .mid3 .hai a {
                    color: #11e2d1;
                    font-size: 21px;
                    text-decoration: none;
                }

                .than .mid3 .hai p {
                    color: white;
                    font-size: 15px;
                    padding-top: 2px;
                }

                .than .mid3 .hai a u {
                    color: white;
                    font-size: 15px;
                }

            .than .mid3 .ba {
                width: 216px;
                height: 300px;
                margin-left: 12px;
                float: left;
            }

                .than .mid3 .ba img {
                    width: 216px;
                    height: 300px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
                }

                .than .mid3 .ba a {
                    color: #11e2d1;
                    font-size: 21px;
                    text-decoration: none;
                }

                .than .mid3 .ba p {
                    color: white;
                    font-size: 15px;
                    padding-top: 2px;
                }

                .than .mid3 .ba a u {
                    color: white;
                    font-size: 15px;
                }

            .than .mid3 .bon {
                width: 216px;
                height: 300px;
                margin-left: 12px;
                float: left;
            }

                .than .mid3 .bon img {
                    width: 216px;
                    height: 300px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
                }

                .than .mid3 .bon a {
                    color: #11e2d1;
                    font-size: 21px;
                    text-decoration: none;
                }

                .than .mid3 .bon p {
                    color: white;
                    font-size: 15px;
                    padding-top: 2px;
                }

                .than .mid3 .bon a u {
                    color: white;
                    font-size: 15px;
                }

        .than .mid4 {
            width: 900px;
            height: 368px;
            margin-top: 40px;
        }

            .than .mid4 .mot {
                width: 216px;
                height: 300px;
                float: left;
            }

                .than .mid4 .mot img {
                    width: 216px;
                    height: 300px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
                }

                .than .mid4 .mot a {
                    color: #11e2d1;
                    font-size: 21px;
                    text-decoration: none;
                }

                .than .mid4 .mot p {
                    color: white;
                    font-size: 15px;
                    padding-top: 2px;
                }

                .than .mid4 .mot a u {
                    color: white;
                    font-size: 15px;
                }

            .than .mid4 .hai {
                width: 216px;
                height: 300px;
                margin-left: 12px;
                float: left;
            }

                .than .mid4 .hai img {
                    width: 216px;
                    height: 300px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
                }

                .than .mid4 .hai a {
                    color: #11e2d1;
                    font-size: 21px;
                    text-decoration: none;
                }

                .than .mid4 .hai p {
                    color: white;
                    font-size: 15px;
                    padding-top: 2px;
                }

                .than .mid4 .hai a u {
                    color: white;
                    font-size: 15px;
                }

            .than .mid4 .ba {
                width: 216px;
                height: 300px;
                margin-left: 12px;
                float: left;
            }

                .than .mid4 .ba img {
                    width: 216px;
                    height: 300px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
                }

                .than .mid4 .ba a {
                    color: #11e2d1;
                    font-size: 21px;
                    text-decoration: none;
                }

                .than .mid4 .ba p {
                    color: white;
                    font-size: 15px;
                    padding-top: 2px;
                }

                .than .mid4 .ba a u {
                    color: white;
                    font-size: 15px;
                }

            .than .mid4 .bon {
                width: 216px;
                height: 300px;
                margin-left: 12px;
                float: left;
            }

                .than .mid4 .bon img {
                    width: 216px;
                    height: 300px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
                }

                .than .mid4 .bon a {
                    color: #11e2d1;
                    font-size: 21px;
                    text-decoration: none;
                }

                .than .mid4 .bon p {
                    color: white;
                    font-size: 15px;
                    padding-top: 2px;
                }

                .than .mid4 .bon a u {
                    color: white;
                    font-size: 15px;
                }

        .than .rightthan {
            width: 280px;
            margin-left: 20px;
            float: left;
        }

            .than .rightthan .top {
                width: 280px;
                height: 170px;
                
            }
                .than .rightthan .top .left {
                    float: left;
                }
                .than .rightthan .top .left .ba img {
                    width: 100px;
                    height: 130px;
                }
                .than .rightthan .top .left .bon img {
                    width: 40px;
                    height: 40px;
                }
                .rightthan .top .left .ba {
                        overflow: hidden;
                    }
                    .rightthan .top .left .ba img {
                        display: block;
                    }
                    .rightthan .top .left a{
                        position: relative;
                        display: block;
                    }
                    .rightthan .top .left:hover img {
                        transform: scale(1.1);
                    }
                    .rightthan .top .left .bon{
                        position: absolute;
                        left: 30px;
                        bottom: 45px;
                        opacity: 0;
                    }
                    .rightthan .top .left:hover .bon{
                        opacity: 1;
                    }
                .than .rightthan .top .right {
                    width: 160px;
                    height: 130px;
                    margin-left: 20px;
                    float: left;
                }

                .than .rightthan .top .right h1 {
                    color: red;
                    font-size: 25px;
                }

                .than .rightthan .top .right hr {
                    margin-top: 2px;
                }

                .than .rightthan .top .right a {
                    color: cyan;
                    text-decoration: none;
                    font-size: 17px;
                    margin-left: 5px;
                }

                    .than .rightthan .top .right a u {
                        color: white;
                        font-size: 15px;
                    }

            .than .rightthan .mid1 {
                width: 285px;
                height: 130px;
                margin-top: 30px;
            }

                .than .rightthan .mid1 .left {
                    width: 100px;
                    height: 130px;
                    float: left;
                }

                .than .rightthan .mid1 .right {
                    width: 160px;
                    height: 130px;
                    margin-left: 20px;
                    float: left;
                }

                .than .rightthan .mid1 .left img {
                    width: 100px;
                    height: 130px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
                }

                .than .rightthan .mid1 .right h1 {
                    color: orange;
                    font-size: 25px;
                }

                .than .rightthan .mid1 .right hr {
                    margin-top: 2px;
                }

                .than .rightthan .mid1 .right a {
                    color: cyan;
                    text-decoration: none;
                    font-size: 17px;
                    margin-left: 5px;
                }

                    .than .rightthan .mid1 .right a u {
                        color: white;
                        font-size: 15px;
                    }

            .than .rightthan .mid2 {
                width: 285px;
                height: 130px;
                margin-top: 30px;
            }

                .than .rightthan .mid2 .left {
                    width: 100px;
                    height: 130px;
                    float: left;
                }

                .than .rightthan .mid2 .right {
                    width: 160px;
                    height: 130px;
                    margin-left: 20px;
                    float: left;
                }

                .than .rightthan .mid2 .left img {
                    width: 100px;
                    height: 130px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
                }

                .than .rightthan .mid2 .right h1 {
                    color: lawngreen;
                    font-size: 25px;
                }

                .than .rightthan .mid2 .right hr {
                    margin-top: 2px;
                }

                .than .rightthan .mid2 .right a {
                    color: cyan;
                    text-decoration: none;
                    font-size: 17px;
                    margin-left: 5px;
                }

                    .than .rightthan .mid2 .right a u {
                        color: white;
                        font-size: 15px;
                    }

            .than .rightthan .mid3 {
                width: 285px;
                height: 130px;
                margin-top: 30px;
            }

                .than .rightthan .mid3 .left {
                    width: 100px;
                    height: 130px;
                    float: left;
                }

                .than .rightthan .mid3 .right {
                    width: 160px;
                    height: 130px;
                    margin-left: 20px;
                    float: left;
                }

                .than .rightthan .mid3 .left img {
                    width: 100px;
                    height: 130px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
                }

                .than .rightthan .mid3 .right h1 {
                    color: deepskyblue;
                    font-size: 25px;
                }

                .than .rightthan .mid3 .right hr {
                    margin-top: 2px;
                }

                .than .rightthan .mid3 .right a {
                    color: cyan;
                    text-decoration: none;
                    font-size: 17px;
                    margin-left: 5px;
                }

                    .than .rightthan .mid3 .right a u {
                        color: white;
                        font-size: 15px;
                    }

            .than .rightthan .mid4 {
                width: 285px;
                height: 130px;
                margin-top: 30px;
            }

                .than .rightthan .mid4 .left {
                    width: 100px;
                    height: 130px;
                    float: left;
                }

                .than .rightthan .mid4 .right {
                    width: 160px;
                    height: 130px;
                    margin-left: 20px;
                    float: left;
                }

                .than .rightthan .mid4 .left img {
                    width: 100px;
                    height: 130px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
                }

                .than .rightthan .mid4 .right h1 {
                    color: blueviolet;
                    font-size: 25px;
                }

                .than .rightthan .mid4 .right hr {
                    margin-top: 2px;
                }

                .than .rightthan .mid4 .right a {
                    color: cyan;
                    text-decoration: none;
                    font-size: 17px;
                    margin-left: 5px;
                }

                    .than .rightthan .mid4 .right a u {
                        color: white;
                        font-size: 15px;
                    }

            .than .rightthan .mid5 {
                width: 285px;
                height: 130px;
                margin-top: 30px;
            }

                .than .rightthan .mid5 .left {
                    width: 100px;
                    height: 130px;
                    float: left;
                }

                .than .rightthan .mid5 .right {
                    width: 160px;
                    height: 130px;
                    margin-left: 20px;
                    float: left;
                }

                .than .rightthan .mid5 .left img {
                    width: 100px;
                    height: 130px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
                }

                .than .rightthan .mid5 .right h1 {
                    color: gray;
                    font-size: 25px;
                }

                .than .rightthan .mid5 .right hr {
                    margin-top: 2px;
                }

                .than .rightthan .mid5 .right a {
                    color: cyan;
                    text-decoration: none;
                    font-size: 17px;
                    margin-left: 5px;
                }

                    .than .rightthan .mid5 .right a u {
                        color: white;
                        font-size: 15px;
                    }

            .than .rightthan .mid6 {
                margin-top: 60px;
                text-align: center;
                margin-bottom: 30px;
            }

                .than .rightthan .mid6 a {
                    color: yellow;
                    font-size: 22px;
                    text-decoration: none;
                }

            .than .rightthan .mid7 {
                width: 285px;
                height: 130px;
                margin-top: 30px;
            }

                .than .rightthan .mid7 .left {
                    width: 100px;
                    height: 130px;
                    float: left;
                }

                .than .rightthan .mid7 .right {
                    width: 160px;
                    height: 130px;
                    margin-left: 20px;
                    float: left;
                }

                .than .rightthan .mid7 .left img {
                    width: 100px;
                    height: 130px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
                }

                .than .rightthan .mid7 .right a {
                    color: cyan;
                    text-decoration: none;
                    font-size: 19px;
                    margin-left: 5px;
                }

                    .than .rightthan .mid7 .right a u {
                        color: white;
                        font-size: 15px;
                    }

                .than .rightthan .mid7 .right p {
                    color: white;
                    font-size: 14px;
                    margin-left: 5px;
                }

            .than .rightthan .mid8 {
                width: 285px;
                height: 130px;
                margin-top: 30px;
            }

                .than .rightthan .mid8 .left {
                    width: 100px;
                    height: 130px;
                    float: left;
                }

                .than .rightthan .mid8 .right {
                    width: 160px;
                    height: 130px;
                    margin-left: 20px;
                    float: left;
                }

                .than .rightthan .mid8 .left img {
                    width: 100px;
                    height: 130px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
                }

                .than .rightthan .mid8 .right a {
                    color: cyan;
                    text-decoration: none;
                    font-size: 19px;
                    margin-left: 5px;
                }

                .than .rightthan .mid8 .right p {
                    color: white;
                    font-size: 14px;
                    margin-left: 5px;
                }

                .than .rightthan .mid8 .right a u {
                    color: white;
                    font-size: 15px;
                }

            .than .rightthan .mid9 {
                width: 285px;
                height: 130px;
                margin-top: 30px;
            }

                .than .rightthan .mid9 .left {
                    width: 100px;
                    height: 130px;
                    float: left;
                }

                .than .rightthan .mid9 .right {
                    width: 160px;
                    height: 130px;
                    margin-left: 20px;
                    float: left;
                }

                .than .rightthan .mid9 .left img {
                    width: 100px;
                    height: 130px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
                }

                .than .rightthan .mid9 .right a {
                    color: cyan;
                    text-decoration: none;
                    font-size: 19px;
                    margin-left: 5px;
                }

                    .than .rightthan .mid9 .right a u {
                        color: white;
                        font-size: 15px;
                    }

                .than .rightthan .mid9 .right p {
                    color: white;
                    font-size: 14px;
                    margin-left: 5px;
                }

            .than .rightthan .mid10 {
                width: 285px;
                height: 130px;
                margin-top: 30px;
            }

                .than .rightthan .mid10 .left {
                    width: 100px;
                    height: 130px;
                    float: left;
                }

                .than .rightthan .mid10 .right {
                    width: 160px;
                    height: 130px;
                    margin-left: 20px;
                    float: left;
                }

                .than .rightthan .mid10 .left img {
                    width: 100px;
                    height: 130px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
                }

                .than .rightthan .mid10 .right a {
                    color: cyan;
                    text-decoration: none;
                    font-size: 19px;
                    margin-left: 5px;
                }

                .than .rightthan .mid10 .right p {
                    color: white;
                    font-size: 14px;
                    margin-left: 5px;
                }

                .than .rightthan .mid10 .right a u {
                    color: white;
                    font-size: 15px;
                }


</style>
