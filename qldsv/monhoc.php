<?php
require_once "class/quantri.php";
$qt = new quantri();

if (isset($_POST['submit'])) {
    $id_mh = $_POST['id_mh'];
    $ten_mh = $_POST['mh'];
    $qt->MH_Them($id_mh, $ten_mh);
    echo "<script>document.location='monhoc.php';</script>";
    exit();
}
$showLoad = $qt->MH_Load();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Vietpro shop</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script src="js/lumino.glyphs.js"></script>
</head>
<body>
<?php include "menu.php"; ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Môn học</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-5 col-lg-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Thêm môn học
                </div>
                <div class="panel-body">
                    <form method="post">
                        <div class="form-group">
                            <label>Mã lớp:</label>
                            <input type="text" name="id_mh" class="form-control" placeholder="Mã môn học...">
                            <label>Tên lớp:</label>
                            <input type="text" name="mh" class="form-control" placeholder="Tên môn học...">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="form-control btn btn-primary"
                                   placeholder="Tên môn hoc..." value="Thêm mới">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-7 col-lg-7">
            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách môn học</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="bg-primary">
                                <th>Mã môn học</th>
                                <th>Tên môn học</th>
                                <th style="width:30%">Tùy chọn</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php while ($mh = $showLoad->fetch_assoc()) { ?>
                                <tr>
                                    <td><?=$mh['MaMH'] ?></td>
                                    <td><?=$mh['TenMH'] ?></td>
                                    <td>
                                        <a href="editmonhoc.php?idMH=<?=$mh['MaMH'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                        <a href="deletemonhoc.php?idMH=<?=$mh['MaMH'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div>	<!--/.main-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script>
    $('#calendar').datepicker({
    });
    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
</script>
</body>

</html>