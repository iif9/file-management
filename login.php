<?php 
session_start();
$massge = '';
require_once "db/ConnDb.php";
 ?>



<?php
$user = $_POST['username'];
$pass = $_POST['password'];
if (isset($_POST['login'])) {
    if (empty($user) && empty($user)) {
       $massge = '<div class="alert alert-danger" role="alert">
       اسم المستخدم او كلمة المرور فارغة
     </div>
     ';
    }else{
    
        $query = "select * from users where userN = :username and passW = :password";
        $statement = $conn->prepare($query);
        $statement->execute(
            array(
                'username' => $user,
                'password' => $pass
            )
            );
            $con = $statement->rowCount();
            if ($con >0) {
                $_SESSION['usernmae'] = $user;
                echo "<script>window.location.href='index.php'</script>";
            }else{
                $massge = '<div class="alert alert-danger" role="alert">
                اسم المستخدم او كلمة المرور خطأ
              </div>';
            }

    }
    
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>

<body>
    <div class="" style="height: 100vh;">

        <?php require_once "./view/header.php"; ?>

        <div dir='rtl' class='h-75 col-12 d-flex flex-column justify-content-center align-items-center'>
            <?php echo $massge?>

            <h1 style="color:var(--colors);">تسجيل الدخول</h1>
            <form class=" col-lg-3 col-md-5 col-sm-8 col-10 mt-3" method="POST" action=<?php echo $_SERVER['PHP_SELF'];?>>
                <div class="mb-3">
                    <label style="font-weight: var(--font)" for="username">اسم المستخدم</label>

                    <input autocomplete="off" name="username" style="border-radius: 15px" id="username" class=" mt-2 rounded-4 bg-light form-control" type="text">
                </div>
                <div>
                    <label style="font-weight:  var(--font)" for="password">كلمة المرور</label>
                    <input autocomplete="off" name="password" id="password" style="border-radius: 15px;" type="password" class="mt-2 rounded-4 bg-light form-control">
                </div>
                <button style="background-color: var(--colors);border-radius: 15px; " class="btn text-light col-12 mt-4" type="submit" name="login">
                    تسجيل الدخول
                </button>
            </form>

        </div>

    </div>

</body>
</html>