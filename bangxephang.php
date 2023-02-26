<?php
    include 'layout/mo.php';
    include 'admin/db.php';
    $sql = "SELECT * FROM phim ORDER BY LuotXem desc limit 10";
    $phim = mysqli_query($conn, $sql);
?>

<div class="container">
    <div class="title">
        <ul style="margin-top:-7px;">
            <li><a href="home.php" style="line-height: 10px;" title="Trang Chủ" style="color:yellow";>Trang Chủ /</a></li>
            <li><a href="" style="line-height: 10px;" title="Bảng xếp hạng" style="color:yellow;">Bảng xếp hạng</a></li>
        </ul>
    </div>
</div>
<div class="trai">
    <a href="#">Top 10 phim có lượt xem cao nhất</a>
</div>
<div class="phai">
    <a href="#">Trong tuần</a>
</div>

<div class="than">
    <div class="leftthan">
        <div class="top">
            <?php
                $index = 0;
                while($row = mysqli_fetch_assoc($phim)){
                $index ++;
                $id = $row['TheLoai'];
                $sql = "SELECT * FROM theloai WHERE ID_TheLoai = $id";
                $query =mysqli_query($conn, $sql);
                $theloai = mysqli_fetch_assoc($query);
            ?>
            <div class="mot">
                <div class="hai">
                        <a href="chitietphim.php?ID=<?=$row['ID']?>">
                            <div class="ba"><img src="admin/img/<?=$row['Anh']?>"/></div>
                            <div class="bon"><img src="img/film.png" alt=""></div>
                        </a>
                </div>
                <div class="right1">
                    <h1>Top <?=$index?></h1>
                    <div class="gachngang">
                        <hr width="80px" size="3px" color="red" />
                    </div>
                    <a href="chitietphim.php?ID=<?=$row['ID']?>"> <?=$row['TenPhim']?></a><br> 
                    <p><?=$row['LuotXem']?> lượt xem</p> 
                    <a href="theloai_phim.php?ID=<?=$theloai['ID_TheLoai']?>"><u>Phim <?=$theloai['TenTheLoai']?></u></a>
                </div>
            </div>
            <?php }
            ?>
        </div>
    </div>
    <div class="rightthan">
        <div class="top">
            <div class="left">
                <img src="img/xep hang ngay 1.jpg" alt="">
            </div>
            <div class="right">
                <h1>Top 1</h1>
                <div class="gachngang">
                    <hr width="63px" size="3px" color="red" />
                </div>
                <a href="#">Có điên mới yêu</a> <br> 
                <a href="#"><u>Phim tình cảm</u></a>
            </div>
        </div>
        <div class="mid1">
            <div class="left">
                <img src="img/xep hang ngay 2.jpg" alt="">
            </div>
            <div class="right">
                <h1>Top 2</h1>
                <div class="gachngang">
                    <hr width="63px" size="3px" color="orange" />
                </div>
                <a href="#">Kẻ xấu đẹp trai</a> <br> 
                <a href="#"><u>Phim hoạt hình</u></a>
            </div>
        </div>
        <div class="mid2">
            <div class="left">
                <img src="img/xep hang ngay 3.jpg" alt="">
            </div>
            <div class="right">
                <h1>Top 3</h1>
                <div class="gachngang">
                    <hr width="63px" size="3px" color="lawngreen" />
                </div>
                <a href="#">Học làm người nga</a> <br> 
                <a href="#"><u>Phim hài lãng mạn</u></a>
            </div>
        </div>
        <div class="mid3">
            <div class="left">
                <img src="img/xep hang ngay 4.jpeg" alt="">
            </div>
            <div class="right">
                <h1>Top 4</h1>
                <div class="gachngang">
                    <hr width="63px" size="3px" color="deepskyblue" />
                </div>
                <a href="#">Cuộc Chiến Produc</a> <br> 
                <a href="#"><u>Phim hồi hộp - gây cấn</u></a>
            </div>
        </div>
        <div class="mid4">
            <div class="left">
                <img src="img/xep hang ngay 5.jpg" alt="">
            </div>
            <div class="right">
                <h1>Top 5</h1>
                <div class="gachngang">
                    <hr width="63px" size="3px" color="blueviolet" />
                </div>
                <a href="#">Vượt qua bóng tối</a> <br> 
                <a href="#"><u>Phim tội phạm</u></a>
            </div>
        </div>
        <div class="mid5">
            <div class="left">
                <img src="img/xep hang ngay 6.jpg" alt="">
            </div>
            <div class="right">
                <h1>Top 6</h1>
                <div class="gachngang">
                    <hr width="63px" size="3px" color="gray" />
                </div>
                <a href="#">Munou Na Nana</a> <br> 
                <a href="#"><u>Phim bộ</u></a>
            </div>
        </div>
        <div class="mid6">
            <div class="left">
                <img src="img/xep hang ngay 7.jpg" alt="">
            </div>
            <div class="right">
                <h1>Top 7</h1>
                <div class="gachngang">
                    <hr width="63px" size="3px" color="gray" />
                </div>
                <a href="#">Lưỡi gươm diệt quỷ</a> <br> 
                <a href="#"><u>Phim hoạt hình</u></a>
            </div>
        </div>
        <div class="mid7">
            <div class="left">
                <img src="img/xep hang ngay 8.jpg" alt="">
            </div>
            <div class="right">
                <h1>Top 8</h1>
                <div class="gachngang">
                    <hr width="63px" size="3px" color="gray" />
                </div>
                <a href="#">Hung thần trắng</a> <br> 
                <a href="#"><u>Phim kinh dị</u></a>
            </div>
        </div>
        <div class="mid8">
            <div class="left">
                <img src="img/xep hang ngay 9.jpg" alt="">
            </div>
            <div class="right">
                <h1>Top 9</h1>
                <div class="gachngang">
                    <hr width="63px" size="3px" color="gray" />
                </div>
                <a href="#">Ngày xửa ngày xưa</a> <br> 
                <a href="#"><u>Phim thám hiểm</u></a>
            </div>
        </div>
        <div class="mid9">
            <div class="left">
                <img src="img/xep hang ngay 10.jpg" alt="">
            </div>
            <div class="right">
                <h1>Top 10</h1>
                <div class="gachngang">
                    <hr width="63px" size="3px" color="gray" />
                </div>
                <a href="#">Ông lão tốt dụng</a> <br> 
                <a href="#"><u>Phim âm nhạc</u></a>
            </div>
        </div>
    </div>
