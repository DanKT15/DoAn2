<div class='title-main'><p>Edit contact</p></div>

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

        foreach($edit_contact as $key => $value)
        {
    
    ?>
    <form method='POST' action="<?php echo BASE_URL ?>/contact/update_contact/<?php echo $value['id_contact'] ?>" >
   
    <div class="form-group">
        <label for="pwd">Content:</label>
        <textarea style="resize:none" name="content" value="<?php echo $value['content_contact'] ?>"   id="editor1" cols="155" rows="10"><?php echo $value['content_contact'] ?></textarea>
    </div>
 


    <button type="submit" class="btn btn-default">Edit</button>
    </form>

            <?php 
        }
            ?>

</div>

<script>
                        CKEDITOR.replace( 'editor1' );
</script>
