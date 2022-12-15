<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de aluno</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="">
            <fieldset>
                <legend><b>Os sequintes dados foram cadastrados com sucesso:</b></legend>
                <?php
                    include_once("assets/php/Contato.class.php");
                    include_once("assets/php/Curso.class.php");
                    $aluno01 = new Aluno();

                    $aluno01->setNome($_POST['nome']);
                    echo "<br>".$aluno01->getNome()."<br>";
                    if($_POST['genero'] == "masculino"){
                        echo "<br>Masculino<br>";
                    } elseif($_POST['genero'] == "feminino"){
                        echo "<br>Feminino<br>";
                    }else{
                        echo "<br>Outro<br>";
                    }
                    $aluno01->setData($_POST['data_nascimento']);
                    echo "<br>".$aluno01->getData()."<br>";
                    $aluno01->setEndereco($_POST['endereco']);
                    echo "<br>".$aluno01->getEndereco()."<br>";

                    $aluno01 = new Contato();
                    echo "<br><b>Contatos:</b><br>";
                    $aluno01->setEmail($_POST['email']);
                    echo "<br>".$aluno01->getEmail()."<br>";
                    $aluno01->setTelefone($_POST['telefone']);
                    echo "<br>".$aluno01->getTelefone()."<br>";

                    $aluno01 = new Curso();
                    echo "<br><b>Curso:</b><br>";
                    $aluno01->setNomeCurso($_POST['curso']);
                    echo "<br>".$aluno01->getNomeCurso()."<br>";
                    echo "<br><b>Numero de matricula gerado automaticamente:</b></br>";
                    $aluno01->setMatricula(rand(00000001,99999999));
                    echo "<br>".$aluno01->getMatricula()."<br>";


                ?>

            </fieldset>
        </form>
    </div>
</body>
</html>