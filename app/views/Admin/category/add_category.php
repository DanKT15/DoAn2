<div class='title-main'><p>Add Category</p></div>

<div class="main-content">
<?php

if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value){
        echo '<h3 style="color: red;">'.$value.'</h3>';
    }
}

?>

    <form method='POST' action="/category/insert_category">
    <div class="form-group">
        <label for="email">Title Category:</label>
        <input type="text" class="form-control" name="title_category" id="email" required>
    </div>
    <div class="form-group">
        <label for="pwd">Desc:</label>
        <input type="text" name="desc_category" class="form-control" id="pwd" >
    </div>
    <div class="form-group">
        <label for="pwd">Parent:</label>
  
        <select class="form-control" name="parent" id="">
                <option value="">Add Parent</option>
                 <?php 
                foreach($parent as $key =>$value){
                ?>
                    <option value="<?php echo $value['id_parentCate'] ?>"><?php echo $value['title_parentCate'] ?></option>
                <?php
                    }
                ?>
        </select>
  
    </div>
    <button type="submit" class="btn btn-default">Add</button>
    </form>



</div>
