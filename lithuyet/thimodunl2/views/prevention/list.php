
<a href="index.php?page=prevention/add"> Thêm mới </a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name_prevention</th>
            <th>ACTION</th>
          
        </tr>
    </thead>
    <tbody>
        <?php foreach( $rows as $row ): ?>
            <tr>
                <td><?= $row->ID ;?> </td>
                <td><?= $row->Name_prevention ;?></td>
                
                <td>
                <a href="index.php?page=prevention/edit&id=<?= $row->ID ;?>">Edit</a> <br>
                <a onclick=" return confirm('Are you sure ?'); " href="index.php?controller=prevention&page=prevention/delete&id=<?= $row->ID ;?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>