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
                            <h4>Loại sản phẩm</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Tên loại sản phẩm</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="text" name="TenLoaiSP" class="inputtextss" placeholder="nhập tên loại sp">    
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary" name="add_loaisp_btn">Thêm</button>
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