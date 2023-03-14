<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách Tài Khoản</b></a></li>
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
                            Tạo mới Tài Khoản</a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Mã tài khoản</th>
                                <th>Họ và Tên</th>
                                <th>Địa Chỉ</th>
                                <th>SDT</th>
                                <th>Email</th>
                                <th>Pass</th>
                                <th>Quyền/th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>71309005</td>
                                <td>Bàn ăn gỗ Theresa</td>
                                <td>/img-sanpham/theresa.jpg</td>
                                <td>71309005</td>
                                <td>Bàn ăn gỗ Theresa</td>
                                <td>/img-sanpham/theresa.jpg</td>
                                <td>Bàn ăn gỗ Theresa</td>

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