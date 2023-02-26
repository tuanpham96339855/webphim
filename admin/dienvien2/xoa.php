<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM dienvien2 where ID_DienVien2 = $id";
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
    location.href = "dv2.php?layout_DV2=danhsach";
</script>
<?php
}
?>
