<main id="destinos" class="max-w-6xl mx-auto px-6 py-16">
    <h2 class="font-display text-center mb-12 text-gray-900 font-extrabold text-[24px]">Pontos Turísticos</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        <?php foreach ($pontosTuristicos as $pt): ?>
            <?php $img = $pt['url_imagem'] ?? ($pt['galeria'][0] ?? '/view/img/Praia.jpg'); ?>
            <a href="ponto?id=<?= $pt['id'] ?>" class="block">
                <article class="rounded-2xl overflow-hidden bg-white shadow-md transition-transform transform hover:-translate-y-2 hover:shadow-2xl">
                    <div class="w-full h-56">
                        <img class="w-full h-full object-cover" loading="lazy" src="<?= $img ?>" alt="<?= $pt['nome'] ?>">
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold text-[19px] text-gray-900"><?= $pt['nome'] ?></h3>
                        <p class="mt-2 text-sm leading-relaxed text-gray-600"><?= $pt['descricao'] ?></p>
                    </div>
                </article>
            </a>
        <?php endforeach; ?>

    </div>
</main>