<?php 
include 'config.php';
include 'templet/header.php';
include 'include/function.php';
$stmt = $conn->prepare('SELECT * FROM users  ');
$stmt->execute();
$data = $stmt->fetchAll();
print_r($data);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username  = $_POST['username'];
    $pass      = $_POST['password'];
    $passShah1 = sha1($pass);
   
//     $stmt = $conn->prepare('SELECT username , password  FROM users WHERE  username = ? AND password = ? AND gruopID="1" ');
//     $stmt->execute(array($username,$passShah1));
//     $data = $stmt->fetchAll();
//     print_r($data);
//     $count = $stmt->rowCount();
//    if($count >0){
//     header('location:index.php');
//    }
 } 
?>
<div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="themes/images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="User name">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="register.php">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include 'templet/footer.php';

?>