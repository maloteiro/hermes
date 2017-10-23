<?php /* Smarty version Smarty3-b6, created on 2016-12-18 09:10:13
         compiled from "C:\xampp\htdocs\mundial/html//login/login_formLogin.html" */ ?>
<?php /*%%SmartyHeaderCode:74758566e95dafe69-76089791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70f90331ffa942b5c74c7ebb608ce0ddc6d318df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mundial/html//login/login_formLogin.html',
      1 => 1339164506,
    ),
  ),
  'nocache_hash' => '74758566e95dafe69-76089791',
  'function' => 
  array (
  ),
  'has_nocache_code' => true,
)); /*/%%SmartyHeaderCode%%*/?>
<script type="text/javascript" src="libs/js/ajax/login.js" charset="iso-8859-1"></script>
<script type="text/javascript" src="libs/js/jquery/msg/jquery.center.min.js" charset="iso-8859-1"></script>
<script type="text/javascript" src="libs/js/jquery/msg/jquery.msg.min.js" charset="iso-8859-1"></script>
<div class="box_cabecalho">
	Acesso ao sistema
</div>

<div class="box">
	<center>
	<form id="frmlogin" name="frmlogin" method="POST" enctype="application/x-www-form-urlencoded">
		<?php echo '/*%%SmartyNocache:74758566e95dafe69-76089791%%*/<?php $_block_repeat=true; smarty_block_dynamic(array(), null, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl);while ($_block_repeat) { ob_start();?>/*/%%SmartyNocache:74758566e95dafe69-76089791%%*/';?>

		<input type="hidden" name="d" id="d" value="login" />
		<input type="hidden" name="a" id="a" value="login" />
		<input type="hidden" name="f" id="f" value="validarAcesso" />						
		<input type="hidden" name="token" id="token" value="<?php echo '/*%%SmartyNocache:74758566e95dafe69-76089791%%*/<?php echo $_SESSION[\'token\'];?>
/*/%%SmartyNocache:74758566e95dafe69-76089791%%*/';?>
" />
		<?php echo '/*%%SmartyNocache:74758566e95dafe69-76089791%%*/<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_dynamic(array(), $_block_content, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl); }?>/*/%%SmartyNocache:74758566e95dafe69-76089791%%*/';?>

		<table id="table_message" width="100%" class="login_box"  style="display:none;">	
			<tr>
				<td id="messageBoxAtribuicao">
					
				</td>
			</tr>		
		</table>
		<div id="message-red" style="display: none;">
			<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="red-left">
						Erro. <a href="">Please try again.</a>
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
			<tr valign="center" height="30px">				
				<td align="right" class="login_box_e">
					<label class="login_txt_label">
						&nbsp;&nbsp;Login
					</label>								
				</td>				
				<td align="right" width="300px" class="login_box_d">
					<div style="margin-right:20px;">
						<?php echo '/*%%SmartyNocache:74758566e95dafe69-76089791%%*/<?php $_block_repeat=true; smarty_block_dynamic(array(), null, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl);while ($_block_repeat) { ob_start();?>/*/%%SmartyNocache:74758566e95dafe69-76089791%%*/';?>

						<input class="campo_login required" name="usuario" id="usuario" type="text" size="40">
						<?php echo '/*%%SmartyNocache:74758566e95dafe69-76089791%%*/<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_dynamic(array(), $_block_content, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl); }?>/*/%%SmartyNocache:74758566e95dafe69-76089791%%*/';?>

					</div>
				</td>				
			</tr>			
					
			<tr valign="top" height="25px">
				<td align="right" class="login_box_e">
					<label class="login_txt_label">
						&nbsp;&nbsp;Senha
					</label>								
				</td>
				<td align="right" width="295px" class="login_box_d">
					<div style="margin-right:20px;">
						<?php echo '/*%%SmartyNocache:74758566e95dafe69-76089791%%*/<?php $_block_repeat=true; smarty_block_dynamic(array(), null, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl);while ($_block_repeat) { ob_start();?>/*/%%SmartyNocache:74758566e95dafe69-76089791%%*/';?>

						<input class="campo_login required" name="senha" id="senha" type="password" size="40">
						<?php echo '/*%%SmartyNocache:74758566e95dafe69-76089791%%*/<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_dynamic(array(), $_block_content, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl); }?>/*/%%SmartyNocache:74758566e95dafe69-76089791%%*/';?>

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
				<td align="center" width="295px" class="login_box_d_txt_center">
					
						<button type="submit" name="bt_salvar" id="bt_salvar" role="button" class="botoes ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" title="Clique no botão para acessar o sistema" alt="Clique no botão para acessar o sistema">
							<span class="ui-button-text">ACESSAR</span>
						</button>																								
						<button type="button" name="bt_esqueci" id="bt_esqueci" onclick="wiOpen('?a=usuario&d=usuario&f=formAlteracaoSenha')" role="button" class="botoes ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" title="Clique no botão para envio de nova senha" alt="Clique no botão para envio de nova senha">
							<span class="ui-button-text">ESQUECI SENHA</span>
						</button>
					
				</td>													
			</tr>
			<tr>
				<td colspan="2" class="login_box_e_d_b">					
					<br />
				</td>
			</tr>
		</table>
		<br />
	</form>
	</center>
</div>

<br />
