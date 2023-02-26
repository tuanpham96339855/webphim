<?php
    $id = $_GET['id'];
    
    $sql_up = "SELECT * FROM quocgia where ID_QuocGia = $id";
    $query_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
    $success = false;

    if(isset($_POST['sbm']))
    {
        $TenQuocGia = $_POST['TenQuocGia'];
        $sql = "UPDATE quocgia SET TenQuocGia = '$TenQuocGia' Where ID_QuocGia=$id";
        $query = mysqli_query($conn, $sql);
        if($query){
            $success = true;
        }
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa quốc gia</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên quốc gia</label>
                    <input type="text" name="TenQuocGia" class="form-control" required value="<?php echo $row_up['TenQuocGia'];?>">
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
    location.href = "qg.php?layout_QG=danhsach";
</script>
<?php
}
?>