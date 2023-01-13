<!DOCTYPE html>
<html>
<head>
    <title>Ritiro</title>
    <meta charset="utf-8" />

    <link href="css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="container"> 
    <h1> Ritiro da smart contract pool </h1>
      
    <form method="post">
        <table>
            <tr>
                <th>
                    Nota:
                </th>
                <td>
                    <input type="text" placeholder="" name="nota" size="100" required>
                </td>     
            </tr>
            <tr>
                <th>
                    Indirizzo Ethereum:
                </th>
                <td>
                    <input type="text" placeholder="" name="indirizzoethereum" maxlength="42" size="42" required>
                </td>  
            </tr>
            <tr>
                <td>
                <input type="submit" name="ritiro"
                class="btn btn-info" value="Ritiro" />
                </td> 
            </tr>
        </table>        
    </form>

    <?php
        if(array_key_exists('ritiro', $_POST)) {
            ritiro();
        }
        function ritiro() {
            $nota = $_POST['nota'];
            $indirizzoethereum = $_POST['indirizzoethereum'];
/*
            $command = $nota . " node cli.js deposit ETH 0.003 --rpc https://goerli.infura.io/v3/9aa3d95b3bc440fa88ea12eaa4456161";
            print_r($command);
*/
            if (strpos($nota, 'tornado-eth-') === 0) {
                $output = null;
                $code = null;
                $command = "node cli.js withdraw " . $nota . " " . $indirizzoethereum . " --rpc https://goerli.infura.io/v3/9aa3d95b3bc440fa88ea12eaa4456161 --relayer http://relayerbruno.duckdns.org";
                exec($command,$output,$code);
                print_r($output);
            } else {
                $output = null;
                $code = null;
                $command = "node cli.js withdraw " . $nota . " " . $indirizzoethereum . " --rpc https://goerli.infura.io/v3/9aa3d95b3bc440fa88ea12eaa4456161";
                exec($command,$output,$code);
                print_r($output);
            }

        }
    ?>

</body>
  
</html>