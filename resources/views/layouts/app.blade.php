<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Restaurante Sonho Nosso')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <meta name="description" content="Restaurante Sonho Nosso – comida caseira com sabor de vó. Almoço, eventos e momentos especiais.">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FAF7F2] text-gray-800 font-sans overflow-x-hidden">


    {{-- Header --}}
    @include('partials.header')

    {{-- Conteúdo --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer (vamos criar depois) --}}

 <footer class="bg-slate-900 text-slate-300 pt-16">
    <div class="max-w-screen-xl mx-auto px-6">

        <!-- Grid principal -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">

            <!-- Coluna 1: Marca -->
            <div>
                <h3 class="text-2xl font-bold text-white">Sonho Nosso</h3>
                <p class="mt-4 text-sm leading-relaxed">
                    Comida caseira com sabor de casa.
                    Tradição, carinho e qualidade em cada prato.
                </p>
            </div>

            <!-- Coluna 2: Redes sociais -->
            <div>
                <h4 class="text-lg font-semibold text-white">Siga-nos</h4>

                <div class="flex gap-4 mt-4 text-2xl">
                    <a href="https://www.instagram.com/sonhonossorestaurante"
                            target="_blank"
                            class="hover:text-orange-500 transition">
                            <i class="fab fa-instagram"></i>
                    </a>

                    <a href="https://www.facebook.com/restsonhomeu"
                        target="_blank"
                        class="hover:text-blue-500 transition">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://wa.me/554187870693"
                        target="_blank"
                        class="hover:text-orange-500 transition">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <!-- Coluna 3: Contato -->
            <div>
                <h4 class="text-lg font-semibold text-white">Contato</h4>
                <p class="mt-4 text-sm">
                    📍 Av. Carlos Eduardo Nichele, 4254, – Estados<br>
                        Fazenda Rio Grande – PR<br><br>
                    📞 (41) 3604-4771
                </p>
            </div>
        </div>

        <!-- Linha cartões -->
        <div class="mt-16 border-t border-slate-700 pt-8">
            <p class="text-center text-sm mb-6">
                Aceitamos os seguintes meios de pagamento
            </p>

            <div class="flex flex-wrap justify-center gap-4">
                <img src="{{ asset('images/pagamentos/visa.svg') }}" class="h-8" alt="Visa">
                <img src="{{ asset('images/pagamentos/mastercard.svg') }}" class="h-8" alt="Mastercard">
                <img src="{{ asset('images/pagamentos/elo.svg') }}" class="h-8" alt="Elo">
                <img src="{{ asset('images/pagamentos/hipercard.png') }}" class="h-8" alt="Hipercard">
                <img src="{{ asset('images/pagamentos/amex.png') }}" class="h-8" alt="American Express">
                <img src="{{ asset('images/pagamentos/pix.svg') }}" class="h-8" alt="Pix">
                <img src="{{ asset('images/pagamentos/sodexo.svg') }}" class="h-8" alt="Sodexo">
                <img src="{{ asset('images/pagamentos/alelo.svg') }}" class="h-8" alt="Alelo">
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-12 pb-6 text-center text-xs text-slate-500">
            © {{ date('Y') }} Sonho Nosso. Todos os direitos reservados.
        </div>

    </div>
</footer>

<!-- Botão flutuante WhatsApp com balão -->
<div class="fixed bottom-6 right-6 z-50 flex items-center space-x-3">

  <!-- Balão de texto -->
  <span
    class="hidden md:block bg-white text-gray-800 text-sm font-medium
           px-4 py-2 rounded-full shadow-lg"
  >
    Olá! Gostaria de fazer um pedido.
  </span>

  <!-- Botão WhatsApp -->
  <a
    href="https://wa.me/554187870693?text=Olá!%20Gostaria%20de%20fazer%20uma%20reserva."
    target="_blank"
    aria-label="Fale conosco no WhatsApp"
    class="flex items-center justify-center
           w-14 h-14 rounded-full bg-green-500 shadow-lg
           hover:bg-green-600 transition duration-300"
  >
    <i class="fab fa-whatsapp text-white text-2xl"></i>
  </a>

</div>


<!-- Botão voltar ao topo -->
<button
  id="backToTop"
  aria-label="Voltar ao topo"
  class="hidden fixed bottom-24 right-6 z-50
         w-12 h-12 rounded-full
         bg-orange-600 text-white
         flex items-center justify-center
         shadow-lg hover:bg-orange-700
         transition-all"
>
  <i class="fas fa-arrow-up"></i>
</button>


<script>
  document.querySelectorAll('*').forEach(el => {
    if (el.scrollWidth > document.documentElement.clientWidth) {
      el.style.outline = '2px solid red';
      console.log('Overflow:', el);
    }
  });
</script>

</body>
</html>

<script>
  const backToTop = document.getElementById('backToTop');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
      backToTop.classList.remove('hidden');
    } else {
      backToTop.classList.add('hidden');
    }
  });

  backToTop.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
</script>





