<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM quoctich where ID_QuocTich = $id";
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
    location.href = "quoctich.php?layout_QT=danhsach";
</script>
<?php
}
?>