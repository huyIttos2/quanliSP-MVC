<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 24/06/19
 * Time: 14:27
 */
if (isset($message)){
    echo "<p class='alert-info'>$message</p>";
}
?>
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Thêm mới sản phẩm</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" class="form-control" name="name"  placeholder="Nhập tên" required>
                </div>
                <div class="form-group">
                    <label>Giá sản phẩm</label>
                    <input type="text"ẩm class="form-control" name="price" placeholder="Nhập giá" required>
                </div>
                <div class="form-group">
                    <label>Trạng thái</label>
                    <input type="text" class="form-control" name="status" placeholder="Nhập trạng thái" required>
                </div><div class="form-group">
                    <label>Nhà sản xuất</label>
                    <input type="text" class="form-control" name="producer" placeholder="Nhập nhà sản xuất" required>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>
