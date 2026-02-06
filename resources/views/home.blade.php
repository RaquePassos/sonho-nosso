@extends('layouts.app')

@section('title', 'Sonho Nosso – Comida Caseira')

@section('content')

 <!-- Inicio -->
<section id="inicio" class="bg-[#FAF7F2] pt-20 pb-16">
  <div class="max-w-screen-xl mx-auto px-4 sm:px-6 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

    <!-- Texto -->
    <div class="text-center lg:text-left">
      <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-slate-900 leading-tight">
        Comida caseira<br>
        <span class="text-orange-600">que abraça</span>
      </h1>

      <p class="mt-6 text-lg text-slate-600 max-w-xl mx-auto lg:mx-0">
        Almoço por quilo, marmitex e eventos em Fazenda Rio Grande.
      </p>

      <div class="mt-8 flex flex-col gap-4 items-center lg:items-start sm:flex-row">
        <a href="#cardapio"
           class="w-full sm:w-fit h-[56px] flex items-center justify-center
                  bg-orange-600 text-white px-8 rounded-full font-semibold
                  hover:bg-orange-700 transition">
          Ver cardápio
        </a>

        <a href="https://wa.me/554187870693"
           target="_blank"
           class="w-full sm:w-fit h-[56px] flex items-center justify-center gap-2
                  border border-orange-600 text-orange-600 px-8 rounded-full
                  font-semibold hover:bg-orange-50 transition">
          <i class="fab fa-whatsapp text-lg"></i>
          Pedir pelo WhatsApp
        </a>
      </div>
    </div>

    <!-- Imagem -->
    <div>
      <img
        src="{{ asset('images/hero-comida.jpg') }}"
        alt="Buffet de comida caseira do Sonho Nosso"
        class="w-full h-[260px] sm:h-[340px] lg:h-[500px] object-cover rounded-3xl shadow-xl"
      >
    </div>

  </div>
</section>

<div class="section-divider"></div>


 {{-- Sobre --}}
    <section id="sobre" class="py-16 sm:py-24 bg-white">
        <div class="max-w-screen-xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center px-4 sm:px-10 md:px-16">

            <!-- Imagem -->
            <div class="w-full h-[400px] md:h-[500px] bg-white rounded-3xl overflow-hidden shadow-xl flex justify-center items-center p-12">
                <img
                    src="{{ asset('images/logo.jpg') }}"
                    alt="Restaurante Sonho Nosso"
                    class="max-w-full max-h-full object-contain transform hover:scale-105 transition duration-500"
                >
            </div>

            <!-- Texto -->
            <div class="max-w-xl mx-auto text-center lg:text-left">

                <span class="inline-block text-orange-600 font-semibold tracking-wide mb-4 mx-auto">
                    Nossa história
                </span>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight mb-6">
                    “O Sonho Nosso nasceu do desejo simples de servir comida de verdade.”
                </h2>

                <p class="text-lg text-slate-700 leading-relaxed">
                    Desde o começo, nosso propósito sempre foi o mesmo:
                    comida caseira, feita com carinho, bem servida e com aquele tempero
                    que lembra casa de vó. Aqui, cada prato carrega história,
                    cuidado e respeito por quem senta à mesa.
                </p>

            </div>

        </div>

    </div>
</section>

