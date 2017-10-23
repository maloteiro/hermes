$(function() {
	$('#bt_selecionar').click(function() {
		//alert('a')
	  	$.ajax({
			type: "POST",
			url: '?',
			data: 'a=admin&d=admin&f=ajaxPermissao&seq_perfil='+$('#seq_perfil').val()+'&token='+$('#token').val(),
			beforeSend: function(){				
			},
			success: function(txt){
				//alert('txt')
				$('#boxResultado').html(txt);
				//$('#message-red').show();													
			}
		});
	});
	
	
	$("#seq_perfil").change(function() {
		$.ajax({
			type: "POST",
			url: '?',
			data: 'a=admin&d=admin&f=ajaxPermissao&seq_perfil='+$('#seq_perfil').val()+'&token='+$('#token').val(),
			beforeSend: function(){				
			},
			success: function(txt){
				$('#boxResultado').html(txt);
				//$('#message-red').show();													
			}
		});
	});
	
	
	$("#frmPermissoes").validate({		
	    invalidHandler: function(form, validator) {
      		var errors = validator.numberOfInvalids();      		
      		if (errors) {         			     		
        		$('#table_message').show();
      		} 
    	},
		errorLabelContainer: "#messageBoxAtribuicao",		
		wrapper: "div",		
		rules:{
			"seq_rotina[]":{
				required: true
								
			}
		},
		messages:{
			"seq_rotina[]":{
				required: "Selecione ao menos uma opção"
								
			}
		},
		submitHandler: function(){				
			var params = $('#frmPermissoes').serialize(); 
			//alert(params)           
			$.ajax({
				type: "POST",
				url: '?',
				data: params,
				beforeSend: function(){
					$('#message-red').hide();
					//$.msg({ content: 'blah blah' });
		            // mostro a div loading
		            //$('#loading').show();
		            // html(): equivalente ao innerHTML
		            //$('#loading').html("<img src='./img/loader/ajax-loader.gif' />");
		        },
				success: function(txt){
					$('.red-left').html(txt);
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
