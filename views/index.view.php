<!-- Formulário de pesquisa -->
<form class="flex items-center mt-6 font-firecode space-x-2" method="GET">
  <input
    type="text"
    name="pesquisar"
    value="<?php echo htmlspecialchars($_GET['pesquisar'] ?? ''); ?>"
    class="w-64 border-2 border-zinc-700 bg-neutral-900 text-sm rounded-md px-2 py-1 focus:outline-none"
    placeholder="Pesquisar...">
  <button type="submit" class="flex items-center justify-center h-10 w-10 rounded-full bg-neutral-900 text-white text-lg">
    🕵️
  </button>
</form>

<?php if (empty($livros)): ?>
  <!-- Card de aviso estilizado -->
  <div class="max-w-md mx-auto mt-6 p-6 border-2 border-zinc-700 bg-neutral-900 rounded-lg shadow-md text-center">

    <p class="text-zinc-400 mb-4 text-sm">
      <?php if (! empty($_GET['pesquisar'])): ?>
        🔍 Nenhum livro encontrado para "<?php echo htmlspecialchars($_GET['pesquisar']); ?>"
      <?php else: ?>
        📚 Não há livros cadastrados no momento.
      <?php endif; ?>
    </p>
    <a href="/" class="inline-block px-4 py-2 bg-zinc-700 text-yellow-400 rounded-full hover:bg-zinc-600 transition">
      ⬅️ Voltar para Home
    </a>
  </div>
<?php else: ?>
  <!-- Grid de livros -->
  <section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-6">
    <?php foreach ($livros as $livro): ?>
      <div class="p-4 rounded-lg border-2 border-zinc-700 bg-neutral-900 w-80 h-64 flex flex-col justify-between">
        <div class="flex gap-2">
          <div class="w-1/3 text-xs text-zinc-400"><?php echo $livro->usuario_id ?></div>
          <div class="flex-1">
            <a href="/livro?id=<?php echo $livro->id ?>" class="font-semibold hover:underline">
              <?php echo $livro->titulo ?>
            </a>
            <div class="text-xs italic text-zinc-400"><?php echo $livro->autor ?></div>
            <div class="text-xs text-yellow-400">⭐⭐⭐⭐⭐ (avaliação)</div>
          </div>
        </div>
        <p class="text-sm mt-4 text-zinc-200">
          <?php echo $livro->descricao ?>
        </p>
      </div>
    <?php endforeach; ?>
  </section>
<?php endif; ?>
