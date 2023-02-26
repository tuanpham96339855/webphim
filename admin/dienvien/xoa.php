<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM dienvien where ID_DienVien = $id";
    $query = mysqli_query($conn, $sql);
    $success = false;
    if($query){
        $success = true;
    }
?>

<?php
if($success == true){
?>
<script>
    location.href = "dv.php?layout_DV=danhsach";
</script>
<?php
}
?>
