<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>

<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="jquery/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css.map">
    <script src="bootstrap/js/bootstrap.js"></script>

</head>
<body>

<div class="container-fluid">

<form action="celular.php" method="post">
<div class="row form-group">
<div class="col-md-offset-1 col-md-10" id="tools">

<h3>Tempo de Simulação</h3>
<input type="number" class="form-control" id="tempo_de_simulacao" name="tempo_de_simulacao" value="100">

<div id="body_configurations" class="row">
<!--Torre C1 PORCENTAGENS-->
<div class="col-md-6">
    <h3>Torre C1</h3>

    <label for="canais_c1">Numero de Canais</label>
    <input type="number" class="form-control" id="canais_c1" name="canais_c1" value="2">


    <br>
    <!--Porcentagens-->
    <div class="row">
        <div class="col-md-4 form-group">
            <label for="chamadas_c1c1">Chamadas C1C1</label>

            <div class="input-group">
                <input type="number" min="0" max="100" class="form-control" id="chamadas_c1c1" name="chamadas_c1c1"
                       value="50">
                <span class="input-group-addon">%</span>
            </div>
        </div>
        <div class="col-md-4 form-group">
            <label for="chamadas_c1c2">Chamadas C1C2</label>

            <div class="input-group">
                <input type="number" min="0" max="100" class="form-control" id="chamadas_c1c2" name="chamadas_c1c2"
                       value="30">
                <span class="input-group-addon">%</span>
            </div>
        </div>
        <div class="col-md-4 form-group">
            <label for="chamadas_c1fa">Chamadas C1FA</label>

            <div class="input-group">
                <input type="number" min="0" max="100" class="form-control" id="chamadas_c1fa" name="chamadas_c1fa"
                       value="20">
                <span class="input-group-addon">%</span>
            </div>
        </div>
    </div>
    <br>
    <!-- Graph porcentagens -->
    <div class="progress progress_c1 form-group">
        <div id="progress_c1c1" class="progress-bar progress-bar-success progress-bar-striped active"
             style="width: 50%">
            C1C1
            <span class="sr-only">50% Complete (success)</span>
        </div>
        <div id="progress_c1c2" class="progress-bar progress-bar-warning progress-bar-striped active"
             style="width: 30%">
            C1C2
            <span class="sr-only">30% Complete (warning)</span>
        </div>
        <div id="progress_c1fa" class="progress-bar progress-bar-danger progress-bar-striped active"
             style="width: 20%">
            C1FA
            <span class="sr-only">20% Complete (danger)</span>
        </div>
    </div>


    <!--Torre C1 PORCENTAGENS-->

    <!-- Torre c1 CHAMADAS -->

    <hr>
    <h4><span class="glyphicon glyphicon-resize-horizontal" aria-hidden="true"></span> Distribuição dos Tempos Entre
        Chamadas - Torre C1</h4>

    <br>

    <!-- Argumentos dos Tempos de Chegada -->

    <div class="row">
        <div class="col-md-6 form-group">
            <label for="tipo_tempo_entre_chamadas_torre_c1">Função</label>
            <select id="tipo_tempo_entre_chamadas_torre_c1" name="tipo_tempo_entre_chamadas_torre_c1"
                    class="form-control">
                <option>Exponencial</option>
                <option>Constante</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label for="tempo_entre_chamadas_arg_torre_c1">Argumento</label>
            <input type="text" class="form-control" id="tempo_entre_chamadas_arg_torre_c1"
                   name="tempo_entre_chamadas_arg_torre_c1" value="15">
        </div>
    </div>


    <hr>

    <!-- Distribuição dos Tic -->

    <h4><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Distribuição da Duração de Chamadas -
        Torre C1</h4>

    <select id="tipo_duracao_chamadas_torre_c1" name="tipo_duracao_chamadas_torre_c1" class="form-control">
        <option>Normal</option>
        <option>Uniforme</option>
        <option>Exponencial</option>
        <option>Triangular</option>
        <option>Constante</option>
    </select>
    <br>


    <!-- Argumentos dos Tempos de Chegada -->

    <div class="row">
        <div class="col-md-4 form-group">
            <label for="duracao_da_chamada_arg1_torre_c1">Argumento 1</label>
            <input type="text" class="form-control" id="duracao_da_chamada_arg1_torre_c1"
                   name="duracao_da_chamada_arg1_torre_c1" value="15">
        </div>
        <div class="col-md-4 form-group">
            <label for="duracao_da_chamada_arg2_torre_c1">Argumento 2</label>
            <input type="text" class="form-control" id="duracao_da_chamada_arg2_torre_c1"
                   name="duracao_da_chamada_arg2_torre_c1" value="5">
        </div>
        <div class="col-md-4 form-group">
            <label for="duracao_da_chamada_arg3_torre_c1">Argumento 2</label>
            <input type="text" class="form-control" id="duracao_da_chamada_arg3_torre_c1"
                   name="duracao_da_chamada_arg3_torre_c1" value="5">
        </div>
    </div>

