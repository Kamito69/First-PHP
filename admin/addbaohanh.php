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
                        <br><br>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Ngay Mua</th>
                                        <th>Ngay het bao hanh</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(isset($_GET['id'])){
                                            $id = $_GET['id'];
                                            $baohanh = getBycthd("baohanh", $id);

                                            if(mysqli_num_rows($baohanh) > 0)
                                            {
                                                $data = mysqli_fetch_array($baohanh);
                                            ?>
                                            <tr>
                                                <td>
                                                    <input type="text" readonly value="<?= date("d/m/Y", strtotime($data['ngaymua'])); ?>" name="NgayMua" class="inputtextss" placeholder="nhập tên hãng">    
                                                </td>
                                                <td>
                                                    <input type="date" name="NgayHetBaoHanh" class="inputtextss" <?= $data['ngayketthucbaohanh']; ?> placeholder="nhập thong tin">    
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary" type="submit" name="edit_baohanh_btn">Sửa</button>
                                                    <input type="hidden" name="baohanhid" value="<?= $data['id']; ?>">
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