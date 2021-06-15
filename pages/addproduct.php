 <div class="panel-body">
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Thêm sản phẩm</h4>
                </div>
                <div class="modal-body">
                    <form action="saveproduct.php" method="post" class = "form-group" >
                        <div id="ac">
                            
                            <span>Mã hàng : </span><input type="text" name="code" value = "<?php echo $pcode ?>" class = "form-control" />
                            <span>Tên hàng : </span><input type="text" name="bname" class = "form-control" />
                            <span>Đơn vị tính: </span>
                            <select name="categ" class = "form-control" >
                            <option>m2</option>
                            
                            <option>m</option>
                            <option>tan</option>
                    
                            </select>
                            <span>Nhãn hiệu : </span><input type="text" name="dname" class = "form-control" />
                            <span>Loại : </span>
                            <select name="unit" class = "form-control" >
                            <option>Loại</option>
                            <option>DK 30cm</option>
                            <option>DK 21cm</option>
                            <option>10p</option>
                            <option>Bao</option>
                            
                            </select>
                            <span>Giá chuẩn : </span><input type="text" name="cost" class = "form-control" />
                            <span>Giá bán : </span><input type="text" name="price"  class = "form-control" />
                            <span>Nhà cung cấp : </span>
                            <select name="supplier" class = "form-control">
                                <?php
                                include('connect.php');
                                $result = $db->prepare("SELECT * FROM supliers");
                                $result->bindParam(':userid', $res);
                                $result->execute();
                                for($i=0; $row = $result->fetch(); $i++){
                                    ?>
                                    <option><?php echo $row['suplier_name']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <span>Số lượng : </span><input type="text" name="qty" class = "form-control" />
                            <span>Ngày nhập: </span><input type="date" name="date_del" class = "form-control" />
                            
                            <span>&nbsp;</span><input class="btn btn-primary btn-block" type="submit" class = "form-control" value="Save" />
                        </div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
                        <!-- /.modal -->