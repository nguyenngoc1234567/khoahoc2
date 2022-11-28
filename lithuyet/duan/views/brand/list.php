<a href="index.php?page=brand/add"> Thêm mới </a>
<table border="1">
    <thead>
        <tr>
            <th>brandName </th>
            
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $rows as $row ): ?>
            <tr>
             
                <td><?= $row->brandName ;?> </td>
              
                <td>
                <a href="index.php?controller=brand&page=brand/edit&id=<?= $row->ID ;?>">Edit</a> <br>
                <a onclick=" return confirm('Are you sure ?'); " href="index.php?controller=brand&page=brand/delete&id=<?= $row->ID ;?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>