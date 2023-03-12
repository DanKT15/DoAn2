<div class='title-main'><p>Add Catepost</p></div>

<div class="main-content">
<?php

if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value){
        echo '<h3 style="color: red;">'.$value.'</h3>';
    }
}

?>

    <form method='POST' action="<?php echo BASE_URL ?>/catepost/insert_catepost">
    <div class="form-group">
        <label for="email">Title :</label>
        <input type="text" class="form-control" name="title_catepost" id="email">
    </div>
    <!-- <div class="form-group">
        <label for="pwd">Desc:</label>
        <input type="text" name="desc_category" class="form-control" id="pwd">
    </div> -->
   
  
    <button type="submit" class="btn btn-default">Add</button>
    </form>



</div>
