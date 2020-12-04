<h2>OLÁ!</h2>
<hr />
<table class="display" id="tbUsuarios">
    <thead>
        <td>Usuário:</td>
        <td>Nome:</td>
        <td>Idade:</td>
        <td style="text-align:right">Opções</td>
    </thead>
    <tbody>
        <?php foreach($users as $usu): ?>
            <tr>
                <td><?php echo $usu['username']; ?></td>
                <td><?php echo $usu['name']; ?></td>
                <td><?php echo $usu['age']; ?></td>
                <td style="text-align:right">
                    <a href="#" data-toggle="modal" data-target="#edit<?php echo $usu['id']; ?>" class="btn btn-dark" title="Editar registro"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="#" data-toggle="modal" data-target="#pass<?php echo $usu['id']; ?>" class="btn btn-dark" title="Editar senha"><span class="glyphicon glyphicon-check"></span></a>
                    <a href="#" data-toggle="modal" data-target="#del<?php echo $usu['id']; ?>" class="btn btn-white" title="Excluir registro"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
            </tr>
        <!-- MODAL NOVO INICIO -->
        <div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="NovoRegistro">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form method="POST" name="newUser" onsubmit="return submitLock();">
                            <div class="form-group">
                                <p>Novo registro de usuário</p>
                                <label for="name">Nome:</label>
                                <input type="text" id="name" name="name" class="form-control" required="required" />
                                <label for="username">Usuário (Sem espaço ou caracteres especiais):</label>
                                <input type="text" id="username" name="username" class="form-control" required="required" />
                                <label for="age">Idade:</label>
                                <input type="text" id="age" name="age" class="form-control" required="required" />
                                <label for="pass">Senha:</label>
                                <input type="password" id="pass" name="pass" class="form-control" required="required" />
                            </div>
                            <input type="submit" value="Confirmar" id="newUserDone" name="newUserDone" class="btn btn-success" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL NOVO FIM -->
        <!-- MODAL EDITAR INICIO -->
        <div class="modal fade" id="edit<?php echo $usu['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="EditarRegistro">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form method="POST" name="editUser" onsubmit="return submitLock();">
                            <div class="form-group">
                                <p>Editar registro de usuário</p>
                                <label for="name">Nome:</label>
                                <input type="text" id="name" name="name" class="form-control" required="required" value="<?php echo $usu['name']; ?>" />
                                <label for="username">Usuário (Sem espaço ou caracteres especiais):</label>
                                <input type="text" id="username" name="username" class="form-control" required="required" value="<?php echo $usu['username']; ?>" />
                                <label for="age">Idade:</label>
                                <input type="text" id="age" name="age" class="form-control" required="required" value="<?php echo $usu['age']; ?>" />
                                <input type="text" name="id" id="id" value="<?php echo $usu['id']; ?>" style="display:none;" />
                            </div>
                            <input type="submit" value="Atualizar" id="editUserDone" name="editUserDone" class="btn btn-primary" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL EDITAR FIM -->
        <!-- MODAL NOVA SENHA INICIO -->
        <div class="modal fade" id="pass<?php echo $usu['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="EditarSenha">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form method="POST" name="passEdit" onsubmit="return submitLock();">
                            <div class="form-group">
                                <p>Editar senha de usuário</p>
                                <label for="name">Nome:</label>
                                <input type="text" id="name" name="name" class="form-control" readonly value="<?php echo $usu['name']; ?>" />
                                <input type="text" name="id" id="id" value="<?php echo $usu['id']; ?>" style="display:none;" />
                                <label for="pass">Nova senha:</label>
                                <input type="password" id="pass" name="pass" class="form-control" required="required" />
                            </div>
                            <input type="submit" value="Atualizar" id="passEditDone" name="passEditDone" class="btn btn-primary" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL NOVA SENHA FIM -->
        <!-- MODAL DELETAR INICIO -->
        <div class="modal fade" id="del<?php echo $usu['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="DeletarRegistro">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form method="POST" name="delUser" onsubmit="return submitLock();">
                            <div class="form-group">
                                <p>Excluir registro de usuário</p>
                                <label for="name">Nome:</label>
                                <input type="text" id="name" name="name" class="form-control" required="required" value="<?php echo $usu['name']; ?>" readonly />
                                <input type="text" name="id" id="id" value="<?php echo $usu['id']; ?>" style="display:none;" />
                            </div>
                            <input type="submit" value="Excluir" id="delUserDone" name="delUserDone" class="btn btn-danger" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL DELETAR FIM -->
        <?php endforeach; ?>
    </tbody>
</table>
<hr />
<a href="#" data-toggle="modal" data-target="#new" class="btn btn-primary" title="Novo registro">
    <span class="glyphicon glyphicon-tag"></span>
    Novo resgistro
</a>

<script>
    $(document).ready(function() {
        $('#tbUsuarios').DataTable({
            "language": {
                "lengthMenu": "Mostrando _MENU_ registros por página",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(filtrado de _MAX_ registros no total)"
            }
        });
    });
    $('#tbUsuarios')
    .removeClass( 'display' )
    .addClass('table table-striped table-bordered');
</script>
