<?php
    include 'layout/mo.php';
    include 'admin/db.php';
    if (isset($_GET['ID'])) 
    {
        $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:12;
        $current_page = !empty($_GET['page'])?$_GET['page']:1;
        $offset = ($current_page - 1) * $item_per_page;
        $id = $_GET['ID'];
        $sql = "SELECT * FROM phim join theloai on phim.TheLoai = theloai.ID_TheLoai WHERE TheLoai=$id limit ".$item_per_page." offset ".$offset."";
        $phim = mysqli_query($conn, $sql);  
        $phimm =  mysqli_query($conn, "SELECT * FROM phim WHERE TheLoai=$id" );
        $phimm = $phimm->num_rows;
        $totalPages = ceil($phimm / $item_per_page);
    }
    else{
        header('location: home.php');   
    }
    $sql = "SELECT * FROM theloai WHERE ID_TheLoai = $id";
    $tl = mysqli_query($conn, $sql);
    $tentl = mysqli_fetch_assoc($tl);
    
?>

<div class="than">
    <div class="left">
        <div class="menu">
            <div class="l"><b style="font-size: 30px; color: #f3ff50fd;">Phim <?=$tentl['TenTheLoai']?></b></div>
        </div>
        <div class="anhĐC">
            <?php
                while($row = mysqli_fetch_assoc($phim)){
            ?>
                <div class="mot">
                    <div class="hai">
                        <a href="chitietphim.php?ID=<?=$row['ID']?>">
                            <div class="ba"><img src="admin/img/<?=$row['Anh']?>"/></div>
                            <div class="bon"><img src="img/film.png" alt=""></div>
                        </a>
                    </div>
                    <div class="product_title"> <a href="chitietphim.php?ID=<?=$row['ID']?>"> <?=$row['TenPhim']?></a></div>
                    <div class="product"><a><?php echo $row['TenTheLoai'];?></a></div>
                    <div class="products">[HD-Vietsub]</div>
                </div>
            <?php }
            ?>
        </div>
        <?php
            include 'pagetl.php';
        ?>
    </div>
    <div class="right">
        <b style="color: #f3ff50fd;font-size: 30px;">Phim xem nhiều</b>
        <div class="top">
            <?php
                $sql = "SELECT * FROM phim ORDER BY LuotXem desc limit 10";
                $phims = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($phims)){
            ?>
            <div class="topp">
                <img style="padding: 5px;float: left;" src="img/iconfilm.png" alt="">
                <a href="chitietphim.php?ID=<?=$row['ID']?>"> <?=$row['TenPhim']?></a><br> 
                <p style= "color: #666;font-size: 11px;"> Lượt xem: <?=$row['LuotXem']?></p> 
            </div>
            <?php }
            ?>
        </div>
        <b style="color: #f3ff50fd;font-size: 18px;"> Hồ Sơ Diễn Viên</b>
        <div class="mid2">
            <?php
                $sql = "SELECT * FROM dienvien limit 2";
                $dv = mysqli_query($conn, $sql);
                while($row_dv = mysqli_fetch_assoc($dv)){
            ?>
                <div class="top1">
                    <a href="chitietdienvien.php?ID=<?=$row_dv['ID_DienVien']?>"> <img src="admin/img/<?=$row_dv['Anh_DV']?>"/></a>
                    <a style="text-decoration: none; font-size: 20px; padding-left: 17px;color: #ffffff;" href="chitietdienvien.php?ID=<?=$row_dv['ID_DienVien']?>"> <?=$row_dv['TenDienVien']?></a>
                </div>
            <?php }
            ?>
        </div>
    </div>
</div>

<?php
    include 'layout/ket.php';
?>

