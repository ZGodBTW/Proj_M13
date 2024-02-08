<html>
<h1>Mestre das Voltas - ordenado alfabeticamente pela marca</h1>
<p><?= $this->Html->link('Voltar atras', ['action' => 'index']) ?></p>
<table>
    <tr>
        <th><?= $this->Paginator->sort('Id') ?></th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Ações</th>
    </tr>
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
</table>
</html>