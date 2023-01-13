<?php
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $email = $_POST['email'];
    $numerotelefono = $_POST['numerotelefono'];
    $indirizzoethereum = $_POST['indirizzoethereum'];

    if(!empty($nome) || empty($cognome) || empty($email) || empty($numerotelefono) || empty($indirizzoethereum)) {
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "autenticazione_db";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if(mysqli_connect_error()) {
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_conect_error());
        } else {
            #$SELECT = "SELECT nome AND cognome AND email AND numerotelefono FROM registro WHERE nome = ? AND cognome = ? AND email = ? AND numerotelefono = ? LIMIT 1";
            $sql = "SELECT * FROM registro WHERE nome = '$nome' AND cognome = '$cognome' AND email = '$email' AND numerotelefono = '$numerotelefono' AND votato = 0";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['nome'] === $nome && $row['cognome'] === $cognome && $row['email'] === $email && $row['numerotelefono'] === $numerotelefono) {
                    $sql = "UPDATE registro SET votato=1 WHERE nome = '$nome' AND cognome = '$cognome' AND email = '$email' AND numerotelefono = '$numerotelefono'";
                    if (mysqli_query($conn, $sql)) {
                        echo "Record updated successfully";
                        } else {
                        echo "Error updating record: " . mysqli_error($conn);
                    }
                    $myfile = fopen("C:\\xampp\\htdocs\\tokenGoerli\\scripts\\index.js", "w") or die("Unable to open file!");
                    $txt = "async function main () {
                        // Our code will go here
                        const accounts = await ethers.provider.listAccounts();
                        console.log(accounts);
                        const VotoToken = await hre.ethers.getContractFactory(\"VotoToken\");
                        const votoToken = await VotoToken.attach(\"0xf99980dAF477d1Df093233Ef698D1beD1c191A42\");
                        await votoToken.issueToken(\"";
                    fwrite($myfile, $txt);
                    $txt = $indirizzoethereum;
                    fwrite($myfile, $txt);        
                    $txt = "\");
                        }        
                        main()
                            .then(() => process.exit(0))
                            .catch(error => {
                            console.error(error);
                            process.exit(1);
                        });";
                    fwrite($myfile, $txt);
                    fclose($myfile);
                    $output = null;
                    $code = null;
                    $command = "npx hardhat run ./scripts/index.js --network goerli";
                    exec($command,$output,$code);
                    print_r($output);
                } else {echo "non succede mai?";}
            } else {
                echo "non presente sul database o hai già ricevuto il tuo token";
            }


            #$stmt = $conn->prepare($SELECT);
            #$stmt->bind_param("s", $email);
            #$stmt->
        }
    } else {
        echo "Necessario compilare tutti i campi";
        die();
    }
?>