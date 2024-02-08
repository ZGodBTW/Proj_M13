<html>
<h1>Adicionar Carro</h1>
<?php
echo $this->Form->create($article);
echo"Marca:";
echo $this->Form->input('Marca');
echo"Modelo:";
echo $this->Form->input('Modelo');
echo"Sobre:";
echo $this->Form->input('body', ['rows' => '3']);
echo"       ";
echo $this->Form->button(__('Salvar Carro'));
echo $this->Form->end();
?>
</html>