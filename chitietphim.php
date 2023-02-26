<?php
    include 'layout/mo.php';
    include 'admin/db.php';
    if (isset($_GET['ID'])) $id = $_GET['ID'];
    $sql = "SELECT * FROM phim WHERE ID = $id";
    $phim = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($phim);
    
    $theloai = $row['TheLoai'];
    $sql = "SELECT * FROM theloai WHERE ID_TheLoai = $theloai";
    $query= mysqli_query($conn, $sql);
    $row_tl=mysqli_fetch_assoc($query);

    $quocgia = $row['QuocGia'];
    $sql = "SELECT * FROM quocgia WHERE ID_QuocGia = $quocgia ";
    $query= mysqli_query($conn, $sql);
    $row_qg=mysqli_fetch_assoc($query);

    $daodien = $row['DaoDien'];
    $sql = "SELECT * FROM daodien WHERE ID_DaoDien = $daodien  ";
    $query= mysqli_query($conn, $sql);
    $row_dd=mysqli_fetch_assoc($query);

    $dienvien = $row['DienVien'];
    $sql = "SELECT * FROM dienvien WHERE ID_DienVien =$dienvien";
    $query= mysqli_query($conn, $sql);
    $row_dv=mysqli_fetch_assoc($query);

    $dienvien2 = $row['DienVien2'];
    $sql = "SELECT * FROM dienvien2 WHERE ID_DienVien2 =$dienvien2";
    $query= mysqli_query($conn, $sql);
    $row_dv2=mysqli_fetch_assoc($query);

    $sql = "UPDATE phim SET LuotXem=LuotXem+1 WHERE ID = $id";
    if(mysqli_query($conn, $sql))
?>

<div class="container">
    <div class="title">
        <ul>
            <li><a href="home.php" style="color:yellow;">Trang Chủ /</a></li>
            <li><a href="theloai_phim.php?ID=<?=$row_tl['ID_TheLoai']?>" style="color:yellow;"><?=$row_tl['TenTheLoai'];?> /</a></li>
            <li><a href="" style="color: whitesmoke;"> <?=$row['TenPhim']?></a></li>
        </ul>
    </div>
</div>
<div class="container1">
    <div class="left">
        <div class="poster">
            <img src="admin/img/<?=$row['Anh']?>"/> 
        </div>
        <div class="ptright">
            <div class="topr">
                <b><?=$row['TenPhim']?></b>
            </div>
            <div class="btnr">
                <p>Thời lượng: <?=$row['ThoiLuong']?></p>
                <p>Số tập: <?=$row['SoTap']?></p>
                <p>Quốc gia: <a style="text-decoration:none; color:white;" href="quocgia_phim.php?ID=<?=$row_qg['ID_QuocGia']?>"><?=$row_qg['TenQuocGia']?></a></p>
                <p>Năm sản xuất: <?=$row['NamSanXuat']?></p>
                <p>Ngày công chiếu: <?=$row['NgayCongChieu']?></p>
                <p>Thể loại: <a style="text-decoration:none; color:white;" href="theloai_phim.php?ID=<?=$row_tl['ID_TheLoai']?>"><?=$row_tl['TenTheLoai']?></a></p>
                <p>Đạo diễn: <a><?=$row_dd['TenDaoDien']?></a></p>
                <p>Tên diễn viên:
                    <a href="chitietdienvien.php?ID=<?=$row_dv['ID_DienVien']?>"><?=$row_dv['TenDienVien'];?></a>,
                    <a href="chitietdienvien2.php?ID=<?=$row_dv2['ID_DienVien2']?>"><?=$row_dv2['TenDienVien2']?></a>
                </p>
                <p>Lượt xem: <?=$row['LuotXem']?></p>
            </div>
        </div>
    </div>    
</div>
<div class="container2">
    <div class="review">
        <p>Review nhanh về phim <?=$row['TenPhim']?></p>
    </div>
    <div class="NDphim">
        <h1>Nội dung phim</h1>
        <p><?=$row['MoTa']?></p>
    </div>
    <div class="trailer">
        <p>Xem phim: <?=$row['TenPhim']?></p>
    </div>
    <div class="trailerphim">
        <video id="videos" width="1200px" height="500px" controls>
            <source src="admin/video/<?=$row['Video']?>" >
        </video>
    </div>
</div>

<?php
    include 'slider2.php';
    include 'layout/ket.php';
?>
<style>
    .container {
        width: 1200px;
        height: 40px;
        background-color: #0c2738;
        margin-top: 20px;
        border: 1px solid #081b27;
        border-radius: 5px;
    }

        .container .title ul li {
            display: block;
            list-style: none;
            float: left;
            text-decoration: none;
        }

            .container .title ul li a {
                text-decoration: none;
                line-height: 20px;
                padding: 10px 50px 10px 10px;
                font-size: 23px;
                margin-left: -40px;
            }

    .container1 {
        width: 1200px;
        margin-top: 10px;
        display: flex;
        flex-wrap: wrap;
    }

        .container1 .left {
            width: 1200px;
            margin-top: 10px;
            display: flex;
            flex-wrap: wrap;
        }

            .container1 .left .poster {
                width: 400px;
            }

                    .container1 .left .poster img {
                        height: 500px;
                        width: 400px;
                        border-radius: 5%;
                        -moz-border-radius: 5%;
                        -webkit-border-radius: 5%;
                    }
                    .container1 a {
                        padding: 13px 13px 13px 13px;
                    }
        .container1 .ptright {
            width: 750px;
            margin-left: 50px;
            display: flex;
            flex-wrap: wrap;
        }
            .container1 .ptright .topr {
                width: 750px;
                color: white;
 
            }
                .container1 .ptright .topr b {
                    font-size: 65px;
                }

                .container1 .ptright .btnr p {
                    color: white;
                    font-size: 20px;
                }
    .container2{
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
        margin-top: 70px;
    }
    .review p {
        color: yellow;
        font-size: 28px;
        text-align: center;
    }

    .NDphim h1 {
        color: #ffffff;
        font-size: 30px;
        margin-top: 42px;
    }

    .NDphim p {
        color: #899ead;
        font-size: 19px;
    }

    .anhND img {
        width: 700px;
        height: 600px;
        margin-top: 40px;
        border-radius: 2%;
        -moz-border-radius: 2%;
        -webkit-border-radius: 2%;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .DVchinh h1 {
        color: #ffffff;
        font-size: 30px;
        margin-top: 60px;
        text-align: center;
    }

    .DVchinh .tranthanh h4 {
        color: #899ead;
        font-size: 23px;
    }

    .DVchinh .tranthanh p {
        color: #899ead;
        font-size: 19px;
    }

    .DVchinh .tuantran h4 {
        color: #899ead;
        font-size: 23px;
        margin-top: 10px;
    }

    .DVchinh .tuantran p {
        color: #899ead;
        font-size: 19px;
    }

    .gachngang hr {
        margin-top: 50px;
        margin-left: 159px;
    }

    .trailer p {
        color: yellow;
        font-size: 25px;
        margin-top: 40px;
        margin-left: 155px;
    }

    .trailerphim video {
        width: 1200px;
        height: 500px;
        margin-top: 20px;
        border-radius: 2%;
        -moz-border-radius: 2%;
        -webkit-border-radius: 2%;
    }
            
</style>

