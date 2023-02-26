<?php
    $sql = "SELECT * FROM quoctich";
    $quoctich = mysqli_query($conn, $sql);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách quốc tịch</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Tên quốc tịch</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                        while($row = mysqli_fetch_assoc($quoctich)){?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['TenQuocTich'];?></td>
                                <td>
                                    <a href="quoctich.php?layout_QT=sua&id=<?php echo $row['ID_QuocTich'];?>">Sửa</a>
                                </td>
                                <td>
                                    <a onclick="return Del('<?php echo $row['TenQuocTich'];?>')" href="quoctich.php?layout_QT=xoa&id=<?php echo $row['ID_QuocTich'];?>">Xóa</a>
                                </td>
                            </tr>
                        <?php    
                        }?>
                </tbody>
            </table>
                <a class="btn btn-primary" href="quoctich.php?layout_QT=them">Thêm quốc tịch</a>
        </div>
    </div>
</div>

<script>
    function Del(name)
    {
        return confirm("Bạn có chắc chắn muốn xóa quốc tịch:" + name +"?");
    }
</script>