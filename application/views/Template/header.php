<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BuffQuiz_Admin</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/freelancer.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">
    <!--<link rel="stylesheet" href="<?php //echo base_url('assets/Plugins/fontawesome-free-5.8.1-web/css/fontawesome.min.css'); ?>"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">Add & Delete User</a>
    <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portfolio</a>
        </li>
        <li class="nav-item mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
        </li>
        <li class="nav-item mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<body>
<div class="ct-example tab-content tab-example-result" style="width: 1000px; margin: auto; margin-top: 62px;padding: 1.25rem;
            border-radius: .25rem;
            background-color: #f7f8f9;">
        <h1 class="card-header">Add & Delete User</h1>
        <form method = "post" class="card-body">
			<table class = table id="table_server_id" class="display" >
				<thead>
                <tr class="no-border">
						<td width="200">
                                <input type="text"value="<?= isset($item->TypeID) ? $item->TypeID : '' ?>" name="ID"  required class="form-control" >
                                <?=form_error('TypeName', '<small class="text-danger"> ','</small>')?>
						</td>
						<td width="200">
								<input type="text" value="<?= isset($item->TypeName) ? $item->TypeName : '' ?>" name="Email"  required class="form-control">
								<?=form_error('TypeName', '<small class="text-danger"> ','</small>')?>
                        </td>
                        <td width="200">
								<input type="text" value="<?= isset($item->TypeName) ? $item->TypeName : '' ?>" name="Password"  required class="form-control">
								<?=form_error('TypeName', '<small class="text-danger"> ','</small>')?>
                        </td>
                        <td width="200">
								<input type="text" value="<?= isset($item->TypeName) ? $item->TypeName : '' ?>" name="Password"  required class="form-control">
								<?=form_error('TypeName', '<small class="text-danger"> ','</small>')?>
						</td>
						<td>
							<div class="row">
								<div class="col">
									<button type="submit" class="btn btn-success btn-lg" style="width: 100px;">
										save
									</a>
								</div>
								<div class="col">
									<td><a href="<?= base_url('index.php/utype/index') ?>" class="btn btn-success btn-lg " style="width: 100px; background-color: #f44336; border-color: #f44336" >
										cancel
									</a></td>
								</div>
							</div>
						</td>
					</tr>
					<tr class="no-border">
                        <th>ID</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Type</th>
					</tr>
                </thead>
                <tbody>
                    <?php //foreach($items as $row) : ?>
                    <tr>
                <!--<td><?= $row->TypeID ?></td>-->
                <!--<td><?= $row->TypeName ?></td>-->

									<!--<td style="width: 42px;"><a href="<?= base_url("index.php/utype/index/{$row->TypeID}") ?>" class="btn btn-success btn-lg" style="width: 100px;">-->
										แก้ไข
									</a></td>
                                    <!--<td><a onclick="return confirm('คุณต้องการจะลบข้อมูลนี้จริงหรือ?')" href="<?= base_url("index.php/utype/delete_row/{$row->TypeID}") ?>" 
                                    class="btn btn-success btn-lg"style="width: 100px; background-color: #f44336; border-color: #f44336">-->
										ลบ
									</a></td>

                            </tr>
                <?php //endforeach; ?>

                            </tbody>
                            <tfoot>
                            <tr>
                                <!--<th colspan="3" class="text">
                                    รายการข้อมูลทั้งหมดในระบบ <?= count($items)?> รายการ
                                </th>-->
                            </tr>
                            </tfoot>



            </table>
        </form>
 </div>    



<div class="copyright py-4 text-center text-white">
  <div class="container">
    <small>Copyright &copy; Your Website 2019</small>
  </div>
</div>



<script src="<?php echo base_url('assets/js/jquery-2.2.4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jqBootstrapValidation.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/contact_me.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/freelancer.min.js'); ?>"></script>

</body>


        
</body>
</html>