</div>
<!-- Torre c1 CHAMADAS -->

<!-- Torre c2 PORCENTAGENS -->
<div class="col-md-6">

    <h3>Torre C2</h3>

    <label for="canais_c2">Numero de Canais</label>
    <input type="number" class="form-control" id="canais_c2" name="canais_c2" value="20">


    <br>
    <!--Porcentagens-->
    <div class="row">
        <div class="col-md-4 form-group">
            <label for="chamadas_c2c2">Chamadas C2C2</label>

            <div class="input-group">
                <input type="number" min="0" max="100" class="form-control" id="chamadas_c2c2" name="chamadas_c2c2"
                       value="10">
                <span class="input-group-addon">%</span>
            </div>
        </div>
        <div class="col-md-4 form-group">
            <label for="chamadas_c2c1">Chamadas C2C1</label>

            <div class="input-group">
                <input type="number" min="0" max="100" class="form-control" id="chamadas_c2c1" name="chamadas_c2c1"
                       value="20">
                <span class="input-group-addon">%</span>
            </div>
        </div>
        <div class="col-md-4 form-group">
            <label for="chamadas_c2fa">Chamadas C2FA</label>

            <div class="input-group">
                <input type="number" min="0" max="100" class="form-control" id="chamadas_c2fa" name="chamadas_c2fa"
                       value="70">
                <span class="input-group-addon">%</span>
            </div>
        </div>
    </div>

    <br>
    <!-- Graph porcentagens -->
    <div class="progress progress_c2">
        <div id="progress_c2c2" class="progress-bar progress-bar-success progress-bar-striped active"
             style="width: 50%">
            C2C2
            <span class="sr-only">50% Complete (success)</span>
        </div>
        <div id="progress_c2c1" class="progress-bar progress-bar-warning progress-bar-striped active"
             style="width: 30%">
            C2C1
            <span class="sr-only">30% Complete (warning)</span>
        </div>
        <div id="progress_c2fa" class="progress-bar progress-bar-danger progress-bar-striped active"
             style="width: 20%">
            C2FA
            <span class="sr-only">20% Complete (danger)</span>
        </div>
    </div>
    <!-- Torre c2 PORCENTAGENS -->


    <!-- Torre c2 CHAMADAS -->
    <hr>
    <h4><span class="glyphicon glyphicon-resize-horizontal" aria-hidden="true"></span> Distribuição dos Tempos Entre
        Chamadas - Torre C2</h4>

    <br>

    <!-- Argumentos dos Tempos de Chegada -->

    <div class="row">
        <div class="col-md-6 form-group">
            <label for="tipo_tempo_entre_chamadas_torre_c2">Função</label>
            <select id="tipo_tempo_entre_chamadas_torre_c2" name="tipo_tempo_entre_chamadas_torre_c2"
                    class="form-control">
                <option>Exponencial</option>
                <option>Constante</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label for="tempo_entre_chamadas_arg_torre_c2">Argumento</label>
            <input type="text" class="form-control" id="tempo_entre_chamadas_arg_torre_c2"
                   name="tempo_entre_chamadas_arg_torre_c2" value="15">
        </div>
    </div>


    <hr>

    <!-- Distribuição dos Tic -->

    <h4><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Distribuição da Duração de Chamadas -
        Torre C1</h4>

    <select id="tipo_duracao_chamadas_torre_c2" name="tipo_duracao_chamadas_torre_c2" class="form-control">
        <option>Normal</option>
        <option>Uniforme</option>
        <option>Exponencial</option>
        <option>Triangular</option>
        <option>Constante</option>
    </select>
    <br>


    <!-- Argumentos dos Tempos de Chegada -->

    <div class="row">
        <div class="col-md-4 form-group">
            <label for="duracao_da_chamada_arg1_torre_c2">Argumento 1</label>
            <input type="text" class="form-control" id="duracao_da_chamada_arg1_torre_c2"
                   name="duracao_da_chamada_arg1_torre_c2" value="15">
        </div>
        <div class="col-md-4 form-group">
            <label for="duracao_da_chamada_arg2_torre_c2">Argumento 2</label>
            <input type="text" class="form-control" id="duracao_da_chamada_arg2_torre_c2"
                   name="duracao_da_chamada_arg2_torre_c2" value="5">
        </div>
        <div class="col-md-4 form-group">
            <label for="duracao_da_chamada_arg3_torre_c2">Argumento 2</label>
            <input type="text" class="form-control" id="duracao_da_chamada_arg3_torre_c2"
                   name="duracao_da_chamada_arg3_torre_c2" value="5">
        </div>
    </div>


