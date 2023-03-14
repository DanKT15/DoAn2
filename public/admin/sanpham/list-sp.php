<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
          
                          <a class="btn btn-add btn-sm" href="form-add-san-pham.html" title="Thêm"><i class="fas fa-plus"></i>
                            Tạo mới sản phẩm</a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh</th>
                                <th>Số lượng</th>
                                <th>Tình trạng</th>
                                <th>Giá tiền</th>
                                <th>Danh mục</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>71309005</td>
                                <td>Bàn ăn gỗ Theresa</td>
                                <td>/img-sanpham/theresa.jpg//img-sanpham/theresa.jpg</td>
                                <td>40</td>
                                <td><span class="badge bg-success">Còn hàng</span></td>
                                <td>5.600.000 đ</td>
                                <td>Bàn ăn</td>
                                <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                                        onclick="myFunction(this)"><i class="fas fa-trash-alt"></i> 
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal"
                                    data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                   
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
