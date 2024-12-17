<form class="w-full flex space-x-2 ml-3 mt-6 font-firecode">
    <input type="text" class="border-stone-800 bg-stone-900 text-sm rounded-md border-2 focus:outline-none px-2 py-1" placeholder="Pesquisar....."
        name="pesquisar">
    <button type="subit">🔎</button>
</form>
<section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 ">
    <?php foreach ($livros as $livro): ?>
        <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
            <div class="flex">
                <div class="w-1/3">imagem</div>
                <div class="space-y-1">
                    <a href="/livro?id=<?= $livro['id'] ?>" class="font-semibold hover:underline"><?= $livro['titulo'] ?></a>
                    <div class="text-xs italic"><?= $livro['autor'] ?></div>
                    <div class="text-xs italic">⭐⭐⭐⭐⭐(avaliação)</div>
                </div>
            </div>
            <div class="text-smphp mt-4">
                <?= $livro['descricao'] ?>
            </div>
        </div>
    <?php endforeach ?>
</section>