<?php
require_once(__DIR__ . '../../model/Conexao.php');

class ProdutoDao{
    public static function cadastrarProduto($produto){
        $conexao = Conexao::conectar();
        $query = "INSERT INTO tbProduto (nomeProduto,descProduto,precoProduto,qntdProduto,imagemProduto,idCategoria) VALUES (?,?,?,?,?,?)";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $produto->getNome());
        $stmt->bindValue(2, $produto->getDesc());
        $stmt->bindValue(3, $produto->getPreco());
        $stmt->bindValue(4, $produto->getQntd());
        $stmt->bindValue(5, $produto->getImagem());
        $stmt->bindValue(6, $produto->getTipoProduto());
        try{
            $stmt->execute();
        }catch (PDOException $e){
            echo "Erro ao cadastrar o produto: ".$e->getMessage();  
        }
    }

    public static function selectAll(){
        $conexao = Conexao::conectar();
        $query = "SELECT * FROM tbProduto INNER JOIN tbCategoria on tbProduto.idCategoria = tbCategoria.idCategoria
        ORDER BY idProduto ASC";
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public static function selectById($id){
        $conexao = Conexao::conectar();
        $query = "SELECT * FROM tbProduto WHERE idProduto = ?";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public static function selectAllById($id){
        $conexao = Conexao::conectar();
        $query = "SELECT tbProduto.*, tbCategoria.nomeCategoria FROM tbProduto  INNER JOIN tbCategoria on tbProduto.idCategoria = tbCategoria.idCategoria WHERE tbProduto.idProduto = ? ";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public static function delete($id){
        $conexao = Conexao::conectar();
        $query = "DELETE FROM tbProduto WHERE idProduto = ?";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);
        return  $stmt->execute();
    }
    public static function update($id, $produto ){
        $conexao = Conexao::conectar();
        $query = "UPDATE tbProduto SET 
        nomeProduto = ?, 
        descProduto= ?, 
        precoProduto= ?,
        qntdProduto= ?, 
        imagemProduto = ?, 
        idCategoria= ? 
        WHERE idProduto = ?";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $produto->getNome());
        $stmt->bindValue(2, $produto->getDesc());
        $stmt->bindValue(3, $produto->getPreco());
        $stmt->bindValue(4, $produto->getQntd());
        $stmt->bindValue(5, $produto->getImagem());
        $stmt->bindValue(6, $produto->getTipoProduto());
        $stmt->bindValue(7, $id);
        return $stmt->execute();
    }
}
?>

