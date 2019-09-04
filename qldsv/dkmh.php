<?php
require_once "class/quantri.php";
$qt = new quantri();

$showSV = $qt->SV_Load();
$showMH = $qt->MH_Load();

if (isset($_POST['submit'])) {
    $idSV = $_POST['idSV'];
    $idMH = $_POST['idMH'];
    $qt->Diem_Them($idSV, $idMH);
    echo "<script>document.location='dssvdkmh.php';</script>";
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
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
<?php include "menu.php"; ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Đăng ký</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">
                <div class="panel-heading">Đăng ký môn học</div>
                <div class="panel-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group" >
                                    <label>Chọn sinh viên</label>
                                    <select required name="idSV" class="form-control">
                                        <?php while ($sv = $showSV->fetch_assoc()) { ?>
                                            <option value="<?=$sv['MaSV'] ?>"><?=$sv['MaSV'] ?> - <?=$sv['HotenSV'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group" >
                                    <label>Chọn môn học</label>
                                    <select required name="idMH" class="form-control">
                                        <?php while ($mh = $showMH->fetch_assoc()) { ?>
                                            <option value="<?=$mh['MaMH'] ?>"><?=$mh['MaMH'] ?> - <?=$mh['TenMH'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <input type="submit" name="submit" value="Đăng ký" class="btn btn-primary">
                                <a href="dssvdkmh.php" class="btn btn-warning">Xem danh sách sinh viên đã đăng ký môn học</a>
                                <a href="dkmh.php" class="btn btn-danger">Hủy bỏ</a>
                            </div>
                        </div>
                    </form>
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
    });
    function changeImg(input){
        //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
        if(input.files && input.files[0]){
            var reader = new FileReader();
            //Sự kiện file đã được load vào website
            reader.onload = function(e){
                //Thay đổi đường dẫn ảnh
                $('#avatar').attr('src',e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function() {
        $('#avatar').click(function(){
            $('#img').click();
        });
    });
</script>
</body>

</html>
