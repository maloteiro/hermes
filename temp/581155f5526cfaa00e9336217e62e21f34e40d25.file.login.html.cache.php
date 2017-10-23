<?php /* Smarty version Smarty3-b6, created on 2017-01-09 21:26:10
         compiled from "C:\xampp\htdocs\padrao/base/html//login.html" */ ?>
<?php /*%%SmartyHeaderCode:1839158741c12dcaf05-71232215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '581155f5526cfaa00e9336217e62e21f34e40d25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\padrao/base/html//login.html',
      1 => 1484004354,
    ),
  ),
  'nocache_hash' => '1839158741c12dcaf05-71232215',
  'function' => 
  array (
  ),
  'has_nocache_code' => true,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_php')) include 'C:\xampp\htdocs\padrao\framework\plugins\smarty\libs\plugins\block.php.php';
?><!DOCTYPE html>
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
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>LTE</a>
  </div>
  <?php echo '/*%%SmartyNocache:1839158741c12dcaf05-71232215%%*/<?php $_block_repeat=true; smarty_block_dynamic(array(), null, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl);while ($_block_repeat) { ob_start();?>/*/%%SmartyNocache:1839158741c12dcaf05-71232215%%*/';?>

	    <?php echo '/*%%SmartyNocache:1839158741c12dcaf05-71232215%%*/<?php if ($_smarty_tpl->getVariable(\'d\')->value&&$_smarty_tpl->getVariable(\'f\')->value&&$_smarty_tpl->getVariable(\'a\')->value){?>
/*/%%SmartyNocache:1839158741c12dcaf05-71232215%%*/';?>

			<?php echo '/*%%SmartyNocache:1839158741c12dcaf05-71232215%%*/<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable(\'template\')->value}", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>/*/%%SmartyNocache:1839158741c12dcaf05-71232215%%*/';?>
 
		<?php echo '/*%%SmartyNocache:1839158741c12dcaf05-71232215%%*/<?php }else{ ?>
/*/%%SmartyNocache:1839158741c12dcaf05-71232215%%*/';?>

			Falha ao carregar o HTML
		<?php echo '/*%%SmartyNocache:1839158741c12dcaf05-71232215%%*/<?php }?>
/*/%%SmartyNocache:1839158741c12dcaf05-71232215%%*/';?>

	<?php echo '/*%%SmartyNocache:1839158741c12dcaf05-71232215%%*/<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_dynamic(array(), $_block_content, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl); }?>/*/%%SmartyNocache:1839158741c12dcaf05-71232215%%*/';?>

  
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="./public/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="./public/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="./public/plugins/iCheck/icheck.min.js"></script>

<?php echo '/*%%SmartyNocache:1839158741c12dcaf05-71232215%%*/<?php $_block_repeat=true; smarty_block_dynamic(array(), null, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl);while ($_block_repeat) { ob_start();?>/*/%%SmartyNocache:1839158741c12dcaf05-71232215%%*/';?>

<?php echo '/*%%SmartyNocache:1839158741c12dcaf05-71232215%%*/<?php if ($_REQUEST[\'msg\']){?>
/*/%%SmartyNocache:1839158741c12dcaf05-71232215%%*/';?>

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
        <p><?php echo '/*%%SmartyNocache:1839158741c12dcaf05-71232215%%*/<?php echo $_REQUEST[\'msg\'];?>
/*/%%SmartyNocache:1839158741c12dcaf05-71232215%%*/';?>
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
<?php echo '/*%%SmartyNocache:1839158741c12dcaf05-71232215%%*/<?php }?>
/*/%%SmartyNocache:1839158741c12dcaf05-71232215%%*/';?>
		
<?php echo '/*%%SmartyNocache:1839158741c12dcaf05-71232215%%*/<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_dynamic(array(), $_block_content, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl); }?>/*/%%SmartyNocache:1839158741c12dcaf05-71232215%%*/';?>


<script>

  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
 
</script>



<?php $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl);while ($_block_repeat) { ob_start();?>
	unset($_SESSION['msg']);
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl); }?>
</body>
</html>
