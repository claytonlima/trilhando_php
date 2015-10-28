<div>
<br>
<br>
<br>
<div class="row">
        <fieldset>
            <legend style="display: block; padding-left: 2px; padding-right: 2px; border: none; text-align:center;"><?php echo $conteudo['pagina'];?></legend>
        <form class="span7 text-center col-md-5 col-md-offset-1" style="float: none; margin-left: auto;margin-right: auto;" action="../mensagem_retorno.php" method="get">
            <input type="email" name="inputemail" class="form-control" placeholder="Email" required autofocus style="width:500px;"></br>
            <input type="text" name="inputNome" class="form-control" placeholder="Nome" required style="width:500px;"></br>
            <input type="text" name="inputAssunto" class="form-control" placeholder="Assunto" required style="width:500px;"></br>
            <textarea name="inputtext" style=" 0px; width: 498px; height: 152px;"></textarea>
            <button class="btn btn-info col-md-5 col-md-offset-1" style="width:250px; margin-left:120px;"type="submit" name="mensagem">Enviar</button>
            <fieldset>
        </form>
    </div>
</div>
</div>
