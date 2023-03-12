<div class='title-main'><p>List Category</p></div>

<div class="main-content">
<?php

if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value){
        echo '<h3 style="color: red;">'.$value.'</h3>';
    }
}

?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $id = 0;
    foreach ($list_catepost as $key => $value)
    { $id++;
    ?>
    <tr>
      <th scope="row"><?php echo $id ?></th>
      <td><?php echo $value['title_catePost'] ?></td>
      <td><a href="<?php echo BASE_URL ?>/catepost/edit_catepost/<?php echo $value['id_catePost'] ?>">Edit</a> | <a href="<?php echo BASE_URL ?>/catepost/delete_catepost/<?php echo $value['id_catePost'] ?>">Del</a></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>



</div>