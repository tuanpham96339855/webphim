<?php
    $success = false;
    if(isset($_POST['sbm']))
    {
        $TenTheLoai = $_POST['TenTheLoai'];

        $sql = "INSERT INTO theloai (TenTheLoai) VALUES ('$TenTheLoai')";
        $query = mysqli_query($conn, $sql);
        if($query){
            $success = true;
        }
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm thể loại</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên thể loại</label>
                    <input type="text" name="TenTheLoai" class="form-control" required>
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
    location.href = "tl.php?layout_TL=danhsach";
</script>
<?php
}
?>