</div>
<!-- Torre c2 CHAMADAS -->
</div>

<hr>
<br>

<div id="button_run">
    <!-- Indicates a successful or positive action -->
    <button type="submit" id="button_executar_simulacao" class="btn btn-success center-block">Executar Simulação
    </button>
</div>

</div>
</div>
</form>

<div class="row">
<div id="relatorio" class="col-md-10 col-md-offset-1">
<?php

var_dump($_POST);

define("TORRE_C1", 1);
define("TORRE_C2", 2);

define("CHAMADA_C1C1", 11);
define("CHAMADA_C1C2", 12);
define("CHAMADA_C1FA", 10);

define("CHAMADA_C2C2", 22);
define("CHAMADA_C2C1", 21);
define("CHAMADA_C2FA", 20);

define("ENTRADA", 50);
define("SAIDA", 60);


$tempo_de_simulacao = $_POST["tempo_de_simulacao"];

$canais_c1 = intval($_POST['canais_c1']);
$canais_livres_c1 = $canais_c1;
$chamadas_perdidas_sem_canal_c1 = 0;

$chamadas_c1c1 = intval($_POST['chamadas_c1c1']);
$chamadas_c1c2 = intval($_POST['chamadas_c1c2']);
$chamadas_c1fa = intval($_POST['chamadas_c1fa']);

$tipo_tempo_entre_chamadas_torre_c1 = $_POST['tipo_tempo_entre_chamadas_torre_c1'];
$tempo_entre_chamadas_arg_torre_c1 = intval($_POST['tempo_entre_chamadas_arg_torre_c1']);

$tipo_duracao_chamadas_torre_c1 = $_POST['tipo_duracao_chamadas_torre_c1'];
$duracao_da_chamada_arg1_torre_c1 = intval($_POST['duracao_da_chamada_arg1_torre_c1']);
$duracao_da_chamada_arg2_torre_c1 = intval($_POST['duracao_da_chamada_arg2_torre_c1']);
$duracao_da_chamada_arg3_torre_c1 = intval($_POST['duracao_da_chamada_arg3_torre_c1']);

$canais_c2 = intval($_POST['canais_c2']);
$canais_livres_c2 = $canais_c2;
$chamadas_perdidas_sem_canal_c2 = 0;


$chamadas_c2c2 = intval($_POST['chamadas_c2c2']);
$chamadas_c2c1 = intval($_POST['chamadas_c2c1']);
$chamadas_c2fa = intval($_POST['chamadas_c2fa']);

$tipo_tempo_entre_chamadas_torre_c2 = $_POST['tipo_tempo_entre_chamadas_torre_c2'];
$tempo_entre_chamadas_arg_torre_c2 = intval($_POST['tempo_entre_chamadas_arg_torre_c2']);

$tipo_duracao_chamadas_torre_c2 = $_POST['tipo_duracao_chamadas_torre_c2'];
$duracao_da_chamada_arg1_torre_c2 = intval($_POST['duracao_da_chamada_arg1_torre_c2']);
$duracao_da_chamada_arg2_torre_c2 = intval($_POST['duracao_da_chamada_arg2_torre_c2']);
$duracao_da_chamada_arg3_torre_c2 = intval($_POST['duracao_da_chamada_arg3_torre_c2']);


