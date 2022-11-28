<a href="index.php?page=category/add"> Thêm mới </a>
<table border="1">
    <thead>
        <tr>
            <th>catName </th>
            
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $rows as $row ): ?>
            <tr>
             
                <td><?= $row->catName ;?> </td>
              
                <td>
                <a href="index.php?page=category/edit&id=<?= $row->ID ;?>">Edit</a> <br>
                <a onclick=" return confirm('Are you sure ?'); " href="index.php?controllers=controlers&page=category/delete&id=<?= $row->ID ;?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>