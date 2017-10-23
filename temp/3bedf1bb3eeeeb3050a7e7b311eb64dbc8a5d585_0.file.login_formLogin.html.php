<?php
/* Smarty version 3.1.30, created on 2017-10-22 08:09:33
  from "/mnt/c/Users/Charlles/OneDrive/htdocs/padrao/base/html/login/login_formLogin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ec6e5d4b9409_10123127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bedf1bb3eeeeb3050a7e7b311eb64dbc8a5d585' => 
    array (
      0 => '/mnt/c/Users/Charlles/OneDrive/htdocs/padrao/base/html/login/login_formLogin.html',
      1 => 1484003812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ec6e5d4b9409_10123127 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- /.login-logo -->
  <div class="login-box-body">
  	
    <p class="login-box-msg">Faça login para acessar o sistema</p>

    <form id="frmlogin" name="frmlogin" method="post" enctype="application/x-www-form-urlencoded">
    	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['dynamic'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dynamic'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'dynamic\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dynamic', array());
$_block_repeat1=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>

		<input type="hidden" name="d" id="d" value="login" />
		<input type="hidden" name="a" id="a" value="login" />
		<input type="hidden" name="f" id="f" value="validarAcesso" />						
		<input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token'];?>
" />
		<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

      <div class="form-group has-feedback">
      	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['dynamic'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dynamic'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'dynamic\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dynamic', array());
$_block_repeat1=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>

        <input type="email" class="form-control" placeholder="E-mail" name="usuario" id="usuario">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

      </div>
      <div class="form-group has-feedback">
      	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['dynamic'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dynamic'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'dynamic\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dynamic', array());
$_block_repeat1=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>

        <input type="password" class="form-control" placeholder="Senha" name="senha" id="senha">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

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
  <!-- /.login-box-body --><?php }
}
