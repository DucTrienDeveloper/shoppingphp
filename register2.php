<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="css/insert.css" />
  </head>
  <body>
    <section class="container">
      <header>Đăng ký </header>
      <form autocomplete="off" action="" method="post" class="form">
        <input type="hidden" id="action" value="register">
        <div class="input-box">
          <label>Họ và tên</label>
          <input type="text" id="fullname" placeholder="Họ tên" required />
        </div>

        <div class="input-box">
          <label>Email</label>
          <input type="text" id="email" placeholder="Địa chỉ email" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Số điện thoại</label>
            <input type="number" id="phonenumber" placeholder="Số điện thoại" required />
          </div>
        </div>  
        
        <div class="input-box address">
          <label>Địa chỉ</label>
          <input type="text" id="address" placeholder="Địa chỉ" required />
        </div>

        <div class="input-box address">
          <label>mật khẩu</label>
          <input type="text" id="password" placeholder="mật khẩu" required />
        </div>
        <div class="input-box address">
          <label>tuổi</label>
          <input type="text" id="age" placeholder="Tuổi" required />
        </div>

        <button type="button" onclick="submitData();">Submit</button>
      </form>
    </section>
    <?php
    require 'script.php';
    ?>
  </body>
</html>