<?php
/*
 *   Crafted On Tue Oct 08 2024
 *   From his finger tips, through his IDE to your deployment environment at full throttle with no bugs, loss of data,
 *   fluctuations, signal interference, or doubt—it can only be
 *   the legendary coding wizard, Martin Mbithi (martin@devlan.co.ke, www.martmbithi.github.io)
 *   
 *   www.devlan.co.ke
 *   hello@devlan.co.ke
 *
 *
 *   The Devlan Solutions LTD Super Duper User License Agreement
 *   Copyright (c) 2022 Devlan Solutions LTD
 *
 *
 *   1. LICENSE TO BE AWESOME
 *   Congrats, you lucky human! Devlan Solutions LTD hereby bestows upon you the magical,
 *   revocable, personal, non-exclusive, and totally non-transferable right to install this epic system
 *   on not one, but TWO separate computers for your personal, non-commercial shenanigans.
 *   Unless, of course, you've leveled up with a commercial license from Devlan Solutions LTD.
 *   Sharing this software with others or letting them even peek at it? Nope, that's a big no-no.
 *   And don't even think about putting this on a network or letting a crowd join the fun unless you
 *   first scored a multi-user license from us. Sharing is caring, but rules are rules!
 *
 *   2. COPYRIGHT POWER-UP
 *   This Software is the prized possession of Devlan Solutions LTD and is shielded by copyright law
 *   and the forces of international copyright treaties. You better not try to hide or mess with
 *   any of our awesome proprietary notices, labels, or marks. Respect the swag!
 *
 *
 *   3. RESTRICTIONS, NO CHEAT CODES ALLOWED
 *   You may not, and you shall not let anyone else:
 *   (a) reverse engineer, decompile, decode, decrypt, disassemble, or do any sneaky stuff to
 *   figure out the source code of this software;
 *   (b) modify, remix, distribute, or create your own funky version of this masterpiece;
 *   (c) copy (except for that one precious backup), distribute, show off in public, transmit, sell, rent,
 *   lease, or otherwise exploit the Software like it's your own.
 *
 *
 *   4. THE ENDGAME
 *   This License lasts until one of us says 'Game Over'. You can call it quits anytime by
 *   destroying the Software and all the copies you made (no hiding them under your bed).
 *   If you break any of these sacred rules, this License self-destructs, and you must obliterate
 *   every copy of the Software, no questions asked.
 *
 *
 *   5. NO GUARANTEES, JUST PIXELS
 *   DEVLAN SOLUTIONS LTD doesn’t guarantee this Software is flawless—it might have a few
 *   quirks, but who doesn’t? DEVLAN SOLUTIONS LTD washes its hands of any other warranties,
 *   implied or otherwise. That means no promises of perfect performance, marketability, or
 *   non-infringement. Some places have different rules, so you might have extra rights, but don’t
 *   count on us for backup if things go sideways. Use at your own risk, brave adventurer!
 *
 *
 *   6. SEVERABILITY—KEEP THE GOOD STUFF
 *   If any part of this License gets tossed out by a judge, don’t worry—the rest of the agreement
 *   still stands like a boss. Just because one piece fails doesn’t mean the whole thing crumbles.
 *
 *
 *   7. NO DAMAGE, NO DRAMA
 *   Under no circumstances will Devlan Solutions LTD or its squad be held responsible for any wild,
 *   indirect, or accidental chaos that might come from using this software—even if we warned you!
 *   And if you ever think you’ve got a claim, the most you’re getting out of us is the license fee you
 *   paid—if any. No drama, no big payouts, just pixels and code.
 *
 */

session_start();
require_once('../config/config.php');
require_once('../config/checklogin.php');
require_once('../helpers/users.php');
require_once('../partials/head.php');
?>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <?php require_once('../partials/navbar.php'); ?>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Employees</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">System Users</li>
                            </ol>
                        </div><!-- /.col -->
                        <hr>
                    </div><!-- /.row -->
                    <div class="card-header p-2">
                        <h3 class="text-right">
                            <button type="button" data-toggle="modal" data-target="#add_modal" class="btn btn-outline-primary">
                                <i class="fas fa-user-plus"></i> Register new employee
                            </button>
                        </h3>
                    </div><!-- /.card-header -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="modal fade" id="add_modal">
                <div class="modal-dialog modal-dialog-centered  modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Fill all required fields </h4>
                            <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Full names</label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="user_names" required class="form-control">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="text-primary fas fa-user-tag"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <div class="input-group mb-3">
                                            <input type="email" name="user_email" required class="form-control">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="text-primary fas fa-envelope"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Password</label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="user_password" required class="form-control">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="text-primary fas fa-lock"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Contacts</label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="user_contacts" required class="form-control">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="text-primary fas fa-phone"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Access level</label>
                                        <div class="input-group mb-3">
                                            <select name="user_access_level" required class="form-control select2bs4">
                                                <option value="Admin">Admin</option>
                                                <option value="Staff">Staff</option>
                                            </select>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="text-primary fas fa-user-shield"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Designation</label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="user_designation" required class="form-control">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="text-primary fas fa-phone"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Address</label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="user_address" required class="form-control">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="text-primary fas fa-map-pin"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="text-right">
                                    <button name="Add_User" class="btn btn-outline-primary" type="submit">
                                        <i class="fas fa-save"></i> Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-bordered text-truncate data_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Sno</th>
                                                        <th>Names</th>
                                                        <th>Email</th>
                                                        <th>Contacts</th>
                                                        <th>Access Level</th>
                                                        <th>Designation</th>
                                                        <th>Address</th>
                                                        <th>Manage</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $users_sql = mysqli_query(
                                                        $mysqli,
                                                        "SELECT * FROM users"
                                                    );
                                                    $cnt = 1;
                                                    if (mysqli_num_rows($users_sql) > 0) {
                                                        while ($users = mysqli_fetch_array($users_sql)) {
                                                    ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo $cnt; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $users['user_names']; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $users['user_email']; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $users['user_contacts']; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $users['user_access_level']; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $users['user_designation']; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $users['user_address']; ?>
                                                                </td>
                                                                <td>
                                                                    <a data-toggle="modal" href="#update_<?php echo $users['user_id']; ?>" class="badge  badge-pill badge-warning"><em class="fas fa-user-edit"></em> Edit</a>
                                                                    <a data-toggle="modal" href="#password_<?php echo $users['user_id']; ?>" class="badge  badge-pill badge-warning"><em class="fas fa-user-lock"></em> Change password</a>
                                                                    <a data-toggle="modal" href="#delete_<?php echo $users['user_id']; ?>" class="badge  badge-pill badge-danger"><em class="fas fa-trash"></em> Delete</a>

                                                                </td>
                                                            </tr>
                                                    <?php
                                                            $cnt = $cnt + 1;
                                                            include('../modals/users.php');
                                                        }
                                                    } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>

                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <?php require_once('../partials/footer.php'); ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?php require_once('../partials/scripts.php'); ?>
</body>


</html>