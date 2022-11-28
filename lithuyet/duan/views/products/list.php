<?php

?>
<a href="index.php?page=products/add"> Thêm mới </a>
<table border="1">
    <thead>
        <tr>
            <th>ID </th>
            <th>productsName </th>
            <th>stock </th>
            <th>carld  </th>
            <th>brand_id  </th>
            <th>products_desc </th>
            <th>type </th>
            <th>price </th>
            <th>image</th>

            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $rows as $row ): ?>
            <tr>
                <td><?= $row->ID ;?> </td>
                <td><?= $row->productsName ;?> </td>
                <td><?= $row->stock ;?> </td>
                <td><?= $row->catName ;?> </td>
                <td><?= $row->brandName ;?> </td>
                <td><?= $row->product_desc ;?> </td>
                <td><?= $row->type ;?> </td>
                <td><?= $row->price ;?> </td>
                <td><img src="<?php echo 'http://localhost/modunl2/lithuyet/duan/public/uploads/luyentap/'?><?php echo $row->image?>" height="100" width="100"> </td>
              
                <td>
                <a href="index.php?page=products/edit&id=<?= $row->ID ;?>">Edit</a> <br>
                <a onclick=" return confirm('Are you sure ?'); " href="index.php?page=products/delete&id=<?= $row->ID ;?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>