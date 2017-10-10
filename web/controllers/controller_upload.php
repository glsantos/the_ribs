<?php
/*
    **************************************************************
    *Objetivo: Estabecer uma conexão com o Banco de Dados (Mysql)
    *Autor: Marcos Ricardo
    *Data: 10/10/2017
    *Ultima Modificação: 10/10/2017
    *Modificações: 
    *Para uso doméstico e o IP da máquina servidora do Banco de Dados.
    *Arquivos relacionados: qualquer arquivo da controller
    *
    **************************************************************
*/
class controllerUpload{
        public function UploadFoto($objeto_file){
            
            $caminho_arquivo = "arquivos_enviados/";
            
            $nome_imagem = basename($objeto_file['name']);
            $uploadfile = $caminho_arquivo . $nome_imagem;

           /*PEGANDO A EXTENSAO DA IMAGEM*/
            $extensao = strtolower(substr($nome_imagem, strlen($nome_imagem)-3,3));
            if(move_uploaded_file ($objeto_file['tmp_name'], $uploadfile)){
                    return $uploadfile;   
            }
            
            
        }
}
?>