{{-- Sessão 2 Por que escolher o Sonho Nosso? --}}
<section class="bg-white py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Título da seção -->
    <div class="text-center max-w-3xl mx-auto">
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">
        Por que escolher o Sonho Nosso?
      </h2>

      <p class="mt-4 text-slate-600">
        Aqui cada detalhe é pensado para você se sentir em casa.
      </p>
    </div>

    <!-- Cards -->
    <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- Card 1 -->
      <div class="flex flex-col h-full rounded-2xl border border-slate-100 overflow-hidden shadow-sm hover:shadow-md transition">
        <img
          src="{{ asset('images/cards/comida-caseira.jpg') }}"
          alt="Comida caseira no Sonho Nosso"
          class="h-48 sm:h-56 md:h-64 w-full object-cover"
        >
        <div class="p-6 text-center">
          <h3 class="text-xl font-semibold text-slate-900">
            Comida caseira de verdade
          </h3>
          <p class="mt-3 text-slate-600">
            Receitas tradicionais, feitas com carinho e aquele tempero que abraça.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="flex flex-col h-full rounded-2xl border border-slate-100 overflow-hidden shadow-sm hover:shadow-md transition">
        <img
          src="{{ asset('images/cards/buffet-quilo2.jpg') }}"
          alt="Buffet por quilo no Sonho Nosso"
          class="h-48 sm:h-56 md:h-64 w-full object-cover"
        >
        <div class="p-6 text-center">
          <h3 class="text-xl font-semibold text-slate-900">
            Buffet por quilo
          </h3>
          <p class="mt-3 text-slate-600">
            Você escolhe o que gosta e paga somente pelo que servir.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="flex flex-col h-full rounded-2xl border border-slate-100 overflow-hidden shadow-sm hover:shadow-md transition">
        <img
          src="{{ asset('images/cards/eventos.jpg') }}"
          alt="Eventos no Sonho Nosso"
          class="h-48 sm:h-56 md:h-64 w-full object-cover"
        >
        <div class="p-6 text-center">
          <h3 class="text-xl font-semibold text-slate-900">
            Eventos especiais
          </h3>
          <p class="mt-3 text-slate-600">
            Almoços corporativos, aniversários e encontros em um ambiente acolhedor.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

    <!-- Cardapio -->
<section id="cardapio" class="bg-white py-12">
  <div class="max-w-screen-xl mx-auto px-6">

    <h2 class="text-4xl font-bold text-center text-slate-900">
      Nosso cardápio
    </h2>

    <p class="mt-4 text-center text-slate-600 max-w-2xl mx-auto">
      Pratos preparados diariamente com ingredientes frescos e sabor de comida caseira.
    </p>

    <!-- Destaque -->
    <div class="mt-16 bg-[#FAF7F2] rounded-3xl p-10 grid md:grid-cols-2 gap-10 items-center">

  <div class="text-center md:text-left">
    <span class="inline-block bg-orange-100 text-orange-600 px-4 py-1 rounded-full text-sm font-semibold">
      Destaque
    </span>

    <h3 class="mt-4 text-3xl font-bold text-slate-900">
      Buffet por quilo
    </h3>

    <p class="mt-4 text-slate-600">
      Variedade de pratos quentes, saladas frescas e acompanhamentos preparados todos os dias.
    </p>

    <ul class="mt-6 space-y-2 text-slate-600 flex flex-col items-center md:items-start">
      <li>✔ Pratos quentes variados</li>
      <li>✔ Saladas frescas diariamente</li>
      <li>✔ Sobremesas caseiras</li>
    </ul>

    <div class="mt-8 flex flex-col gap-4 items-center md:flex-row md:items-start">
      <a href="https://menu.anota.ai/loja/restaurante-sonho-meu-3"
         target="_blank"
         class="w-full md:w-fit h-[56px] flex items-center justify-center
                bg-orange-600 text-white px-8 rounded-full font-semibold
                hover:bg-orange-700 transition">
        Ver cardápio completo
      </a>

      <a href="https://wa.me/554187870693"
         target="_blank"
         class="w-full md:w-fit h-[56px] flex items-center justify-center gap-2
                border border-orange-600 text-orange-600 px-8 rounded-full
                font-semibold hover:bg-orange-50 transition">
        <i class="fab fa-whatsapp text-lg"></i>
        Pedir pelo WhatsApp
      </a>
    </div>
  </div>

        <div>
            <img
                src="{{ asset('images/cardapio/buffet.jpg') }}"
                alt="Buffet por quilo do Sonho Nosso"
                class="w-full h-[240px] sm:h-[320px] object-cover rounded-2xl shadow-lg"
            >
        </div>

    </div>

  </div>
</section>


