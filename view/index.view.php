<?php
// A seção "Destinos Imperdíveis" já existe em view/artigos.view.php, feita pelo Marcos —
// ela faz um foreach em $pontosTuristicos vindo do banco (backend). Só incluímos aqui.
require "view/artigos.view.php";
?>

<!-- Tips Section -->
<section id="dicas" class="py-16 px-6 bg-[rgb(240,253,244)]">
  <div class="max-w-6xl mx-auto">
    <h2 class="font-display text-center mb-12 text-gray-900 font-extrabold text-[24px]">Dicas de Viagem</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="text-center p-6">
        <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-700">
          <i data-lucide="map-pin" class="w-6 h-6"></i>
        </div>
        <h3 class="font-semibold mb-2 text-[17px] text-gray-900">Planeje com Antecedência</h3>
        <p class="text-[16px] leading-relaxed text-gray-600">Reserve hospedagem e passeios com antecedência,
          especialmente em alta temporada.</p>
      </div>
      <div class="text-center p-6">
        <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-amber-100 flex items-center justify-center text-amber-700">
          <i data-lucide="sun" class="w-6 h-6"></i>
        </div>
        <h3 class="font-semibold mb-2 text-[17px] text-gray-900">Melhor Época</h3>asas
        <p class="text-[16px] leading-relaxed text-gray-600">Alta temporada vai de dezembro a março, ideal para
          praia. Fora do verão, a cidade fica tranquila e mais em conta.</p>
      </div>
      <div class="text-center p-6">
        <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-sky-100 flex items-center justify-center text-sky-700">
          <i data-lucide="luggage" class="w-6 h-6"></i>
        </div>
        <h3 class="font-semibold mb-2 text-[17px] text-gray-900">Bagagem Leve</h3>
        <p class="text-[16px] leading-relaxed text-gray-600">Leve roupas leves, protetor solar e calçados
          confortáveis para trilhas.</p>
      </div>
    </div>
  </div>
</section>