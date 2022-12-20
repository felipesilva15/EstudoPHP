<form method="post">
    <input type="text" name="busca">
    <button type="submit">Enviar</button>
</form>

<?php
    if(isset($_POST['busca'])){
        // Remove as tags e mantém apenas os permitidos
        echo strip_tags($_POST['busca'], '<strong><b>');

        echo '<br><br>';

        // Transforma os elementos HTML em texto
        echo htmlentities($_POST['busca']);
    }
?>
