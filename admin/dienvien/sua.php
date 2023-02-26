<?php
    $sql_quoctich = "SELECT * FROM quoctich";
    $sql_nghenghiep = "SELECT * FROM nghenghiep";
    $query_quoctich = mysqli_query($conn, $sql_quoctich);
    $query_nghenghiep = mysqli_query($conn, $sql_nghenghiep );
    $id = $_GET['id'];
    $sql_up = "SELECT * FROM dienvien where ID_DienVien = $id";
    $query_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
    $success = false;

    if(isset($_POST['sbm']))
    {
        $TenDienVien = $_POST['TenDienVien'];

        if($_FILES['Anh_DV']['name'] =='')
        {
            $_Anh_DV = $row_up['Anh_DV'];
        }
        else
        {
            $Anh_DV = $_FILES['Anh_DV']['name'];
            $Anh_DV_tmp = $_FILES['Anh_DV']['tmp_name'];
            move_uploaded_file($Anh_DV_tmp, 'img/'.$Anh_DV);
        }
        $NgaySinh = $_POST['NgaySinh'];
        $NoiSinh = $_POST['NoiSinh'];
        $QuocTich = $_POST['QuocTich'];
        $ChieuCao = $_POST['ChieuCao'];
        $CanNang = $_POST['CanNang'];
        $NgheNghiep = $_POST['NgheNghiep'];
        $HoatDong = $_POST['HoatDong'];
        $MoTa = $_POST['MoTa'];

        $sql = "UPDATE dienvien SET TenDienVien = '$TenDienVien', Anh_DV = '$Anh_DV', NgaySinh = '$NgaySinh', NoiSinh = '$NoiSinh', QuocTich = '$QuocTich', ChieuCao = '$ChieuCao', CanNang = '$CanNang', NgheNghiep = '$NgheNghiep', HoatDong = '$HoatDong', MoTa = '$MoTa' Where ID_DienVien=$id";
        $query = mysqli_query($conn, $sql);
        if($query){
            $success = true;
        }
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa diễn viên</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="">Tên diễn viên</label>
                    <input type="text" name="TenDienVien" class="form-control" required value="<?php echo $row_up['TenDienVien'];?>">
                </div>
                <div class="form-group">
                    <label for="">Ảnh</label> <br>
                    <input type="file" name="Anh_DV">
                </div>
                <div class="form-group">
                    <label for="">Ngày sinh</label>
                    <input type="date" name="NgaySinh" class="form-control" required value="<?php echo $row_up['NgaySinh'];?>">
                </div>
                <div class="form-group">
                    <label for="">Nơi sinh</label>
                    <input type="text" name="NoiSinh" class="form-control" required value="<?php echo $row_up['NoiSinh'];?>">
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
                    <input type="text" name="ChieuCao" class="form-control" required value="<?php echo $row_up['ChieuCao'];?>">
                </div>
                <div class="form-group">
                    <label for="">Cân nặng</label>
                    <input type="text" name="CanNang" class="form-control" required value="<?php echo $row_up['CanNang'];?>">
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
                <div class="form-group">
                    <label for="">Hoạt động</label>
                    <input type="text" name="HoatDong" class="form-control" required value="<?php echo $row_up['HoatDong'];?>">
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
    location.href = "dv.php?layout_DV=danhsach";
</script>
<?php
}
?>