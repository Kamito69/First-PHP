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
                            <h4>Sửa hẵng sản xuất</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Tên hẵng sản xuất</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(isset($_GET['id'])){
                                            $id = $_GET['id'];
                                            $hsx = getByID("hsx", $id);

                                            if(mysqli_num_rows($hsx) > 0)
                                            {
                                                $data = mysqli_fetch_array($hsx);
                                            ?>
                                            <tr>
                                                <td>
                                                    <input type="hidden" value="<?= $data['id']; ?>" name="MaHSX">  
                                                    <input type="text" value="<?= $data['TenHSX']; ?>" name="TenHSX" class="inputtextss" placeholder="nhập tên hãng">    
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary" type="submit" name="edit_hsx_btn">Sửa</button>
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