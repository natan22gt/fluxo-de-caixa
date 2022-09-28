<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/mov-caixa.css">
  <link rel="stylesheet" href="../css/fontawesome/css/all.css">
  <title>Document</title>
</head>

<body>
  <div class="container-caixa">
    <header class="header">
      <ul>
        <li><a href="./mov_caixa.php">movimentação</a></li>
        <li><a href="./mov_caixa.php">movimentação</a></li>
        <li><a href="./mov_caixa.php">movimentação</a></li>
      </ul>
      <a href="../index.php"><i class="fa-solid fa-cash-register"></i></a>
      <ul class="hidden">
        <li><a href="./mov_caixa.php">movimentação</a></li>
        <li><a href="./mov_caixa.php">movimentação</a></li>
        <li><a href="./mov_caixa.php">movimentação</a></li>
      </ul>
    </header>
    <main class="main">
      <form action="" method="" class="form-venda">
        <div class="form-items">
          <fieldset>
            <label for="caixa">Caixa: </label>
            <input type="text" name="caixa"></input>
          </fieldset>
          <fieldset>
            <label for="data">Data: </label>
            <input type="date" name="data"></input>
          </fieldset>
          <fieldset>
            <label for="descricao">Descrição: </label>
            <textarea name="descricao" id="" cols="30" rows="10"></textarea>
          </fieldset>
          <fieldset>
            <label for="operacao">Operação: </label>
            <input type="radio" name="operacao">Entrada de caixa</input>
            <input type="radio" name="operacao">Saida de caixa</input>
          </fieldset>
          <fieldset>
            <label for="valor">Valor</label>
            <input type="text" name="valor">
          </fieldset>
        </div>
        <fieldset class="buttons">
          <input type="submit" value="Gravar">
          <input type="reset" value="Reset">
          <input type="button" value="Fechar" id="close">
        </fieldset>
      </form>
      <table class="data">
        <thead>
          <th>Data</th>
          <th>Descrição</th>
          <th>Valor</th>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
          </tr>
          <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
          </tr>
          <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
          </tr>
          <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
          </tr>
          <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
          </tr>
        </tbody>
      </table>
      <div class="result">
        <label for="data-i">Data inicial: </label>
        <input type="date" name="data-i">
        <label for="cred-total">Crédito total: </label>
        <input type="text" name="cred-total">
        <label for="deb-total">Débito total: </label>
        <input type="text" name="deb-total">
        <label for="saldo-final">Saldo final: </label>
        <input type="text" name="saldo-final">
      </div>
    </main>
  </div>
</body>

</html>