<?php
/* Smarty version 3.1.30, created on 2017-10-17 21:51:24
  from "C:\xampp\htdocs\padrao\base\html\admin\admin_formPermissao.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e6977c645dc6_87297835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d37cd5bd43bc0951284448da2cf412ccba170c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\padrao\\base\\html\\admin\\admin_formPermissao.html',
      1 => 1508284273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e6977c645dc6_87297835 (Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">   	
    	
      <h1>
        Cadastro de perfis
        <small><?php echo $_SESSION['versao'];?>
</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Segurança</a></li>
        <li class="active">Premissões</li>
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

				<form id="frmPermissoes" name="frmPermissoes" action="?" method="POST" role="form">
					<input type="hidden" name="a" id="a" value="admin" />
					<input type="hidden" name="d" id="d" value="admin" />
					<input type="hidden" name="f" id="f" value="salvarPermissao" />			
					<input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token'];?>
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
"><?php echo $_smarty_tpl->tpl_vars['perfil']->value['dsc_perfil_nome'];?>
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
							<div class="form-group col-xs-3">
								<button type="button" name="bt_selecionar" id="bt_selecionar" class="btn btn-block btn-primary" type="button"><i class="fa fa-search" aria-hidden="true"></i> Selecionar</button>
								
				                <!--button type="button" name="bt_selecionar" id="bt_selecionar" role="button" class="botoes ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" title="Clique no botão para selecionar um perfil" alt="Clique no botão para selecionar um perfil">
									<span class="ui-button-text">Selecionar</span>
								</button-->
				            </div>
			           	</div>
			           	
			           	<div class="row">
							<div class="form-group col-xs-12">
				                <div id="boxResultado">
							
								</div>
				            </div>
			           	</div>				
					</div>					
				</form>
				<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

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
 type="text/javascript" src="./public/ajax/admin.js" charset="iso-8859-1"><?php echo '</script'; ?>
>
<?php }
}
