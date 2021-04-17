<?= $this->extend('template/login') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form action="" method="post" class="sign-in-form">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <span>
                        <i class="fas fa-user"></i>
                    </span>
                    <input type="text" placeholder="Username">
                </div>
                <div class="input-field">
                    <span>
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" placeholder="Password">
                </div>
                <button class="btn solid" type="submit">Login</button>
            </form>

            <form action="" method="post" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <span>
                        <i class="fas fa-user"></i>
                    </span>
                    <input type="text" placeholder="Username">
                </div>
                <div class="input-field">
                    <span>
                        <i class="fas fa-envelope"></i>
                    </span>
                    <input type="text" placeholder="Email">
                </div>
                <div class="input-field">
                    <span>
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" placeholder="Password">
                </div>
                <button class="btn solid" type="submit">Sign up</button>
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>New here?</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In dolore optio ipsum cumque exercitationem, vero facere molestias assumenda? Accusamus, esse.</p>
                <button class="btn transparent" id="sign-up-btn">Sign up</button>
            </div>

            <img src="<?= base_url('asset/img') ?>/ppdb.svg" class="image" alt="PPDB SMAN 1 Rawamerta">
        </div>

        <div class="panel right-panel">
            <div class="content">
                <h3>Already sign up?</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In dolore optio ipsum cumque exercitationem, vero facere molestias assumenda? Accusamus, esse.</p>
                <button class="btn transparent" id="sign-in-btn">Sign in</button>
            </div>

            <img src="<?= base_url('asset/img') ?>/ppdb1.svg" class="image" alt="PPDB SMAN 1 Rawamerta">
        </div>
    </div>

</div>
</div>

<?= $this->endSection() ?>