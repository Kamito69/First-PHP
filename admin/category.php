<?php
	session_start();
    include('../middleware/adminMiddleware.php');
?>


<?php include('admin_layouts/header.php'); ?>
        
        &nbsp;
        
        <section id="new-arrivals" class="new-arrivals">
		<div class="container" style="text-align: center;">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Loại sản phẩm</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Mã loại sản phẩm</th>
                                        <th>Tên loại sản phẩm</th>
                                        <th>Sửa</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $cateloai = getAll("loaisp");
                                if(mysqli_num_rows($cateloai) > 0){
                                    foreach($cateloai as $item)
                                    {
                                ?>
                                    <tr>
                                        <td><?= $item['id']; ?></td>
                                        <td><?= $item['TenLoaiSP']; ?></td>
                                        <td><a href="editLoaiSP.php?id=<?= $item['id']; ?>" class="btn btn-primary">Sửa</td>
                                        <td>
                                            <form action="code.php" method="POST">
                                                <input type="hidden" name="MaLoaiSP" value="<?= $item['id']; ?>">
                                                <button type="submit" class="btn btn-danger" name="delete-loai">Xóa</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                    }else{
                                    echo "không tìm thấy";
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Màu sản phẩm</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Mã Màu sản phẩm</th>
                                        <th>Tên màu sản phẩm</th>
                                        <th>Sửa</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $catemau = getAll("colors");
                                    if(mysqli_num_rows($catemau) > 0){
                                    foreach($catemau as $item)
                                    {
                                ?>
                                    <tr>
                                        <td><?= $item['id']; ?></td>
                                        <td><?= $item['TenMau']; ?></td>
                                        <td><a href="editMau.php?id=<?= $item['id']; ?>" class="btn btn-primary">Sửa</td>
                                        <td>
                                            <form action="code.php" method="POST">
                                                <input type="hidden" name="MaMau" value="<?= $item['id']; ?>">
                                                <button type="submit" class="btn btn-danger" name="delete-mau">Xóa</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                    }else{
                                    echo "không tìm thấy";
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Hãng sản xuất</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Mã hãng sản xuất</th>
                                        <th>Tên hãng sản xuất</th>
                                        <th>Sửa</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $catehsx = getAll("hsx");
                                    if(mysqli_num_rows($catehsx) > 0){
                                    foreach($catehsx as $item)
                                    {
                                ?>
                                    <tr>
                                        <td><?= $item['id']; ?></td>
                                        <td><?= $item['TenHSX']; ?></td>
                                        <td><a href="editHSX.php?id=<?= $item['id']; ?>" class="btn btn-primary">Sửa</td>
                                        <td>
                                            <form action="code.php" method="POST">
                                                <input type="hidden" name="MaHSX" value="<?= $item['id']; ?>">
                                                <button type="submit" class="btn btn-danger" name="delete-hsx">Xóa</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                    }else{
                                    echo "không tìm thấy";
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <?php require_once ("admin_layouts/footer.php"); ?>