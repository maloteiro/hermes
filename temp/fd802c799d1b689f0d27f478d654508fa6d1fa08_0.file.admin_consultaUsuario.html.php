<?php
/* Smarty version 3.1.30, created on 2017-10-17 22:22:58
  from "C:\xampp\htdocs\padrao\base\html\admin\admin_consultaUsuario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e69ee28e6ed1_28596879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd802c799d1b689f0d27f478d654508fa6d1fa08' => 
    array (
      0 => 'C:\\xampp\\htdocs\\padrao\\base\\html\\admin\\admin_consultaUsuario.html',
      1 => 1508285632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e69ee28e6ed1_28596879 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!--script>
    $(document).ready(function(){        
        $('.dataTables').dataTable({
            "bJQueryUI": true,
            "aaSorting": [ [4,'desc'], [0,'desc'] ],
            "sPaginationType": "full_numbers",
            "oLanguage": {
                "sUrl": "./libs/js/datatables/language/ptBR.txt"
            },
            "bStateSave": true,
            "aoColumnDefs": [{
                    "bSortable": false,
                    "aTargets": [-1]
                }]
        });
    });
<?php echo '</script'; ?>
-->





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
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<i class="fa fa-search"></i>
              			<h3 class="box-title">Pesquisa</h3>
              			<div style="float: right;">
							<div class="form-group">
								<button type="button" name="btn_voltar" id="btn_voltar" class="btn btn-block btn-primary" type="button"><i class="fa fa-undo" aria-hidden="true"></i> Voltar</button>
										
							</div>
							
							<!--button type="submit" name="btn_voltar" id="btn_voltar" role="button" class="botoes ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" title="Clique no botão para voltar" alt="Clique no botão para voltar" >
								<span class="ui-button-text">Voltar</span>
							</button-->
				 		</div>
            		</div>
            		<!-- /.box-header -->
            		<div class="box-body">
						
						<input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token'];?>
" />
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

			    		<table align="center" id="tabela" class="table table-bordered table-striped dataTables"> 
					        <thead>
					            <tr>            	
					                <th>
					                    <b>Usuário</b>
					                </th>                            	
					                <th>
					                    <b>CPF</b>
					                </th>                
					                <th>
					                    <b>Ativo</b>
					                </th>
					                <th width="1%">
					                    <b>Ações</b>
					                </th>
					            </tr>
					        </thead>
					        <tbody>
					            <?php if ($_smarty_tpl->tpl_vars['dados']->value) {?>
					            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dados']->value, 'dado');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dado']->value) {
?>
					            <tr id="<?php echo $_smarty_tpl->tpl_vars['dado']->value['seq_usuario'];?>
" class="processo">
					            	<td>
					                    <b><?php echo $_smarty_tpl->tpl_vars['dado']->value['dsc_usuario_nome'];?>
</b>
					                </td>
					                <td>
					                    <b><?php echo $_smarty_tpl->tpl_vars['dado']->value['dsc_usuario_cpf'];?>
</b>
					                </td>                
					                <td align="left">
					                    <b><?php if ($_smarty_tpl->tpl_vars['dado']->value['flg_usuario_ativo'] == "S") {?>SIM<?php } else { ?>NÃO<?php }?></b>
					                </td>
					                <td align="center">
					                	<button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Editar" onclick="wiOpen('?a=admin&d=admin&f=formUsuario&seq_usuario=<?php echo $_smarty_tpl->tpl_vars['dado']->value['seq_usuario'];?>
')">
	                    					<i class="fa fa-edit"></i>
	                    				</button>
					                				
					                </td>
					            </tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					            <?php }?>
					        </tbody>
					    </table>
				<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				</div>
			</div>
		</div>
	</div>
	</section>
	
</div>
	
<?php echo '<script'; ?>
 type="text/javascript" src="./public/ajax/adminUsuario.js" charset="iso-8859-1"><?php echo '</script'; ?>
><?php }
}
