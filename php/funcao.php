<?php
    // Converter o strClass em array
    function converterStrClassParaArray($array)
    {
        if (is_array($array)) {
            foreach ($array as $key => $value) {
                if (is_array($value)) {
                    $array[$key] = converterStrClassParaArray($value);
                }
                if ($value instanceof stdClass) {
                    $array[$key] = converterStrClassParaArray((array)$value);
                }
            }
        }
        if ($array instanceof stdClass) {
            return converterStrClassParaArray((array)$array);
        }
        return $array;
    }

    // Função para converter base64 em imagem
    function converter_base64_para_imagem( $codigo_base64, $caminho, $nome_imagem = null ) {
        if ( !empty($codigo_base64) && !empty($caminho) ) :
            if(!is_dir($caminho)){
                mkdir($caminho, 777);
            }
    
            // Separa a string em array
            $array_string = explode( ";base64,", $codigo_base64);
    
            // Divide a posição ZERO do array em outro array
            $tipo_imagem = explode( "image/", $array_string[0] );
    
            // Pega o tipo de imagem
            $tipo_img = $tipo_imagem[1];
    
            // Cria o caminho onde vai salvar a imagem
            $diretorio = $caminho.md5(uniqid()).'.'.$tipo_img;
    
            // Verifica se a variável está vazia e atribui um nome
            if ( !empty($nome_imagem) ) :
                $diretorio = $caminho.$nome_imagem.'.'.$tipo_img;
            endif;
    
            // Decodifica a imagem
            $imagem_decodificada = base64_decode( $array_string[1] );
    
            // Salva a imagem no diretório
            file_put_contents( $diretorio, $imagem_decodificada );

        endif;
    
    }
    // Função para tirar os acentos
    function tirarAcentos($string){
        return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
    }

    
?>