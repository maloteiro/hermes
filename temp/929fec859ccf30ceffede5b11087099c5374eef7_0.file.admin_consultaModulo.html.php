<?php
/* Smarty version 3.1.30, created on 2017-10-17 09:43:07
  from "C:\xampp\htdocs\padrao\base\html\admin\admin_consultaModulo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e5eccb6a92f7_66574891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '929fec859ccf30ceffede5b11087099c5374eef7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\padrao\\base\\html\\admin\\admin_consultaModulo.html',
      1 => 1508238583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e5eccb6a92f7_66574891 (Smarty_Internal_Template $_smarty_tpl) {
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
        Cadastro de m�dulos
        <small><?php echo $_SESSION['versao'];?>
</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Seguran�a</a></li>
        <li class="active">M�dulos</li>
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
							
							<!--button type="submit" name="btn_voltar" id="btn_voltar" role="button" class="botoes ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" title="Clique no bot�o para voltar" alt="Clique no bot�o para voltar" >
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
                    <b>Descri��o</b>
                </th>
                <th>
                    <b>Ativo</b>
                </th>
                <th width="1%">
                    <b>A��es</b>
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
            <tr id="<?php echo $_smarty_tpl->tpl_vars['dado']->value['seq_modulo'];?>
" class="processo">
            	<td>
                    <b><?php echo $_smarty_tpl->tpl_vars['dado']->value['dsc_modulo_descricao'];?>
</b>
                </td>                               
                <td align="left">
                    <b><?php if ($_smarty_tpl->tpl_vars['dado']->value['flg_modulo_ativo'] == "S") {?>SIM<?php } else { ?>N�O<?php }?></b>
                </td>
                <td align="center">
                	<button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Editar" onclick="wiOpen('?a=admin&d=admin&f=formModulo&seq_modulo=<?php echo $_smarty_tpl->tpl_vars['dado']->value['seq_modulo'];?>
')">
    					<i class="fa fa-edit"></i>
    				</button>
                	<!--img src="./imgs/icones/page_white_edit.png" title="Editar" class="btn_editar tooltip" onclick="wiOpen('?a=admin&d=admin&f=formModulo&seq_modulo=<?php echo $_smarty_tpl->tpl_vars['dado']->value['seq_modulo'];?>
')"/-->				
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
 type="text/javascript" src="./public/ajax/adminModulo.js" charset="iso-8859-1"><?php echo '</script'; ?>
><?php }
}
