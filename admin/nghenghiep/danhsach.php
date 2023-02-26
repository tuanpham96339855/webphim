<?php
    $sql = "SELECT * FROM nghenghiep";
    $nghenghiep = mysqli_query($conn, $sql);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách nghề nghiệp</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Tên nghề nghiệp</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                        while($row = mysqli_fetch_assoc($nghenghiep)){?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['TenNgheNghiep'];?></td>
                                <td>
                                    <a href="nghenghiep.php?layout_NN=sua&id=<?php echo $row['ID_NgheNghiep'];?>">Sửa</a>
                                </td>
                                <td>
                                    <a onclick="return Del('<?php echo $row['TenNgheNghiep'];?>')" href="nghenghiep.php?layout_NN=xoa&id=<?php echo $row['ID_NgheNghiep'];?>">Xóa</a>
                                </td>
                            </tr>
                        <?php    
                        }?>
                </tbody>
            </table>
                <a class="btn btn-primary" href="nghenghiep.php?layout_NN=them">Thêm nghề nghiệp</a>
        </div>
    </div>
</div>

<script>
    function Del(name)
    {
        return confirm("Bạn có chắc chắn muốn xóa nghề nghiệp:" + name +"?");
    }
</script>