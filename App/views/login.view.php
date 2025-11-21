<div class="flex items-center justify-center py-16">
    <div class="w-full max-w-sm p-8 space-y-6 rounded-xl border border-zinc-800 bg-zinc-900 shadow-lg">
        <h2 class="text-3xl font-bold text-center text-emerald-400">Login</h2>
        <?php if (!empty($error)): ?>
            <div class="bg-red-600 p-3 rounded-lg text-white text-center">
                <?php echo $error ?>
            </div>
        <?php endif; ?>

        <form method="POST" class="space-y-4">
            <input type="email" name="email" placeholder="Email" required
                class="p-3 rounded-lg w-full bg-zinc-800 border-2 border-zinc-700 text-zinc-200 placeholder-zinc-500 focus:outline-none focus:border-emerald-400 transition-colors duration-200">
            <input type="password" name="password" placeholder="Senha" required
                class="p-3 rounded-lg w-full bg-zinc-800 border-2 border-zinc-700 text-zinc-200 placeholder-zinc-500 focus:outline-none focus:border-emerald-400 transition-colors duration-200">
            <button type="submit" class="bg-emerald-600 p-3 rounded-lg text-white w-full font-semibold hover:bg-emerald-500 transition-colors duration-200">
                Entrar
            </button>
        </form>

        <div class="text-center text-sm text-zinc-400">
            Não tem uma conta? <a href="/register" class="text-emerald-400 hover:underline">Cadastre-se</a>
        </div>
    </div>
</div>
