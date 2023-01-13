<!DOCTYPE html>
<html>
<head>
    <title>Deposito</title>
    <meta charset="utf-8" />

    <link href="css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="container">
    <h1> Deposito su smart contract pool </h1>
    <br>

    <form method="post">
        <input type="submit" name="deposito_eth"
        class="btn btn-info" value="Deposito ETH" />
        <br>
        <br>
        
        <input type="submit" name="deposito_voto"
        class="btn btn-info" value="Deposito VOTO" />
    </form>

    <?php
        if(array_key_exists('deposito_eth', $_POST)) {
            deposito_eth();
        }
        else if(array_key_exists('deposito_voto', $_POST)) {
            deposito_voto();
        }
        function deposito_eth() {
            $output = null;
            $code = null;
            $command = "node cli.js deposit ETH 0.0015 --rpc https://goerli.infura.io/v3/9aa3d95b3bc440fa88ea12eaa4456161";
            exec($command,$output,$code);
            print_r($output);
        }
        function deposito_voto() {
            $output = null;
            $code = null;
            $command = "node cli.js deposit VOTO 1 --rpc https://goerli.infura.io/v3/9aa3d95b3bc440fa88ea12eaa4456161";
            exec($command,$output,$code);
            print_r($output);
        }
    ?>

</body>
  
</html>