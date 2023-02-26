<?php
    $sql = "SELECT * FROM dienvien2 
    join quoctich on dienvien2.QuocTich = quoctich.ID_QuocTich 
    join nghenghiep on dienvien2.NgheNghiep = nghenghiep.ID_NgheNghiep ";
    $dienvien2 = mysqli_query($conn, $sql);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách diễn viên 2</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Tên diễn viên</th>
                        <th>Ảnh</th>
                        <th>Ngày sinh</th>
                        <th>Nơi sinh</th>
                        <th>Quốc tịch</th>
                        <th>Chiều cao</th>
                        <th>Cân nặng</th>
                        <th>Nghề nghiệp</th>
                        <th>Hoạt động </th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                        while($row = mysqli_fetch_assoc($dienvien2)){?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['TenDienVien2'];?></td>
                                <td><img style="width: 100px;" src="img/<?php echo $row['Anh_DV2'];?>"></td>
                                <td><?php echo $row['NgaySinh'];?></td>
                                <td><?php echo $row['NoiSinh'];?></td>
                                <td><?php echo $row['TenQuocTich'];?></td>
                                <td><?php echo $row['ChieuCao'];?></td>
                                <td><?php echo $row['CanNang'];?></td>
                                <td><?php echo $row['TenNgheNghiep'];?></td>
                                <td><?php echo $row['HoatDong'];?></td>
                                <td>
                                    <a href="dv2.php?layout_DV2=sua&id=<?php echo $row['ID_DienVien2'];?>">Sửa</a>
                                </td>
                                <td>
                                    <a onclick="return Del('<?php echo $row['TenDienVien2'];?>')" href="dv2.php?layout_DV2=xoa&id=<?php echo $row['ID_DienVien2'];?>">Xóa</a>
                                </td>
                            </tr>
                        <?php    
                        }?>
                </tbody>
            </table>
                <a class="btn btn-primary" href="dv2.php?layout_DV2=them">Thêm diễn viên</a>
        </div>
    </div>
</div>

<script>
    function Del(name)
    {
        return confirm("Bạn có chắc chắn muốn xóa diễn viên:" + name +"?");
    }
</script>