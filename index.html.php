<!doctype html>



<html>


<head>

<title>formularios
</title>
<meta charset="utf-8"/>
</head>
<body>
<!--Importando Script Jquery-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>



<h1>Formulário</h1>
<form name="cont1" method="post" action="#">

<fieldset>





<p><label for="nomeUser">Nome: </label>
<input type="text" name="nomeUser" id="nomeUser" size="45" placeholder="digite seu nome"></p>








<fieldset>

<form>
<p><label for="endereco">Endereço: </label>
        <input type="text" id="endereco" required/></p>
        
        <p><label for="cidade">Cidade: </label>
        <input type="text" id="cidade" required/></p>
        
        <p><label for="uf">Estado: </label>
        <select id="uf">
            <option></option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select></p>
    
    
        <p><label for="telefone">Telefone: </label>
        <input type="text" id="telefone" required/></p>
    
        <p><label for="email">E-mail: </label>
        <input type="text" id="email" required/></p>

        <p>


<input type="submit" value="Enviar">

</p>



    </form>







</fieldset>









<script type="text/javascript">
$("#cep").focusout(function(){
//Início do Comando AJAX
$.ajax({
//O campo URL diz o caminho de onde virá os dados
//É importante concatenar o valor digitado no CEP
url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
//Aqui você deve preencher o tipo de dados que será lido,
//no caso, estamos lendo JSON.
dataType: 'json',
//SUCESS é referente a função que será executada caso
//ele consiga ler a fonte de dados com sucesso.
//O parâmetro dentro da função se refere ao nome da variável
//que você vai dar para ler esse objeto.
success: function(resposta){
//Agora basta definir os valores que você deseja preencher
//automaticamente nos campos acima.
$("#logradouro").val(resposta.logradouro);
$("#complemento").val(resposta.complemento);
$("#bairro").val(resposta.bairro);
$("#cidade").val(resposta.localidade);
$("#uf").val(resposta.uf);
//Vamos incluir para que o Número seja focado automaticamente
//melhorando a experiência do usuário
$("#numero").focus();
}
});
});
</script>​




</body>

</html>