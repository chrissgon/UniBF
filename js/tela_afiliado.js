// CADASTRO
// campos
// cnpj
$(".info .cnpj").keyup(function(){
    // animação
    $("i", this).removeClass("ativo")
    $(".busca", this).addClass("ativo")
    // numero de caracter
    num = $("input", this).val().length
    // se for 0
    if(num == 0){
        $(".busca", this).removeClass("ativo")
    }
    else if(num == 14){
        $("input", this).blur()
    }
})

$(".info .cnpj input").focusout(function(){
    // obtendo cnpj
    cnpj = $(this).val()

    // validando dados
    $.get("https://www.receitaws.com.br/v1/cnpj/"+cnpj, function(dados){
        // sucesso
        if(dados.status == "OK"){
            // animação
            $(".cnpj .status i").removeClass("ativo")
            $(".cnpj .status .sucesso").addClass("ativo")
            console.log(dados)
            alert(dados.natureza_juridica)
        }
        // erro
        else{
            // animcação
            $(".cnpj .status i").removeClass("ativo")
            $(".cnpj .status .erro").addClass("ativo")
        }
    }, "jsonp")
})

// email
num_email = 1
$(".btn-email.adicionar").click(function(){
    num_email += 1
    if(num_email <= 3){
        $(".info").append("<p class='campo email'><input type='email' name='email' placeholder='Email'><a class='btn-email remover'><i class='material-icons'>remove</i></a></p>")
    }
    else{
        alert("Número máximo atingido!")
        num_email -= 1
    }
})

$(document).on("click", ".btn-email.remover", function(){
    num_email -= 1
    This = $(this).closest(".campo")
    $(This).remove()
})