<?php
    $success = false;
    if(isset($_POST['sbm']))
    {
        $TenDaoDien = $_POST['TenDaoDien'];

        $sql = "INSERT INTO daodien (TenDaoDien) VALUES ('$TenDaoDien')";
        $query = mysqli_query($conn, $sql);
        if($query){
            $success = true;
        }
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm đạo diễn</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên đạo diễn</label>
                    <input type="text" name="TenDaoDien" class="form-control" required>
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
    location.href = "daodien.php?layout_DD=danhsach";
</script>
<?php
}
?>