<!-- Marmitex -->
<section id="cardapio" class="bg-white py-6">
  <div class="max-w-screen-xl mx-auto px-6">

        <div class="mt-16 bg-[#FAF7F2] rounded-3xl p-10 grid md:grid-cols-2 gap-10 items-center">

  <!-- Imagem -->
  <div class="w-full h-[260px] md:h-[420px] overflow-hidden rounded-3xl shadow-lg">
    <img
      src="{{ asset('images/marmitex.jpg') }}"
      alt="Marmitex Sonho Nosso"
      class="w-full h-full object-cover"
    >
  </div>

  <!-- Conteúdo -->
  <div class="text-center md:text-left">

    <span class="inline-block bg-orange-100 text-orange-600 text-xs font-semibold px-4 py-1 rounded-full mb-4">
      🍱 Marmitex
    </span>

    <h2 class="text-2xl md:text-4xl font-bold mb-4 leading-tight">
      Marmitex pronta para levar
    </h2>

    <p class="text-gray-700 text-base md:text-lg mb-6 leading-relaxed">
      Comida caseira, bem servida e cheia de sabor.
      Ideal para o trabalho ou para quem quer praticidade no dia a dia.
    </p>

    <ul class="space-y-2 text-gray-700 mb-8 flex flex-col items-center md:items-start">
      <li>✅ Porções bem servidas</li>
      <li>✅ Tamanhos: pequena, média e grande</li>
      <li>✅ Cardápio variado todos os dias</li>
      <li>✅ Entrega rápida</li>
    </ul>

    <a href="https://menu.anota.ai/loja/restaurante-sonho-meu-3"
       target="_blank"
       class="w-full md:w-fit h-[56px] flex items-center justify-center gap-3
              bg-green-600 text-white px-8 rounded-full font-semibold
              hover:bg-green-700 transition shadow-lg">
      <i class="fas fa-box"></i>
      Ver opções de Marmitex
    </a>

  </div>

</div>

    </div>
</section>


 <!-- Galeria de Fotos -->
<section class="py-24 bg-white">
    <div class="max-w-screen-xl mx-auto px-6">

        <!-- Título -->
        <div class="text-center mb-14">
            <h2 class="text-4xl font-bold mb-3">Nosso sabor em imagens</h2>
            <p class="text-gray-600">
                Pratos preparados com carinho, bem servidos e do jeitinho que você ama.
            </p>
        </div>

        <!-- Galeria -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

                 @for ($i = 1; $i <= 9; $i++)
                     <div class="overflow-hidden rounded-2xl shadow-md group">
                        <img
                            src="{{ asset('images/galeria/' . $i . '.jpg') }}"
                            alt="Prato Sonho Nosso"
                            class="w-full aspect-[4/3] object-cover
                            transition-transform duration-500
                            group-hover:scale-105"
                         >
                    </div>
                 @endfor

            </div>

        <!-- CTA Instagram -->
        <div class="text-center mt-16">
            <a href="https://www.instagram.com/sonhonossorestaurante"
               target="_blank"
               class="inline-flex items-center gap-3 bg-gradient-to-r from-pink-500 to-orange-500 text-white px-10 py-4 rounded-full font-semibold shadow-lg hover:scale-105 transition">

                <i class="fab fa-instagram text-xl"></i>
                Ver mais no Instagram
            </a>
        </div>

    </div>
</section>


 <section id="eventos" class="bg-[#FAF7F2] py-28">
  <div class="max-w-screen-xl mx-auto px-6">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

      <div class="text-center lg:text-left flex flex-col items-center lg:items-start">
        <h2 class="text-3xl md:text-4xl font-bold text-slate-900">
          Eventos especiais
        </h2>

        <p class="mt-4 text-lg text-slate-600">
          O Sonho Nosso também é o lugar ideal para confraternizações,
          almoços corporativos, aniversários e encontros especiais.
        </p>

        <ul class="mt-6 space-y-3 text-slate-700 inline-block text-left">
          <li>✔️ Espaço aconchegante</li>
          <li>✔️ Atendimento dedicado</li>
          <li>✔️ Ideal para grupos</li>
          <li>✔️ Estacionamento próprio</li>
        </ul>

        <a
          href="https://wa.me/554187870693?text=Olá! Gostaria de reservar um evento."
          target="_blank"
          class="inline-flex items-center gap-3 mt-8
                bg-green-600 text-white
                px-8 py-4 rounded-full
                font-semibold text-base
                shadow-lg
                hover:bg-green-700
                transition">
          <i class="fab fa-whatsapp text-xl"></i>
          Reservar evento pelo WhatsApp
        </a>
      </div>

      <div>
        <img
          src="{{ asset('images/cards/eventos.jpg') }}"
          alt="Eventos no Restaurante Sonho Nosso"
          class="rounded-2xl shadow-lg w-full h-[260px] sm:h-auto object-cover"
        />
      </div>

    </div>
  </div>
