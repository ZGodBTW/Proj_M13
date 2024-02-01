<html>
<h1>Edit Article</h1>
<?php
echo $this->Form->create($article);
echo $this->Form->input('Marca');
echo $this->Form->input('Modelo');
echo $this->Form->input('body', ['rows' => '3']);
echo $this->Form->button(__('Salvar artigo')); echo $this->Form->end();
?>
</html>