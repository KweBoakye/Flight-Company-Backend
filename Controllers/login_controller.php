<?php
  require_once ("Model/UserDAO.php");
  require_once ("usersmodel.php");

class LoginController
{

  public function __construct()
  {
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }
  }


  public static function LoginAction()
  {
    define('SAULT', 'somethingToComplicateThePassword');
    define('HOST_NAME', $_SERVER['HTTP_HOST'] );
    session_start();

    if (isset($_POST['submit'])) {
      $user = new UsersModel;

      $username = htmlentities(strip_tags($_POST['email']), ENT_QUOTES, 'UTF-8');
      $password = md5(SAULT . md5($_POST['password']) . SAULT);

      $auth = $user->auth($username, $password);
      if ($auth != false) {
          $_SESSION['LoggedIn'] = $auth;
          header("location: Home.php");
      } else {
        echo "<label style='margin-left:37%'>Sorry, username or password is not correct</label>";
      }
    }
  }


  public function RegisterAction()
  {
    define('SAULT', 'somethingToComplicateThePassword');
    define('HOST_NAME', 'http://' . $_SERVER['HTTP_HOST'] . '/');

    if (isset($_POST['submit'])) {

      $user = new UsersModel;
      $user->fullname = htmlentities(strip_tags($_POST['fullname']), ENT_QUOTES, 'UTF-8');
      $user->username = htmlentities(strip_tags($_POST['username']), ENT_QUOTES, 'UTF-8');
      $user->email = htmlentities(strip_tags($_POST['email']), ENT_QUOTES, 'UTF-8');

      $password = $_POST['password'];

      $user->phone = htmlentities(strip_tags($_POST['phone']), ENT_QUOTES, 'UTF-8');

      $checkEmail = $user->checkEmail($user->email);
      $checkUsername = $user->checkUsername($user->username);

      if (!is_numeric($user->phone)) {
        echo "<label style='margin-left:37%'>Sorry, There's Something Wrong with your phone number.</label>";
      } elseif ($checkEmail > 0) {
        echo "<label style='margin-left:37%'>Sorry, Email already taken</label>";
      } elseif ($checkUsername > 0) {
        echo "<label style='margin-left:37%'>Sorry, username already taken</label>";
      } else {
        $user->password = md5(SAULT . md5($password) . SAULT);

        if ($user->Create()) {
          echo "<script>alert('You have regeitered Successfully')</script>";
          header("location: Home.php");
        }
      }
    }
  }

  public function LogoutAction()
  {
    define('HOST_NAME', 'http://' . $_SERVER['HTTP_HOST'] . '/');
    session_start();
    unset($_SESSION['LoggedIn']);
    session_destroy();
    header("Location: " . HOST_NAME . "login.php");
  }

}

?>
