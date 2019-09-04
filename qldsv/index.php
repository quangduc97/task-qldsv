<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard | Vietpro shop</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script src="js/lumino.glyphs.js"></script>
</head>
<body>
<?php include "menu.php"; ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Trang chủ</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
            <div class="col-lg-12">
                <img src="img/background.jpg" width="1550" height="800" style="padding-bottom: 20px">
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">Danh sách sinh viên</div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="margin-top:20px;">
                                    <thead>
                                    <tr class="bg-primary">
                                        <th>Mã số sinh viên</th>
                                        <th width="30%">Họ tên sinh viên</th>
                                        <th>Lớp</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                    </thead>
                                    <tbody>
<!--                                    --><?php //while ($sv = $showLoad->fetch_assoc()) { ?>
                                        <tr>
<!--                                            <td>--><?//=$sv['MaSV'] ?><!--</td>-->
<!--                                            <td>--><?//=$sv['HotenSV'] ?><!--</td>-->
<!--                                            <td>--><?//=$sv['Lop'] ?><!--</td>-->
                                            <td>
<!--                                                <a href="editsinhvien.php?idSV=--><?//=$sv['MaSV'] ?><!--" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>-->
<!--                                                <a href="deletesinhvien.php?idSV=--><?//=$sv['MaSV'] ?><!--" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>-->
                                            </td>
                                        </tr>
<!--                                    --><?php //} ?>
                                    </tbody>
                                </table>
                            </div>
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
