<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM phimle where ID_PhimLe = $id";
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
    location.href = "phimle.php?layout_PL=danhsach";
</script>
<?php
}
?>