$array_cronograma = array_fill(0, $tempo_de_simulacao, array());


criacao_de_chamada(TORRE_C1, 0);
criacao_de_chamada(TORRE_C2, 0);

// Geração das Chamadas
for ($tempo_atual = 0; $tempo_atual <= $tempo_de_simulacao; $tempo_atual++) {

    if (!empty($array_cronograma[$tempo_atual])) {

        foreach ($array_cronograma[$tempo_atual] as $key => $evento) {

            if ($evento["entrada_50"] == ENTRADA && !array_key_exists('half', $evento)) {
                if ($evento["torre"] == TORRE_C1) {
                    if ($canais_livres_c1 > 0) {
                        criacao_de_chamada($evento['torre'], $tempo_atual);
                    } else {
                        $chamadas_perdidas_sem_canal_c1++;
                    }
                }

                if ($evento["torre"] == TORRE_C2) {
                    if ($canais_livres_c2 > 0) {
                        criacao_de_chamada($evento['torre'], $tempo_atual);
                    } else {
                        $chamadas_perdidas_sem_canal_c2++;
                    }
                }
            }

            if ($evento["torre"] == TORRE_C1) {
                if ($evento["entrada_50"] == ENTRADA) {
                    $canais_livres_c1--;
                } else {
                    $canais_livres_c1++;
                }
            }

            if ($evento["torre"] == TORRE_C1) {
                if ($evento["entrada_50"] == ENTRADA) {
                    $canais_livres_c2--;
                } else {
                    $canais_livres_c2++;
                }
            }


        }
    }

}


var_dump($array_cronograma, $chamadas_perdidas_sem_canal_c1, $chamadas_perdidas_sem_canal_c2);


