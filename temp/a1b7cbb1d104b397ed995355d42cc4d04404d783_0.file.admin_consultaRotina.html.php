<?php
/* Smarty version 3.1.30, created on 2017-10-17 21:55:01
  from "C:\xampp\htdocs\padrao\base\html\admin\admin_consultaRotina.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e69855261181_48002358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1b7cbb1d104b397ed995355d42cc4d04404d783' => 
    array (
      0 => 'C:\\xampp\\htdocs\\padrao\\base\\html\\admin\\admin_consultaRotina.html',
      1 => 1508284350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e69855261181_48002358 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <b>Módulo</b>
                </th>
                <th>
                    <b>Descrição</b>
                </th>                            	
                <th>
                    <b>Arquivo</b>
                </th>
                <th>
                    <b>Diretório</b>
                </th>                
                <th>
                    <b>Função</b>
                </th>
                <th>
                    <b>Ativa</b>
                </th>
                <th width="1%">
                    <b>Ações</b>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php if ($_smarty_tpl->tpl_vars['rotinas']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rotinas']->value, 'rotina');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rotina']->value) {
?>
            <tr id="<?php echo $_smarty_tpl->tpl_vars['processo']->value['seq_rotina'];?>
" class="processo">
            	<td>
                    <b><?php echo $_smarty_tpl->tpl_vars['rotina']->value['dsc_modulo_descricao'];?>
</b>
                </td>
                <td>
                    <b><?php echo $_smarty_tpl->tpl_vars['rotina']->value['dsc_rotina_descricao'];?>
</b>
                </td>
                <td align="left">
                    <b><?php echo $_smarty_tpl->tpl_vars['rotina']->value['dsc_rotina_arquivo'];?>
</b>
                </td>
                <td align="left">
                    <b><?php echo $_smarty_tpl->tpl_vars['rotina']->value['dsc_rotina_diretorio'];?>
</b>
                </td>                
                <td align="left">
                    <b><?php echo $_smarty_tpl->tpl_vars['rotina']->value['dsc_rotina_funcao'];?>
</b>
                </td>
                <td align="left">
                    <b><?php if ($_smarty_tpl->tpl_vars['rotina']->value['flg_rotina_ativa'] == "S") {?>SIM<?php } else { ?>NÃO<?php }?></b>
                </td>
                <td align="center">
                	<button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Editar" onclick="wiOpen('?a=admin&d=admin&f=formRotina&seq_rotina=<?php echo $_smarty_tpl->tpl_vars['rotina']->value['seq_rotina'];?>
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
 type="text/javascript" src="./public/ajax/adminRotina.js" charset="iso-8859-1"><?php echo '</script'; ?>
><?php }
}
