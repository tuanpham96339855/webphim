<?php
    $id = $_GET['id'];
    
    $sql_up = "SELECT * FROM theloai where ID_TheLoai = $id";
    $query_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
    $success = false;

    if(isset($_POST['sbm']))
    {
        $TenTheLoai = $_POST['TenTheLoai'];
        $sql = "UPDATE theloai SET TenTheLoai = '$TenTheLoai' Where ID_TheLoai=$id";
        $query = mysqli_query($conn, $sql);
        if($query){
            $success = true;
        }
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa thể loại</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên thể loại</label>
                    <input type="text" name="TenTheLoai" class="form-control" required value="<?php echo $row_up['TenTheLoai'];?>">
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
    location.href = "tl.php?layout_TL=danhsach";
</script>
<?php
}
?>