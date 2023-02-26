<?php
    $sql = "SELECT * FROM quocgia";
    $quocgia = mysqli_query($conn, $sql);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách quốc gia</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Tên quốc gia</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                        while($row = mysqli_fetch_assoc($quocgia)){?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['TenQuocGia'];?></td>
                                <td>
                                    <a href="qg.php?layout_QG=sua&id=<?php echo $row['ID_QuocGia'];?>">Sửa</a>
                                </td>
                                <td>
                                    <a onclick="return Del('<?php echo $row['TenQuocGia'];?>')" href="qg.php?layout_QG=xoa&id=<?php echo $row['ID_QuocGia'];?>">Xóa</a>
                                </td>
                            </tr>
                        <?php    
                        }?>
                </tbody>
            </table>
                <a class="btn btn-primary" href="qg.php?layout_QG=them">Thêm quốc gia</a>
        </div>
    </div>
</div>

<script>
    function Del(name)
    {
        return confirm("Bạn có chắc chắn muốn xóa quốc gia:" + name +"?");
    }
</script>