$(function() {
	$('#btn_add_novo').click(function() {
	  	wiOpen('?a=admin&d=admin&f=formPerfil');
	});
	
	$('#btn_pesquisar').click(function() {
	  	wiOpen('?a=admin&d=admin&f=consultaPerfil');
	});
	
	
	$('#btn_voltar').click(function() {
	  	wiOpen('?a=admin&d=admin&f=formPerfil');
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
			"dsc_perfil_nome":{
				required: true								
			},
			"sig_perfil_sigla":{
				required: true								
			}
		},
		messages:{			
			"dsc_perfil_nome":{
				required: "O campo descrição é obrigatório"								
			},
			"sig_perfil_sigla":{
				required: "O campo sigla é obrigatório"								
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
					$('#seq_perfil').attr("value",$('#tmp_seq_perfil').val());
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