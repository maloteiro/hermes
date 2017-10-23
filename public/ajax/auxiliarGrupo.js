$(function() {
	$('#btn_add_novo').click(function() {
	  	wiOpen('?a=grupo&d=grupo&f=formCadastro');
	});
	
	$('#btn_pesquisar').click(function() {
	  	wiOpen('?a=grupo&d=grupo&f=formConsulta');
	});
	
	$('#btn_voltar').click(function() {
	  	wiOpen('?a=grupo&d=grupo&f=formCadastro');
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
			"dsc_grupo_descricao":{
				required: true								
			}
			
		},
		messages:{			
			"dsc_grupo_descricao":{
				required: "O campo descrição é obrigatório"								
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
					$('#seq_grupo').attr("value",$('#tmp_seq_grupo').val());
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