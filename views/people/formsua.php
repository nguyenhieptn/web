<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script></head>
<body>
<div id="wrapper">
    <div class="row">
        <div class="col-md-12 border" id="header">
            <h1>This is header</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 border">
            <ul class="nav">

                <li class="nav-item"><a href="#" class="nav-link">home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">danhsach</a></li>
                <li class="nav-item"><a href="#" class="nav-link">them</a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 border">
            <ul class="nav flex-column">
                <li class="nav-item"><a href="#" class="nav-link">danh sach</a></li>
                <li class="nav-item"><a href="#" class="nav-link">sua</a></li>
                <li class="nav-item"><a href="#" class="nav-link">them moi</a></li>
            </ul>
        </div>
        <div class="col-md-6 border">
            <h3>Them Khach Hang</h3>
            <form action="http://127.0.0.1/mmt/index.php?task=Edit" method="post">
                <div class="form-group">
                    <label for="ten">Ten</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="sdt">So Dien Thoai</label>
                    <input type="text" name="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="diachi">diachi</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <div class="form-group">
                    <button type="reset" name="reset" class="btn btn-warning">reset</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>

    <div class="row">
        <div class="col-md-12 border">@2018 copyright mysite</div>
    </div>
</div>
</body>
</html>