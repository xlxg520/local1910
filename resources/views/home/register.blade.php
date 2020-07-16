<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>Home</title>
    <meta charset="UTF-8" />

</head>

<body>
<!-- bg effect -->
<div id="bg">
    <canvas></canvas>
    <canvas></canvas>
    <canvas></canvas>
</div>
<!-- //bg effect -->
<!-- title -->
<h1>用户注册系统</h1>
<!-- //title -->
<!-- content -->
<div class="sub-main-w3">
    <form action="{{registerdo}}" method="post">
        <div class="form-style-agile">
            <label>
                <i class="fas fa-user"></i>
                用户名
            </label>
            <input placeholder="Username" name="username" type="text" required="">
        </div>
        <div class="form-style-agile">
            <label>
                <i class="fas fa-unlock-alt"></i>
                密码
            </label>
            <input placeholder="Password" name="password" type="password" required="">
        </div>
        <div class="form-style-agile">
            <label>
                <i class="fas fa-user"></i>
                电子邮件
            </label>
            <input placeholder="Email" name="email" type="text" required="">
        </div>
        <div class="form-style-agile">
            <label>
                <i class="fas fa-user"></i>
                年龄
            </label>
            <input placeholder="Age" name="age" type="text" required="">
        </div>
        <div>
            <label>
                <i class="fas fa-user"></i>
                性别
            </label>
            <input type='radio' name='gender' value="boy">男 <input type='radio' name='gender' value="girl">女
        </div>
        <!-- checkbox -->
        <div class="wthree-text">
            <ul>
                <li>
                    <label class="anim">
                        <input type="checkbox" class="checkbox" required="">
                        <span>我已同意注册协议</span>
                    </label>
                </li>
            </ul>
        </div>
        <!-- //checkbox -->
        <input type="submit" name='submit' value="注册">
    </form>
</div>
<!-- //content -->

<!-- copyright -->
<div class="footer">
    <p>Copyright &copy; 2019.7.4 doubleguy</a></p>
</div>
<!-- //copyright -->

<!-- Jquery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- //Jquery -->

<!-- effect js -->
<script src="js/canva_moving_effect.js"></script>
<!-- //effect js -->

</body>

</html>
