<div class="modal fade" id="update_<?php echo $users['user_id']; ?>">
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
                                <input type="hidden" name="user_id" value="<?php echo $users['user_id']; ?>" required class="form-control">
                                <input type="text" name="user_names" value="<?php echo $users['user_names']; ?>" required class="form-control">
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
                                <input type="email" name="user_email" value="<?php echo $users['user_email']; ?>" required class="form-control">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="text-primary fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Contacts</label>
                            <div class="input-group mb-3">
                                <input type="text" name="user_contacts" value="<?php echo $users['user_email']; ?>" required class="form-control">
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
                                    <option value="<?php echo $users['user_access_level']; ?>"><?php echo $users['user_access_level']; ?></option>
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
                                <input type="text" name="user_designation" value="<?php echo $users['user_designation']; ?>" required class="form-control">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="text-primary fas fa-phone"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Address</label>
                            <div class="input-group mb-3">
                                <input type="text" name="user_address" value="<?php echo $users['user_address']; ?>" required class="form-control">
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
                        <button name="Update_User" class="btn btn-outline-primary" type="submit">
                            <i class="fas fa-save"></i> Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="password_<?php echo $users['user_id']; ?>">
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
                        <div class="form-group col-md-12">
                            <label>New Password</label>
                            <div class="input-group mb-3">
                                <input type="hidden" name="user_id" value="<?php echo $users['user_id']; ?>" required class="form-control">
                                <input type="password" name="new_password" required class="form-control">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="text-primary fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="text-right">
                        <button name="Change_Password" class="btn btn-outline-primary" type="submit">
                            <i class="fas fa-save"></i> Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="delete_<?php echo $users['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="POST">
                <div class="modal-body text-center text-dark">
                    <h4>Heads Up!</h4>
                    <p>You are about to delete this record</p>
                    <input type="hidden" name="user_id" value="<?php echo $users['user_id']; ?>">
                    <button type="button" class="text-center btn btn-success" data-dismiss="modal">No, Dismiss</button>
                    <input type="submit" name="Delete_User" value="Yes, Delete" class="text-center btn btn-danger">
                </div>
            </form>
        </div>
    </div>
</div>