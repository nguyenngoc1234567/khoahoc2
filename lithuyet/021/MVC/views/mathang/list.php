<a href="index.php?page=mat_hang/add"> Thêm mới </a>
<table border="1">
    <thead>
        <tr>
            <th>MAHANG</th>
            <th>TENHANG</th>
            <th>MACONGTY</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $rows as $row ): ?>
            <tr>
                <td><?= $row->MAHANG ;?> </td>
                <td><?= $row->TENHANG ;?></td>
                <td><?= $row->MACONGTY ;?></td>
                <td>
                <a href="index.php?page=mat_hang/edit&id=<?= $row->MAHANG ;?>">Edit</a> <br>
                <a onclick=" return confirm('Are you sure ?'); " href="index.php?controller=MatHang&page=mat_hang/delete&id=<?= $row->MAHANG ;?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>