<?php /* Smarty version Smarty3-b6, created on 2016-12-18 09:11:31
         compiled from "C:\xampp\htdocs\mundial/html//index/index_Principal.html" */ ?>
<?php /*%%SmartyHeaderCode:1575558566ee3371620-90329291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab92180085cb8c938ae1a278e63c13fd6c08b8ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mundial/html//index/index_Principal.html',
      1 => 1433772922,
    ),
  ),
  'nocache_hash' => '1575558566ee3371620-90329291',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_block_repeat=true; smarty_block_dynamic(array(), null, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl);while ($_block_repeat) { ob_start();?>
<!--div id="message-blue">
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="blue-left">
				<div style="float:left;width: 24px;"><img src="./imgs/icones/note_error.png" /></div> 
				Solicitações: <a href="#" onclick="javascript:wiOpen('?a=relatorio&d=relatorio&f=formAcompanhante&seq_acompanhante=<?php echo $_smarty_tpl->getVariable('estatistica')->value[0]['seq_acompanhante'];?>
');"> <?php echo $_smarty_tpl->getVariable('estatistica')->value[0]['dsc_acompanhante_nome_artistico'];?>
 (<?php echo $_smarty_tpl->getVariable('estatistica')->value[0]['total'];?>
)</a>
			</td>
			<td class="blue-right">
				<a class="close-blue">
					<img src="./imgs/table/icon_close_blue.gif"   alt="" />
				</a>
			</td>	
		</tr>
	</table>
</div-->

<div class="box" id="dialog-notificacao" title="Dados da notificação" style="height: auto;width:450px; display:none;">
	
</div>
	<div class="box_cabecalho">
		Página inicial<!--<?php echo $_SESSION['seq_orgao'];?>
-<?php echo $_SESSION['sig_perfil_sigla'];?>
-->
	</div>
	
	<div class="box">
		<br>	
		<table>	
			<tr>
				<td>&nbsp;</td>
	            
				<td>
	                <img src="imgs/cadeado_fechado.jpg"/>
				</td>
				<td>	
	                <a href="#" alt="Alterar Senha" title="Alterar Senha" id="lnk_alterarSenha">Alterar Senha</a>
	            </td>	           
			</tr>
		</table>
		
	    <script>
	        $(document).ready(function(){
	        	$('#tbl_notificacao_processo').dataTable({
		            "bSort": true,
		            "bJQueryUI": true,
					"sPaginationType": "full_numbers",
		            "bLengthChange": false,
		            "oLanguage": {
		                "sUrl": "./libs/js/datatables/language/ptBR.txt"
		            },
		            "bStateSave": true,
		            "aoColumnDefs": [{
		                    "bSortable": false,
		                    "aTargets": [-1]
		                }]
		        });
			        	
	        	$(".btn_visualizar_notificacao").click(function(){
	        		//alert('aqui');
					var notificacao_id = $(this).parents("tr:first").attr("id");
					
					$.ajax({
						url: '?d=processos&a=processos&f=dadosNotificacao',
						type: 'POST',
						data: ({					
							seq_notificacao: notificacao_id
						}),
						success: function(txt){
							jQuery("#dialog-notificacao").hide();
							jQuery("#dialog-notificacao").dialog("destroy");
							jQuery("#dialog-notificacao").dialog({
								height: 'auto',
								width: 'auto',
								modal: true,
								resizable: false
							});
							$('#dialog-notificacao').html(txt);					
							return false;					
						}
					});	
	        	 });
	            jQuery("#dialog-alterarSenha").hide();
	            jQuery("#dialog-alterarSenha").dialog("destroy");
	            jQuery("#formAlteraSenha").validate({
	                rules: {
	                    "senha": "required",
	                    "confirmar_senha": {
	                        equalTo: "#senha"
	                    }
	                }
	            });
	            jQuery("#lnk_alterarSenha").click(function(){
	                jQuery("#dialog-alterarSenha").dialog({
	                    height: 'auto',
	                    modal: true,
	                    resizable: false
	                });
	                return false;
	            });
	            
	            $('#acessar_como').change(function(){
	            	wiOpen('?a=usuario&d=usuario&f=formTrocaPerfil&acessar_como='+$(this).val())
	            });
	        });
	    </script>
	    
	    <div class="box" id="dialog-alterarSenha" title="Alterar Senha" style="height: auto">
	        <form action="?" method="POST" name="formAlteraSenha" id="formAlteraSenha">
	        	<input type="hidden" name="a" id="a" value="index" />
				<input type="hidden" name="d" id="d" value="index" />
				<input type="hidden" name="f" id="f" value="trocarSenha" />				
	            <input type="hidden" name="seq_usuario" id="seq_usuario" value="<?php echo $_SESSION['seq_usuario'];?>
">
	            <table>
	                <tr>
	                    <td align="right" class="linha1">
	                        Usuário:
	                    </td>
	                    <td class="linha1">
	                        <?php echo $_SESSION['dsc_usuario_nome'];?>

	                    </td>
	                </tr>
	                <tr>
	                    <td align="right" class="linha2">
	                        Senha:
	                    </td>
	                    <td class="linha2">
	                        <input type="password" class="text required" name="senha" id="senha" value="" size="20" maxlength="40"/>
	                    </td>
	                </tr>
	                <tr>
	                    <td align="right" class="linha1">
	                        Confirmar:
	                    </td>
	                    <td class="linha1">
	                        <input type="password" class="text required" name="confirmar_senha" id="confirmar_senha" value="" size="20" maxlength="40"/>
	                    </td>
	                </tr>
	                <tr>
	                    <td colspan="2" align="center">
	                        <input type="submit" name="submit" value="Alterar Senha">
	                    </td>
	                </tr>
	            	</table>
	        	</form>
	    	</div>
		
		<br>
		<table>
			<tr>
				<td>
					<img src="./imgs/kuzer.png" align="absmiddle" />
				</td>
				
				<td>
					<strong>Usuario:</strong> <?php echo $_SESSION['dsc_usuario_nome'];?>

					<br>
					<strong>E-mail:</strong> <?php echo $_SESSION['dsc_usuario_email'];?>

					<br>
					<strong>CPF:</strong> <?php echo $_SESSION['dsc_usuario_cpf'];?>

					<br>
					<strong>Perfil:</strong> <?php echo $_SESSION['dsc_perfil_nome'];?>
					 
				</td>
			</tr>
		</table>
		<br>
	</div>
	
	
	<input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token'];?>
" />
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_dynamic(array(), $_block_content, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl); }?>