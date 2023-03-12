<div class='title-main'><p>List Product</p></div>

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
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Desc</th>
      <th scope="col">Image</th>
      <th scope="col">Category</th>
      <th scope="col">Created at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $id = 0;
    foreach ($list_product as $key => $value)
    { $id++;
    ?>
    <tr>
      <th scope="row"><?php echo $id ?></th>
      <td><?php echo $value['title_product'] ?></td>
      <td><?php echo $value['price_product'] ?></td>
      <td><?php echo $value['quatity_product'] ?></td>
      <td><?php echo substr($value['desc_product'],0,100) ?></td>
      <td>
        <img style="width: 66px" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $value['image_product'] ?>" alt="">
      </td>
      
      <td><?php echo $value['title_category'] ?></td>
      <td><?php echo $value['created_at'] ?></td>

      <td><a href="<?php echo BASE_URL ?>/product/edit_product/<?php echo $value['id_product'] ?>">Edit</a> | <a href="<?php echo BASE_URL ?>/product/delete_product/<?php echo $value['id_product'] ?>">Del</a></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>



</div>