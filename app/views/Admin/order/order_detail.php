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

<?php
  foreach($order_detail as $key => $info_order){

    $name = $info_order['order_name'];
    $email = $info_order['order_email'];
    $address = $info_order['order_address'];
    $phone = $info_order['order_phone'];
    $content = $info_order['order_content'];

  
  }
?>

<div> Thông tin đơn hàng
  <div>Tên khách hàng: <?php echo $name ?></div>
  <div>Email: <?php echo $email ?></div>
  <div>Địa chỉ: <?php echo $address ?></div>
  <div>Số điện thoại: <?php echo $phone ?></div>
  <div>Nội dung: <?php echo $content ?></div>
</div>



<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Giá tiền</th>
      <th scope="col">Số lượng</th>
      
      <th scope="col">Hình ảnh</th>
    </tr>
  </thead>
    <?php
        $subtotal = 0;
        $total=0;
        foreach($order_detail as $key => $value){
          $subtotal= $value['price_product']*$value['order_quatity'];
          $total +=$subtotal; 
        
    ?>
    <tbody>
            <td></td>
            <td><?php echo $value['title_product'] ?></td>
            <td><?php echo $value['price_product'] ?></td>
            <td><?php echo $value['order_quatity'] ?></td>
            <td><img style="width: 66px" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $value['image_product'] ?>" alt=""></td>
    
           
  </tbody>
  <?php
        }
  ?>
  <tr>
    <td colspan="3">Total: <?php echo $total ?></td>
   
      <form action="<?php echo BASE_URL ?>/order/confirm_order_view/<?php echo $value['id_order'] ?>" method="POST">
        <td><input type="submit"  value='Chỉ xem đơn hàng'></td>
       
       
      </form>
      <form action="<?php echo BASE_URL ?>/order/confirm_order_handle/<?php echo $value['id_order'] ?>" method="POST">
       
        <td><input type="submit" name=2 value='Xử lý'></td>
       
      </form>
    
   
  </tr>
</table>



</div>