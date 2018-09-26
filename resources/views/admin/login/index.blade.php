<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Nguyễn Minh Đức">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/admin/font-awesome.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/style.css') }}" type="text/css" media="all" />
</head>
<body>
    <div class="header-w3l">
        <h1>Quản lý đăng nhập</h1>
    </div>
    <div class="main-w3layouts-agileinfo">
        <div class="wthree-form">
            <h2>Welcome Admin</h2>
            <form action="{{ route('admin.handleLogin') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-sub-w3">
                    <input type="text" name="txtUser" placeholder="Tên tài khoản " required="required" />
                <div class="icon-w3">
                    <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
                </div>
                </div>
                <div class="form-sub-w3">
                    <input type="password" name="txtPass" placeholder="Mật khẩu" required="required" />
                <div class="icon-w3">
                    <i class="glyphicon glyphicon-lock" aria-hidden="true"></i>
                </div>
                </div>
                <div class="clear"></div>
                <div class="submit-agileits">
                    <input type="submit" value="Đăng nhập">
                </div>
            </form>
        </div>
    </div>
    <div class="footer">
        <p>Login Form. All rights reserved</a></p>
    </div>
</body>
</html>
