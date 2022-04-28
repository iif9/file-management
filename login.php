


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body > 
    <div class="" style="height: 100vh;">

<?php require_once "./view/header.php"; ?>

<div   dir='rtl' class='h-75 col-12 d-flex flex-column justify-content-center align-items-center'>

<h1 style="color:var(--colors);">تسجيل الدخول</h1>
<form  class=" col-lg-3 col-md-5 col-sm-8 col-10 mt-3" action="">
<div class="mb-3">
    <label style="font-weight: bold;" for="username">اسم المستخدم</label>

    <input autocomplete="off" name="username" style="border-radius: 15px;" id="username" class=" mt-2 rounded-4 bg-light form-control" type="text">
</div>
    <div>
    <label style="font-weight: bold;" for="password">كلمة المرور</label>
    <input autocomplete="off" name="password" id="password" style="border-radius: 15px;" type="password" class="mt-2 rounded-4 bg-light form-control">
   </div>
   <button style="background-color: var(--colors);;border-radius: 15px;  " class="btn text-light col-12 mt-4" type="submit">
تسجيل الدخول
</button>
</form>

</div>

</div>

</body>
</html>