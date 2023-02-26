<?php
    $sql = "SELECT * FROM phimle";
    $phimle = mysqli_query($conn, $sql);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách phim lẻ</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Tên phim lẻ</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                        while($row = mysqli_fetch_assoc($phimle)){?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['TenPhimLe'];?></td>
                                <td>
                                    <a href="phimle.php?layout_PL=sua&id=<?php echo $row['ID_PhimLe'];?>">Sửa</a>
                                </td>
                                <td>
                                    <a onclick="return Del('<?php echo $row['TenPhimLe'];?>')" href="phimle.php?layout_PL=xoa&id=<?php echo $row['ID_PhimLe'];?>">Xóa</a>
                                </td>
                            </tr>
                        <?php    
                        }?>
                </tbody>
            </table>
                <a class="btn btn-primary" href="phimle.php?layout_PL=them">Thêm phim lẻ</a>
        </div>
    </div>
</div>

<script>
    function Del(name)
    {
        return confirm("Bạn có chắc chắn muốn xóa phim lẻ:" + name +"?");
    }
</script>