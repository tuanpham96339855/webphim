<?php
    session_start();
    include 'db.php';
    $massage = '';
    while(true)
    {
        if(isset($_POST["submit"]))
        {
            $TaiKhoan = $_POST["TaiKhoan"];
            if($TaiKhoan =='')
            {
                $massage= "Tài khoản không được để trống!";
                break;
            }
            $MatKhau = $_POST["MatKhau"];
            if($MatKhau =='')
            {
                $massage= "Mật khẩu không được để trống!";
                break;
            }
            $sql = "SELECT * FROM user WHERE TaiKhoan='$TaiKhoan' AND MatKhau='$MatKhau'";
            $user = mysqli_query($conn, $sql);
            //var_dump ($user); die();
            if(mysqli_num_rows($user) > 0) 
            {
                $_SESSION['TaiKhoan'] = $TaiKhoan;
                header('location: admin.php');
            }
            else
            {
                $massage ="Tài khoản mật khẩu không chính xác!";
            }
        }
        break;
    }

?>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Đăng Nhập Phim Hay</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Đăng Nhập</h3>
                            <div class="form-group">
                                <label for="TaiKhoan" class="text-info">Tài Khoản:</label><br>
                                <input type="text" name="TaiKhoan" id="TaiKhoan" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="MatKhau" class="text-info">Mật Khẩu:</label><br>
                                <input type="password" name="MatKhau" id="MatKhau" class="form-control" required>
                            </div>
                            <?php
                                    if($massage !='')
                                    {
                                ?>
                                <?=$massage?>
                                <?php 
                                    }
                                ?>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Đăng Nhập">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<style>
    body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
</style>
