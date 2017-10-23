$(function() {
	$('#btn_add_novo').click(function() {
	  	wiOpen('?a=admin&d=admin&f=formRotina');
	});
	
	$('#btn_pesquisar').click(function() {
	  	wiOpen('?a=admin&d=admin&f=consultaRotina');
	});
	
	$('#btn_voltar').click(function() {
	  	wiOpen('?a=admin&d=admin&f=formRotina');
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
			"seq_modulo":{
				required: true								
			},
			"dsc_rotina_descricao":{
				required: true								
			},
			"dsc_rotina_arquivo":{
				required: true								
			},
			"dsc_rotina_diretorio":{
				required: true								
			},
			"dsc_rotina_funcao":{
				required: true								
			},
			"num_rotina_ordem":{
				required: true								
			}
			
		},
		messages:{
			"seq_modulo":{
				required: "Selecione um Módulo"								
			},
			"dsc_rotina_descricao":{
				required: "O campo Descrição é obrigatório"								
			},
			"dsc_rotina_arquivo":{
				required: "O campo Arquivo é obrigatório"								
			},
			"dsc_rotina_diretorio":{
				required: "O campo Diretório é obrigatório"								
			},
			"dsc_rotina_funcao":{
				required: "O campo Função é obrigatório"								
			},
			"num_rotina_ordem":{
				required: "O campo Ordem é obrigatório"								
			}
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
					$('#seq_rotina').attr("value",$('#tmp_seq_rotina').val());
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