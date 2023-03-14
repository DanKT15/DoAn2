<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách Danh Mục</li>
        <li class="breadcrumb-item">Thêm Danh Mục</li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Tạo mới danh mục</h3>
          <div class="tile-body">
            
            <form class="row">

              <div class="form-group col-md-3">
                <label class="control-label">Tên danh mục</label>
                <input class="form-control" type="text">
              </div>

              <div class="form-group col-md-12">
                <label class="control-label">Mô tả danh mục</label>
                <textarea class="form-control" name="mota" id="mota"></textarea>
                <script>CKEDITOR.replace('mota');</script>
              </div>

              </div>
                <button class="btn btn-save" type="button">Lưu lại</button>
                <a class="btn btn-cancel" href="table-data-product.html">Hủy bỏ</a>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
</main>