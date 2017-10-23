<?php /* Smarty version Smarty3-b6, created on 2016-12-18 09:11:30
         compiled from "C:\xampp\htdocs\mundial/html//padrao.html" */ ?>
<?php /*%%SmartyHeaderCode:1101358566ee2c46d68-36688502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e50b4df9dddaf8fb8b903a57914a715f7565ca5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mundial/html//padrao.html',
      1 => 1482058171,
    ),
  ),
  'nocache_hash' => '1101358566ee2c46d68-36688502',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'C:\xampp\htdocs\mundial\bibliotecas\smarty\libs\plugins\modifier.date_format.php';
if (!is_callable('smarty_block_php')) include 'C:\xampp\htdocs\mundial\bibliotecas\smarty\libs\plugins\block.php.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	
	<head>
		<title><?php echo $_SESSION['msg_titulo'];?>
</title>
		<!--link rel="shortcut icon" href="./imgs/baladeiro.gif"-->
		<meta name="resource-type" content="document" />
		<meta http-equiv="pragma" content="no-cache" />
		<meta name="revisit-after" content="1" />
		<meta name="classification" content="Intranet" />
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta name="description" content="" />
		<meta name="keywords" content="juridico" />
		<meta name="distribution" content="Local" />
		<meta name="rating" content="General" />
		<meta name="author" content="Charlles de Matos Sousa" />
		<meta name="language" content="pt-br" />
		<meta name="doc-class" content="Completed" />
		<meta name="doc-rights" content="Public" />
		
		<link rel="stylesheet" href="./libs/css/estilos.css" type="text/css" />		
		<link rel="stylesheet" href="./libs/css/cmxform.css" type="text/css" />
		<link rel="stylesheet" href="./libs/css/forms.css" type="text/css" />		
		<link rel="stylesheet" href="libs/js/jquery/tablesorter/themes/blue/style.css" type="text/css" media="print, projection, screen" />

                <LINK REL="StyleSheet" TYPE="text/css" HREF="./libs/css/buttons.css" />
                
		<style type="text/css" title="currentStyle">
                    @import "./libs/css/demo_page.css";
                    @import "./libs/css/demo_table_jui.css";
                </style>		
		
		<script type="text/javascript" src="libs/js/validaNumero.js" charset="iso-8859-1"></script>
		<script type="text/javascript" src="libs/js/editar.js" charset="iso-8859-1"></script>
		<script type="text/javascript" src="libs/js/script.js" charset="iso-8859-1"></script>
		<script type="text/javascript" src="libs/js/page.js" charset="iso-8859-1"></script>
		<script type="text/javascript" src="libs/js/menu/menu.js" charset="iso-8859-1"></script>
		
		<script type="text/javascript" src="libs/js/mascaraGenerica.js" charset="iso-8859-1"></script>		
		
        <script type="text/javascript" src="libs/js/jquery/jquery-1.4.4.js"></script>
        
        <script type="text/javascript" src="libs/js/ajax/messages.js" charset="iso-8859-1"></script>
        
        
		<script type="text/javascript" src="libs/js/jquery/jquery.cookie.js"></script>
		<script type="text/javascript" src="libs/js/qtip/jquery.qtip-1.0.0-rc3.js"></script>
		<!--script type="text/javascript" src="extras/jquery/jquery.maskedinput-1.2.2.js" charset="iso-8859-1"></script-->
		<script type="text/javascript" src="libs/js/jquery/jquery.meio.mask.js" charset="utf-8"></script>
		<script type="text/javascript" src="libs/js/init.js"></script>
		
		<script type="text/javascript" language="javascript" src="libs/js/jquery/validate/jquery.validate.min.js" charset="iso-8859-1"></script>
		<script type="text/javascript" language="javascript" src="libs/js/jquery/validate/localization/messages_ptbr.js" charset="iso-8859-1"></script>
		<script type="text/javascript" language="javascript" src="libs/js/jquery/validate/additional-methods.js" charset="iso-8859-1"></script>
		
		<script type="text/javascript" src="libs/js/jquery/tablesorter/jquery.tablesorter.js"></script>
		<script type="text/javascript" src="libs/js/jquery/tablesorter/jquery.tablesorter.pager.js"></script>
		<script type="text/javascript" src="libs/js/jquery/jquery.corner.js"></script>
		
		<!-- Parte do jquery para fazer janelas e alertas com JQUERY -->
		<link type="text/css" href="./libs/js/jquery/themes/base/jquery.ui.all.css" rel="stylesheet" />

		<script type="text/javascript" src="./libs/js/jquery/external/jquery.bgiframe-2.1.1.js"></script>
		<script type="text/javascript" src="./libs/js/jquery/ui/jquery.ui.core.js"></script>
	
		<script type="text/javascript" src="./libs/js/jquery/ui/jquery.ui.widget.js"></script>
		<script type="text/javascript" src="./libs/js/jquery/ui/jquery.ui.mouse.js"></script>
		<script type="text/javascript" src="./libs/js/jquery/ui/jquery.ui.button.js"></script>
		<script type="text/javascript" src="./libs/js/jquery/ui/jquery.ui.draggable.js"></script>
		<script type="text/javascript" src="./libs/js/jquery/ui/jquery.ui.position.js"></script>
		<script type="text/javascript" src="./libs/js/jquery/ui/jquery.ui.resizable.js"></script>
		<script type="text/javascript" src="./libs/js/jquery/ui/jquery.ui.dialog.js"></script>
		<script type="text/javascript" src="./libs/js/jquery/ui/jquery.ui.tabs.js"></script>
		<script type="text/javascript" src="./libs/js/jquery/ui/jquery.ui.autocomplete.js"></script>
		
		
		<!-- biblioteca de funções da corregedoria -->
		<script type="text/javascript" src="./libs/js/ajax/functions.js"></script>

		<script type="text/javascript">			
			$('.botao').corner();
			
			jQuery(function(){				
				$('input:text').setMask();
			});
			$.mask.masks = $.extend($.mask.masks,{
				numeroProcesso:{ mask: '9999999-99.9999.9.99.9999'},				
				inteiro:{ mask: '999.999.999.999', type:'reverse' },
				decimal:{ mask: '99,999.999.999.999', type:'reverse' },
				dateBR:{ mask: '39/19/2999'},				
				CPF:{ mask: '999.999.999-99'},
				CNPJ:{ mask: '99.999.999/9999-99'},
				CEP:{ mask: '99.999-999'},
				telefone:{ mask: '(99) 9999-99999'}
			});
      
		</script>	
		
		<!--menu-->
		<link rel="stylesheet" type="text/css" href="./libs/js/jquery/superfish-1.4.8/css/superfish.css" media="screen">
		<script type="text/javascript" src="./libs/js/jquery/superfish-1.4.8/js/hoverIntent.js"></script>
		<script type="text/javascript" src="./libs/js/jquery/superfish-1.4.8/js/superfish.js"></script>
		
		<script type="text/javascript">			
					
			// initialise plugins - menu
			jQuery(function(){
				jQuery('ul.sf-menu').superfish();
			});
	  
		</script>	
		
		<!-- datatable -->		
		<script type="text/javascript" src="libs/js/jquery/datatables/jquery.dataTables.js" charset="iso-8859-1"></script>
		<script type="text/javascript" src="libs/js/jquery/datatables/TableTools.js" charset="iso-8859-1"></script>
		<style type="text/css" media="screen">			
			@import "libs/js/jquery/datatables/css/table_jui.css";	
			
			/*
			 * Override styles needed due to the mix of three different CSS sources! For proper examples
			 * please see the themes example in the 'Examples' section of this site
			 */
			.dataTables_info { padding-top: 0; }
			.dataTables_paginate { padding-top: 0; }
			.css_right { float: right; }
			#example_wrapper .fg-toolbar { font-size: 0.8em }
			#theme_links span { float: left; padding: 2px 10px; }

		</style>  
		
		
		<?php $_block_repeat=true; smarty_block_dynamic(array(), null, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl);while ($_block_repeat) { ob_start();?>
		<?php if ($_SESSION['msg']){?>

			
			<script type="text/javascript">
			$(function() {
				// a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
				$("#dialog").dialog("destroy");
			
				$("#dialog").dialog({
					modal: true,
					buttons: {
						Ok: function() {
							$(this).dialog('close');
						}
					}
				});
			});
			</script>
				
		<?php }?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_dynamic(array(), $_block_content, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl); }?>
	</head>	

