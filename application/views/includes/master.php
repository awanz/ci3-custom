<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('includes/head') ?>
        <title><?= $title ?></title>
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
            <!-- sidebar -->
            <?php $this->load->view('includes/sidebar.php') ?>
            <!-- /sidebar -->

            <!-- top navigation -->
            <?php $this->load->view('includes/header.php') ?>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
            <?php $this->load->view($body) ?>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <?php $this->load->view('includes/footer') ?>
            <!-- /footer content -->
            </div>
        </div>
        <?php $this->load->view('includes/foot') ?>
    </body>
</html>