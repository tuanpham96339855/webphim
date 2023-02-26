<?php
    $id = $_GET['id'];
    
    $sql_up = "SELECT * FROM phimle where ID_PhimLe = $id";
    $query_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
    $success = false;

    if(isset($_POST['sbm']))
    {
        $TenPhimLe = $_POST['TenPhimLe'];
        $sql = "UPDATE phimle SET TenPhimLe = '$TenPhimLe' Where ID_Phimle=$id";
        $query = mysqli_query($conn, $sql);
        if($query){
            $success = true;
        }
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa phim lẻ</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên phim lẻ</label>
                    <input type="text" name="TenPhimLe" class="form-control" required value="<?php echo $row_up['TenPhimLe'];?>">
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
    location.href = "phimle.php?layout_PL=danhsach";
</script>
<?php
}
?>