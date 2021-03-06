<?php
/* Smarty version 3.1.30, created on 2017-10-18 01:04:19
  from "C:\xampp\htdocs\padrao\base\html\grupo\grupo_formCadastro.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e6c4b35bfbc9_03720486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0d7f1d07333bcb2430b3cce6c71d43cd804bedb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\padrao\\base\\html\\grupo\\grupo_formCadastro.html',
      1 => 1508295849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e6c4b35bfbc9_03720486 (Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">   	
    	
      <h1>
        Cadastro de grupos
        <small><?php echo $_SESSION['versao'];?>
</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Auxiliar</a></li>
        <li class="active">Grupos</li>
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
    	
    	
		
		<!--div id="message-red" style="display:none;">
			<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="red-left">				 
						<a href="#"></a>
					</td>
					<td class="red-right">
						<a class="close-red">
							<img src="./imgs/table/icon_close_red.gif"   alt="" />
						</a>
					</td>	
				</tr>
			</table>
		</div-->




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
					<input type="hidden" name="f" id="f" value="salvarGrupo" />
					<input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token'];?>
" />		
					<input type="hidden" name="update" id="update" value="<?php echo $_smarty_tpl->tpl_vars['update']->value;?>
" />
					<input type="hidden" name="seq_grupo" id="seq_grupo" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['seq_grupo'];?>
" />
					<div class="box-body">						
			           	<div class="row">
							<div class="form-group col-xs-6">
								<label for="dsc_grupo_descricao">Descri��o</label>
								<input name="dsc_grupo_descricao" id="dsc_grupo_descricao" class="form-control required" placeholder="Descri��o" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['dsc_grupo_descricao'];?>
" maxlength='250'>
							</div>
						</div>
						
						
						
						<div class="row">
							<div class="form-group col-xs-2">
								<label for="flg_grupo_ativo">Ativo</label>	<br />								
								<input type="checkbox" class="minimal" name="flg_grupo_ativo" id="flg_grupo_ativo" value="S" <?php if ($_smarty_tpl->tpl_vars['dados']->value['flg_grupo_ativo'] == "S") {?>checked<?php }?>/> Sim
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
	</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token'];?>
" />





<?php echo '<script'; ?>
 type="text/javascript" src="./public/ajax/auxiliarGrupo.js" charset="iso-8859-1"><?php echo '</script'; ?>
>
						
						
					<?php }
}
