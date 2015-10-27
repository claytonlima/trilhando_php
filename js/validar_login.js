$(document).ready( function() {
	$("#validar_login").validate({
		// Define as regras
		rules:{
			email:{
				// campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
				required: true, minlength: 2
			},
			password:{
				// campoEmail será obrigatório (required) e precisará ser um e-mail válido (email)
				required: true, minlength: 6
			},
			
	},
		// Define as mensagens de erro para cada regra
		messages:{
			email:{
				required: "Digite o seu email",
				minLength: "Digite um e-mail válido"
			},
			password:{
				required: "Digite a sua senha",
				minlength: "A senha deve conter 6 caracteres"
			},
			
	    }
	});
});


$(document).ready( function() {
	$("#validar_cadastro").validate({
		rules:{
			primeiro_nome:{
				// campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
				required: true
			},
			segundo_nome:{
				// campoEmail será obrigatório (required) e precisará ser um e-mail válido (email)
				required: true
			},
			email:{
                 required:true, email: true
			},
		
			senha:{
				required: true, minlength: 6
			},	
			data_aniversario:{
				required: true

			},
			foto:{
				required: true
	        },
	},
		// Define as mensagens de erro para cada regra
		messages:{
			primeiro_nome:{
				required: "Digite o seu NOME",
			},
			segundo_nome:{
				required: "Digite o seu SOBRENOME",
				
			},
	        email:{
				required: "Digite o seu EMAIL",
			    email:"Digite um email válido",
			 },
			  senha:{
				required: "Digite a sua SENHA",
			    minlength: "Sua senha deve conter mais de 6 caracteres",

			},
			data_aniversario:{
				required: "Digite a sua DATA DE ANIVERSÁRIO",
			    

			},
            foto:{
                 required:"Insira uma IMAGEM",


            }
	    
	    }
	});
});


$(document).ready( function() {
	$("#validar_cadastro_produtos").validate({
		rules:{
			nome_produto:{
				// campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
				required: true
			},
			foto:{
				// campoEmail será obrigatório (required) e precisará ser um e-mail válido (email)
				required: true
			},
			categoria:{
				required: true
			},

			descricao:{
				required: true
	        },
	},
		// Define as mensagens de erro para cada regra
		messages:{
			nome_produto:{
				required: "Digite o NOME PRODUTO",
			},
			foto:{
				required: "Insira uma IMAGEM",
				
			},
			categoria:{
				required: "Digite a sua SENHA",
			
			},
			descricao:{
				required: "Insira uma DESCRIÇÂO PARA O PRODUTO",
			
			},
	    }
	});
});