function criacao_de_chamada($torre, $tempo_atual)
{

    global $array_cronograma;

    $tempo = sortear_proximo_tempo($torre) + $tempo_atual;
    $tipo = sortear_tipo_de_chamada($torre);
    $duracao = sortear_duracao_chamada($torre);
    $duracao_metade = intval($duracao / 2);

//            var_dump($tempo, $tipo, $duracao_metade, $duracao);

    if ($torre == TORRE_C1) {
        if ($tipo == CHAMADA_C1C1) {

            if (array_key_exists($tempo, $array_cronograma))
                array_push($array_cronograma[$tempo], array("torre" => TORRE_C1,
                    "tipo" => $tipo,
                    "duracao" => $duracao,
                    "entrada_50" => ENTRADA));


            if (array_key_exists($tempo + $duracao, $array_cronograma))
                array_push($array_cronograma[$tempo + $duracao], array("torre" => TORRE_C1,
                    "tipo" => $tipo,
                    "duracao" => 0,
                    "entrada_50" => SAIDA));

        }

        if ($tipo == CHAMADA_C1C2) {

            if (array_key_exists($tempo, $array_cronograma))
                array_push($array_cronograma[$tempo], array("torre" => TORRE_C1,
                    "tipo" => $tipo,
                    "duracao" => $duracao_metade,
                    "entrada_50" => ENTRADA));


            if (array_key_exists($tempo + $duracao_metade, $array_cronograma))
                array_push($array_cronograma[$tempo + $duracao_metade], array("torre" => TORRE_C2,
                    "tipo" => $tipo,
                    "duracao" => $duracao_metade,
                    "half" => true,
                    "entrada_50" => ENTRADA));


            if (array_key_exists($tempo + $duracao_metade, $array_cronograma))
                array_push($array_cronograma[$tempo + $duracao_metade], array("torre" => TORRE_C1,
                    "tipo" => $tipo,
                    "duracao" => 0,
                    "entrada_50" => SAIDA));


            if (array_key_exists($tempo + $duracao_metade + $duracao_metade, $array_cronograma))
                array_push($array_cronograma[$tempo + $duracao_metade + $duracao_metade], array("torre" => TORRE_C2,
                    "tipo" => $tipo,
                    "duracao" => 0,
                    "half" => true,
                    "entrada_50" => SAIDA));

        }

        if ($tipo == CHAMADA_C1FA) {

            if (array_key_exists($tempo, $array_cronograma))
                array_push($array_cronograma[$tempo], array("torre" => TORRE_C1,
                    "tipo" => $tipo,
                    "duracao" => $duracao_metade,
                    "entrada_50" => ENTRADA));


            if (array_key_exists($tempo + $duracao_metade, $array_cronograma))
                array_push($array_cronograma[$tempo + $duracao_metade], array("torre" => TORRE_C1,
                    "tipo" => $tipo,
                    "duracao" => 0,
                    "entrada_50" => SAIDA));

        }
    }

    if ($torre == TORRE_C2) {
        if ($tipo == CHAMADA_C2C2) {

            if (array_key_exists($tempo, $array_cronograma))
                array_push($array_cronograma[$tempo], array("torre" => TORRE_C2,
                    "tipo" => $tipo,
                    "duracao" => $duracao,
                    "entrada_50" => ENTRADA));

            if (array_key_exists($tempo + $duracao, $array_cronograma))
                array_push($array_cronograma[$tempo + $duracao], array("torre" => TORRE_C2,
                    "tipo" => $tipo,
                    "duracao" => 0,
                    "entrada_50" => SAIDA));

        }

        if ($tipo == CHAMADA_C2C1) {

            if (array_key_exists($tempo, $array_cronograma))
                array_push($array_cronograma[$tempo], array("torre" => TORRE_C2,
                    "tipo" => $tipo,
                    "duracao" => $duracao_metade,
                    "entrada_50" => ENTRADA));

            if (array_key_exists($tempo + $duracao_metade, $array_cronograma))
                array_push($array_cronograma[$tempo + $duracao_metade], array("torre" => TORRE_C1,
                    "tipo" => $tipo,
                    "duracao" => $duracao_metade,
                    "half" => true,
                    "entrada_50" => ENTRADA));


            if (array_key_exists($tempo + $duracao_metade, $array_cronograma))
                array_push($array_cronograma[$tempo + $duracao_metade], array("torre" => TORRE_C2,
                    "tipo" => $tipo,
                    "duracao" => 0,
                    "entrada_50" => SAIDA));

            if (array_key_exists($tempo + $duracao_metade + $duracao_metade, $array_cronograma))
                array_push($array_cronograma[$tempo + $duracao_metade + $duracao_metade], array("torre" => TORRE_C1,
                    "tipo" => $tipo,
                    "duracao" => 0,
                    "half" => true,
                    "entrada_50" => SAIDA));

        }

        if ($tipo == CHAMADA_C2FA) {

            if (array_key_exists($tempo, $array_cronograma))
                array_push($array_cronograma[$tempo], array("torre" => TORRE_C2,
                    "tipo" => $tipo,
                    "duracao" => $duracao_metade,
                    "entrada_50" => ENTRADA));


            if (array_key_exists($tempo + $duracao_metade, $array_cronograma))
                array_push($array_cronograma[$tempo + $duracao_metade], array("torre" => TORRE_C2,
                    "tipo" => $tipo,
                    "duracao" => 0,
                    "entrada_50" => SAIDA));

        }
    }


}


function sortear_proximo_tempo($torre)
{
    global $tipo_tempo_entre_chamadas_torre_c1;
    global $tipo_tempo_entre_chamadas_torre_c2;

    global $tempo_entre_chamadas_arg_torre_c1;
    global $tempo_entre_chamadas_arg_torre_c2;


    if ($torre == TORRE_C1) {
        if (strcmp($tipo_tempo_entre_chamadas_torre_c1, 'Constante')) {
            return $tempo_entre_chamadas_arg_torre_c1;
        }
        return exponencial($tempo_entre_chamadas_arg_torre_c1);
    }

    if ($torre == TORRE_C2) {
        if (strcmp($tipo_tempo_entre_chamadas_torre_c2, 'Constante')) {
            return $tempo_entre_chamadas_arg_torre_c2;
        }
        return exponencial($tempo_entre_chamadas_arg_torre_c2);
    }

}

function sortear_tipo_de_chamada($torre)
{
    global $chamadas_c1c1;
    global $chamadas_c1c2;
    global $chamadas_c1fa;

    global $chamadas_c2c2;
    global $chamadas_c2c1;
    global $chamadas_c2fa;

    $random_roll = rand(1, 100);

    if ($torre == TORRE_C1) {
        if ($random_roll <= $chamadas_c1c1)
            return CHAMADA_C1C1;
        if ($random_roll <= $chamadas_c1c2 + $chamadas_c1c1)
            return CHAMADA_C1C2;
        return CHAMADA_C1FA;
    }

    if ($torre == TORRE_C2) {
        if ($random_roll <= $chamadas_c2c2)
            return CHAMADA_C2C2;
        if ($random_roll <= $chamadas_c2c1 + $chamadas_c2c2)
            return CHAMADA_C2C1;
        return CHAMADA_C2FA;
    }
}

