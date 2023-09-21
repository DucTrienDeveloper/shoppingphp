<?php
require "../inc/header.php";
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4" style="font-size: 30px;">Hóa Đơn  trong ngày  </h1>
            <ol class="breadcrumb mb-4" style="font-size: 14px; background: #f4f3f6;">
                <li class="breadcrumb-item active">Quản Lý Hóa Đơn</li>
            </ol>
            <div class="row" style=" margin-right: -20px;">
            </div>
            <div class="row">
                <table id="sanpham" class="display table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã  Hóa Đơn</th>
                            <th>Tên khác hàng</th>
                            <th>Tên Nhân Viên</th>
                            <th>Tống Tiền</th>
  
                            <th>Chi Tiết</th>
                            <th>giờ</th>   
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>01</td>
                        <td>HD099888</td>
                        <td>Nguyễn Văn Mạnh</td>
                        <td>Trần Thị Linh</td>

                        <td>500000 <span>VNĐ</span></td>
                    <td><button type="button" class="btn btn-info"  data-bs-toggle="modal"   data-bs-target="#add">Chi tiết</button></td>
                        <td>12/09/2021</td>
                       
                    </tr>
                    <tr>
                    <td>01</td>
                        <td>HD099888</td>
                        <td>Nguyễn Văn Mạnh</td>
                        <td>Trần Thị Linh</td>
                        <td>500000 <span>VNĐ</span></td>

                        <td><button type="button" class="btn btn-info"  data-bs-toggle="modal"   data-bs-target="#add">Chi tiết</button></td>
                        <td>12/09/2021</td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>HD099888</td>
                        <td>Nguyễn Văn Mạnh</td>
                        <td>Trần Thị Linh</td>
                        <td>500000 <span>VNĐ</span></td>

                        <td><button type="button" class="btn btn-info"  data-bs-toggle="modal"   data-bs-target="#add">Chi tiết</button></td>
                        <td>12/09/2021</td>
                    </tr>
                    <tr>
                    <td>01</td>
                        <td>HD099888</td>
                        <td>Nguyễn Văn Mạnh</td>
                        <td>Trần Thị Linh</td>
                        <td>500000 <span>VNĐ</span></td>
   
                        <td><button type="button" class="btn btn-info"  data-bs-toggle="modal"   data-bs-target="#add">Chi tiết</button></td>
                        <td>12/09/2021</td>
                    </tr>
                  
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