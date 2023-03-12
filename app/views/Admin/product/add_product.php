<div class='title-main'><p>Add Product</p></div>

<div class="main-content">
<?php

if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value){
        echo '<h3 style="color: red;">'.$value.'</h3>';
    }
}

?>

    <form method='POST' action="<?php echo BASE_URL ?>/product/insert_product" enctype="multipart/form-data" >
    <div class="form-group">
        <label for="email">Title Product:</label>
        <input type="text" class="form-control" name="title_product" id="email">
    </div>

    <div class="form-group">
        <label for="email">Price Product:</label>
        <input type="text" class="form-control" name="price_product" id="email">
    </div>

    <div class="form-group">
        <label for="email">Quatity Product:</label>
        <input type="text" class="form-control" name="quatity_product" id="email">
    </div>


    <div class="form-group">
        <label for="pwd">Desc:</label>
        <textarea style="resize:none" id="editor1" name="desc_product"  cols="155" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label for="email">Image:</label>
        <input type="file" class="form-control" name="image_product" id="email">
    </div>

    <div class="form-group">
        <label for="pwd">Hot:</label>
  
        <select class="form-control" name="hot_product" id="">
                <option value="0">Không</option>
                <option value="1">Có</option>
                
        </select>
  
    </div>

    <div class="form-group">
        <label for="pwd">Category:</label>
  
        <select class="form-control" name="category_product" id="">
                <option value="">Add category</option>
                 <?php 
                foreach($category as $key =>$value){
                ?>
                    <option value="<?php echo $value['id_category'] ?>"><?php echo $value['title_category'] ?></option>
                <?php
                    }
                ?>
        </select>
  
    </div>


    <button type="submit" class="btn btn-default">Add</button>
    </form>



</div>

<script>
                        CKEDITOR.replace( 'editor1' );
                </script>

