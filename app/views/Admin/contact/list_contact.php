<div class='title-main'><p>List Contact</p></div>

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
      <th scope="col">Content</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $id = 0;
    foreach ($contact as $key => $value)
    { $id++;
    ?>
    <tr>
      <th scope="row"><?php echo $id ?></th>
      <td><?php echo $value['content_contact'] ?></td>
      <td><?php echo $value['date'] ?></td>
      <td><a href="<?php echo BASE_URL ?>/contact/edit_contact/<?php echo $value['id_contact'] ?>">Edit</a> </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>



</div>