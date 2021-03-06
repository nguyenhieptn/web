<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
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
                <li class="nav-item"><a href="index.php?task=index" class="nav-link">Can Bo</a></li>
                <li class="nav-item"><a href="#" class="nav-link">them</a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 border">
            <h3>Danh Sach Khach Hang</h3>
            <a href="index.php?task=create">
                <button class="btn btn-success">Create</button>
            </a>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Ten</th>
                    <th>SDT</th>
                    <th>email</th>
                    <th>diachi</th>
                    <th>nhom</th>
                    <th>Tool</th>
                </tr>
                </thead>
                <tbody>
                <?php while ($row = $data->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['phone'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['address'] ?></td>
                        <td><?= $row['group_name'] ?></td>
                        <td>
                            <a href="index.php?task=destroy&id=<?= $row['id'] ?>">x</a> -
                            <a href="index.php?task=Edit&id=<?= $row['id'] ?>">e</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 border">@2018 copyright mysite</div>
    </div>
</div>
</body>
</html>