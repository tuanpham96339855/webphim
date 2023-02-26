<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM phim where ID = $id";
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
    location.href = "phim.php?layout=danhsach";
</script>
<?php
}
?>