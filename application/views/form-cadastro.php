<div id="content" class="container">
    <div class="col-lg-5 col-md-offset-3 jumbotron" >
<?php
echo form_open("inicio/inserir_cliente");
?>  
        <div class="form-group">
    <label>Nome</label>
    <input type="text" name="nome" value="<?php echo set_value('nome') ?>" class="form-control" placeholder="Insira seu nome">
        </div>
    <div class="form-group">
    <label>Telefone para contato</label>
    <input type="text" name="telefone" value="<?php echo set_value('telefone') ?>" class="form-control" placeholder="Insira seu telefone">
    </div>
<div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" value="<?php echo set_value('email') ?>" class="form-control" id="exampleInputEmail1" placeholder="Insira seu email">
</div>
        
<div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" name="senha" value="<?php echo set_value('senha') ?>" class="form-control" id="exampleInputPassword1" placeholder="Crie uma senha">
</div>
        
    <div class="form-group">
    <label for="exampleInputPassword1">Confirme sua Senha</label>
    <input type="password" name="confirme_senha" value="<?php echo set_value('confirme_senha') ?>" class="form-control" id="exampleInputPassword1" placeholder="Digite novamente sua senha">
</div>
        
        <div class="form-group">
<button type="submit" class="btn btn-default">Criar Cadastro</button>
        </div>
<?php
echo form_close();

?>
<p id="error"><?php echo $error_cadastro; ?>
            <br>
           <?php echo validation_errors(); ?>
        </p>
</div>
</div>