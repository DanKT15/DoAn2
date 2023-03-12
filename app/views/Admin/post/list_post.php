<div class='title-main'><p>List Post</p></div>

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
      <th scope="col">Title</th>
      <th scope="col">Desc</th>
      <th scope="col">Content</th>
      <th scope="col">Image</th>
      <th scope="col">Catepost</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $id = 0;
    foreach ($list_post as $key => $value)
    { $id++;
    ?>
    <tr>
      <th scope="row"><?php echo $id ?></th>
      <td><?php echo $value['title_post'] ?></td>
      <td><?php echo substr($value['desc_post'],0,50) ?></td>
      <td><?php echo substr($value['content_post'],0,100) ?></td>
      <td>
        <img style="width: 66px" src="<?php echo BASE_URL ?>/public/uploads/post/<?php echo $value['image_post'] ?>" alt="">
      </td>
      <td>1</td>
      <td><?php echo $value['date_post'] ?></td>
      <td><a href="<?php echo BASE_URL ?>/post/edit_post/<?php echo $value['id_post'] ?>">Edit</a> | <a href="<?php echo BASE_URL ?>/post/delete_post/<?php echo $value['id_post'] ?>">Del</a></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>



</div>