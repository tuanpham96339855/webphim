<?php
    $sql = "SELECT * FROM dienvien 
    join quoctich on dienvien.QuocTich = quoctich.ID_QuocTich 
    join nghenghiep on dienvien.NgheNghiep = nghenghiep.ID_NgheNghiep ";
    $dienvien = mysqli_query($conn, $sql);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách diễn viên</h2>
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
                        while($row = mysqli_fetch_assoc($dienvien)){?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['TenDienVien'];?></td>
                                <td><img style="width: 100px;" src="img/<?php echo $row['Anh_DV'];?>"></td>
                                <td><?php echo $row['NgaySinh'];?></td>
                                <td><?php echo $row['NoiSinh'];?></td>
                                <td><?php echo $row['TenQuocTich'];?></td>
                                <td><?php echo $row['ChieuCao'];?></td>
                                <td><?php echo $row['CanNang'];?></td>
                                <td><?php echo $row['TenNgheNghiep'];?></td>
                                <td><?php echo $row['HoatDong'];?></td>
                                <td>
                                    <a href="dv.php?layout_DV=sua&id=<?php echo $row['ID_DienVien'];?>">Sửa</a>
                                </td>
                                <td>
                                    <a onclick="return Del('<?php echo $row['TenDienVien'];?>')" href="dv.php?layout_DV=xoa&id=<?php echo $row['ID_DienVien'];?>">Xóa</a>
                                </td>
                            </tr>
                        <?php    
                        }?>
                </tbody>
            </table>
                <a class="btn btn-primary" href="dv.php?layout_DV=them">Thêm diễn viên</a>
        </div>
    </div>
</div>

<script>
    function Del(name)
    {
        return confirm("Bạn có chắc chắn muốn xóa diễn viên:" + name +"?");
    }
</script>