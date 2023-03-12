<div class='title-main'><p>Edit Category</p></div>

<div class="main-content">
    <?php

        foreach($categorybyid as $key => $value)
        {

        
    ?>
    <form method='POST' action="<?php echo BASE_URL ?>/category/update_category/<?php echo $value['id_category'] ?>">
    <div class="form-group">
        <label for="email">Title Category:</label>
        <input type="text" class="form-control" name="title_category" value="<?php echo $value['title_category'] ?>" id="email">
    </div>
    <div class="form-group">
        <label for="pwd">Desc:</label>
        <input type="text" name="desc_category" value="<?php echo $value['desc_category'] ?>" class="form-control" id="pwd">
    </div>
    <div class="form-group">
        <label for="pwd">parent:</label>
  
        <select class="form-control" name="category_product" id="">
        <?php

            foreach($parent as $key => $cate)
            {

            ?>
            <option <?php if($value['id_parentCate']==$cate['id_parentCate']){echo 'selected';} ?> value="<?php echo $cate['id_parentCate'] ?>"><?php echo $cate['id_parentCate'] ?></option>
        <?php 
            }
        ?>
        </select>
  
    </div>
    <button type="submit" class="btn btn-default">Edit</button>
    </form>
    <?php 
        }
    ?>



</div>
