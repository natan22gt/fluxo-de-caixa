<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/fontawesome/css/all.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>fluxo de caixa</title>
</head>

<body>
  <div class="w-screen h-screen overflow-hidden">
    <header class="w-screen h-1/6 flex bg-gray-700 justify-center items-center">
      <i class="fa-solid fa-cash-register text-white text-5xl"></i>
    </header>
    <aside class="w-1/5 h-5/6 bg-black text-white">
      <button class="w-full py-2 hover:bg-white hover:text-black duration-100">
        Cadastro
      </button>
      <button class="w-full py-2 hover:bg-white hover:text-black duration-100">
        Entradas e saidas
      </button>
      <button class="w-full py-2 hover:bg-white hover:text-black duration-100">
        Estoque
      </button>
    </aside>
    <main class="">
      <iframe src="paginas/mov_caixa.php" frameborder="0" class=""></iframe>
    </main>
  </div>
</body>

</html>