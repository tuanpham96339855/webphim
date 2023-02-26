<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM theloai where ID_TheLoai = $id";
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
    location.href = "tl.php?layout_TL=danhsach";
</script>
<?php
}
?>