<?php
    $sql = "SELECT * FROM phim 
    join dienvien on phim.DienVien = dienvien.ID_DienVien
    join dienvien2 on phim.DienVien2 = dienvien2.ID_DienVien2
    join quocgia on phim.QuocGia = quocgia.ID_QuocGia 
    join theloai on phim.TheLoai = theloai.ID_TheLoai
    join daodien on phim.DaoDien = daodien.ID_DaoDien 
    order by phim.ID ";
    $phim = mysqli_query($conn, $sql);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách phim</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Tên phim</th>
                        <th>Ảnh</th>
                        <th>Thời lượng</th>
                        <th>Số Tập</th>
                        <th>Quốc Gia</th>
                        <th>Năm sản xuất</th>
                        <th>Ngày công chiếu</th>
                        <th>Thể loại</th>
                        <th>Đạo diễn</th>
                        <th>Diễn viên</th>
                        <th>Diễn viên 2</th>
                        <th>Lượt xem</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                        while($row = mysqli_fetch_assoc($phim)){?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['TenPhim'];?></td>
                                <td><img style="width: 100px;" src="img/<?php echo $row['Anh'];?>"></td>
                                <td><?php echo $row['ThoiLuong'];?></td>
                                <td><?php echo $row['SoTap'];?></td>
                                <td><?php echo $row['TenQuocGia'];?></td>
                                <td><?php echo $row['NamSanXuat'];?></td>
                                <td><?php echo $row['NgayCongChieu'];?></td>
                                <td><?php echo $row['TenTheLoai'];?></td>
                                <td><?php echo $row['TenDaoDien'];?></td>
                                <td><?php echo $row['TenDienVien'];?></td>
                                <td><?php echo $row['TenDienVien2'];?></td>
                                <td><?php echo $row['LuotXem'];?></td>
                                <td>
                                    <a href="phim.php?layout=sua&id=<?php echo $row['ID'];?>">Sửa</a>
                                </td>
                                <td>
                                    <a onclick="return Del('<?php echo $row['TenPhim'];?>')" href="phim.php?layout=xoa&id=<?php echo $row['ID'];?>">Xóa</a>
                                </td>
                            </tr>
                        <?php    
                        }?>
                </tbody>
            </table>
                <a class="btn btn-primary" href="phim.php?layout=them">Thêm phim</a>
        </div>
    </div>
</div>

<script>
    function Del(name)
    {
        return confirm("Bạn có chắc chắn muốn xóa phim:" + name +"?");
    }
</script>