<html>
<h1>Mestre das Voltas</h1>
<p><?= $this->Html->link('Adicionar artigo', ['action' => 'add']) ?></p>
<?= $this->Html->link('Ordenar alfabeticamente', ['action' => 'order']) ?>
<table>
<tr>
<th>Id</th>
<th>Marca</th>
<th>Modelo</th>
<th>Ações</th> </tr>
<!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->
<?php foreach ($articles as $article): ?>
<tr>
<td><?= $article->id ?></td>
<td> <?= $article->Marca?> </td>
<td> <?= $this->Html->link($article->Modelo, ['action' => 'view', $article->id]) ?> </td><!-- Quando Carregamos no modelo do carro abre a informacão dele -->

<td>
<?= $this->Form->postLink( 'Excluir ', ['action' => 'delete', $article->id], ['confirm' => 'Tem certeza?']) ?>

<?= $this->Html->link(' Edit', ['action' => 'edit', $article->id]) ?>
</td>
</tr>
<?php endforeach; ?>
</table>
</html>