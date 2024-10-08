<div class="modal fade" id="update_<?php echo $users['applicaton_id']; ?>">
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
                            <label>Start date</label>
                            <div class="input-group mb-3">
                                <input type="date" name="application_start_date" value="<?php echo $users['application_start_date']; ?>" required class="form-control">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="text-primary fas fa-calendar"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>End date</label>
                            <div class="input-group mb-3">
                                <input type="hidden" name="applicaton_id" value="<?php echo $users['applicaton_id']; ?>" required class="form-control">
                                <input type="date" name="application_end_date" value="<?php echo $users['application_start_date']; ?>" required class="form-control">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="text-primary fas fa-calendar"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="text-right">
                        <button name="Update_Application" class="btn btn-outline-primary" type="submit">
                            <i class="fas fa-save"></i> Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>