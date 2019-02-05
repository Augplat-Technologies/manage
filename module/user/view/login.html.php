<?php
/**
 * The html template file of login method of user module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     ZenTaoPMS
 * @version     $Id: login.html.php 5084 2013-07-10 01:31:38Z wyd621@gmail.com $
 */
include '../../common/view/header.lite.html.php';
if(empty($config->notMd5Pwd))js::import($jsRoot . 'md5.js');
?>
<main id="main" class="fade no-padding">
  <div class="container" id="login">
    <div id="loginPanel">
     <header>
        <div class="col-4 text-center" id='logo-box'>
        <img src="<?php echo $config->webRoot . 'theme/default/images/main/color_logo_transparent.png';?>" alt="">
        </div>
      </header>
      <div class="table-row">
        <div class="col-8">
          <form method='post' target='hiddenwin'>
            <table class='table table-form'>
              <tbody>
                <tr>
                  <th><?php echo $lang->user->account;?></th>
                  <td><input class='form-control' type='text' name='account' id='account' autofocus /></td>
                </tr>
                <tr>
                  <th><?php echo $lang->user->password;?></th>
                  <td><input class='form-control' type='password' name='password' /></td>
                </tr>
                <tr>
                  <th></th>
                  <td id="keeplogin"><?php echo html::checkBox('keepLogin', $lang->user->keepLogin, $keepLogin);?></td>
                </tr>
                <tr>
                  <td></td>
                  <td class="form-actions">
                  <?php 
                  echo html::submitButton($lang->login, '', 'btn btn-primary');
                  if($app->company->guest) echo html::linkButton($lang->user->asGuest, $this->createLink($config->default->module));
                  echo html::hidden('referer', $referer);
                  echo html::hidden('verifyRand', $rand);
                  echo html::a(inlink('reset'), $lang->user->resetPassword);
                  ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>
      <?php if(isset($demoUsers)):?>  
      <footer>
        <span><?php echo $lang->user->loginWithDemoUser;?></span>
        <?php
        $password = md5('123456');
        $link     = inlink('login');
        $link    .= strpos($link, '?') !== false ? '&' : '?';
        foreach($demoUsers as $demoAccount => $demoUser)
        {
            if($demoUser->password != $password) continue;
            echo html::a($link . "account={$demoAccount}&password=" . md5($password . $this->session->rand), $demoUser->realname, 'hiddenwin');
        }
        ?>  
      </footer>  
      <?php endif;?>
    </div>
    <div id="info" class="table-row">
      <div class="table-col text-middle text-center">
        <div id="poweredby">
          <?php if($config->checkVersion):?>
          <?php $siteURL = 'https://api.zentao.pm';?>
          <iframe id='updater' class='hidden' frameborder='0' width='100%' scrolling='no' allowtransparency='true' src="<?php echo $siteURL;?>/updater-isLatest-<?php echo $config->version;?>-<?php echo $s;?>.html?lang=<?php echo str_replace('-', '_', $this->app->getClientLang())?>"></iframe>
          <?php endif;?>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include '../../common/view/footer.lite.html.php';?>
