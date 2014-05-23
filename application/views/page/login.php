<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item" href="<?php echo site_url('base/dashboard'); ?>">Home</a>
            <a class="blog-nav-item" href="<?php echo site_url('base/dashboard/contact'); ?>">Contact</a>
            <a class="blog-nav-item" href="<?php echo site_url('base/dashboard/about'); ?>">About</a>
        </nav>
    </div>
</div>
<div class="col-md-12 pad-top-btm-30">
    <div class="col-md-6 col-md-offset-3" style="padding-top: 70px; padding-bottom: 70px;">
        <div class="panel panel-default pad-top-btm-30">
            <h5 class="bold" style="margin-left: 30px; font-size: 20px;">Masuk</h5>
            <hr>
            <div class="form-horizontal pad-all-10">
                <?php echo form_open('base/login_process'); ?>
                <div class="form-group">
                    <label class="col-md-3 control-label">Email</label>
                    <div class="col-md-6">
                        <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>">
                    </div>
                    <div class="col-md-3">
                        <font style="color: #D9534F;"><?php echo form_error('email'); ?></font>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Password</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>">
                    </div>
                    <div class="col-md-3">
                        <font style="color: #D9534F;"><?php echo form_error('password'); ?></font>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-6">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-6">
                        <button name="login" type="submit" class="btn btn-primary btn-sm bold">Masuk</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

