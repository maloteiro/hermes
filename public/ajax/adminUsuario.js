$(function() {
	$('#btn_add_novo').click(function() {
	  	wiOpen('?a=admin&d=admin&f=formUsuario');
	});
	
	$('#btn_pesquisar').click(function() {
	  	wiOpen('?a=admin&d=admin&f=consultaUsuario');
	});
	
	$('#btn_voltar').click(function() {
	  	wiOpen('?a=admin&d=admin&f=formUsuario');
	});
	
	$("#formulario").validate({		
	    invalidHandler: function(form, validator) {
      		var errors = validator.numberOfInvalids();      		
      		if (errors) {         			     		
        		$('#table_message').show();
      		} 
    	},
		errorLabelContainer: "#messageBoxAtribuicao",		
		wrapper: "div",		
		rules:{
			"seq_perfil":{
				required: true								
			},
			"dsc_usuario_nome":{
				required: true								
			},
			"dsc_usuario_email":{
				required: true								
			}/*,
			"dsc_usuario_cpf":{
				required: true
			}*/
			
		},
		messages:{			
			"seq_perfil":{
				required: "Selecione uma opção no campo Perfil"								
			},
			"dsc_usuario_nome":{
				required: "O campo Nome é obrigatório"								
			},
			"dsc_usuario_email":{
				required: "O campo E-mail (institucional) é obrigatório"								
			}/*,
			"dsc_usuario_cpf":{
				required: "Por favor, forne&ccedil;a um CPF v&aacute;lido."								
			}*/
		},
		submitHandler: function(){				
			var params = $('#formulario').serialize(); 
			//alert(params)           
			$.ajax({
				type: "POST",
				url: '?',
				data: params,
				beforeSend: function(){
					$('#message-red').hide();					
		        },
				success: function(txt){					
					$('.red-left').html(txt);
					$('#update').attr("value","S");
					$('#seq_usuario').attr("value",$('#tmp_seq_usuario').val());
					$('#message-red').show();													
				}
			});
	    },
	    errorClass: "invalid",
	    unhighlight: function(element, errorClass) {
			if (this.numberOfInvalids() == 0) {
				$("#table_message").hide();
			}			
		}
	    
	});
});