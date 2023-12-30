<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <div id="search"></div>
    
    <form  method="get" id="form">
        <input type="text" name="search" class="form-control" id="live_search" autocomplete="off" placeholder="search......">
        <input type="submit">
    </form>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        let dataReturn = {}
        $(document).ready(function() {
            $("#live_search").keyup(function() {
                var input = $(this).val();
                if (input.length > 2 ) {
                   
                    $.ajax({
                        url: "search_product.php",
                        method: "POST",
                        data: {
                            input: input
                        },
                        

                        success: function(data) {
                            // $("#search").html(data);
                            dataReturn = data ;
                            console.log(dataReturn)
                        }
                    });
                } else {
                    $("#search").css("display", "none");
                    
                }
            });
        

        }); -->
        <!-- // var handleClick = document.getElementById("live_search");
        // handleClick.addEventListener("keypress", function(event){
        //     if (event.key === "Enter") {
        //         var data = handleClick.val();
        //         console.log(data,"data enter");
        //     }
        // }) -->
    <!-- </script> -->
    <script>
        let dataReturn = {}
        const getData = document.getElementById("live_search");
        console.log(getData,"getData")
       
            $("#form").on("submit",function(){
                event.preventDefault();
                if($("#live_search").val() ==""){
                    alert("vui lòng nhập sản phẩm bạn muốn tìm kiếm");
                }
                else{
                    $.ajax({
                        url : "handleproduct.php",
                        method : "get",
                        data : $("#form").serialize(),
                        
                        
                        success : function(data){
                           dataReturn = data,
                           console.log(dataReturn,"datareturn")
                        }
                    });
                }
            })
        
    </script>
</body>

</html>



<!-- $search = "iPhone";
echo $search;
$sql = "SELECT * FROM `sanpham` WHERE tensp LIKE '{$search}%'";
$query = mysqli_query($conn, $sql);
$nums = mysqli_num_rows($query);
if ($nums != 0) {
    if ($nums = 1) {

        while ($rows = mysqli_fetch_array($query)) {
            echo $row['tensp'];
        }
        exit();
    }
    if ($nums > 1) {

        while ($row = mysqli_fetch_array($query)) {
            echo $row['tensp'];
        }
        exit();
    }
} else {
    $sql = "SELECT sanpham.tensp,sanpham.gia,sanpham.img FROM sanpham WHERE sanpham.dungluong = (SELECT iddungluong FROM luuluong WHERE (luuluong.dungluong = $search) AND (luuluong.loai = 'RAM') )";
    $query = mysqli_query($conn, $sql);
    $nums = mysqli_num_rows($query);
    if ($nums > 1) {
        while ($row = mysqli_fetch_array($query)) {
            echo $row['tensp'];
        }
    }
} -->