<div class="flex items-center justify-center py-16">
    <div class="w-full max-w-sm p-8 space-y-6 rounded-xl border border-zinc-800 bg-zinc-900 shadow-lg">
        <h2 class="text-3xl font-bold text-center text-emerald-400">Alterar Senha</h2>

        <?php if ($error): ?>
            <div class="bg-red-600 p-3 rounded-lg text-white text-center">
                <?php echo $error ?>
            </div>

        <?php endif; ?>

        <?php if ($success): ?>
            <div class="bg-green-600 p-3 rounded-lg text-white text-center">
                <h1 class="bg"></h1>
                <?php echo $success ?>
            </div>
        <?php endif; ?>

        <form method="POST" class="space-y-4">
            <input type="password" name="current_password" placeholder="Senha atual" required
                class="w-full p-3 rounded-lg border-2 border-zinc-700 bg-zinc-800 text-zinc-200 placeholder-zinc-500 focus:outline-none focus:border-emerald-400 transition-colors duration-200">
            <input type="password" name="new_password" placeholder="Nova senha" required
                class="w-full p-3 rounded-lg border-2 border-zinc-700 bg-zinc-800 text-zinc-200 placeholder-zinc-500 focus:outline-none focus:border-emerald-400 transition-colors duration-200">
            <input type="password" name="confirm_password" placeholder="Confirme a nova senha" required
                class="w-full p-3 rounded-lg border-2 border-zinc-700 bg-zinc-800 text-zinc-200 placeholder-zinc-500 focus:outline-none focus:border-emerald-400 transition-colors duration-200">
            <button type="submit" class="w-full px-4 py-3 bg-emerald-600 text-white rounded-lg font-semibold hover:bg-emerald-500 transition-colors duration-200">
                Alterar senha
            </button>
        </form>
    </div>
</div>
