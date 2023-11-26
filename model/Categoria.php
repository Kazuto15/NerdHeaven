<?php

    class Categoria{
        public $id, $nomeCategoria, $descCategoria;
        
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id; 
        }
               
        public function getNomeCategoria(){
            return $this->nomeCategoria;
        }
        public function setNomeCategoria($nomeCategoria){
            $this->nomeCategoria = $nomeCategoria;
        }
       
        public function getDescCategoria(){
            return $this->descCategoria;
        }
        public function setDescCategoria($descCategoria){
            $this->descCategoria = $descCategoria; 
        }
       
        
    }
?>