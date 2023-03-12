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

    <form method='POST' action="<?php echo BASE_URL ?>/post/insert_post" enctype="multipart/form-data" >
    <div class="form-group">
        <label for="email">Title Post:</label>
        <input type="text" class="form-control" name="title_post" id="email">
    </div>


    <div class="form-group">
        <label for="pwd">Desc:</label>
        <textarea style="resize:none" name="desc_post" id="" cols="155" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label for="pwd">Content:</label>
        <textarea style="resize:none" name="content_post" id="editor1" cols="155" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label for="email">Image:</label>
        <input type="file" class="form-control" name="image_post" id="email">
    </div>

    <div class="form-group">
        <label for="pwd">Category Post:</label>
  
        <select class="form-control" name="catepost" id="">
                <option value="">Add Category Post</option>
                 <?php 
                foreach($catepost as $key =>$value){
                ?>
                    <option value="<?php echo $value['id_catePost'] ?>"><?php echo $value['title_catePost'] ?></option>
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
