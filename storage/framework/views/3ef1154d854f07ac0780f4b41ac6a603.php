<?php $__env->startSection('content'); ?>
    <hr>
    <a href="<?php echo e(route('eixo.index')); ?>">Voltar</a>
    <hr>
    <form action="<?php echo e(route('eixo.update', $eixo->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <input type="text" name="nome" value="<?php echo e($eixo->nome); ?>"><br>
        <textarea name="descricao" cols="30" rows="6"><?php echo e($eixo->descricao); ?></textarea><br>
        <input type="submit" value="Salvar">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.main', ["titulo" => "Alterar Eixo", "header" => "Modificar Eixo"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aluno/Documentos/almi/31-07/WEBII-master/Docker/start-project/resources/views/eixo/edit.blade.php ENDPATH**/ ?>