</section>

<!-- Prova Social -->
<section class="py-24 bg-white">
    <section class="py-16 sm:py-24 bg-white">

        <!-- Título -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4">Quem prova, aprova</h2>
            <p class="text-slate-600 max-w-2xl mx-auto">
                Clientes que já fizeram do Sonho Nosso parte do seu dia a dia.
            </p>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8">

            <!-- Card -->
            <div class="bg-white p-8 rounded-3xl shadow-md">
                <div class="flex items-center gap-1 text-yellow-400 mb-4">
                    ★★★★★
                </div>
                <p class="text-slate-700 italic">
                    “Comida sempre fresquinha e muito bem servida. Dá pra sentir o carinho em cada prato.”
                </p>
                <span class="block mt-6 font-semibold text-slate-900">
                    Raquel Passos
                </span>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-md">
                <div class="flex items-center gap-1 text-yellow-400 mb-4">
                    ★★★★★
                </div>
                <p class="text-slate-700 italic">
                    “Tempero caseiro de verdade, lembra comida de casa. Sempre volto!”
                </p>
                <span class="block mt-6 font-semibold text-slate-900">
                    Maria Aparecida
                </span>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-md">
                <div class="flex items-center gap-1 text-yellow-400 mb-4">
                    ★★★★★
                </div>
                <p class="text-slate-700 italic">
                    “Atendimento ótimo e ambiente muito acolhedor. Recomendo demais.”
                </p>
                <span class="block mt-6 font-semibold text-slate-900">
                    Amanda Camargo
                </span>
            </div>

        </div>

        <!-- CTA Google -->
        <div class="text-center mt-16">
            <a href="#"
               class="inline-flex items-center gap-3 text-orange-600 font-semibold hover:underline">
                Ver avaliações no Google
            </a>
        </div>

    </div>
</section>


<!--Localização -->
<section id="ondeestamos" class="bg-slate-50 py-28">
  <div class="max-w-screen-xl mx-auto px-6"> <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

      <div class="text-center lg:text-left flex flex-col items-center lg:items-start">
        <h2 class="text-3xl md:text-4xl font-bold text-slate-900">
          Onde estamos
        </h2>

        <p class="mt-4 text-slate-600 text-lg">
          Estamos localizados em <strong>Fazenda Rio Grande – PR</strong>, com ambiente
          acolhedor e fácil acesso para seu almoço.
        </p>

        <div class="mt-8 space-y-4 text-slate-700 text-left">
          <p>
            📍 <strong>Endereço:</strong><br>
            Av. Carlos Eduardo Nichele, 4254, – Estados<br>
            Fazenda Rio Grande – PR
          </p>

          <p>
            🕒 <strong>Horário de funcionamento:</strong><br>
            Segunda a Sexta: 11h às 14h30<br>
            Sábados: 11h às 15h
          </p>
        </div>

        <a
          href="https://www.google.com/maps/search/?api=1&query=Av.+Carlos+Eduardo+Nichele+4254+Fazenda+Rio+Grande"
          target="_blank"
          class="inline-flex items-center mt-8 rounded-lg bg-amber-800 px-8 py-3.5 text-white font-semibold hover:bg-amber-700 transition shadow-md"
        >
          Ver no Google Maps
        </a>
      </div>

      <div class="w-full h-[300px] sm:h-[420px] rounded-2xl overflow-hidden shadow-lg border border-slate-200">
        <iframe
          class="w-full h-full border-0"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3599.418485295256!2d-49.3088!3d-25.6455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDM4JzQzLjgiUyA0OcKwMTgnMzEuNyJX!5e0!3m2!1spt-BR!2sbr!4v1234567890">
        </iframe>
      </div>

    </div>
  </div>
</section>



@endsection
