<?php
    $success = false;
    if(isset($_POST['sbm']))
    {
        $TenPhimLe = $_POST['TenPhimLe'];

        $sql = "INSERT INTO phimle (TenPhimLe) VALUES ('$TenPhimLe')";
        $query = mysqli_query($conn, $sql);
        if($query){
            $success = true;
        }
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm phim lẻ</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên phim lẻ</label>
                    <input type="text" name="TenPhimLe" class="form-control" required>
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
    location.href = "phimle.php?layout_PL=danhsach";
</script>
<?php
}
?>