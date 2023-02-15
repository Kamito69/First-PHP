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
                            <h4>Sửa loại sản phẩm</h4>
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
                                    <?php
                                        if(isset($_GET['id'])){
                                            $id = $_GET['id'];
                                            $mau = getByID("colors", $id);

                                            if(mysqli_num_rows($mau) > 0)
                                            {
                                                $data = mysqli_fetch_array($mau);
                                            ?>
                                            <tr>
                                                <td>
                                                    <input type="hidden" value="<?= $data['id']; ?>" name="MaMau">  
                                                    <input type="text" value="<?= $data['TenMau']; ?>" name="TenMau" class="inputtextss" placeholder="nhập tên loại sp">    
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary" type="submit" name="edit_mau_btn">Sửa</button>
                                                </td>
                                            </tr>
                                            <?php
                                            }else{
                                                echo "Khong tim thay loai san pham";
                                            }
                                        }
                                        else{
                                            echo "Khong tim thay loai san pham";
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
        </form>



        <?php require_once ("admin_layouts/footer.php"); ?>