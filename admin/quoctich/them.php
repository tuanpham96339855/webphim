<?php
    $success = false;
    if(isset($_POST['sbm']))
    {
        $TenQuocTich = $_POST['TenQuocTich'];

        $sql = "INSERT INTO quoctich (TenQuocTich) VALUES ('$TenQuocTich')";
        $query = mysqli_query($conn, $sql);
        if($query){
            $success = true;
        }
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm quốc tịch</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên quốc tịch</label>
                    <input type="text" name="TenQuocTich" class="form-control" required>
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
    location.href = "quoctich.php?layout_QT=danhsach";
</script>
<?php
}
?>