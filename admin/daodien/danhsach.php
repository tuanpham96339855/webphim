<?php
    $sql = "SELECT * FROM daodien";
    $phimle = mysqli_query($conn, $sql);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách đạo diễn</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Tên đạo diễn</th>
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
                                <td><?php echo $row['TenDaoDien'];?></td>
                                <td>
                                    <a href="daodien.php?layout_DD=sua&id=<?php echo $row['ID_DaoDien'];?>">Sửa</a>
                                </td>
                                <td>
                                    <a onclick="return Del('<?php echo $row['TenDaoDien'];?>')" href="daodien.php?layout_DD=xoa&id=<?php echo $row['ID_DaoDien'];?>">Xóa</a>
                                </td>
                            </tr>
                        <?php    
                        }?>
                </tbody>
            </table>
                <a class="btn btn-primary" href="daodien.php?layout_DD=them">Thêm đạo diễn</a>
        </div>
    </div>
</div>

<script>
    function Del(name)
    {
        return confirm("Bạn có chắc chắn muốn xóa đạo diễn:" + name +"?");
    }
</script>