<?php require RUTA_APP .'/views/inc/header.php'; ?>
<div class="box-container">     
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>        
        <?php foreach($datos['usuarios'] as $usuario) : ?>
            <tr>
                <td><?php echo $usuario->id_usuario; ?></td>
                <td><?php echo $usuario->nombre; ?></td>
                <td><?php echo $usuario->email; ?></td>
                <td><?php echo $usuario->telefono; ?></td>
                <td><a href="<?php echo RUTA_URL; ?>paginas/editar/<?php echo $usuario->id_usuario; ?>">Editar</a></td>
                <td><a href="<?php echo RUTA_URL; ?>paginas/borrar/<?php echo $usuario->id_usuario; ?>">Borrar</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php require RUTA_APP .'/views/inc/footer.php'; ?>
