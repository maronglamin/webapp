<?php
namespace Core;

use App\Models\Users;

class H {
  public static function dnd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
  }

  public static function currentPage() {
    $currentPage = $_SERVER['REQUEST_URI'];
    if($currentPage == PROOT || $currentPage == PROOT. strtolower(DEFAULT_CONTROLLER) .'/index') {
      $currentPage = PROOT . strtolower(DEFAULT_CONTROLLER);
    }
    return $currentPage;
  }

  public static function getObjectProperties($obj){
    return get_object_vars($obj);
  }

  public static function buildMenuListItems($menu,$dropdownClass=""){
    ob_start();
    $currentPage = self::currentPage();
    foreach($menu as $key => $val):
      $active = '';
      if($key == '%USERNAME%'){
        $key = (Users::currentUser())? "Hello " .Users::currentUser()->fname : $key;
      }
      if(is_array($val)): ?>
        <li class="nav-item dropdown pe-3">
          <a href="#" class="nav-link nav-profile d-flex align-items-center pe-0" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <img src="<?=PROOT?>assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?=$key?></span>
          </a>
          <ul class="dropdown-menu <?=$dropdownClass?>">
            <?php foreach($val as $k => $v):
              $active = ($v == $currentPage)? 'active':''; ?>
              <li class="dropdown-header">
              <?php if(substr($k,0,9) == 'separator'): ?>
                <div role="separator" class="dropdown-divider"></div>
              <?php else: ?>
                <a class="dropdown-item d-flex align-items-center <?=$active?>" href="<?=$v?>"><?=$k?></a>
              <?php endif; ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </li>
      <?php else:
        $active = ($val == $currentPage)? 'active':''; ?>
        <li class="nav-item dropdown pe-3"><a class="nav-link nav-profile d-flex align-items-center pe-0 <?=$active?>" href="<?=$val?>"><?=$key?></a></li>
      <?php endif; ?>
    <?php endforeach;
    return ob_get_clean();
  }
}
