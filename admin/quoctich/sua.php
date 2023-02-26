<?php
    $id = $_GET['id'];
    
    $sql_up = "SELECT * FROM quoctich where ID_QuocTich = $id";
    $query_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
    $success = false;

    if(isset($_POST['sbm']))
    {
        $TenQuocTich = $_POST['TenQuocTich'];
        $sql = "UPDATE quoctich SET TenQuocTich = '$TenQuocTich' Where ID_QuocTich=$id";
        $query = mysqli_query($conn, $sql);
        if($query){
            $success = true;
        }
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa quốc tịch</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên quốc tịch</label>
                    <input type="text" name="TenQuocTich" class="form-control" required value="<?php echo $row_up['TenQuocTich'];?>">
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
    location.href = "quoctich.php?layout_QT=danhsach";
</script>
<?php
}
?>