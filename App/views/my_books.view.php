<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h1 class="text-3xl font-bold text-emerald-400">Meus Livros</h1>
    <div class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-8">
        <?php foreach ($myBooks as $book): ?>
            <div class="p-4 rounded-xl border border-zinc-800 bg-zinc-900 shadow-lg hover:shadow-2xl transition-shadow duration-300">
                <div class="flex flex-col sm:flex-row sm:space-x-4">
                    <div class="w-full sm:w-1/3 flex-shrink-0 mb-4 sm:mb-0">
                        <?php if ($book->image): ?>
                            <img src="/uploads/<?php echo $book->image ?>" alt="Capa do livro<?php echo htmlspecialchars($book->title); ?>" class="rounded-lg object-cover w-full h-48 sm:h-auto">
                        <?php endif; ?>
                    </div>
                    <div class="flex-1 flex flex-col justify-between space-y-2">
                        <div>
                            <a href="/book?id=<?php echo $book->id ?>" class="font-semibold text-lg hover:text-emerald-400 transition-colors duration-200">
                                <?php echo htmlspecialchars($book->title); ?>
                            </a>
                            <div class="text-xs text-zinc-400">
                                Autor: <span class="text-zinc-200"><?php echo htmlspecialchars($book->author); ?></span>
                            </div>
                        </div>
                        <div class="flex items-center space-x-1 text-yellow-400 text-sm">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <?php if ($i < $book->stars): ?>
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69L9.049 2.927z"></path>
                                    </svg>
                                <?php else: ?>
                                    <svg class="w-4 h-4 text-zinc-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69L9.049 2.927z"></path>
                                    </svg>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </div>
                        <div class="flex justify-end space-x-2">
                            <a href="/editbook?id=<?php echo $book->id ?>" class="text-xs text-emerald-400 hover:text-emerald-300">
                                Editar
                            </a>
                            <a href="/deletebook?id=<?php echo $book->id ?>" class="text-xs text-red-500 hover:text-red-400" onclick="return confirm('Tem certeza que deseja excluir este livro?');">
                                Excluir
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
