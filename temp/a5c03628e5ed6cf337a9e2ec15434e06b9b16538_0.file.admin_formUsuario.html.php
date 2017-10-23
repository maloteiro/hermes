<?php
/* Smarty version 3.1.30, created on 2017-10-17 22:28:58
  from "C:\xampp\htdocs\padrao\base\html\admin\admin_formUsuario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e6a04ac64a40_44019050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5c03628e5ed6cf337a9e2ec15434e06b9b16538' => 
    array (
      0 => 'C:\\xampp\\htdocs\\padrao\\base\\html\\admin\\admin_formUsuario.html',
      1 => 1508286532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e6a04ac64a40_44019050 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cadastro de usuários
        <small><?php echo $_SESSION['versao'];?>
</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Segurança</a></li>
        <li class="active">Usuários</li>
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
					<input type="hidden" name="f" id="f" value="salvarUsuario" />
					<input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token'];?>
" />
					<input type="hidden" name="seq_usuario" id="seq_usuario" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['seq_usuario'];?>
" />
					<input type="hidden" name="update" id="update" value="<?php echo $_smarty_tpl->tpl_vars['update']->value;?>
" />
					<div class="box-body">
						<div class="row">
							<div class="form-group col-xs-6">
				                <label>Perfil</label>
				                <select class="form-control select2 required" style="width: 100%;" id="seq_perfil" name="seq_perfil">
				                  <option value="">--Selecione--</option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perfis']->value, 'perfil');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['perfil']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['perfil']->value['seq_perfil'];?>
" <?php if ($_smarty_tpl->tpl_vars['dados']->value['seq_perfil'] == $_smarty_tpl->tpl_vars['perfil']->value['seq_perfil']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['perfil']->value['dsc_perfil_nome'];?>
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
								<label for="dsc_usuario_nome">Nome</label>
								<input name="dsc_usuario_nome" id="dsc_usuario_nome" class="form-control required" placeholder="Nome" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['dsc_usuario_nome'];?>
" maxlength='250'>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-6">
								<label for="dsc_usuario_email">E-mail (institucional)</label>
								<input name="dsc_usuario_email" id="dsc_usuario_email" class="form-control required email" placeholder="E-mail (institucional)" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['dsc_usuario_email'];?>
" maxlength='250'>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-6">
								<label for="dsc_usuario_email2">E-mail (opcional)</label>
								<input name="dsc_usuario_email2" id="dsc_usuario_email2" class="form-control email" placeholder="E-mail (opcional)" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['dsc_usuario_email2'];?>
" maxlength='250'>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-3">
								<label for="dsc_usuario_cpf">CPF (Não obrigatório)</label>
								<input name="dsc_usuario_cpf" id="dsc_usuario_cpf" class="form-control cpfBR" alt="CPF" placeholder="CPF" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['dsc_usuario_cpf'];?>
" maxlength='20'>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-3">
								<label for="num_usuario_telefone">Telefone</label>
								<input name="num_usuario_telefone" id="num_usuario_telefone" class="form-control" alt="telefone" placeholder="Telefone" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['num_usuario_telefone'];?>
" maxlength='20'>
							</div>
						</div>				
						
						<?php if ($_smarty_tpl->tpl_vars['dados']->value['seq_usuario']) {?>						
						<div class="row">
							<div class="form-group col-xs-3">
								<label for="dsc_usuario_senha">Senha</label>
								<input name="dsc_usuario_senha" id="dsc_usuario_senha" class="form-control" placeholder="Senha" type="password" value="" maxlength='20'>
							</div>
						</div>
						<?php }?>
						
						<div class="row">
							<div class="form-group col-xs-2">
								<label for="flg_usuario_ativo">Ativo</label>	<br />								
								<input type="checkbox" class="minimal" name="flg_usuario_ativo" id="flg_usuario_ativo" value="S" <?php if ($_smarty_tpl->tpl_vars['dados']->value['flg_usuario_ativo'] == "S") {?>checked<?php }?>/> <label>Sim</label>
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
 type="text/javascript" src="./public/ajax/adminUsuario.js" charset="iso-8859-1"><?php echo '</script'; ?>
>	
		<?php }
}
