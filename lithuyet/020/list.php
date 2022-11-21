<?php
 include_once 'db.php'; 
 $sql = "SELECT * FROM `luyentap`";
 $stmt = $conn->query($sql);
 $stmt->setFetchMode(PDO::FETCH_OBJ);//array => object
 $rows = $stmt->fetchAll(); 

// echo '<pre>';
// print_r($rows);
// echo '</pre>';
?>
<table border="1">
    <tr>
        <th>CODE</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>ADDRESS</th>
        <th>PHONE</th>
        <th>IMAGE</th>
    </tr>
    <?php foreach ($rows as $row): ?>
    <tr>
    <td><?= $row->CODE; ?></td>
    <td><?=$row->NAME; ?></td>
    <td><?=$row->EMAIL; ?></td>
    <td><?=$row->ADDRESS; ?></td>
    <td><?=$row->PHONE; ?></td>
    <td><img src="<?php echo 'http://localhost/modunl2/lithuyet/020/public/uploads/luyentap/'?><?php echo $row->IMAGE?>" height="100" width="100"> </td>

    <td>
    <a href="edit.php ?id=<?= $row->ID ; ?>">Edit</a> <br>
    <a href="delete.php ?id=<?= $row->ID ; ?>">Delete</a> <br>
    
    </td>
    </tr>
    <?php endforeach; ?>
</table>

 