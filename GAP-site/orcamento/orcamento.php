<div class="titulo">Orçamento</div>

<section class="content">
    <div class="contato">
        <form class="form" method="POST" action="orcamento/orcamento2.php">
            <input class="field" name="name" placeholder="Nome" type="text">
            <input class="field" name="email" placeholder="E-mail" type="email">
            <input class="field" name="telefone" placeholder="Telefone" type="number">
            <input class="field" name="empresa" placeholder="Empresa" type="text">
            <input class="field" name="cidade" placeholder="Cidade" type="text">
            <select class="field" name="estado"> 
    	        <option value="estado">Selecione o Estado</option> 
		        <option value="ac">Acre</option> 
		        <option value="al">Alagoas</option> 
		        <option value="am">Amazonas</option> 
		        <option value="ap">Amapá</option> 
		        <option value="ba">Bahia</option> 
		        <option value="ce">Ceará</option> 
		        <option value="df">Distrito Federal</option> 
		        <option value="es">Espírito Santo</option> 
		        <option value="go">Goiás</option> 
		        <option value="ma">Maranhão</option> 
		        <option value="mt">Mato Grosso</option> 
		        <option value="ms">Mato Grosso do Sul</option> 
		        <option value="mg">Minas Gerais</option> 
		        <option value="pa">Pará</option> 
		        <option value="pb">Paraíba</option> 
		        <option value="pr">Paraná</option> 
		        <option value="pe">Pernambuco</option> 
		        <option value="pi">Piauí</option> 
		        <option value="rj">Rio de Janeiro</option> 
		        <option value="rn">Rio Grande do Norte</option> 
		        <option value="ro">Rondônia</option> 
		        <option value="rs">Rio Grande do Sul</option> 
		        <option value="rr">Roraima</option> 
		        <option value="sc">Santa Catarina</option> 
		        <option value="se">Sergipe</option> 
		        <option value="sp">São Paulo</option> 
		        <option value="to">Tocantins</option> 
	        </select>
            <textarea class="field" name="message" placeholder="Solicite o Orçamento"></textarea>
            <input class="button" type="submit" value="Enviar">
        </form>
    </div>
    <div class="contato2">
        <figure class="imgorc">
            <img src="about/imagens/rádioht.png" alt="">
        </figure>
    </div>
</section>