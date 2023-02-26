<?php
    $sql_quoctich = "SELECT * FROM quoctich";
    $sql_nghenghiep = "SELECT * FROM nghenghiep";
    $query_quoctich = mysqli_query($conn, $sql_quoctich);
    $query_nghenghiep = mysqli_query($conn, $sql_nghenghiep );
    $success = false;
    if(isset($_POST['sbm']))
    {
        $TenDienVien = $_POST['TenDienVien'];

        $Anh_DV = $_FILES['Anh_DV']['name'];
        $Anh_DV_tmp = $_FILES['Anh_DV']['tmp_name'];
        $NgaySinh = $_POST['NgaySinh'];
        $NoiSinh = $_POST['NoiSinh'];
        $QuocTich = $_POST['QuocTich'];
        $ChieuCao = $_POST['ChieuCao'];
        $CanNang = $_POST['CanNang'];
        $NgheNghiep = $_POST['NgheNghiep'];
        $HoatDong = $_POST['HoatDong'];
        $MoTa = $_POST['MoTa'];

        $sql = "INSERT INTO dienvien (TenDienVien, Anh_DV, NgaySinh, NoiSinh, QuocTich, ChieuCao, CanNang, NgheNghiep, HoatDong, MoTa)
        VALUES ('$TenDienVien', '$Anh_DV', '$NgaySinh', '$NoiSinh', '$QuocTich', '$ChieuCao', '$CanNang', '$NgheNghiep', '$HoatDong', '$MoTa')";
        $query = mysqli_query($conn, $sql);
        move_uploaded_file($Anh_DV_tmp, 'img/'.$Anh_DV);
        if($query){
            $success = true;
        }
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm diễn viên</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="">Tên diễn viên</label>
                    <input type="text" name="TenDienVien" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Ảnh</label> <br>
                    <input type="file" name="Anh_DV">
                </div>
                <div class="form-group">
                    <label for="">Ngày sinh</label>
                    <input type="date" name="NgaySinh" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Nơi sinh</label>
                    <input type="text" name="NoiSinh" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Quốc tịch</label>
                    <select class="form-control" name="QuocTich">
                        <?php
                            while($row_quoctich = mysqli_fetch_assoc($query_quoctich)){?>
                                <option value="<?= $row_quoctich['ID_QuocTich']?>"><?php echo $row_quoctich['TenQuocTich'];?></option>
                         <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Chiều cao</label>
                    <input type="text" name="ChieuCao" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Cân nặng</label>
                    <input type="text" name="CanNang" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Nghề nghiệp</label>
                    <select class="form-control" name="NgheNghiep">
                        <?php
                            while($row_nghenghiep = mysqli_fetch_assoc($query_nghenghiep)){?>
                                <option value="<?= $row_nghenghiep['ID_NgheNghiep']?>"><?php echo $row_nghenghiep['TenNgheNghiep'];?></option>
                         <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Hoạt động</label>
                    <input type="text" name="HoatDong" class="form-control" required>
                </div>
                <div class="form-group">
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <input type="text" name="MoTa" class="form-control" required>
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
            </form>
        </div>
    </div>
</div>
<?php
if($success == true){
?>
<script>
    location.href = "dv.php?layout_DV=danhsach";
</script>
<?php
}
?>