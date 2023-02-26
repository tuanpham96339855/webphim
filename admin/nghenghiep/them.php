<?php
    $success = false;
    if(isset($_POST['sbm']))
    {
        $TenNgheNghiep = $_POST['TenNgheNghiep'];

        $sql = "INSERT INTO nghenghiep (TenNgheNghiep) VALUES ('$TenNgheNghiep')";
        $query = mysqli_query($conn, $sql);
        if($query){
            $success = true;
        }
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm nghề nghiệp</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên nghề nghiệp</label>
                    <input type="text" name="TenNgheNghiep" class="form-control" required>
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
    location.href = "nghenghiep.php?layout_NN=danhsach";
</script>
<?php
}
?>