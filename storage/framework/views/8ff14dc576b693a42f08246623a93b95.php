<?php $__env->startSection('content'); ?>
    <hr>
    <a href="<?php echo e(route('eixo.index')); ?>" class="btn btn-success">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
        </svg>
    </a>
    <hr>
    <form action="<?php echo e(route('eixo.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" name="nome" class="form-control"><br>
        <textarea name="descricao" cols="30" rows="6" class="form-control"></textarea><br>
        <input type="submit" value="Salvar" class="btn btn-primary">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.main', ["titulo" => "Cadastrar Eixo", "header" => "Cadastrar Eixo"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aluno/Documentos/almi/31-07/WEBII-master/Docker/start-project/resources/views/eixo/create.blade.php ENDPATH**/ ?>