<?php
	session_start();
    include('../middleware/adminMiddleware.php');
?>

        
		<?php include('admin_layouts/header.php'); ?>
        
        &nbsp;
        
        <form action="../admin/code.php" method="POST" enctype="multipart/form-data">
        <section id="new-arrivals" class="new-arrivals">
			<div class="container" style="text-align: center;">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>thêm sản phẩm</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Danh mục</th>
                                        <th style="text-align: center;">
                                            <button type="submit" class="btn btn-primary" name="add_product_btn">Thêm</button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Tên sản phẩm</th> 
                                        <td>
                                            <input type="text" required name="TenSP" class="inputtextss" placeholder="nhập tên sp">    
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Loại màu</th> 
                                        <td>
                                            <select name="MaMau" class="form-select">
                                                <option selected>chọn màu</option>
                                                <?php
                                                    $Loaimau = getAll("colors");

                                                    if(mysqli_num_rows($Loaimau) > 0)
                                                    {
                                                        foreach ($Loaimau as $item) {
                                                            ?>
                                                                <option value="<?= $item['id']; ?>"><?= $item['TenMau']; ?></option>
                                                            <?php
                                                        }
                                                    }
                                                    else
                                                    {
                                                        echo "ko co mau";
                                                    }
                                                ?>

                                            </select>
                                        </td>
                                    </tr>  
                                    <tr>
                                        <th>Hãng sản xuất</th> 
                                        <td>
                                            <select name="MaHangSanXuat" class="form-select">
                                                <option selected>chọn hãng</option>
                                                <?php
                                                    $Hsx = getAll("hsx");

                                                    if(mysqli_num_rows($Hsx) > 0)
                                                    {
                                                        foreach ($Hsx as $item) {
                                                            ?>
                                                                <option value="<?= $item['id']; ?>"><?= $item['TenHSX']; ?></option>
                                                            <?php
                                                        }
                                                    }
                                                    else
                                                    {
                                                        echo "ko co mau";
                                                    }
                                                ?>

                                            </select>
                                        </td>
                                    </tr>  
                                    <tr>
                                        <th>Loại sản phẩm</th> 
                                        <td>
                                            <select name="MaLoaiSP" class="form-select">
                                                <option selected>chọn loại</option>
                                                <?php
                                                    $Loaisp = getAll("loaisp");

                                                    if(mysqli_num_rows($Loaisp) > 0)
                                                    {
                                                        foreach ($Loaisp as $item) {
                                                            ?>
                                                                <option value="<?= $item['id']; ?>"><?= $item['TenLoaiSP']; ?></option>
                                                            <?php
                                                        }
                                                    }
                                                    else
                                                    {
                                                        echo "ko co mau";
                                                    }
                                                ?>

                                            </select>
                                        </td>
                                    </tr>  
                                    <tr>
                                        <th>Ngày nhập kho</th> 
                                        <td>
                                            <input type="date" name="NgayNhapKho" class="inputtextss" placeholder="nhập tên sp">    
                                        </td>
                                    </tr>   
                                    <tr>
                                        <th>Số lượng sản phẩm</th> 
                                        <td>
                                            <input type="number" required name="SoLuongSP" class="inputtextss" placeholder="nhập số">    
                                        </td>
                                    </tr>   
                                    <tr>
                                        <th>Thời gian bảo hành</th> 
                                        <td>
                                            <input type="text" required name="ThoiGianBaoHanh" class="inputtextss" placeholder="nhập tên sp">    
                                        </td>
                                    </tr>   
                                    <tr>
                                        <th>Giới thiệu sản phẩm</th> 
                                        <td>
                                            <textarea rows="4" cols="48" required name="GioiThieuSP" placeholder="nhập thông tin sản phẩm"></textarea>
                                        </td>
                                    </tr>   
                                    <tr>
                                        <th>Ảnh sản phẩm</th> 
                                        <td>
                                            <input type="file" name="Anh" class="inputtextss" placeholder="chọn ảnh">    
                                        </td>
                                    </tr>   
                                    <tr>
                                        <th>Giá sản phẩm</th> 
                                        <td>
                                            <input type="number" name="GiaSP" class="inputtextss" placeholder="nhập giá sp">    
                                        </td>
                                    </tr>   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        </form>


        <?php require_once ("admin_layouts/footer.php"); ?>