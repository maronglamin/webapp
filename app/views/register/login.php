<?php
use Core\FH;
?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<!-- <div class="row align-items-center justify-content-center">
    <div class="col-md-6 bg-light p-3">
    <h3 class="text-center">Log In</h3> -->

    <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="<?=PROOT?>assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Afang</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate action="<?=PROOT?>register/login" method="post">
                    <?= FH::csrfInput() ?>
                    <?= FH::displayErrors($this->displayErrors) ?>
                    <?= FH::inputBlock('text','Username','username',$this->login->username,['class'=>'form-control'],['class'=>'form-group'],$this->displayErrors) ?>
                    <?= FH::inputBlock('password','Password','password',$this->login->password,['class'=>'form-control'],['class'=>'form-group'],$this->displayErrors) ?>
                    <?= FH::checkboxBlock('Remember Me','remember_me',$this->login->getRememberMeChecked(),[],['class'=>'form-group'],$this->displayErrors) ?>
                    <div class="col-12">
                      <?= FH::submitTag('Login',['class'=>'btn btn-primary w-100']) ?>
                    </div>
                    <div class="flex-grow-1 text-body">Don't have an account? <a href="<?=PROOT?>register/register">Sign Up</a></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php $this->end(); ?>
