<html>
    <title>Página Inicial</title>
    <head>
    </head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/reset.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/style.css'); ?>" media="screen">
    <link rel="stylesheet" media="screen" href="<?php echo base_url('public/css/bootstrap.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url('public/js/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/bootstrap.js'); ?>"></script>
    <body>

        <?php

        echo form_open("veiculos/inserir");
        
        ?>
        
        <label for="marca">Marca: </label>
        <input type="text" name="marca" value="<?php echo set_value('marca') ?>" />
        </br>
        <label for="modelo">Modelo: </label>
        <input type="text" name="modelo" value="<?php echo set_value('modelo') ?>" />
        </br>
        <label for="ano">Ano: </label>
        <input type="text" name="ano" value="<?php echo set_value('ano') ?>" />
        </br>
        <label for="cor">Cor: </label>
        <input type="text" name="cor" value="<?php echo set_value('cor') ?>" />
        </br>
        <label for="ar-condicionado">Ar Condicionado: </label>
        <input type="text" name="ar-condicionado" value="<?php echo set_value('ar-condiconado') ?>" />
        </br>
        <label for="hidraulica">Direção Hidráulica: </label>
        <input type="text" name="hidraulica" value="<?php echo set_value('hidraulica') ?>" />
        </br>
        <label for="vidro">Vidro Elétrico: </label>
        <input type="text" name="vidro" value="<?php echo set_value('vidro') ?>" />
        </br>
        <label for="som">Som: </label>
        <input type="text" name="som" value="<?php echo set_value('som') ?>" />
        </br>
        <label for="combustivel">Combustivel: </label>
        <input type="text" name="combustivel" value="<?php echo set_value('combustivel') ?>" />
        </br>
        <label for="porta">Número de Portas: </label>
        <input type="text" name="porta" value="<?php echo set_value('porta') ?>" />
        </br>
        <label for="placa">Placa: </label>
        <input type="text" name="placa" value="<?php echo set_value('placa') ?>" />
        </br>
        <label for="diaria">Valor da Diária: </label>
        <input type="text" name="diaria" value="<?php echo set_value('diaria') ?>" />
        </br></br>
        <?php
        echo form_submit("Ok","Enviar");
        echo form_close();
        echo validation_errors();
        ?>

    </body>

</html>