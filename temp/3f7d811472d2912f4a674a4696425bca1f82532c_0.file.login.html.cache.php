<?php
/* Smarty version 3.1.30, created on 2017-01-09 21:39:09
  from "C:\xampp\htdocs\padrao\base\html\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58741f1d463796_40580464',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '3f7d811472d2912f4a674a4696425bca1f82532c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\padrao\\base\\html\\login.html',
      1 => 1484005145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58741f1d463796_40580464 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '314958741f1d3f9ac9_15710152';
?>
<!DOCTYPE html>
<html>
	
<head>
  <meta charset="ISO-8859-1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $_SESSION['nomesistema'];?>
</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="./public/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./public/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="./public/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
  <![endif]-->
  
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>LTE</a>
  </div>
  <?php echo '/*%%SmartyNocache:314958741f1d3f9ac9_15710152%%*/<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins[\'block\'][\'dynamic\'][0]) ? $_smarty_tpl->smarty->registered_plugins[\'block\'][\'dynamic\'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException(\'block tag \\\'dynamic\\\' not callable or registered\');
}
$_smarty_tpl->smarty->_cache[\'_tag_stack\'][] = array(\'dynamic\', array());
$_block_repeat1=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
/*/%%SmartyNocache:314958741f1d3f9ac9_15710152%%*/';?>

	    <?php echo '/*%%SmartyNocache:314958741f1d3f9ac9_15710152%%*/<?php if ($_smarty_tpl->tpl_vars[\'d\']->value && $_smarty_tpl->tpl_vars[\'f\']->value && $_smarty_tpl->tpl_vars[\'a\']->value) {?>/*/%%SmartyNocache:314958741f1d3f9ac9_15710152%%*/';?>

			<?php echo '/*%%SmartyNocache:314958741f1d3f9ac9_15710152%%*/<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars[\'template\']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
/*/%%SmartyNocache:314958741f1d3f9ac9_15710152%%*/';?>
 
		<?php echo '/*%%SmartyNocache:314958741f1d3f9ac9_15710152%%*/<?php } else { ?>/*/%%SmartyNocache:314958741f1d3f9ac9_15710152%%*/';?>

			Falha ao carregar o HTML
		<?php echo '/*%%SmartyNocache:314958741f1d3f9ac9_15710152%%*/<?php }?>/*/%%SmartyNocache:314958741f1d3f9ac9_15710152%%*/';?>

	<?php echo '/*%%SmartyNocache:314958741f1d3f9ac9_15710152%%*/<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache[\'_tag_stack\']);?>
/*/%%SmartyNocache:314958741f1d3f9ac9_15710152%%*/';?>

  
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<?php echo '<script'; ?>
 src="./public/plugins/jQuery/jquery-2.2.3.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap 3.3.6 -->
<?php echo '<script'; ?>
 src="./public/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- iCheck -->
<?php echo '<script'; ?>
 src="./public/plugins/iCheck/icheck.min.js"><?php echo '</script'; ?>
>

<?php echo '/*%%SmartyNocache:314958741f1d3f9ac9_15710152%%*/<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins[\'block\'][\'dynamic\'][0]) ? $_smarty_tpl->smarty->registered_plugins[\'block\'][\'dynamic\'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException(\'block tag \\\'dynamic\\\' not callable or registered\');
}
$_smarty_tpl->smarty->_cache[\'_tag_stack\'][] = array(\'dynamic\', array());
$_block_repeat1=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
/*/%%SmartyNocache:314958741f1d3f9ac9_15710152%%*/';?>

<?php echo '/*%%SmartyNocache:314958741f1d3f9ac9_15710152%%*/<?php if ($_REQUEST[\'msg\']) {?>/*/%%SmartyNocache:314958741f1d3f9ac9_15710152%%*/';?>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h4 class="modal-title">Alerta</h4>
      </div>
      <div class="modal-body">
        <p><?php echo '/*%%SmartyNocache:314958741f1d3f9ac9_15710152%%*/<?php echo $_REQUEST[\'msg\'];?>
/*/%%SmartyNocache:314958741f1d3f9ac9_15710152%%*/';?>
</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary  btn-block" data-dismiss="modal">Fechar</button>
      </div>
    </div>

  </div>
</div>
  
<?php echo '<script'; ?>
>
  $(function () { 
     $('#myModal').modal('show');
   });
<?php echo '</script'; ?>
>  
<?php echo '/*%%SmartyNocache:314958741f1d3f9ac9_15710152%%*/<?php }?>/*/%%SmartyNocache:314958741f1d3f9ac9_15710152%%*/';?>
		
<?php echo '/*%%SmartyNocache:314958741f1d3f9ac9_15710152%%*/<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache[\'_tag_stack\']);?>
/*/%%SmartyNocache:314958741f1d3f9ac9_15710152%%*/';?>


<?php echo '<script'; ?>
>

  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
 
<?php echo '</script'; ?>
>



<?php 
	unset($_SESSION['msg']);
	//echo "aqui";
?>
</body>
</html>
<?php }
}
