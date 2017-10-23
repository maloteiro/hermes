<?php
/* Smarty version 3.1.30, created on 2017-10-22 21:54:39
  from "/mnt/c/Users/Charlles/OneDrive/htdocs/padrao/base/html/login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ed2fbf9010b0_02586100',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'b146e1b61ea6948e8521f867a0e6d203c665b633' => 
    array (
      0 => '/mnt/c/Users/Charlles/OneDrive/htdocs/padrao/base/html/login.html',
      1 => 1484005145,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 1800,
),true)) {
function content_59ed2fbf9010b0_02586100 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	
<head>
  <meta charset="ISO-8859-1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Template Padrão</title>
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
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>LTE</a>
  </div>
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

	    <?php if ($_smarty_tpl->tpl_vars['d']->value && $_smarty_tpl->tpl_vars['f']->value && $_smarty_tpl->tpl_vars['a']->value) {?>
			<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
 
		<?php } else { ?>
			Falha ao carregar o HTML
		<?php }?>
	<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

  
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="./public/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="./public/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="./public/plugins/iCheck/icheck.min.js"></script>

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

<?php if ($_REQUEST['msg']) {?>
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
        <p><?php echo $_REQUEST['msg'];?>
</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary  btn-block" data-dismiss="modal">Fechar</button>
      </div>
    </div>

  </div>
</div>
  
<script>
  $(function () { 
     $('#myModal').modal('show');
   });
</script>  
<?php }?>		
<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<script>

  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
 
</script>



</body>
</html>
<?php }
}
