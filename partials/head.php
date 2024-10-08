<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="version" content="1.0" />
    <!-- favicon -->
    <link href="../public/img/favicon.ico" rel="shortcut icon">
    <!--favicon-->
    <title>Government of Makueni County - eRegistration System System</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/css/adminlte.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Select2 -->
    <link rel="stylesheet" href="../public/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Sweet Alerts -->
    <link rel="stylesheet" href="../public/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="../public/plugins/toastr/toastr.min.css">
    <!-- Data tables Buttons -->
    <link rel="stylesheet" href="../public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="../public/plugins/daterangepicker/daterangepicker.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Full Calendar -->
    
    <?php
    /* Alert Sesion Via Alerts */
    if (isset($_SESSION['success'])) {
        $success = $_SESSION['success'];
        unset($_SESSION['success']);
    }
    /* Alert Sesion Via Alerts */
    if (isset($_SESSION['err'])) {
        $err = $_SESSION['err'];
        unset($_SESSION['err']);
    }
    ?>
</head>