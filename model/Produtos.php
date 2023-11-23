<?php

    class Produto{
        public $id, $nome, $desc, $preco, $qntd, $imagem, $TipoProduto;
        
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
       
        public function getDesc(){
            return $this->desc;
        }
        public function setDesc($desc){
            $this->desc = $desc; 
        }
       
        public function getPreco(){
            return $this->preco;
        }
        public function setPreco($preco){
            $this->preco = $preco; 
        }
        public function getQntd(){
            return $this->qntd; 
        }
        public function setQntd($qntd){
            $this->qntd = $qntd; 
        }
       
        public function getImagem(){
            return $this->imagem;
        }
        public function setImagem($imagem){
            $this->imagem = $imagem; 
        }
        public function getTipoProduto(){
            return $this->TipoProduto;
        }
        public function setTipoProduto($TipoProduto){
            $this->TipoProduto = $TipoProduto; 
        }
    

        public function salvarImagem($novo_nome) {
            if(empty($_FILES ['foto']['size']) !=1){
                if($novo_nome == ""){
                    $novo_nome = md5(time()). ".jpg";
                }
                $diretorio = "../../imgs/product/";

                $nomeCompleto = $diretorio.$novo_nome;

                move_uploaded_file($_FILES['foto']['tmp_name'], $nomeCompleto);
                return $novo_nome;
            }else{
                return $novo_nome;
            }
        }
    }
?>