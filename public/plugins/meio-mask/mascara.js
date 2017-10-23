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