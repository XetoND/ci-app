<section class="container d-flex justify-content-center align-items-center flex-column" style="height: 100vh;">
    <div class="row rounded-4 shadow p-3 mb-5" style="width: 360px;">
        <div class="h7 pb-2 mb-3 text-primary border-bottom border-primary">
        <?php if($this->session->flashdata('flash') ): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?= $this->session->flashdata('flash'); ?></strong>
            </div>
        <?php endif; ?>
            <h1>
                Login
            </h1>
        </div>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label text-primary">Username</label>
                <input type="text" class="form-control text-primary" id="username" name="username" placeholder="Username" value="<?=set_value('username')?>">
                <?= form_error('username',"<small class='text-danger'>", "</small>")?>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-primary">Password</label>
                <input type="password" class="form-control text-primary" id="password" name="password" placeholder="Password">
                <?= form_error('password',"<small class='text-danger'>", "</small>")?>
            </div>
            <div>
                <button class="btn btn-primary float-start" type="submit" name="login">Login</button>
            </div>
        </form>
        <small class="text-center">Belum Punya Akun? <a href="<?=base_url()?>auth/register">Register</a></small>
    </div>
</section>