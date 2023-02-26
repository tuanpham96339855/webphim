<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM nghenghiep where ID_NgheNghiep = $id";
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
    location.href = "nghenghiep.php?layout_NN=danhsach";
</script>
<?php
}
?>