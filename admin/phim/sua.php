<?php
    $id = $_GET['id'];
    $sql_dienvien = "SELECT * FROM dienvien";
    $sql_dienvien2 = "SELECT * FROM dienvien2";
    $sql_quocgia = "SELECT * FROM quocgia";
    $sql_theloai = "SELECT * FROM theloai";
    $sql_phimle = "SELECT * FROM phimle";
    $sql_daodien = "SELECT * FROM daodien";
    $query_dienvien = mysqli_query($conn, $sql_dienvien);
    $query_dienvien2 = mysqli_query($conn, $sql_dienvien2);
    $query_quocgia = mysqli_query($conn, $sql_quocgia);
    $query_theloai = mysqli_query($conn, $sql_theloai);
    $query_phimle = mysqli_query($conn, $sql_phimle);
    $query_daodien = mysqli_query($conn, $sql_daodien);
    $sql_up = "SELECT * FROM phim WHERE ID = $id";
    $query_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
    $success = false;
    if(isset($_POST['sbm']))
    {
        $TenPhim = $_POST['TenPhim'];

        if($_FILES['Anh']['name'] =='')
        {
            $_Anh = $row_up['Anh'];
        }
        else
        {
            $Anh = $_FILES['Anh']['name'];
            $Anh_tmp = $_FILES['Anh']['tmp_name'];
            move_uploaded_file($Anh_tmp, 'img/'.$Anh);
        }
        $ThoiLuong = $_POST['ThoiLuong'];
        $SoTap = $_POST['SoTap'];
        $PhimLe = $_POST['PhimLe'];
        $QuocGia = $_POST['QuocGia'];
        $NamSanXuat = $_POST['NamSanXuat'];
        $NgayCongChieu = $_POST['NgayCongChieu'];
        $TheLoai = $_POST['TheLoai'];
        $DaoDien = $_POST['DaoDien'];
        $DienVien = $_POST['DienVien'];
        $DienVien2 = $_POST['DienVien2'];
        if($_FILES['Video']['name'] =='')
        {
            $_Video = $row_up['TenPhim'];
        }
        else
        {
            $Video = $_FILES['Video']['name'];
            $Video_tmp = $_FILES['Video']['tmp_name'];
            move_uploaded_file($Video_tmp, 'video/'.$Video);
        }
        $LuotXem = $_POST['LuotXem'];
        $MoTa = $_POST['MoTa'];

        $sql = "UPDATE phim SET TenPhim = '$TenPhim', Anh = '$Anh', ThoiLuong = '$ThoiLuong', SoTap = '$SoTap', PhimLe = '$PhimLe', QuocGia = '$QuocGia', NamSanXuat = '$NamSanXuat', NgayCongChieu = '$NgayCongChieu', TheLoai = '$TheLoai', DaoDien = '$DaoDien', DienVien = '$DienVien', DienVien2 = '$DienVien2', Video = '$Video' , LuotXem = '$LuotXem', MoTa = '$MoTa' Where id=$id";
        $query = mysqli_query($conn, $sql);
        if($query){
            $success = true;
        }
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa phim</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="">Tên phim</label>
                    <input type="text" name="TenPhim" class="form-control" required value="<?php echo $row_up['TenPhim'];?>">
                </div>
                <div class="form-group">
                    <label for="">Ảnh</label> <br>
                    <input type="file" name="Anh">
                </div>
                <div class="form-group">
                    <label for="">Thời lượng</label>
                    <input type="text" name="ThoiLuong" class="form-control" required value="<?php echo $row_up['ThoiLuong'];?>">
                </div>
                <div class="form-group">
                    <label for="">Số tập</label>
                    <input type="number" name="SoTap" class="form-control" required value="<?php echo $row_up['SoTap'];?>">
                </div>
                <div class="form-group">
                    <label for="">Phim lẻ</label>
                    <select class="form-control" name="PhimLe">
                        <?php
                            while($row_phimle = mysqli_fetch_assoc($query_phimle)){?>
                                <option value="<?= $row_phimle['ID_PhimLe']?>"><?php echo $row_phimle['TenPhimLe'];?></option>
                         <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Quốc gia</label>
                    <select class="form-control" name="QuocGia">
                        <?php
                            while($row_quocgia = mysqli_fetch_assoc($query_quocgia)){?>
                                <option value="<?= $row_quocgia['ID_QuocGia']?>"><?php echo $row_quocgia['TenQuocGia'];?></option>
                         <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Năm sản xuất</label>
                    <input type="date" name="NamSanXuat" class="form-control" required value="<?php echo $row_up['NamSanXuat'];?>">
                </div>
                <div class="form-group">
                    <label for="">Ngày công chiếu</label>
                    <input type="date" name="NgayCongChieu" class="form-control" required value="<?php echo $row_up['NgayCongChieu'];?>">
                </div>
                <div class="form-group">
                <label for="">Thể loại</label>
                    <select class="form-control" name="TheLoai">
                    <?php
                        while($row_theloai = mysqli_fetch_assoc($query_theloai)){?>
                            <option value="<?=$row_theloai['ID_TheLoai']?>"><?php echo $row_theloai['TenTheLoai'];?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Đạo diễn</label>
                    <select class="form-control" name="DaoDien">
                        <?php
                            while($row_daodien = mysqli_fetch_assoc($query_daodien)){?>
                                <option value="<?= $row_daodien['ID_DaoDien']?>"><?php echo $row_daodien['TenDaoDien'];?></option>
                         <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                <label for="">Diễn viên</label>
                    <select class="form-control" name="DienVien">
                    <?php
                        while($row_dienvien = mysqli_fetch_assoc($query_dienvien)){?>
                            <option value="<?=$row_dienvien['ID_DienVien']?>"><?php echo $row_dienvien['TenDienVien'];?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                <label for="">Diễn viên 2</label>
                    <select class="form-control" name="DienVien2">
                    <?php
                        while($row_dienvien2 = mysqli_fetch_assoc($query_dienvien2)){?>
                            <option value="<?=$row_dienvien2['ID_DienVien2']?>"><?php echo $row_dienvien2['TenDienVien2'];?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Video</label> <br>
                    <input type="file" name="Video">
                </div>
                <div class="form-group">
                    <label for="">Lượt xem</label>
                    <input type="text" name="LuotXem" class="form-control" required value="<?php echo $row_up['LuotXem'];?>">
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <input type="text" name="MoTa" class="form-control" required value="<?php echo $row_up['MoTa'];?>">
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Sửa</button>
            </form>
        </div>
    </div>
</div>
<?php
if($success == true){
?>
<script>
    location.href = "phim.php?layout=danhsach";
</script>
<?php
}
?>