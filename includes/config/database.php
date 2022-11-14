<?php
    
    function conectarDB() : mysqli{
        $db = mysqli_connect('localhost', 'root', 'Kk.268268', 'autolavadoexpres_crud');

        if(!$db){
            echo 'Error no se pudo conectar';
            exit;
        }

        return $db;
    }
