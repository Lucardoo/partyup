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

$(".form_cadastro").validate({
    rules : {
        nm_usuario:{
            required: true,
        },
        email:{
            required:true,
            emai: true,
        },
        senha:{
            required: true,
        }

    },
    messages : {
        nm_usuario:{
            required:""
        },
        senha:{
            required:""
        },
        email:{
            required:""
        }
    
    }
});

