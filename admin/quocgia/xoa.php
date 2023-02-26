<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM quocgia where ID_QuocGia = $id";
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
    location.href = "qg.php?layout_QG=danhsach";
</script>
<?php
}
?>