<div class='title-main'><p>Edit Product</p></div>

<div class="main-content">
<?php

if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value){
        echo '<h3 style="color: red;">'.$value.'</h3>';
    }
}

?>
    <?php 
        foreach($editproduct as $key => $value){

      
    ?>
    <form method='POST' action="<?php echo BASE_URL ?>/product/update_product/<?php echo $value['id_product'] ?>" enctype="multipart/form-data" >
    <div class="form-group">
        <label for="email">Title Product:</label>
        <input type="text" class="form-control" name="title_product" value="<?php echo $value['title_product'] ?>" id="email">
    </div>

    <div class="form-group">
        <label for="email">Price Product:</label>
        <input type="text" class="form-control" name="price_product" value="<?php echo $value['price_product'] ?>"  id="email">
    </div>

    <div class="form-group">
        <label for="email">Quatity Product:</label>
        <input type="text" class="form-control" name="quatity_product" value="<?php echo $value['quatity_product'] ?>" id="email">
    </div>


    <div class="form-group">
        <label for="pwd">Desc:</label>
        <textarea style="resize:none" name="desc_product" id="" cols="155" rows="10" value="<?php echo $value['desc_product'] ?>"></textarea>
    </div>

    <div class="form-group">
        <label for="email">Image:</label>
        <input type="file" class="form-control" name="image_product" value="<?php echo $value['image_product'] ?>"  id="email">
        <img width="18%" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $value['image_product'] ?>" alt="">
    </div>

    <div class="form-group">
        <label for="pwd">Category:</label>
  
        <select class="form-control" name="category_product" id="">
        <?php

            foreach($category as $key => $cate)
            {

            ?>
            <option <?php if($value['id_category']==$cate['id_category']){echo 'selected';} ?> value="<?php echo $cate['id_category'] ?>"><?php echo $cate['title_category'] ?></option>
        <?php 
            }
        ?>
        </select>
  
    </div>


    <button type="submit" class="btn btn-default">Add</button>
    </form>
    <?php 
        }
    ?>



</div>
