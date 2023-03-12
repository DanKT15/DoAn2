<div class='title-main'><p>List Order</p></div>

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
      <th scope="col">Mã giao dich</th>
      <th scope="col">Ngày đặt</th>
      <th scope="col">Trạng thái</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php
  $id = 0;
    foreach($list_order as $key => $value)
    {
      $id++; 
  ?>
  <tbody>
  <td><?php echo $id ?></td>
  <td><?php echo $value['id_order'] ?></td>
  <td><?php echo $value['order_date'] ?></td>
  <td>
     <?php
      if($value['order_status']==0)
      {
     ?>
           <button type="button" class="btn btn-danger">Chưa xem</button>
     <?php
      }elseif($value['order_status']==1)
      {
     ?>
          <button type="button" class="btn btn-info">Đã xem</button>
     <?php
      }else{
     ?>
          <button type="button" class="btn btn-success">Đang xử lý</button>
     <?php
      }
     ?>
  </td>
  <td><a href="<?php echo BASE_URL ?>/order/order_detail/<?php echo $value['id_order']?>  
      
   
      
  
  ">Xem đơn hàng</a></td>
  </tbody>
  <?php
  
    }
  ?>
</table>



</div>