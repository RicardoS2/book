<?php require 'dados.php';?>
<?= $livro['titulo'] ?>
<div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
    <div class="flex">
        <div class="w-1/3">imagem</div>
        <div class="space-y-1">
            <a href="livro?id=<?= $livro['id'] ?>" class="font-semibold hover:underline"><?= $livro['titulo'] ?></a>
            <div class="text-xs italic"><?= $livro['autor'] ?></div>
            <div class="text-xs italic">⭐⭐⭐⭐⭐(avaliação)</div>
        </div>
    </div>
    <div class="text-sm mt-4">
        <?= $livro['descricao'] ?>
    </div>

</div>