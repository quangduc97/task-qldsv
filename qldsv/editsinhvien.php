<?php
require_once "class/quantri.php";
$qt = new quantri();

$showLoad = $qt->Lop_Load();

$id_sv = $_GET['idSV'];
$kq = $qt->SV_ChiTiet($id_sv);
if($kq) $row = $kq->fetch_assoc();

if(isset($_POST['submit'])) {
    $htSV = $_POST['htSV'];
    $idLop = $_POST['idLop'];
    $qt ->SV_Sua($id_sv, $htSV, $idLop);
    echo "<script>document.location='sinhvien.php';</script>";
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
<script src="js/jquery-1.11.1.min.js"></script>
</head>
<body>
	<?php include "menu.php"; ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Sửa sản phẩm</div>
					<div class="panel-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-xs-8">
                                    <div class="form-group" >
                                        <label>Mã số sinh viên</label>
                                        <input required type="text" name="idSV" class="form-control" value="<?=$row['MaSV'] ?>" disabled>
                                    </div>
                                    <div class="form-group" >
                                        <label>Họ tên sinh viên</label>
                                        <input required type="text" name="htSV" class="form-control" value="<?=$row['HotenSV'] ?>">
                                    </div>
                                    <div class="form-group" >
                                        <label>Lớp</label>
                                        <select required name="idLop" class="form-control">
                                            <?php while ($lop = $showLoad->fetch_assoc()) { ?>
                                                <?php if ($lop['MaLop'] == $row['Lop']) { ?>
                                                    <option value="<?=$lop['MaLop'] ?>" selected><?=$lop['MaLop'] ?> - <?=$lop['TenLop'] ?></option>
                                                <?php } else { ?>
                                                    <option value="<?=$lop['MaLop'] ?>"><?=$lop['MaLop'] ?> - <?=$lop['TenLop'] ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
                                    <a href="sinhvien.php" class="btn btn-danger">Hủy bỏ</a>
                                </div>
                            </div>
                        </form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
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
