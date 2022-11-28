<h1>Update</h1>
<form action="" method="post" enctype="multipart/form-data">
    productsName :<input type="text" name="productName" value="<?= $row->productsName; ?>"> <br>
    stock :<input type="text" name="stock" value="<?= $row->stock; ?>"> <br>


    thuộc danh mục sản phẩm <th> <select name="carld" class="form-control" id="">
            <?php foreach ($rows2 as $row2) { ?>
                <option <?= $row2->ID == $row->carld ? "selected" : " " ?> value="<?= $row2->ID; ?>"><?= $row2->catName; ?></option>
            <?php } ?>
        </select><br></th>

    brand_id <th> <select name="brand" class="form-control" id="">
            <?php foreach ($rows1 as $row1) { ?>
                <option <?= $row1->ID == $row->brand_id ? "selected" : " " ?> value="<?= $row1->ID; ?>"><?= $row1->brandName; ?></option>
            <?php } ?>
        </select><br></th>

    products_desc :<input type="text" name="product_desc" value="<?= $row->product_desc; ?>"> <br>
    type :<input type="text" name="type" value="<?= $row->type; ?>"> <br>
    price :<input type="text" name="price" value="<?= $row->price; ?>"> <br>

    <label for="pwd">Hình ảnh sản phẩm</label>
    <input type="file" name="image" class="form-control">
    <p> <img src="<?php echo 'http://localhost/modunl2/lithuyet/duan/public/uploads/luyentap/' ?><?php echo $row->IMAGE ?>" height="100" width="100"></p>
    <input type="submit" value="Sua">












</form>