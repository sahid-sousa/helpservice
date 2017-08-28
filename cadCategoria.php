<?php
require_once 'template/header.php';
require_once 'template/menu.php';
require_once 'funcoes/categoria.php';
require_once 'funcoes/util.php';
if ($_POST) {
    require_once 'funcoes/categoria.php';

    echo inserirCategoria();
}
?>

<div id='body'>
    <table width="324" border="0" align="center">
        <tr>
            <td><form action="" method="post" enctype="multipart/form-data" id="cadUsuario">
                    <fieldset>
                        <legend>Cadastrar Categoria</legend>
                        <table width="316" border="0">
                            <tr>
                                <td width="96"><strong>Nome:</strong></td>
                                <td width="210"><input name="nome" type="text" required="true" id="nome" maxlength="50" size="49" /></td>
                            </tr>
                            <tr>
                                <td width="96"><strong>Descrição:</strong></td>
                                <td width="210"><textarea  rows="5" maxlength="200" size="48" cols="50" placeholder="Descrição da categoria" name="descricao" id="descricao"></textarea></td>
                            </tr>
                            <tr align="center">
                                <td height="50" colspan="2"><input type="submit" name="cadastrar" id="enviar" value="   Cadastrar   " /></td>
                            </tr>
                        </table>
                    </fieldset>

                </form>    </td>
        </tr>

    </table>
    <?php
    require_once 'template/footer.php';
    ?>