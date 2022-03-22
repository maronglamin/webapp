<?php
use Core\FH;
?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center"><br><br>
              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="<?=PROOT?>assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Afang</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>
                  <form class="row g-3 needs-validation" novalidate action="" method="post">
                    <?= FH::csrfInput() ?>
                    <?= FH::inputBlock('text','First Name','fname',$this->newUser->fname,['class'=>'form-control input-sm'],['class'=>'form-group'],$this->displayErrors) ?>
                    <?= FH::inputBlock('text','Last Name','lname',$this->newUser->lname,['class'=>'form-control input-sm'],['class'=>'form-group'],$this->displayErrors) ?>
                    <?= FH::inputBlock('text','Email','email',$this->newUser->email,['class'=>'form-control input-sm'],['class'=>'form-group'],$this->displayErrors) ?>
                    <?= FH::inputBlock('text','Username','username',$this->newUser->username,['class'=>'form-control input-sm'],['class'=>'form-group'],$this->displayErrors) ?>
                    <?= FH::inputBlock('password','Password','password',$this->newUser->password,['class'=>'form-control input-sm'],['class'=>'form-group'],$this->displayErrors) ?>
                    <?= FH::inputBlock('password','Confirm Password','confirm',$this->newUser->confirm,['class'=>'form-control input-sm'],['class'=>'form-group'],$this->displayErrors) ?>
                    <div class="col-12">
                      <?= FH::submitTag('Register',['class'=>'btn btn-primary w-100']) ?>
                    </div>
                    <div class="text-dk flex-grow-1">Alread have an account? <a href="<?=PROOT?>register/login">Log In</a></div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
</main>

  </div>
</div>
<?php $this->end(); ?>
