<?php
    $id = $_GET['id'];
    
    $sql_up = "SELECT * FROM daodien where ID_DaoDien = $id";
    $query_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
    $success = false;

    if(isset($_POST['sbm']))
    {
        $TenDaoDien = $_POST['TenDaoDien'];
        $sql = "UPDATE daodien SET TenDaoDien = '$TenDaoDien' Where ID_DaoDien=$id";
        $query = mysqli_query($conn, $sql);
        if($query){
            $success = true;
        }
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa đạo diễn</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên đạo diễn</label>
                    <input type="text" name="TenDaoDien" class="form-control" required value="<?php echo $row_up['TenDaoDien'];?>">
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
    location.href = "daodien.php?layout_DD=danhsach";
</script>
<?php
}
?>