</div>

<?php
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
            display: block; /* hiển thị các hàng độc lập */
            list-style: none;
            float: left;
            text-decoration: none;
            
        }

            .container .title ul li a {
                text-decoration: none;
                line-height: 100px;
                padding: 10px 45px 10px 10px;
                font-size: 23px;
                margin-left: -35px;
                color: yellow;
            }

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
        float: left;;
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
            height: auto;
            float: left;
        }

            .than .leftthan .top {
                width: 900px;
                height: auto;
                
            }
                .than .leftthan .top .mot {
                    width: 450px;
                    height: 300px;
                    float: left;
                }
                .mot .hai {
                    float: left;  
                }
                    .mot .hai .ba img {
                        width: 200px;
                        height: 260px;
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
                        left: 68px;
                        bottom: 98px;
                        opacity: 0;
                    }
                    .mot .hai:hover .bon{
                        opacity: 1;
                    }
                .than .leftthan .top .mot .right1 h1 {
                    color: red;
                    border-radius: 2px;
                }

                .than .leftthan .top .mot .right1 hr {
                    margin-top: 5px;
                }

                .than .leftthan .top .mot .right1 a {
                    color: cyan;
                    text-decoration: none;
                    font-size: 22px;
                    margin-left: 10px;
                }

                .than .leftthan .top .mot .right1 p {
                    color: white;
                    font-size: 15px;
                    margin-left: 10px;
                }

                .than .leftthan .top .mot .right1 a u {
                    color: white;
                    font-size: 15px;
                }

                .than .leftthan .top .mot .right1 {
                    width: 225px;
                    height: 260px;
                    float: left;
                }

                .than .leftthan .top .right .left2 {
                    width: 200px;
                    height: 260px;
                    float: left;
                }

                    .than .leftthan .top .right .left2 img {
                        width: 200px;
                        height: 260px;
                        border-radius: 3%;
                        -moz-border-radius: 3%;
                        -webkit-border-radius: 3%;
                    }

                .than .leftthan .top .right .right2 h1 {
                    color: orange;
                    border-radius: 2px;
                }

                .than .leftthan .top .right .right2 hr {
                    margin-top: 5px;
                }

                .than .leftthan .top .right .right2 a {
                    color: cyan;
                    text-decoration: none;
                    font-size: 22px;
                    margin-left: 10px;
                }

                .than .leftthan .top .right .right2 p {
                    color: white;
                    font-size: 15px;
                    margin-left: 10px;
                }

                .than .leftthan .top .right .right2 a u {
                    color: white;
                    font-size: 15px;
                }

                .than .leftthan .top .right .right2 {
                    width: 225px;
                    height: 260px;
                    float: left;
                }


        .than .rightthan {
            width: 280px;
            height: 1600px;
            margin-left: 20px;
            float: left;
        }

            .than .rightthan .top {
                width: 285px;
                height: 130px;
            }

                .than .rightthan .top .left {
                    width: 100px;
                    height: 130px;
                    float: left;
                }

                .than .rightthan .top .right {
                    width: 160px;
                    height: 130px;
                    margin-left: 20px;
                    float: left;
                }

                .than .rightthan .top .left img {
                    width: 100px;
                    height: 130px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
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
                width: 285px;
                height: 130px;
                margin-top: 30px;
            }

                .than .rightthan .mid6 .left {
                    width: 100px;
                    height: 130px;
                    float: left;
                }

                .than .rightthan .mid6 .right {
                    width: 160px;
                    height: 130px;
                    margin-left: 20px;
                    float: left;
                }

                .than .rightthan .mid6 .left img {
                    width: 100px;
                    height: 130px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
                }

                .than .rightthan .mid6 .right h1 {
                    color: gray;
                    font-size: 25px;
                }

                .than .rightthan .mid6 .right hr {
                    margin-top: 2px;
                }

                .than .rightthan .mid6 .right a {
                    color: cyan;
                    text-decoration: none;
                    font-size: 17px;
                    margin-left: 5px;
                }

                    .than .rightthan .mid6 .right a u {
                        color: white;
                        font-size: 15px;
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

                .than .rightthan .mid7 .right h1 {
                    color: gray;
                    font-size: 25px;
                }

                .than .rightthan .mid7 .right hr {
                    margin-top: 2px;
                }

                .than .rightthan .mid7 .right a {
                    color: cyan;
                    text-decoration: none;
                    font-size: 17px;
                    margin-left: 5px;
                }

                    .than .rightthan .mid7 .right a u {
                        color: white;
                        font-size: 15px;
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

                .than .rightthan .mid8 .right h1 {
                    color: gray;
                    font-size: 25px;
                }

                .than .rightthan .mid8 .right hr {
                    margin-top: 2px;
                }

                .than .rightthan .mid8 .right a {
                    color: cyan;
                    text-decoration: none;
                    font-size: 17px;
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

                .than .rightthan .mid9 .right h1 {
                    color: gray;
                    font-size: 25px;
                }

                .than .rightthan .mid9 .right hr {
                    margin-top: 2px;
                }

                .than .rightthan .mid9 .right a {
                    color: cyan;
                    text-decoration: none;
                    font-size: 17px;
                    margin-left: 5px;
                }

                    .than .rightthan .mid9 .right a u {
                        color: white;
                        font-size: 15px;
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

                .than .rightthan .mid10 .right h1 {
                    color: gray;
                    font-size: 25px;
                }

                .than .rightthan .mid10 .right hr {
                    margin-top: 2px;
                }

                .than .rightthan .mid10 .right a {
                    color: cyan;
                    text-decoration: none;
                    font-size: 17px;
                    margin-left: 5px;
                }

                    .than .rightthan .mid10 .right a u {
                        color: white;
                        font-size: 15px;
                    }

            .than .rightthan .mid11 {
                width: 285px;
                height: 130px;
                margin-top: 30px;
            }

                .than .rightthan .mid11 .left {
                    width: 100px;
                    height: 130px;
                    float: left;
                }

                .than .rightthan .mid11 .right {
                    width: 160px;
                    height: 130px;
                    margin-left: 20px;
                    float: left;
                }

                .than .rightthan .mid11 .left img {
                    width: 100px;
                    height: 130px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
                }

                .than .rightthan .mid11 .right h1 {
                    color: gray;
                    font-size: 25px;
                }

                .than .rightthan .mid11 .right hr {
                    margin-top: 2px;
                }

                .than .rightthan .mid11 .right a {
                    color: cyan;
                    text-decoration: none;
                    font-size: 17px;
                    margin-left: 5px;
                }

                    .than .rightthan .mid11 .right a u {
                        color: white;
                        font-size: 15px;
                    }

            .than .rightthan .mid12 {
                width: 285px;
                height: 130px;
                margin-top: 30px;
            }

                .than .rightthan .mid12 .left {
                    width: 100px;
                    height: 130px;
                    float: left;
                }

                .than .rightthan .mid12 .right {
                    width: 160px;
                    height: 130px;
                    margin-left: 20px;
                    float: left;
                }

                .than .rightthan .mid12 .left img {
                    width: 100px;
                    height: 130px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
                }

                .than .rightthan .mid12 .right h1 {
                    color: gray;
                    font-size: 25px;
                }

                .than .rightthan .mid12 .right hr {
                    margin-top: 2px;
                }

                .than .rightthan .mid12 .right a {
                    color: cyan;
                    text-decoration: none;
                    font-size: 17px;
                    margin-left: 5px;
                }

                    .than .rightthan .mid12 .right a u {
                        color: white;
                        font-size: 15px;
                    }

            .than .rightthan .mid13 {
                width: 285px;
                height: 130px;
                margin-top: 30px;
            }

                .than .rightthan .mid13 .left {
                    width: 100px;
                    height: 130px;
                    float: left;
                }

                .than .rightthan .mid13 .right {
                    width: 160px;
                    height: 130px;
                    margin-left: 20px;
                    float: left;
                }

                .than .rightthan .mid13 .left img {
                    width: 100px;
                    height: 130px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
                }

                .than .rightthan .mid13 .right h1 {
                    color: gray;
                    font-size: 25px;
                }

                .than .rightthan .mid13 .right hr {
                    margin-top: 2px;
                }

                .than .rightthan .mid13 .right a {
                    color: cyan;
                    text-decoration: none;
                    font-size: 17px;
                    margin-left: 5px;
                }

                    .than .rightthan .mid13 .right a u {
                        color: white;
                        font-size: 15px;
                    }

            .than .rightthan .mid14 {
                width: 285px;
                height: 130px;
                margin-top: 30px;
            }

                .than .rightthan .mid14 .left {
                    width: 100px;
                    height: 130px;
                    float: left;
                }

                .than .rightthan .mid14 .right {
                    width: 160px;
                    height: 130px;
                    margin-left: 20px;
                    float: left;
                }

                .than .rightthan .mid14 .left img {
                    width: 100px;
                    height: 130px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
                }

                .than .rightthan .mid14 .right h1 {
                    color: gray;
                    font-size: 25px;
                }

                .than .rightthan .mid14 .right hr {
                    margin-top: 2px;
                }

                .than .rightthan .mid14 .right a {
                    color: cyan;
                    text-decoration: none;
                    font-size: 17px;
                    margin-left: 5px;
                }

                    .than .rightthan .mid14 .right a u {
                        color: white;
                        font-size: 15px;
                    }

            .than .rightthan .mid15 {
                width: 285px;
                height: 130px;
                margin-top: 30px;
            }

                .than .rightthan .mid15 .left {
                    width: 100px;
                    height: 130px;
                    float: left;
                }

                .than .rightthan .mid15 .right {
                    width: 160px;
                    height: 130px;
                    margin-left: 20px;
                    float: left;
                }

                .than .rightthan .mid15 .left img {
                    width: 100px;
                    height: 130px;
                    border-radius: 3%;
                    -moz-border-radius: 3%;
                    -webkit-border-radius: 3%;
                }

                .than .rightthan .mid15 .right h1 {
                    color: gray;
                    font-size: 25px;
                }

                .than .rightthan .mid15 .right hr {
                    margin-top: 2px;
                }

                .than .rightthan .mid15 .right a {
                    color: cyan;
                    text-decoration: none;
                    font-size: 17px;
                    margin-left: 5px;
                }

                    .than .rightthan .mid15 .right a u {
                        color: white;
                        font-size: 15px;
                    }

    .xemthem {
        width: 900px;
        height: 70px;
        margin-top: 100px;
        text-align: center;
    }

        .xemthem a u i {
            color: white;
            font-size: 16px;
            margin-left: 300px;
        }

        .xemthem hr {
            margin-top: 5px;
        }

    .than .nhieuhon {
        width: 1200px;
        height: 330px;
    }

        .than .nhieuhon h1 {
            color: yellow;
            font-size: 20px;
        }

        .than .nhieuhon .mot {
            float: left;
            width: 260px;
            height: 380px;
            margin-top: 30px;
        }

            .than .nhieuhon .mot img {
                width: 260px;
                height: 330px;
                border-radius: 3%;
                -moz-border-radius: 3%;
                -webkit-border-radius: 3%;
            }

            .than .nhieuhon .mot a {
                color: cyan;
                font-size: 21px;
                text-decoration: none;
            }

        .than .nhieuhon .hai {
            margin-left: 30px;
            float: left;
            width: 260px;
            height: 380px;
            margin-top: 30px;
        }

            .than .nhieuhon .hai img {
                width: 260px;
                height: 330px;
                border-radius: 3%;
                -moz-border-radius: 3%;
                -webkit-border-radius: 3%;
            }

            .than .nhieuhon .hai a {
                color: cyan;
                font-size: 21px;
                text-decoration: none;
            }

        .than .nhieuhon .ba {
            margin-left: 30px;
            float: left;
            width: 260px;
            height: 380px;
            margin-top: 30px;
        }

            .than .nhieuhon .ba img {
                width: 260px;
                height: 330px;
                border-radius: 3%;
                -moz-border-radius: 3%;
                -webkit-border-radius: 3%;
            }

            .than .nhieuhon .ba a {
                color: cyan;
                font-size: 21px;
                text-decoration: none;
            }

        .than .nhieuhon .bon {
            margin-left: 30px;
            float: left;
            width: 260px;
            height: 380px;
            margin-top: 30px;
        }

            .than .nhieuhon .bon img {
                width: 260px;
                height: 330px;
                border-radius: 3%;
                -moz-border-radius: 3%;
                -webkit-border-radius: 3%;
            }

            .than .nhieuhon .bon a {
                color: cyan;
                font-size: 21px;
                text-decoration: none;
            }



</style>