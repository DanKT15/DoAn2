<div class='title-main'><p>Edit Category</p></div>

<div class="main-content">
    <?php

        foreach($catepostbyid as $key => $value)
        {

        
    ?>
    <form method='POST' action="<?php echo BASE_URL ?>/catepost/update_catepost/<?php echo $value['id_catePost'] ?>">
    <div class="form-group">
        <label for="email">Title Category:</label>
        <input type="text" class="form-control" name="title_catepost" value="<?php echo $value['title_catePost'] ?>" id="email">
    </div>
   
    <button type="submit" class="btn btn-default">Edit</button>
    </form>
    <?php 
        }
    ?>



</div>
