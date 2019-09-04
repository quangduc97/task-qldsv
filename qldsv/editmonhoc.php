<?php
require_once "class/quantri.php";
$qt = new quantri();

$id_mh = $_GET['idMH'];
$kq = $qt->MH_ChiTiet($id_mh);
if($kq) $row = $kq->fetch_assoc();

if(isset($_POST['submit'])) {
    $tenMH = $_POST['mh'];
    $qt ->MH_Sua($id_mh, $tenMH);
    echo "<script>document.location='monhoc.php';</script>";
    exit();
}
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
                    Sửa môn học
                </div>
                <div class="panel-body">
                    <form method="post">
                        <div class="form-group">
                            <label>Mã môn học:</label>
                            <input type="text" name="code" class="form-control" placeholder="Mã môn học..." value="<?=$row['MaMH'] ?>" disabled>
                            <label>Tên môn học:</label>
                            <input type="text" name="mh" class="form-control" placeholder="Tên môn học..." value="<?=$row['TenMH'] ?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="form-control btn btn-primary"
                                   placeholder="Tên môn học..." value="Cập Nhật">
                        </div>
                    </form>
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