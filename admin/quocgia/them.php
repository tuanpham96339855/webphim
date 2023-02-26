<?php
    $success = false;
    if(isset($_POST['sbm']))
    {
        $TenQuocGia = $_POST['TenQuocGia'];

        $sql = "INSERT INTO quocgia (TenQuocGia) VALUES ('$TenQuocGia')";
        $query = mysqli_query($conn, $sql);
        if($query){
            $success = true;
        }
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm quốc gia</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên quốc gia</label>
                    <input type="text" name="TenQuocGia" class="form-control" required>
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
    location.href = "qg.php?layout_QG=danhsach";
</script>
<?php
}
?>