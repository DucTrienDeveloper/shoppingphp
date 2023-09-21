<?php
  $conn = mysqli_connect("localhost","root","","mobile","3307") or die();
  session_start();
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully"; 
   $query = "SELECT * FROM billday WHERE status = 2"; 
   if(!isset($_SESSION['USER_ID'])){
    header("location:login.php");
    die();
   }
   
?>
<?php
require "../inc/header.php";
?>
<div id="layoutSidenav_content">

    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4" style="font-size: 30px;">Dashboard</h1>
            <ol class="breadcrumb mb-4" style="font-size: 14px; background: #f4f3f6;">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <!-- Start Thống kê tổng số lượng-->
            <div class="row">
                <!-- Start Hóa đơn trong ngày  -->
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body" style="display: flex;margin-bottom: -25px;">
                            <p style="font-size: 15px;">Số Đơn Hàng cần duyệt </p>

                        </div>
                        
                        <div style="text-align:right; margin-right: 30px;margin-bottom: -10px">
                            <p></p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="hoadon.php">Chi tiết</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body" style="display: flex;margin-bottom: -25px;">
                            <p style="font-size: 15px;">Số Đơn Hàng Trong Ngày</p>

                        </div>
                        <div style="text-align:right; margin-right: 30px;margin-bottom: -10px">
                            <p>200000</p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="hoadontrongngay.php">Chi tiết</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <!-- End Hóa đơn trong ngày -->
                <!-- Start Hóa đơn thành công trong ngày -->
                <div class="col-xl-3 col-md-6">

                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body" style="display: flex;margin-bottom: -25px;">
                            <p style="font-size: 15px;"> Nhân Viên Trong Ca Trực</p>

                        </div>
                        <div style="text-align:right; margin-right: 30px;margin-bottom: -10px">
                            <p>40</p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="nhanvien.php">Chi tiết</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <!-- End Hóa đơn thành công trong ngày -->
                <!-- Start Tổng doanh thu trong ngày -->
                <div class="col-xl-3 col-md-6">

                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body" style="display: flex;margin-bottom: -25px;">
                            <p style="font-size: 15px;">Tổng Doanh Thu Hôm nay </span></p>

                        </div>
                        <div style="text-align:right; margin-right: 30px;margin-bottom: -10px">
                            <p>5.000.000 VND</p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="doanhthu.php">Chi tiết</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <!-- End Tổng doanh thu trong ngày -->
                <!-- Start Đơn hàng cần phê duyệt -->
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body" style="display: flex;margin-bottom: -25px;">
                            <p style="font-size: 15px;">Tổng Doanh Thu Tháng <span> 9</span></p>

                        </div>
                        <div style="text-align:right; margin-right: 30px;margin-bottom: -10px">
                            <p>50</p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="doanhthu.php">Chi tiết</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>

                </div>
                <!-- End Đơn hàng cần phê duyệt -->
            </div>
            <!-- Start Hóa đơn trong ngày  -->

            <!-- End Hóa đơn trong ngày -->
            <!-- Start Hóa đơn thành công trong ngày -->

            <!-- End Hóa đơn thành công trong ngày -->

            <!-- End Đơn hàng cần phê duyệt -->

            <!-- End Thống kê tổng số lượng-->
            

            <div class="row">
                <div class="col-xl-6">
                    <div class="card " style="margin-top:20px">
                        <div class="card-header">
                            Biểu Đồ Tổng Doanh Thu Trong Ngày
                        </div>
                        <div class="card-body">
                        <div id="chartContainer333" style="height: 370px; width: 100%;"></div>
                        
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                <div class="card " style="margin-top:20px">
                        <div class="card-header">
                            Biểu Đồ Tổng Doanh Thu Trong Tháng
                        </div>
                        <div class="card-body">
                       <div id="resizable" style="height: 370px;border:1px solid gray;">
	        <div id="chartContainer1" style="height: 100%; width: 100%;"></div>
           </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- modal -->
        <div class="modal fade" id="HD01" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Hóa đơn cần duyệt</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p style="font-size:16px">Trạng Thái Hóa Đơn: </p>
                        <select class="form-select" aria-label="Default select example">
                            <option selected value="1">Duyệt</option>
                            <option value="2">Đang Chờ Duyệt</option>
                            <option value="3">Hủy</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">duyệt</button>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!--Start Footer -->
    <?php
            require "../inc/footer.php";
            ?>
    <!-- End footer -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery-ui.1.11.2.min.js"></script>
<script>
    $(document).ready(function () {
        var table = $('#example').DataTable({
            scrollX: true,
            "lengthChange": false,
            "pagingType": "full_numbers",
            "lengthMenu": [10, 15, 20, 25],
            "infoEmpty": "No entries to show",
            "info": false,
            "infoFiltered": " - filtered from _MAX_ records",
            searchPanes: {
                viewTotal: false
            },
            "search": {
                "label": "Fred"
            },
            dom: 'Plfrtip',
            language: {
                "search": "Tìm Kiếm:",
                "zeroRecords": "Không có Dữ Liệu",
                "emptyTable": "Không có sản phẩm nào sắp hết",
                paginate: {
                    previous: '<',
                    next: '>',
                    "first": "<<",
                    "last": ">>",
                    "search": "Tìm kiếm"

                }
            }
        });

        var table = $('#examp').DataTable({
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
                "emptyTable": "Không có những sản phẩn nào bán nhiều nhất",
                "zeroRecords": "Không có Dữ Liệu",
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
        var table = $('#exam').DataTable({
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

<script>
    window.onload = function () {
        // doanh thu theo ngay
        var limit = 31;    //increase number of dataPoints by increasing the limit
        var y = 100;
        var data = [];
        var dataSeries = { type: "line" };
        var dataPoints = [];
        for (var i = 0; i < limit; i += 1) {
            y += Math.round(Math.random() * 10 - 5);
            dataPoints.push({
                x: i,
                y: y
            });
        }
        dataSeries.dataPoints = dataPoints;
        data.push(dataSeries);

        //Better to construct options first and then pass it as a parameter
        var options = {
            zoomEnabled: false,
            animationEnabled: false,

            data: data  // random data
        };

        $("#chartContainer333").CanvasJSChart(options);

        // doanh thu theo tháng

        var options1 = {
	animationEnabled: true,
	
	data: [{
		type: "column", //change it to line, area, bar, pie, etc
	
		showInLegend: true,
		dataPoints: [
			{x:1, y: 10 },
			{x:2, y: 6 },
			{x:3, y: 14 },
			{x:4, y: 12 },
			{x:5, y: 19 },
			{x:6, y: 14 },
			{x:7, y: 26 },
			{x:8, y: 10 },
			{x:9, y: 22 },
            {x:10, y: 22 },
            {x:11, y: 22 }, 
            {x:12, y: 22 },
            
			]
		}]
};

$("#resizable").resizable({
	create: function (event, ui) {
		//Create chart.
		$("#chartContainer1").CanvasJSChart(options1);
	},
	resize: function (event, ui) {
		//Update chart size according to its container size.
		$("#chartContainer1").CanvasJSChart().render();
	}
});

    }
</script>

 <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

</body>

</html>