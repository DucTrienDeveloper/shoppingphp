<?php
$conn = mysqli_connect("localhost","root","","mobile","3307") or die();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  ?>
   
<?php
require "../inc/header.php";
?>



<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4" style="font-size: 30px;">Hóa Đơn chờ phê duyệt </h1>
            <ol class="breadcrumb mb-4" style="font-size: 14px; background: #f4f3f6;">
                <li class="breadcrumb-item active">Quản Lý Hóa Đơn</li>
            </ol>
            <div class="row" style=" margin-right: -20px;">
            </div>
            <div class="row">
                <table id="sanpham" class="display table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID BILL</th>
                            <th>ID sp</th>
                            <th>giá</th>
                            <th>Tổng bill</th>
                            <th>Trạng thái</th>
                            <th>tenkh</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM hoadon WHERE trangthai = 2";
                        $query = mysqli_query($conn,$sql);
                        error_reporting(0);
                        $num = mysqli_num_rows($query);
                        if($num > 0 ){
                            while($row = mysqli_fetch_array($query)){
                                if($row['trangthai'] == 2){
                                    $trangthai = "chờ thanh toán";
                                }
                                $insert = mysqli_query($conn,"SELECT khachhang.hoten FROM `hoadon` JOIN khachhang ON hoadon.idkh = khachhang.idkh ") ;
                                $result = $insert ->fetch_assoc();
                        ?>
                    <tr>
                        <td><?php echo $row["id"]?></td>
                        <td><?php echo $row["idsp"]?></td>
                        <td><?php echo $row["gia"]?></td>
                        <td><?php echo $row["tongbill"]?></td>
                        <td><?php echo $trangthai?></td>
                        <td><?php echo $result['hoten']?></td>
                        
                       
                       <?php
                        }
                    }
                       ?>
                    </tr>
                    <tr>
     
                  
                    </tbody>
                </table>
                <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Chi Tiết Hóa Đơn</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                <div class="col-lg-12">
                                <table id="chitiet" class="display table table-hover" style="width:100%">
                    <thead style="width:100%">
                        <tr style="width:100%">
                            <th>STT</th>
                            <th>SL</th>
                            <th>Tên Sản Phẩm</th>     
                            <th>Giá</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>01</td>
                        <td>HD099</td>
                        <td>phone</td>
                        <td>500000 <span>VNĐ</span></td>
                       
                    </tr>
                     <tr>
                       <td>01</td>
                        <td>HD099</td>
                        <td>phone</td>
                        <td>500000 <span>VNĐ</span></td>
                      
                    </tr>
                    <tr>
                    <td>01</td>
                        <td>HD099</td>
                        <td>phone</td>
                        <td>500000 <span>VNĐ</span></td>
                    </tr>
                    <tr>
                    <td>01</td>
                        <td>HD099</td>
                        <td>phone</td>
                        <td>500000 <span>VNĐ</span></td>
                       </tr>               
                    </tbody>
                </table>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="modal fade" id="chua" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Duyệt</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Trang Thái</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected value="1">Thanh Toán</option>
                                                <option selected value="1">Chưa Thanh Toán</option>
                                          
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>`
    <div>

        <?php
            require "../inc/footer.php";
            ?>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery-ui.1.11.2.min.js"></script>
<script>
    $(document).ready(function () {

        var table = $('#sanpham').DataTable({
            scrollX: true,
            "lengthChange": false,
            "pagingType": "full_numbers",
            "lengthMenu": [10, 15, 20, 25],
            "loadingRecords": "Loading...",
            "infoEmpty": "No entries to show",
            "info": false,
            "infoFiltered": " - filtered from _MAX_ records",
            searchPanes: {
                viewTotal: false
            },
            "search": {

            },
            dom: 'Plfrtip',
            language: {
                "search": "Tìm Kiếm:",
                "zeroRecords": "Không có Dữ Liệu",
                "emptyTable": "Không có hóa đơn nào cần phê duyệt",
                paginate: {
                    previous: '<',
                    next: '>',
                    "loadingRecords": "Loading...",
                    "first": "<<",
                    "last": ">>",
                    "emptyTable": "Không có dữ liệu trong table",
                    "search": "Tìm kiếm"

                }
            }
        });
        
    });</script>

</body>

</html>