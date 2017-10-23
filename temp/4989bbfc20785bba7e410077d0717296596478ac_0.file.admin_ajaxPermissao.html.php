<?php
/* Smarty version 3.1.30, created on 2017-10-17 09:36:13
  from "C:\xampp\htdocs\padrao\base\html\admin\admin_ajaxPermissao.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e5eb2db78fa3_61353062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4989bbfc20785bba7e410077d0717296596478ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\padrao\\base\\html\\admin\\admin_ajaxPermissao.html',
      1 => 1508240164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e5eb2db78fa3_61353062 (Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['dynamic'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dynamic'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'dynamic\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dynamic', array());
$_block_repeat1=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>

<?php echo $_smarty_tpl->tpl_vars['permissao']->value;?>

<?php if ($_smarty_tpl->tpl_vars['permissao']->value) {?>
<br />

<div class="row text-center col-xs-12">
	<div class="form-group col-xs-5">
		&nbsp;
	</div>

	<div class="form-group col-xs-2">
		<button type="submit" name="bt_salvar" id="bt_salvar" class="btn btn-block btn-primary" type="button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Salvar</button>
	</div>
	
	<div class="form-group col-xs-5">
		&nbsp;
	</div>
</div>

<?php }
$_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }
}
