<?php

    $sHost = '';
    $sPort = '';
    $sDbName = '';
    $sUser = '';
    $sPassword = '';

    $sConexao = "
        host=$sHost
        port=$sPort
        dbname=$sDbName
        user=$sUser
        password=$sPassword
    ";

    $oConexao = pg_connect($sConexao);
    var_dump($oConexao);