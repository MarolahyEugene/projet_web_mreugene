<?php

    namespace App\Paquet;
    use PDO;

    function voir( ... $vars ) {
        foreach ( $vars as $var ) {
            echo '<pre>' ;
            print_r($var) ;
            echo '</pre>' ;
        }
    }

    function get_pdo () {
        return new PDO('mysql:host=localhost;dbname=projet_cours','root','',[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

        ]) ;
    }

    function securiser ( ? string $value ) : string {
        if ($value === null) {
            return '' ;
        }
        return htmlentities($value) ;
    }

    function page_404(){
        require '404.php' ;
        exit() ;
    }