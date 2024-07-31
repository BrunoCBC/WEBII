<?php $__env->startSection('content'); ?>
    <hr>
    <a href="<?php echo e(route('eixo.create')); ?>">Cadastrar</a>
    <hr>
    <table>
        <thead>
            <th>ID</th>
            <th>NOME</th>
            <th>DESCRIÇÂO</th>
            <th>AÇÔES</th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->nome); ?></td>
                    <td><?php echo e($item->descricao); ?></td>
                    <td>
                        <a href="<?php echo e(route('eixo.show', $item->id)); ?>">Info</a>
                        <a href="<?php echo e(route('eixo.edit', $item->id)); ?>">Alterar</a>
                        <form action="<?php echo e(route('eixo.destroy', $item->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <input type="submit" value="Deletar">
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.main', ["titulo" => "Tabela de Eixos", "header" => "Tabela de Eixos"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aluno/Documentos/almi/31-07/WEBII-master/Docker/start-project/resources/views/eixo/index.blade.php ENDPATH**/ ?>