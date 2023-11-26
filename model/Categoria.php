<?php

    class Categoria{
        public $id, $nome, $descCategoria;
        
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id; 
        }
               
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
       
        public function getDescCategoria(){
            return $this->descCategoria;
        }
        public function setDescCategoria($descCategoria){
            $this->descCategoria = $descCategoria; 
        }
       
        
    }
?>