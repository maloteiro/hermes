$(function() {
	$('#btn_add_novo').click(function() {
	  	wiOpen('?a=admin&d=admin&f=formModulo');
	});
	
	$('#btn_pesquisar').click(function() {
	  	wiOpen('?a=admin&d=admin&f=consultaModulo');
	});
	
	$('#btn_voltar').click(function() {
	  	wiOpen('?a=admin&d=admin&f=formModulo');
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
			"dsc_modulo_descricao":{
				required: true								
			},
			"num_modulo_ordem":{
				required: true								
			}
			
		},
		messages:{			
			"dsc_modulo_descricao":{
				required: "O campo descrição é obrigatório"								
			},
			"num_modulo_ordem":{
				required: "O campo ordem de apresentação é obrigatório"									
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
					$('#seq_modulo').attr("value",$('#tmp_seq_modulo').val());
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