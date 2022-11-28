
<a href="index.php?page=Patient/add"> Thêm mới </a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>patient</th>
            <th>day_hoppital</th>
            <th>status</th>
            <th>information_patient</th>
            <th>gender</th>
            <th>class</th>
            <th>ACTION</th>

     
        </tr>
    </thead>
    <tbody>
        <?php foreach( $rows as $row ): ?>
            <tr>
                <td><?= $row->ID ;?> </td>
                <td><?= $row->patient ;?></td>
                <td><?= $row->day_hoppital ;?></td>
                <td><?= $row->status ;?></td>
                <td><?= $row->information_patient ;?></td>
                <td><?= $row->gender ;?></td>
                <td><?= $row->Name_prevention ;?></td>
                
                
                <td>
                <a href="index.php?page=Patient/edit&id=<?= $row->ID ;?>">Edit</a> <br>
                <a onclick=" return confirm('Are you sure ?'); " href="index.php?controller=Patient&page=Patient/delete&id=<?= $row->ID ;?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>