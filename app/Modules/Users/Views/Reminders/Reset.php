<div class='row-responsive'>
    <h2><?= __d('users', 'Password Reset'); ?></h2>
    <hr>
</div>

<div class="row">
    <?php echo Errors::display($error); ?>
    <?php echo Session::message('message'); ?>
    <div class="clearfix"></div>

    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-primary" style="margin-top:40px">
            <div class="panel-heading text-center">
                <h3 class="panel-title"><?= __d('users', 'Password Reset'); ?></h3>
            </div>
            <div class="panel-body">
                <form style="margin: 0;" action="<?= site_url('password/reset'); ?>" method="post">
                    <div class="form-control-container" style="margin-bottom: 10px;">
                        <input type="text" class="input-medium input-block-level form-control" name="email" placeholder="<?= __d('users', 'Insert the current e-mail'); ?>" title="<?= __d('users', 'Insert the current E-mail'); ?>">
                    </div>
                    <div class="form-control-container" style="margin-bottom: 10px;">
                        <input type="password" class="input-medium input-block-level form-control" name="password" placeholder="<?= __d('users', 'Insert the new Password'); ?>" title="<?= __d('users', 'Insert the new Password'); ?>">
                    </div>
                    <div class="form-control-container" style="margin-bottom: 10px;">
                        <input type="password" class="input-medium input-block-level form-control" name="password_confirmation" placeholder="<?= __d('users', 'Verify the new Password'); ?>" title="<?= __d('users', 'Verify the new Password'); ?>">
                    </div>
                    <hr>
                    <div>
                        <button type="submit" class="btn btn-success col-lg-6 pull-right"><i class='fa fa-check'></i> <?= __d('users', 'Save'); ?></button>
                    </div>
                    <div class="clearfix"></div>
                    <input type="hidden" name="csrfToken" value="<?= $csrfToken; ?>" />
                    <input type="hidden" name="token" value="<?= $token; ?>" />
                </form>
            </div>
        </div>
    </div>
</div>
