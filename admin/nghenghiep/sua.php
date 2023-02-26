<?php
    $id = $_GET['id'];
    
    $sql_up = "SELECT * FROM nghenghiep where ID_NgheNghiep = $id";
    $query_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
    $success = false;

    if(isset($_POST['sbm']))
    {
        $TenNgheNghiep = $_POST['TenNgheNghiep'];
        $sql = "UPDATE nghenghiep SET TenNgheNghiep = '$TenNgheNghiep' Where ID_NgheNghiep=$id";
        $query = mysqli_query($conn, $sql);
        if($query){
            $success = true;
        }
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa nghề nghiệp</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên nghề nghiệp</label>
                    <input type="text" name="TenNgheNghiep" class="form-control" required value="<?php echo $row_up['TenNgheNghiep'];?>">
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
    location.href = "nghenghiep.php?layout_NN=danhsach";
</script>
<?php
}
?>