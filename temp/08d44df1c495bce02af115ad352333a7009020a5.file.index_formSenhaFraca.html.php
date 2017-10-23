<?php /* Smarty version Smarty3-b6, created on 2016-12-18 09:11:26
         compiled from "./html/index/index_formSenhaFraca.html" */ ?>
<?php /*%%SmartyHeaderCode:521458566edea08f28-00990156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08d44df1c495bce02af115ad352333a7009020a5' => 
    array (
      0 => './html/index/index_formSenhaFraca.html',
      1 => 1482058192,
    ),
  ),
  'nocache_hash' => '521458566edea08f28-00990156',
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
		<!--link rel="shortcut icon" href="./imgs/CNJ.gif"-->
		<meta name="resource-type" content="document" />
		<meta http-equiv="pragma" content="no-cache" />
		<meta name="revisit-after" content="1" />
		<meta name="classification" content="Intranet" />
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta name="description" content="" />
		<meta name="keywords" content="juridico" />
		<meta name="distribution" content="Local" />
		<meta name="rating" content="General" />
		<meta name="author" content="Charlles Matos" />
		<meta name="language" content="pt-br" />
		<meta name="doc-class" content="Completed" />
		<meta name="doc-rights" content="Public" />
		
		<link rel="stylesheet" href="./libs/css/estilos.css" type="text/css" />
		<link rel="stylesheet" href="./libs/css/cmxform.css" type="text/css" />		
		<link rel="stylesheet" href="./libs/css/forms.css" type="text/css" />
		<link rel="stylesheet" href="libs/js/jquery/tablesorter/themes/blue/style.css" type="text/css" media="print, projection, screen" />

				
		
		<script type="text/javascript" src="libs/js/validaNumero.js" charset="iso-8859-1"></script>
		<script type="text/javascript" src="libs/js/editar.js" charset="iso-8859-1"></script>
		<script type="text/javascript" src="libs/js/script.js" charset="iso-8859-1"></script>
		<script type="text/javascript" src="libs/js/page.js" charset="iso-8859-1"></script>
		<script type="text/javascript" src="libs/js/menu/menu.js" charset="iso-8859-1"></script>
		
		<script type="text/javascript" src="libs/js/mascaraGenerica.js" charset="iso-8859-1"></script>		
		
		<script type="text/javascript" src="libs/js/jquery/jquery-1.4.4.js"></script>
        
        <script type="text/javascript" src="libs/js/ajax/messages.js" charset="iso-8859-1"></script>
        <script type="text/javascript" src="libs/js/ajax/index.js" charset="iso-8859-1"></script>
		
		<!--script type="text/javascript" src="extlibs/js/ery/jquery.maskedinput-1.2.2.js" charset="iso-8859-1"></script-->
		<script type="text/javascript" src="libs/js/jquery/jquery.meio.mask.js" charset="utf-8"></script>

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
		
		<!-- biblioteca de funções da corregedoria -->
		<script type="text/javascript" src="./libs/js/ajax/functions.js"></script>
		
		<script type="text/javascript">			
			$('.botao').corner();
			
			jQuery(function(){				
				$('input:text').setMask();
			});
			$.mask.masks = $.extend($.mask.masks,{
				inteiro:{ mask: '999.999.999.999', type:'reverse' },
				decimal:{ mask: '99,999.999.999.999', type:'reverse' },
				dateBR:{ mask: '39/19/2999'}
			});
      
		</script>	
		<style>
		div.notas {
			background-color: #FFFFE1;
			border: 1px solid #666666;
			color: red;
			float: right;
			font-size: 88%;
			height: auto;
			margin: 0;			
			width: 300px;
			margin-bottom:15px;
			text-align:left;
		}
		</style>
		
	</head>	
	

<body>
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
							<td><!--a:<?php echo $_REQUEST['a'];?>
 - d:<?php echo $_REQUEST['d'];?>
 - f:<?php echo $_REQUEST['f'];?>
--> 
								<div id="div_corpo">
									
									<div class="box_cabecalho">
										Trocar senha
									</div>
									
									<div class="box">
										<center>
										<form id="formAlterarSenha" name="formAlterarSenha" method="POST" action="?">
											
											<input type="hidden" name="d" id="d" value="login" />
											<input type="hidden" name="a" id="a" value="login" />
											<input type="hidden" name="f" id="f" value="salvarAlterarSenha" />						
											<input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token'];?>
" />
											
											<table id="table_message" width="100%" class="login_box"  style="display:none;">	
												<tr>
													<td id="messageBoxAtribuicao">
														
													</td>
												</tr>		
											</table>
											<div id="message-red" style="">
												<table border="0" width="100%" cellpadding="0" cellspacing="0">
													<tr>
														<td class="red-left">
															Erro. <a href="">Detectamos que a sua senha é muito fraca. Recomendamos que ela seja trocada nesse acesso.</a>
														</td>
														<td class="red-right">
															<a class="close-red">
																<img src="./imgs/table/icon_close_red.gif"   alt="" />
															</a>
														</td>	
													</tr>
												</table>
											</div>
											<br />
											
											<table cellpadding="0" cellspacing="0" border="0" class="login_box">
												<tr>
													<td colspan="2" class="login_box_e_d_t">					
														<br />
													</td>
												</tr>												
												<tr valign="top" height="25px">
													<td align="right" class="login_box_e">
														<label class="login_txt_label">
															Senha atual
														</label>								
													</td>							
													<td align="right" width="295px" class="login_box_d">
														<div style="margin-right:20px;">
															<input class="campo_login required" name="senha_atual" id="senha_atual" type="password" size="40">
														</div>
													</td>
												</tr>
												<tr valign="top" height="25px">
													<td align="right" class="login_box_e">
														<label class="login_txt_label">
															Nova senha
														</label>								
													</td>
													<td align="right" width="295px" class="login_box_d">
														<div style="margin-right:20px;">
															<input class="campo_login required" name="nova_senha" id="nova_senha" type="password" size="40">
														</div>
													</td>
												</tr>
												<tr valign="top" height="25px">
													<td align="right" class="login_box_e">
														<label class="login_txt_label">
															Confirmar nova senha
														</label>								
													</td>
													<td align="right" width="295px" class="login_box_d">
														<div style="margin-right:20px;">
															<input class="campo_login required" name="confirmar_senha" id="confirmar_senha" type="password" size="40">
														</div>
													</td>
												</tr>
												<tr>
													<td colspan="2" class="login_box_e_d">
														<br />														
													</td>
												</tr>					
												<tr valign="top">
													<td align="right" class="login_box_e">
														&nbsp;								
													</td>
													<td align="right" width="295px" class="login_box_d_txt_center">
														<div style="margin-right:20px;text-align:center;">
														<button type="submit" name="bt_salvar" id="bt_salvar" role="button" class="botoes ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" title="Clique no botão para alterar cadastro" alt="Clique no botão para alterar cadastro">
															<span class="ui-button-text">SALVAR</span>
														</button>
														<button type="button" name="bt_ignorar" id="bt_ignorar" role="button" class="botoes ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" title="Clique no botão para alterar cadastro" alt="Clique no botão para alterar cadastro" onclick="wiOpen('?a=index&d=index&f=Principal')">
															<span class="ui-button-text">IGNORAR</span>
														</button>														
														</div>
													</td>													
												</tr>
												<tr>
													<td colspan="2" class="login_box_e_d_b">
														<br />														
													</td>
												</tr>
											</table>
										</form>
										</center>
									</div>							
								</div>
							</td>							
						</tr>
					</table>
				</td>
				<td width="27%"></td>
			</tr>
			
			
			<?php if (!empty($_SESSION['msg'])){?>

				
					<script type="text/javascript">
					$(function() {
						// a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
						$("#dialog-message-system").dialog("destroy");
					
						$("#dialog-message-system").dialog({
							modal: true,
							buttons: {
								Ok: function() {
									$(this).dialog('close');
								}
							}
						});
					});
					</script>
					
					<div id="dialog-message-system" title="Aviso">
						<p>
							<span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>					
							
								
									<?php echo $_SESSION['msg'];?>

								
							
						</p>						
					</div>		
				
			<?php }?>
		
			
			
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