<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="">
        <label for="caixa">Caixa: </label><br>
        <input type="text" name="caixa"></input><br>

        <label for="data">Data: </label><br>
        <input type="date" name="data"></input><br>

        <label for="descricao">Descrição: </label><br>
        <textarea name="descricao" id="" cols="30" rows="10"></textarea><br>

        <label for="operacao">Operação: </label><br>
        <input type="radio" name="operacao">Entrada de caixa</input><br>
        <input type="radio" name="operacao">Saida de caixa</input><br>

        <label for="valor">Valor</label><br>
        <input type="text" name="valor"><br><br><br><br>

        <input type="submit" value="Gravar">
        <input type="reset" value="Reset">
        <input type="button" value="Fechar" id="close">



    </form>
    <br><br><br>
    <table>
        <thead>
            <th>Data</th>
            <th>Descrição</th>
            <th>Valor</th>
        </thead>
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
    </table>
    <br><br><br>
    <div class="resultado">
        <label for="data-i">Data inicial: </label>
        <input type="date" name="data-i">
        <label for="cred-total">Crédito total: </label>
        <input type="text" name="cred-total">
        <label for="deb-total">Débito total: </label>
        <input type="text" name="deb-total">
        <label for="saldo-final">Saldo final: </label>
        <input type="text" name="saldo-final">
    </div>
</body>

</html>