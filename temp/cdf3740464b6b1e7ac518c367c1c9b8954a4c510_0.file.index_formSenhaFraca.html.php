<?php
/* Smarty version 3.1.30, created on 2017-01-09 22:40:32
  from "C:\xampp\htdocs\padrao\base\html\index\index_formSenhaFraca.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58742d80113696_12137786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdf3740464b6b1e7ac518c367c1c9b8954a4c510' => 
    array (
      0 => 'C:\\xampp\\htdocs\\padrao\\base\\html\\index\\index_formSenhaFraca.html',
      1 => 1484008820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58742d80113696_12137786 (Smarty_Internal_Template $_smarty_tpl) {
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
  
  <?php echo '<script'; ?>
 type="text/javascript" src="./public/js/page.js" charset="iso-8859-1"><?php echo '</script'; ?>
>

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
  <!-- /.login-logo -->
  <div class="login-box-body">
  	<div class="alert alert-danger alert-dismissible">
<button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button>
<h4>
<i class="icon fa fa-ban"></i>
Alerta
</h4>
Detectamos que a sua senha é muito fraca. Recomendamos que ela seja trocada nesse acesso.
</div>
    <!--p class="login-box-msg">Detectamos que a sua senha é muito fraca. Recomendamos que ela seja trocada nesse acesso.</p-->

    <form id="formAlterarSenha" name="formAlterarSenha" method="POST" action="?">
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
			<input type="hidden" name="f" id="f" value="salvarAlterarSenha" />						
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

        <input type="password" class="form-control required" placeholder="Senha Atual" name="senha_atual" id="senha_atual">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
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

        <input type="password" class="form-control required" placeholder="Nova Senha" name="nova_senha" id="nova_senha">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
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

        <input type="password" class="form-control required" placeholder="Confirmar Nova Senha" name="confirmar_senha" id="confirmar_senha">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

      </div>
      <div class="row">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Salvar</button>
        </div>
        <div class="col-xs-4">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="button" class="btn btn-primary btn-block btn-danger" onclick="wiOpen('?a=index&d=index&f=Principal')">Ignorar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   

  </div>
  <!-- /.login-box-body -->
  
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<?php echo '<script'; ?>
 src="./public/plugins/jQuery/jquery-2.2.3.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="./public/plugins/jQueryValidation/dist/jquery.validate.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="./public/plugins/jQueryValidation/dist/localization/messages_pt_BR.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="./public/plugins/jQueryValidation/dist/additional-methods.js"><?php echo '</script'; ?>
>


<!-- Bootstrap 3.3.6 -->
<?php echo '<script'; ?>
 src="./public/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- iCheck -->
<?php echo '<script'; ?>
 src="./public/plugins/iCheck/icheck.min.js"><?php echo '</script'; ?>
>

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
  
<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {
	  	$("#formAlterarSenha").validate({
	  		rules: {
		 		nova_senha: {
		 			required: true,
		 			minlength: 6
		 		},
				confirmar_senha: {
	  				equalTo: "#nova_senha"
	    		}
	
	      	}
	    });
	});
  $(function () { 
     $('#myModal').modal('show');
   });
<?php echo '</script'; ?>
>  
<?php }?>		
<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<?php 
	unset($_SESSION['msg']);
	//echo "aqui";
?>
</body>
</html>
<?php }
}
