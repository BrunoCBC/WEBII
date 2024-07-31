<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mais informações - Eixo</title>
</head>
<body>
    <h1>Mais informações - Eixo</h1>
    <hr>
    <a href="<?php echo e(route('eixo.index')); ?>">Voltar</a>
    <hr>
    <ul>
        <li><b>ID:</b><?php echo e($eixo->id); ?></li>
        <li><b>NOME</b>:</b><?php echo e($eixo->nome); ?></li>
        <li><b>DESCRIÇÂO:</b><?php echo e($eixo->descricao); ?></li>
        <li><b>CRIADO:</b><?php echo e($eixo->created_at); ?></li>
        <li><b>ALTERADO:</b><?php echo e($eixo->updated_at); ?></li>
    </ul>
</body>
</html><?php /**PATH /home/aluno/Documentos/almi/31-07/WEBII-master/Docker/start-project/resources/views/eixo/show.blade.php ENDPATH**/ ?>