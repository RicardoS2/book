<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
  <?php if (!$book): ?>
    <div class="text-center p-8 rounded-xl border border-zinc-800 bg-zinc-900 shadow-lg">
        <h1 class="text-3xl font-bold text-emerald-400">Livro não encontrado.</h1>
        <p class="text-lg mt-2 text-zinc-400">O livro que você está tentando acessar não existe ou foi removido.</p>
        <a href="/" class="mt-6 inline-block bg-emerald-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-emerald-500 transition-colors duration-200">
            Voltar para a página inicial
        </a>
    </div>
  <?php else: ?>
    <div class="p-6 rounded-xl border border-zinc-800 bg-zinc-900 shadow-lg">
      <div class="flex flex-col md:flex-row md:space-x-8">
        <div class="w-full md:w-1/3 flex-shrink-0 mb-6 md:mb-0">
          <?php if ($book->image): ?>
            <img src="/uploads/<?php echo htmlspecialchars($book->image); ?>" alt="Capa do livro<?php echo htmlspecialchars($book->title); ?>" class="rounded-lg object-contain w-full">
          <?php endif; ?>
        </div>
        <div class="flex-1 flex flex-col justify-between space-y-4">
          <div>
            <h1 class="text-3xl font-bold text-emerald-400"><?php echo htmlspecialchars($book->title); ?></h1>
            <h2 class="text-xl italic text-zinc-400 mt-1">por                                                                                                                           <?php echo htmlspecialchars($book->author); ?></h2>
            <div class="text-xs text-zinc-400 mt-1">
                Adicionado por <span class="text-zinc-200"><?php echo htmlspecialchars($book->user_name); ?></span>
            </div>

            <div class="flex items-center space-x-1 text-yellow-400 text-lg mt-2">
              <?php for ($i = 0; $i < 5; $i++): ?>
                <?php if ($i < $book->stars): ?>
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69L9.049 2.927z"></path>
                  </svg>
                <?php else: ?>
                  <svg class="w-5 h-5 text-zinc-500" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69L9.049 2.927z"></path>
                  </svg>
                <?php endif; ?>
              <?php endfor; ?>
            </div>

            <p class="text-zinc-200 mt-4 leading-relaxed whitespace-pre-wrap">
              <?php echo htmlspecialchars($book->description); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>