<style>
    .than {
        width: 1200px;
        margin-top: 20px;
        display: flex;
        flex-wrap: wrap;
    }
    .than .left {
            width: 850px;
            height: auto;
            float: left;
        }
                .than .left .menu {
                    width: 850px;
                    height: 40px;
                }

                    .than .left .menu .l {
                        padding-left: 0px;
                        width: 750px;
                        height: 40px;
                        float: left;
                    }
                .than .left .anhĐC {
                    width: 850px;
                    display: flex;
                    flex-wrap: wrap;
                }
                .than .left .anhĐC .mot {
                        padding: 15px;
                        width: 208px;
                        height: 380px;
                        float: left;
                        margin-left: 2px;
                    }
                    .mot .hai .ba img{
                        width: 178px;
                        height: 250px;
                    }
                    .mot .hai .ba {
                        overflow: hidden;
                    }
                    .mot .hai .ba img {
                        display: block;
                    }
                    .mot .hai a{
                        position: relative;
                        display: block;
                    }
                    .mot .hai:hover img {
                        transform: scale(1.1);
                    }
                    .mot .hai .bon{
                        position: absolute;
                        left: 57px;
                        bottom: 93px;
                        opacity: 0;
                    }
                    .mot .hai:hover .bon{
                        opacity: 1;
                    }
                        .than .left .anhĐC .mot .product_title a {
                            text-decoration: none;
                            color: yellow;
                            font-size: 18px;
                        }
                        .than .left .anhĐC .mot .product a
                        {
                            text-decoration: none;
                            color:white;
                            font-size: 14px;
                        }
                        .than .left .anhĐC .mot .products 
                        {
                            color: white;
                            font-size: 14px;
                        }
        .than .right {
            width: 300px;
            height: auto;
            float: left;
            margin-left: 50px;
        }

            .than .right .top {
                width: 300px;
                height: auto;
                background-color: #0c2738;
                margin-top: 9px;
                box-shadow: 0 2px 10px 0 #000000;
            }
            .than .right .top .topp {
                height: 55px;
                padding: 6px;
                border-bottom: 1px solid #373737;
            }
            .than .right .top .topp a {
                text-decoration: none; 
                color: white;
                font-size: 16px;
            }
            .than .right .top .topp a:hover {
                color: yellow;
            }
            .than .right .mid2 {
                width: 300px;
                height: auto;
            }

            .than .right .mid2 .top1 {
                    width: 300px;
                    height: 450px;
                    margin-top: 2px;
                    margin-left: 0px;
                }
                .than .right .mid2 .top1 img {
                    width: 300px;
                    height: 400px;
                    margin-top: 5px;
                }

                .than .right .mid2 .mid {
                    width: 250px;
                    height: 270px;
                }

                    .than .right .mid2 .mid img {
                        width: 208px;
                        height: 280px;
                        margin-left: 9px;
                        border-radius: 5%;
                        -moz-border-radius: 5%;
                        -webkit-border-radius: 5%;
                        margin-top: 5px;
                    }

                .than .right .mid2 .bottom {
                    width: 250px;
                    height: 270px;
                }

                    .than .right .mid2 .bottom img {
                        width: 208px;
                        height: 280px;
                        margin-top: 55px;
                        margin-left: 9px;
                        border-radius: 5%;
                        -moz-border-radius: 5%;
                        -webkit-border-radius: 5%;
                    }

            .than .right .mid3 {
                width: 280px;
                height: 1000px;
                margin-top: 550px;
            }

                .than .right .mid3 h1 {
                    color: yellow;
                    font-size: 22px;
                }

                .than .right .mid3 .top {
                    width: 280px;
                    height: 130px;
                }

                    .than .right .mid3 .top .left {
                        width: 100px;
                        height: 130px;
                        float: left;
                    }

                        .than .right .mid3 .top .left img {
                            width: 100px;
                            height: 130px;
                            border-radius: 3%;
                            -moz-border-radius: 3%;
                            -webkit-border-radius: 3%;
                            margin-left: 0px;
                            margin-top: 0px;
                        }

                    .than .right .mid3 .top .right {
                        width: 160px;
                        height: 130px;
                        margin-left: 20px;
                        float: left;
                        margin-top: -5px;
                    }

                        .than .right .mid3 .top .right b {
                            color: white;
                            font-size: 15px;
                        }

                        .than .right .mid3 .top .right a {
                            text-decoration: none;
                            color: #11e2d1;
                            font-size: 19px;
                        }

                .than .right .mid3 .mid1 {
                    width: 280px;
                    height: 130px;
                    margin-top: 30px;
                }

                    .than .right .mid3 .mid1 .left {
                        width: 100px;
                        height: 130px;
                        float: left;
                    }

                        .than .right .mid3 .mid1 .left img {
                            width: 100px;
                            height: 130px;
                            border-radius: 3%;
                            -moz-border-radius: 3%;
                            -webkit-border-radius: 3%;
                        }

                    .than .right .mid3 .mid1 .right {
                        width: 160px;
                        height: 130px;
                        margin-left: 20px;
                        float: left;
                        margin-top: 0px;
                    }

                        .than .right .mid3 .mid1 .right b {
                            color: white;
                            font-size: 15px;
                        }

                        .than .right .mid3 .mid1 .right a {
                            text-decoration: none;
                            color: #11e2d1;
                            font-size: 19px;
                        }

                .than .right .mid3 .mid2 {
                    width: 280px;
                    height: 130px;
                    margin-top: 30px;
                }

                    .than .right .mid3 .mid2 .left {
                        width: 100px;
                        height: 130px;
                        float: left;
                    }

                        .than .right .mid3 .mid2 .left img {
                            width: 100px;
                            height: 130px;
                            border-radius: 3%;
                            -moz-border-radius: 3%;
                            -webkit-border-radius: 3%;
                        }

                    .than .right .mid3 .mid2 .right {
                        width: 160px;
                        height: 130px;
                        margin-left: 20px;
                        float: left;
                        margin-top: 0px;
                    }

                        .than .right .mid3 .mid2 .right b {
                            color: white;
                            font-size: 15px;
                        }

                        .than .right .mid3 .mid2 .right a {
                            text-decoration: none;
                            color: #11e2d1;
                            font-size: 19px;
                        }

                .than .right .mid3 .mid3 {
                    width: 280px;
                    height: 130px;
                    margin-top: 30px;
                }

                    .than .right .mid3 .mid3 .left {
                        width: 100px;
                        height: 130px;
                        float: left;
                    }

                        .than .right .mid3 .mid3 .left img {
                            width: 100px;
                            height: 130px;
                            border-radius: 3%;
                            -moz-border-radius: 3%;
                            -webkit-border-radius: 3%;
                        }

                    .than .right .mid3 .mid3 .right {
                        width: 160px;
                        height: 130px;
                        margin-left: 20px;
                        float: left;
                        margin-top: 0px;
                    }

                        .than .right .mid3 .mid3 .right b {
                            color: white;
                            font-size: 15px;
                        }

                        .than .right .mid3 .mid3 .right a {
                            text-decoration: none;
                            color: #11e2d1;
                            font-size: 19px;
                        }

                .than .right .mid3 .mid4 {
                    width: 280px;
                    height: 130px;
                    margin-top: 30px;
                }

                    .than .right .mid3 .mid4 .left {
                        width: 100px;
                        height: 130px;
                        float: left;
                    }

                        .than .right .mid3 .mid4 .left img {
                            width: 100px;
                            height: 130px;
                            border-radius: 3%;
                            -moz-border-radius: 3%;
                            -webkit-border-radius: 3%;
                        }

                    .than .right .mid3 .mid4 .right {
                        width: 160px;
                        height: 130px;
                        margin-left: 20px;
                        float: left;
                        margin-top: 0px;
                    }

                        .than .right .mid3 .mid4 .right b {
                            color: white;
                            font-size: 15px;
                        }

                        .than .right .mid3 .mid4 .right a {
                            text-decoration: none;
                            color: #11e2d1;
                            font-size: 19px;
                        }

                .than .right .mid3 .mid5 {
                    width: 280px;
                    height: 130px;
                    margin-top: 30px;
                }

                    .than .right .mid3 .mid5 .left {
                        width: 100px;
                        height: 130px;
                        float: left;
                    }

                        .than .right .mid3 .mid5 .left img {
                            width: 100px;
                            height: 130px;
                            border-radius: 3%;
                            -moz-border-radius: 3%;
                            -webkit-border-radius: 3%;
                        }

                    .than .right .mid3 .mid5 .right {
                        width: 160px;
                        height: 130px;
                        margin-left: 20px;
                        float: left;
                        margin-top: 0px;
                    }

                        .than .right .mid3 .mid5 .right b {
                            color: white;
                            font-size: 15px;
                        }

                        .than .right .mid3 .mid5 .right a {
                            text-decoration: none;
                            color: #11e2d1;
                            font-size: 19px;
                        }

                .than .right .mid3 .mid6 {
                    width: 280px;
                    height: 35px;
                    background-color: dodgerblue;
                    margin-top: 30px;
                    text-align: center;
                    padding-top: 5px;
                    border-radius: 4px;
                }

                    .than .right .mid3 .mid6 a {
                        color: white;
                        font-size: 20px;
                        text-decoration: none;
                    }

                    .than .right .mid3 .mid6:hover {
                        background-color: mediumblue;
                    }
</style>