<body>
	<?php if ($_SESSION['ambiente']!='PRODUCAO'){?>

		<div id="div_topo_pagina">
			<center>
			<div id="div_topo_cabecalho">
				<?php $_block_repeat=true; smarty_block_dynamic(array(), null, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl);while ($_block_repeat) { ob_start();?>
				<strong>Usuário:</strong>  <?php echo $_SESSION['dsc_usuario_nome'];?>
 - 
				<strong>CPF:</strong> <?php echo $_SESSION['dsc_usuario_cpf'];?>
	
				 - a - <?php echo $_REQUEST['a'];?>
 - d - <?php echo $_REQUEST['d'];?>
 - f - <?php echo $_REQUEST['f'];?>
			
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_dynamic(array(), $_block_content, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl); }?>								 
			</div>
			</center>
		</div>
	<?php }?>
		
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td width="27%"></td>
				<td class="cabecalho">
					<table width="979px" cellpadding="0" cellspacing="0">
						<tr>
							<td>
								<img src="./imgs/logo.png" border="0">
							</td>
							<td></td>
						</tr>
					</table>
				</td>
				<td width="27%"></td>
			</tr>
			<tr>
				<td width="27%"></td>
				<td class="menu">
					<table width="977px" cellpadding="0" cellspacing="0">
						<tr>
							<td>		
													
								<div class="menu_esquerda">
									<?php $_block_repeat=true; smarty_block_dynamic(array(), null, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl);while ($_block_repeat) { ob_start();?>									 
									<?php $_template = new Smarty_Internal_Template("menu/menu.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	
									<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_dynamic(array(), $_block_content, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl); }?>								
								</div>								
								
								<div class="menu_direita">
									<div style="float:right;">
										<a href="#" onclick="wiOpen('?d=index&a=index&f=sair');">Sair</a>
									</div>
									<div style="width:25px;float:right;">
										<img src="./imgs/sair.gif" border="0"/>
									</div>
								</div>
							</td>							
						</tr>
					</table>
				</td>
				<td width="27%"></td>
			</tr>
			<tr>
				<td width="27%"></td>
				<td class="corpo">
					<table width="977px" cellpadding="0" cellspacing="0">
						<tr>
							<td><!-- a:<?php echo $_REQUEST['a'];?>
 - d:<?php echo $_REQUEST['d'];?>
 - f:<?php echo $_REQUEST['f'];?>
 --> 
								<div id="div_corpo"> 
									<?php $_block_repeat=true; smarty_block_dynamic(array(), null, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl);while ($_block_repeat) { ob_start();?>
									    <?php if ($_smarty_tpl->getVariable('d')->value&&$_smarty_tpl->getVariable('f')->value&&$_smarty_tpl->getVariable('a')->value){?>

											<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('template')->value}", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?> 
										<?php }else{ ?>

											Falha ao carregar o HTML
										<?php }?>

									<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_dynamic(array(), $_block_content, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl); }?>
																
								</div>
							</td>							
						</tr>
					</table>
				</td>
				<td width="27%"></td>
			</tr>
			
			<?php $_block_repeat=true; smarty_block_dynamic(array(), null, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl);while ($_block_repeat) { ob_start();?>
			<?php if ($_SESSION['msg']){?>

					<div id="dialog" title="Aviso">
						<p>
							<span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>					
							<?php echo $_SESSION['msg'];?>

						</p>						
					</div>		
			<?php }?>
		
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_dynamic(array(), $_block_content, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl); }?>
			
			<tr>
				<td width="27%"></td>
				<td class="rodape">
					<table width="977px" cellpadding="0" cellspacing="0">
						<tr>
							<td>
								<div id="texto_ropape">
									<strong><?php echo $_SESSION['msg_rodape'];?>
</strong>
								</div>
								
								<div id="texto_rodape_endereco">
									<hr class="separador"/>
									Todos direitos reservados © - <?php echo smarty_modifier_date_format(time(),"%Y");?>
 - Versão - <?php echo $_SESSION['versao'];?>

								</div>
							</td>							
						</tr>
					</table>
				</td>
				<td width="27%"></td>
			</tr>
		</table>
		<?php $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl);while ($_block_repeat) { ob_start();?>
			unset($_SESSION['msg']);
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl); }?>
</body>
</html>