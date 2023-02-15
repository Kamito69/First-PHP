<?php
	session_start();
    include('../middleware/adminMiddleware.php');
?>

        
		<?php include('admin_layouts/header.php'); ?>
        
        &nbsp;
        
        <form action="../admin/code.php" method="POST" enctype="multipart/form-data">
        <section id="new-arrivals" class="new-arrivals">
			<div class="container" style="text-align: center;">
            <?php
                if(isset($_GET['id']))
                {
                $id = $_GET['id'];
                $product = getByID("products", $id);
                    if(mysqli_num_rows($product) > 0)
                    {
                        $data = mysqli_fetch_array($product);

                    ?>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>edit sản phẩm</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Danh mục</th>
                                                <th style="text-align: center;">
                                                    <button type="submit" class="btn btn-primary" name="edit_product_btn">Sửa</button>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Tên sản phẩm</th> 
                                                <td>
                                                    <input type="hidden" name="product_id" value="<?= $data['id']; ?>">
                                                    <input type="text" required name="TenSP" class="inputtextss" placeholder="nhập tên sp" value="<?= $data['TenSP']; ?>">    
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
                                                                        <option value="<?= $item['id']; ?>" <?= $data['MaMau'] == $item['id']?'selected':'' ?>><?= $item['TenMau']; ?></option>
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
                                                                        <option value="<?= $item['id']; ?>" <?= $data['MaHangSanXuat'] == $item['id']?'selected':'' ?>><?= $item['TenHSX']; ?></option>
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
                                                                    <option value="<?= $item['id']; ?>" <?= $data['MaLoaiSP'] == $item['id']?'selected':'' ?>><?= $item['TenLoaiSP']; ?></option>
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
                                                    <input type="date" name="NgayNhapKho" class="inputtextss" placeholder="nhập tên sp" value="<?= $data['NgayNhapKho']; ?>">    
                                                </td>
                                            </tr>   
                                            <tr>
                                                <th>Số lượng sản phẩm</th> 
                                                <td>
                                                    <input type="number" required name="SoLuongSP" class="inputtextss" placeholder="nhập số" value="<?= $data['SoLuongSP']; ?>">    
                                                </td>
                                            </tr>   
                                            <tr>
                                                <th>Thời gian bảo hành</th> 
                                                <td>
                                                    <input type="text" required name="ThoiGianBaoHanh" class="inputtextss" placeholder="nhập tên sp" value="<?= $data['ThoiGianBaoHanh']; ?>">    
                                                </td>
                                            </tr>   
                                            <tr>
                                                <th>Giới thiệu sản phẩm</th> 
                                                <td>
                                                    <textarea rows="4" cols="48" required name="GioiThieuSP" placeholder="nhập thông tin sản phẩm"><?= $data['GioiThieuSP']; ?></textarea>
                                                </td>
                                            </tr>   
                                            <tr>
                                                <th>Ảnh sản phẩm</th> 
                                                <td>
                                                    <input type="file" name="Anh" class="inputtextss" placeholder="chọn ảnh">
                                                    <div style="display: flex; align-items: center;">
                                                        <h5>Ảnh cũ : </h5>
                                                        <input type="hidden" name="Anhcu" value="<?= $data['Anh']; ?>">
                                                        <img width="100px" height="100px" src="../uploads/<?= $data['Anh']; ?>">  
                                                    </div>  
                                                </td>
                                            </tr>   
                                            </tr>   
                                            <tr>
                                                <th>Giá sản phẩm</th> 
                                                <td>
                                                    <input type="number" name="GiaSP" class="inputtextss" placeholder="nhập giá sp" value="<?= $data['GiaSP']; ?>">    
                                                </td>
                                            </tr>   
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                    <?php
                    }else{
                        echo "ko tim thays id";
                    }
                }
                else{
                    echo "ko thay id";
                }
            ?>
            </div>
        </section>
        </form>


        <?php require_once ("admin_layouts/footer.php"); ?>