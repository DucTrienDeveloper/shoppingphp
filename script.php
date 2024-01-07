<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script type="text/javascript">
  function submitData(){
    $(document).ready(function(){
      var data = {
        fullname: $("#fullname").val(),
        email: $("#email").val(),
        action: $("#action").val(),
        phone:$("#phonenumber").val(),
        diachi: $("#address").val(),
        tuoi : $("#age").val(),
        password : $("#password").val(),

      };

      $.ajax({
        url: 'function1.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Register Successful"){
            window.location.reload();
          }
        }
      });
    });
  }


  function submitDataLogin(){
    $(document).ready(function(){
      var data = {
        username: $("#username").val(),
        password: $("#password").val(),
        action: $("#action").val(),
        

      };

      $.ajax({
        url: 'function1.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Login Successful"){
            window.location.reload();
          }
        }
      });
    });
  }
</script>