<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM daodien where ID_DaoDien = $id";
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
    location.href = "daodien.php?layout_DD=danhsach";
</script>
<?php
}
?>