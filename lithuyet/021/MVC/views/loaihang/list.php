<a href="index.php?page=add"> Thêm mới </a>
<table border="1">
    <thead>
        <tr>
            <th>MALOAIHANG </th>
            <th>TENLOAIHANG</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $rows as $row ): ?>
            <tr>
             
                <td><?= $row->MALOAIHANG ;?> </td>
                <td><?= $row->TENLOAIHANG ;?></td>
                <td>
                <a href="index.php?controller=LoaiHang&page=edit&id=<?= $row->MALOAIHANG ;?>">Edit</a> <br>
                <a onclick=" return confirm('Are you sure ?'); " href="index.php?controller=LoaiHang&page=delete&id=<?= $row->MALOAIHANG ;?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>