function sortear_duracao_chamada($torre)
{
    global $tipo_duracao_chamadas_torre_c1;
    global $duracao_da_chamada_arg1_torre_c1;
    global $duracao_da_chamada_arg2_torre_c1;
    global $duracao_da_chamada_arg3_torre_c1;

    global $tipo_duracao_chamadas_torre_c2;
    global $duracao_da_chamada_arg1_torre_c2;
    global $duracao_da_chamada_arg2_torre_c2;
    global $duracao_da_chamada_arg3_torre_c2;

    if ($torre == TORRE_C1) {

        if (strcmp($tipo_duracao_chamadas_torre_c1, 'Normal')) {
            return normal($duracao_da_chamada_arg1_torre_c1, $duracao_da_chamada_arg2_torre_c1);
        }

        if (strcmp($tipo_duracao_chamadas_torre_c1, 'Uniforme')) {
            return uniforme($duracao_da_chamada_arg1_torre_c1, $duracao_da_chamada_arg2_torre_c1);
        }

        if (strcmp($tipo_duracao_chamadas_torre_c1, 'Exponencial')) {
            return exponencial($duracao_da_chamada_arg1_torre_c1);
        }

        if (strcmp($tipo_duracao_chamadas_torre_c1, 'Triangular')) {
            return triangular($duracao_da_chamada_arg1_torre_c1, $duracao_da_chamada_arg2_torre_c1, $duracao_da_chamada_arg3_torre_c1);
        }

        if (strcmp($tipo_duracao_chamadas_torre_c1, 'Constante')) {
            return $duracao_da_chamada_arg1_torre_c1;
        }


    }

    if ($torre == TORRE_C2) {
        if (strcmp($tipo_duracao_chamadas_torre_c2, 'Normal')) {
            return normal($duracao_da_chamada_arg1_torre_c2, $duracao_da_chamada_arg2_torre_c2);
        }

        if (strcmp($tipo_duracao_chamadas_torre_c2, 'Uniforme')) {
            return uniforme($duracao_da_chamada_arg1_torre_c2, $duracao_da_chamada_arg2_torre_c2);
        }

        if (strcmp($tipo_duracao_chamadas_torre_c2, 'Exponencial')) {
            return exponencial($duracao_da_chamada_arg1_torre_c2);
        }

        if (strcmp($tipo_duracao_chamadas_torre_c2, 'Triangular')) {
            return triangular($duracao_da_chamada_arg1_torre_c2, $duracao_da_chamada_arg2_torre_c2, $duracao_da_chamada_arg3_torre_c2);
        }

        if (strcmp($tipo_duracao_chamadas_torre_c2, 'Constante')) {
            return $duracao_da_chamada_arg1_torre_c2;
        }
    }


}

//FUNÇÃO NORMAL:

function normal($mean, $sd)
{
    $x = mt_rand() / mt_getrandmax();
    $y = mt_rand() / mt_getrandmax();
    $return = sqrt(-2 * log($x)) * cos(2 * pi() * $y) * $sd + $mean;
    return intval($return);
}


//FUNÇÃO UNIFORME

function uniforme($max, $min)
{
    $return = mt_rand($min, $max);
    return intval($return);
}


//FUNÇÃO EXPONENCIAL

function exponencial($r)
{

    $u = mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();
    $x = log(1 - $u) / (-$r);
    $return = $x;
    return intval($return);

}


//FUNÇÃO TRIANGULAR

function triangular($a, $b, $c)
{

    $u = mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();
    $f = ($c - $a) / ($b - $a);
    if ($u < $f) {
        $return = ($a + sqrt($u * ($b - $a) * ($c - $a)));
        return intval($return);
    } else {
        $return = ($b - sqrt((1 - $u) * ($b - $a) * ($b - $c)));
        return intval($return);
    }

}

?>
</div>
</div>


</div>
</body>
