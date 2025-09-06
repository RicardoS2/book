<div class="mt-4 p-4 rounded-xl border-2 border-stone-800 bg-neutral-900 w-full max-w-md mx-auto shadow-lg">
  <div class="flex flex-col md:flex-row gap-4">

    <!-- Imagem do livro -->
    <div class="w-full md:w-1/3 h-48 md:h-auto">
      <img
        src="<?php echo $livro->imagem ?>"
        alt="<?php echo $livro->titulo ?>"
        class="rounded-lg object-cover w-full h-full"
      >
    </div>

    <!-- Conteúdo do livro -->
    <div class="flex-1 flex flex-col justify-between">
      <div>
        <a href="livro?id=<?php echo $livro->id ?>"
           class="font-semibold text-lg text-stone-200 hover:text-stone-400 hover:underline">
          <?php echo $livro->titulo ?>
        </a>
        <div class="text-xs text-stone-400 italic mt-1"><?php echo $livro->autor ?></div>
        <div class="text-xs text-yellow-400 mt-1">⭐⭐⭐⭐⭐</div>
      </div>

      <p class="text-sm text-stone-300 mt-3">
        <?php echo $livro->descricao ?>
      </p>
    </div>
  </div>
</div>
