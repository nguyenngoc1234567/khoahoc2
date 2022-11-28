<h1>Add new</h1>
<form action="" method="post" enctype="multipart/form-data">
    productName:<input type="text" name="productName"> <br>
    stock:<input type="text" name="stock"> <br>
   thuộc danh mục sản phẩm  <th><select name="carld" >
                    <?php if (isset($rows)) : ?>
                        <?php foreach ($rows as $row) { ?>
                            <option value="<?= $row->ID ?>"><?= $row->catName ?></option>
                        <?php  } ?>
                        <?php else : "";
                    endif; ?>
                </select><br></th>
    brand_id: <th><select name="brand_id" >
                    <?php if (isset($rows1)) : ?>
                        <?php foreach ($rows1 as $row) { ?>
                            <option value="<?= $row->ID ?>"><?= $row->brandName ?></option>
                        <?php  } ?>
                        <?php else : "";
                    endif; ?>
                </select><br></th>
    product_desc:<input type="text" name="product_desc"> <br>
    type:<input type="text" name="type"> <br>
    price:<input type="text" name="price"> <br>
    IMAGE :<input type="file" name="image"> <br>
    <input type="submit" value="Them">
</form>