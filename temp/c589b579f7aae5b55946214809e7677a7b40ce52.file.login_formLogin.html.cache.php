<?php /* Smarty version Smarty3-b6, created on 2017-01-09 21:23:37
         compiled from "C:\xampp\htdocs\padrao/base/html//login/login_formLogin.html" */ ?>
<?php /*%%SmartyHeaderCode:949858741b7918f620-10261208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c589b579f7aae5b55946214809e7677a7b40ce52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\padrao/base/html//login/login_formLogin.html',
      1 => 1484003812,
    ),
  ),
  'nocache_hash' => '949858741b7918f620-10261208',
  'function' => 
  array (
  ),
  'has_nocache_code' => true,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- /.login-logo -->
  <div class="login-box-body">
  	
    <p class="login-box-msg">Faça login para acessar o sistema</p>

    <form id="frmlogin" name="frmlogin" method="post" enctype="application/x-www-form-urlencoded">
    	<?php echo '/*%%SmartyNocache:949858741b7918f620-10261208%%*/<?php $_block_repeat=true; smarty_block_dynamic(array(), null, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl);while ($_block_repeat) { ob_start();?>/*/%%SmartyNocache:949858741b7918f620-10261208%%*/';?>

		<input type="hidden" name="d" id="d" value="login" />
		<input type="hidden" name="a" id="a" value="login" />
		<input type="hidden" name="f" id="f" value="validarAcesso" />						
		<input type="hidden" name="token" id="token" value="<?php echo '/*%%SmartyNocache:949858741b7918f620-10261208%%*/<?php echo $_SESSION[\'token\'];?>
/*/%%SmartyNocache:949858741b7918f620-10261208%%*/';?>
" />
		<?php echo '/*%%SmartyNocache:949858741b7918f620-10261208%%*/<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_dynamic(array(), $_block_content, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl); }?>/*/%%SmartyNocache:949858741b7918f620-10261208%%*/';?>

      <div class="form-group has-feedback">
      	<?php echo '/*%%SmartyNocache:949858741b7918f620-10261208%%*/<?php $_block_repeat=true; smarty_block_dynamic(array(), null, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl);while ($_block_repeat) { ob_start();?>/*/%%SmartyNocache:949858741b7918f620-10261208%%*/';?>

        <input type="email" class="form-control" placeholder="E-mail" name="usuario" id="usuario">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?php echo '/*%%SmartyNocache:949858741b7918f620-10261208%%*/<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_dynamic(array(), $_block_content, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl); }?>/*/%%SmartyNocache:949858741b7918f620-10261208%%*/';?>

      </div>
      <div class="form-group has-feedback">
      	<?php echo '/*%%SmartyNocache:949858741b7918f620-10261208%%*/<?php $_block_repeat=true; smarty_block_dynamic(array(), null, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl);while ($_block_repeat) { ob_start();?>/*/%%SmartyNocache:949858741b7918f620-10261208%%*/';?>

        <input type="password" class="form-control" placeholder="Senha" name="senha" id="senha">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <?php echo '/*%%SmartyNocache:949858741b7918f620-10261208%%*/<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_dynamic(array(), $_block_content, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl); }?>/*/%%SmartyNocache:949858741b7918f620-10261208%%*/';?>

      </div>
      <div class="row">
        <div class="col-xs-8">
          <a href="#">Esqueceu a senha</a>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Acessar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   

  </div>
  <!-- /.login-box-body -->