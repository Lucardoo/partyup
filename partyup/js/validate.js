$("#formLogar").validate({
    rules : {
        email:{
            required: true,
            email: true

        },
        senha:{
            required: true,
        }

    },
    messages : {
        email:{
            required:"Campo em branco !"
        },
        senha:{
            required:"Campo em branco !"
        }
        
    }
});

$(".cadastro").validate({
    rules : {
        nome: "required",
        cidade: "required",
        
        estado:{
            required: true
        },
        email:{
            required:true,
            emai: true
        },
        senha:{
            required: true,
            minlength: 6
        },
        cep:{
            required: true,
            minlength: 8,
            maxlength: 8
        },   
    },
    messages : {
        nome:{
            required:"Campo em branco !"
        },
        senha:{
            required:"Campo em branco !"
        },
        email:{
            required:"Campo em branco !"
        },
        cidade:{
            required:"Campo em branco !"
        },
        estado:{
            required:"Campo em branco !"
        },
        cep:{
            required:"Campo em branco !",
            minlenght:"Você deve digitar no mínimo 8 números !",
            maxlenght:"Você deve digitar no máximo 8 números !"
        }
    
    }
});

$("#form_evento").validate({
    rules : {
        nome: "required",
        cidade: "required",
        endereco: "required",
        descricao: "required",
        dt_evento: "required",
        estado: "required",

        hora:{
            required:true,
            minlength: 5,
            maxlength: 5
        },
        cep:{
            required: true,
            minlength: 8,
            maxlength: 8
        },   
    },
    messages : {
        nome:{
            required:"Campo em branco !"
        },
        descricao:{
            required:"Campo em branco !"
        },
        email:{
            required:"Campo em branco !"
        },
        cidade:{
            required:"Campo em branco !"
        },
        estado:{
            required:"Campo em branco !"
        },
        hora:{
            required:"Campo em branco !",
            minlength:"Você deve digitar no mínimo 5 !",
            maxlength:"Você deve digitar no máximo 5 !"
        },
        cep:{
            required:"Campo em branco !",
            minlength:"Você deve digitar no mínimo 8 números !",
            maxlength:"Você deve digitar no máximo 8 números !"
        }
    
    }
});
