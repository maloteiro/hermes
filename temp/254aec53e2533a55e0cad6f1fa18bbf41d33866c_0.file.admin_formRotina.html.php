<?php
/* Smarty version 3.1.30, created on 2017-10-17 21:50:46
  from "C:\xampp\htdocs\padrao\base\html\admin\admin_formRotina.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e69756149237_03131410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '254aec53e2533a55e0cad6f1fa18bbf41d33866c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\padrao\\base\\html\\admin\\admin_formRotina.html',
      1 => 1508284233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e69756149237_03131410 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cadastro de funcionalidades
        <small><?php echo $_SESSION['versao'];?>
</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Segurança</a></li>
        <li class="active">Funcionalidades</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

		<div class="row" id="table_message" style="display:none;">
        	<div class="col-md-12">
				<div class="box-body">		              
					<div class="alert alert-warning alert-dismissible">
	                	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                	<h4><i class="icon fa fa-warning"></i> Alerta</h4>
	                	<div id="messageBoxAtribuicao"></div>	                
	              	</div>		                 			
    			</div>    	
    		</div>
    	</div>
    	
    	<div class="row" id="message-red" style="display:none;">
        	<div class="col-md-12">
				<div class="box-body">		              
					<div class="alert alert-success alert-dismissible">
	                	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                	<h4><i class="icon fa fa-check"></i> Alerta</h4>
	                	<div id="message-content" class="red-left"></div>	                
	              	</div>		                 			
    			</div>    	
    		</div>
    	</div>

      <div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header">
					<i class="fa fa-edit"></i>
					<h3 class="box-title">Cadastro</h3>
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

				<form id="formulario" name="formulario" action="?" method="POST" role="form">
					<input type="hidden" name="d" id="d" value="<?php echo $_POST['d'];?>
" /> 
					<input type="hidden" name="a" id="a" value="<?php echo $_POST['a'];?>
" />
					<input type="hidden" name="f" id="f" value="salvarRotina" />
					<input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token'];?>
" />		
					<input type="hidden" name="update" id="update" value="<?php echo $_smarty_tpl->tpl_vars['update']->value;?>
" />
					<input type="hidden" name="seq_rotina" id="seq_rotina" value="<?php echo $_smarty_tpl->tpl_vars['dadosRotina']->value['seq_rotina'];?>
" />
					<div class="box-body">
						<div class="row">
							<div class="form-group col-xs-6">
				                <label>Módulo</label>
				                <select class="form-control select2 required" style="width: 100%;" id="seq_modulo" name="seq_modulo">
				                  <option value="">--Selecione--</option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modulos']->value, 'modulo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['modulo']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['modulo']->value['seq_modulo'];?>
" <?php if ($_smarty_tpl->tpl_vars['dadosRotina']->value['seq_modulo'] == $_smarty_tpl->tpl_vars['modulo']->value['seq_modulo']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['modulo']->value['dsc_modulo_descricao'];?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				                </select>
				            </div>
			           	</div>
			           	<div class="row">
							<div class="form-group col-xs-6">
								<label for="dsc_rotina_descricao">Descrição</label>
								<input name="dsc_rotina_descricao" id="dsc_rotina_descricao" class="form-control required" placeholder="Descrição" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dadosRotina']->value['dsc_rotina_descricao'];?>
" maxlength='250'>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-6">
								<label for="dsc_rotina_arquivo">Arquivo</label>
								<input name="dsc_rotina_arquivo" id="dsc_rotina_arquivo" class="form-control required" placeholder="Descrição" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dadosRotina']->value['dsc_rotina_arquivo'];?>
" maxlength='150'>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-6">
								<label for="dsc_rotina_diretorio">Diretório</label>
								<input name="dsc_rotina_diretorio" id="dsc_rotina_diretorio" class="form-control required" placeholder="Diretório" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dadosRotina']->value['dsc_rotina_diretorio'];?>
" maxlength='150'>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-6">
								<label for="dsc_rotina_funcao">Função</label>
								<input name="dsc_rotina_funcao" id="dsc_rotina_funcao" class="form-control required" placeholder="Função" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dadosRotina']->value['dsc_rotina_funcao'];?>
" maxlength='150'>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-2">
								<label for="num_rotina_ordem">Ordem</label>
								<input name="num_rotina_ordem" id="num_rotina_ordem" class="form-control required" placeholder="Ordem" type="text" alt="inteiro" value="<?php echo $_smarty_tpl->tpl_vars['dadosRotina']->value['num_rotina_ordem'];?>
" maxlength='150'>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-2">
								<label for="num_rotina_ordem">Ativo</label>	<br />								
								<input type="checkbox" class="minimal" name="flg_rotina_ativa" id="flg_rotina_ativa" value="S" <?php if ($_smarty_tpl->tpl_vars['dadosRotina']->value['flg_rotina_ativa'] == "S") {?>checked<?php }?>/> <label for="num_rotina_ordem">Sim</label>
							</div>
						</div>
						<div class="row text-center col-xs-12">
							<div class="form-group col-xs-3">
								&nbsp;
							</div>
							<div class="form-group col-xs-2">
								<button type="submit" name="btn_gravar" id="btn_gravar" class="btn btn-block btn-primary" type="button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Salvar</button>
							</div>
							<div class="form-group col-xs-2">
								<button type="button" name="btn_add_novo" id="btn_add_novo" class="btn btn-block btn-primary" type="button"><i class="fa fa-file-o" aria-hidden="true"></i> Novo</button>
							</div>
							<div class="form-group col-xs-2">
								<button type="button" name="btn_pesquisar" id="btn_pesquisar" class="btn btn-block btn-primary" type="button"><i class="fa fa-search" aria-hidden="true"></i> Pesquisar</button>
							</div>
							<div class="form-group col-xs-3">
								&nbsp;
							</div>
						</div>
						<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

					</div>
				</form>
		</div>
	</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token'];?>
" />





<?php echo '<script'; ?>
 type="text/javascript" src="./public/ajax/adminRotina.js" charset="iso-8859-1"><?php echo '</script'; ?>
>

<<?php }
}
