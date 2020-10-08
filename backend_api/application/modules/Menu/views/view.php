<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>

    <!-- BOOTSTRAP STYLES-->
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?= base_url() ?>assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="<?= base_url() ?>assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="<?= base_url() ?>assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Valorant Company</a>
            </div>

            <div class="header-right">
                <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-sign-out fa-2x"></i></a>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />
                            <div class="inner-text">
                                Budi Gaming
                                <br />
                                <small>Age : 21 Years </small>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="<?= base_url('Dashboard') ?>"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bars "></i>Menu <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?= base_url('Menu/add') ?>"><i class="fa fa-plus"></i>Add</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Menu') ?>"><i class="fa fa-list "></i>View</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-home "></i>Beranda <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="invoice.html"><i class="fa fa-plus"></i>Add</a>
                            </li>
                            <li>
                                <a href="pricing.html"><i class="fa fa-list "></i>View</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-phone "></i>Contact <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="invoice.html"><i class="fa fa-plus"></i>Add</a>
                            </li>
                            <li>
                                <a href="pricing.html"><i class="fa fa-list "></i>View</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-picture-o "></i>Gallery <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="invoice.html"><i class="fa fa-plus"></i>Add</a>
                            </li>
                            <li>
                                <a href="pricing.html"><i class="fa fa-list "></i>View</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-building-o "></i>Profile <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="invoice.html"><i class="fa fa-plus"></i>Add</a>
                            </li>
                            <li>
                                <a href="pricing.html"><i class="fa fa-list "></i>View</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="login.html"><i class="fa fa-sign-in "></i>Login Page</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Table Menu</h1>
                        <h1 class="page-subhead-line">Welcome in Views Data Menu Website Valorant Company </h1>
                        <h1 class="page-subhead-line"><?= $this->session->flashdata('success') ?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!--   Kitchen Sink -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="<?= base_url('Menu/add') ?>" class="btn btn-success">Add Menu</a>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Menu</th>
                                                <th>Indonesian</th>
                                                <th>English</th>
                                                <th>Japanese</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($views as $v) : ?>
                                                <tr>
                                                    <td><?= $v->fc_param ?></td>
                                                    <td><?= $v->fc_isi_id ?></td>
                                                    <td><?= $v->fc_isi_en ?></td>
                                                    <td><?= $v->fc_isi_jp ?></td>
                                                    <td>
                                                        <a href="<?php echo site_url('Menu/edit/' . $v->ID) ?>" class="btn btn-small"><i class="fa fa-edit"></i> Edit</a> |
                                                        <a type="button" href="<?= base_url('Menu/delete/' . $v->ID);   ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data ini  ?');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a> |
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End  Kitchen Sink -->
                    </div>
                    <!-- /. PAGE INNER  -->
                </div>
                <!-- /. PAGE WRAPPER  -->
            </div>
            <!-- /. WRAPPER  -->

            <div id="footer-sec">
                &copy; 2014 Valorant Company | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
            </div>
            <!-- /. FOOTER  -->
            <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
            <!-- JQUERY SCRIPTS -->
            <script src="<?= base_url() ?>assets/js/jquery-1.10.2.js"></script>
            <!-- BOOTSTRAP SCRIPTS -->
            <script src="<?= base_url() ?>assets/js/bootstrap.js"></script>
            <!-- METISMENU SCRIPTS -->
            <script src="<?= base_url() ?>assets/js/jquery.metisMenu.js"></script>
            <!-- CUSTOM SCRIPTS -->
            <script src="<?= base_url() ?>assets/js/custom.js"></script>



</body>

</html>