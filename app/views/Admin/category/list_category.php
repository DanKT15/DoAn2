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
      <th scope="col">Desc</th>
      <th scope="col">Parent_category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $id = 0;
    foreach ($list_category as $key => $value)
    { $id++;
    ?>
    <tr>
      <th scope="row"><?php echo $id ?></th>
      <td><?php echo $value['title_category'] ?></td>
      <td><?php echo $value['desc_category'] ?></td>
      <td><?php echo $value['title_parentCate'] ?></td>
      <td><a href="<?php echo BASE_URL ?>/category/edit_category/<?php echo $value['id_category'] ?>">Edit</a> | <a href="<?php echo BASE_URL ?>/category/delete_category/<?php echo $value['id_category'] ?>">Del</a></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>



</div>