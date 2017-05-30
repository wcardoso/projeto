<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
 <head>
 
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
   
 <!-- Adicionando Javascript -->
 <script type="text/javascript" >

 function limpa_formulário_cep() {
        //Limpa valores do formulário de cep.
        document.getElementById('rua').value=("");
        document.getElementById('bairro').value=("");
        document.getElementById('cidade').value=("");
        document.getElementById('uf').value=("");
        
}

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('rua').value=(conteudo.logradouro);
        document.getElementById('bairro').value=(conteudo.bairro);
        document.getElementById('cidade').value=(conteudo.localidade);
        document.getElementById('uf').value=(conteudo.uf);
        
    } //end if.
    else {
        //CEP não Encontrado.
        limpa_formulário_cep();
        alert("CEP não encontrado.");
    }
}

function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('rua').value="...";
            document.getElementById('bairro').value="...";
            document.getElementById('cidade').value="...";
            document.getElementById('uf').value="...";
            

            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
};

</script>
</head>

<body>
<div class="container">
<div class="row">
<!-- Inicio do formulario -->
  <form method="get" action=".">
    <label>Cep:
    <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
           onblur="pesquisacep(this.value);" /></label><br />
    <label>Rua:
    <input name="rua" type="text" id="rua" size="60" /></label><br />
    <label>Bairro:
    <input name="bairro" type="text" id="bairro" size="40" /></label><br />
    <label>Cidade:
    <input name="cidade" type="text" id="cidade" size="40" /></label><br />
    <label>Estado:
    <input name="uf" type="text" id="uf" size="2" /></label><br />
   
  </form>
  <div class="row"  >
    <a  class ='btn green ' href="<?php echo e(route('site.home')); ?>"><i class="material-icons">location_on </i> Pode voltar agora. </a>
</div>
  </div>
</div>
</body>

</html>







<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>