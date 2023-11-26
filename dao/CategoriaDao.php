<?php
    require_once __DIR__.'../../model/Conexao.php';
    class CategoriaDao{
        public static function cadastrarCategoria($categoria){
            var_dump($categoria);

            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbCategoria (nomeCategoria, descCategoria ) VALUES (?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $categoria->getNomeCategoria());
            $stmt->bindValue(2, $categoria->getDescCategoria());
            
            try{
            $stmt->execute();
            }catch (PDOException $e){
                echo 'erro na inseção do usuário: '. $e->getMessage();
            }
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbCategoria";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbCategoria WHERE idCategoria = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbCategoria WHERE idCategoria = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
        }
        public static function update($id, $categoria ){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbCategoria SET 
            nomeCategoria = ?, 
            descCategoria = ? 
            WHERE idCategoria = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $categoria->getNomeCategoria() ?? '');
            $stmt->bindValue(2, $categoria->getDescCategoria() ?? '');
            $stmt->bindValue(3, $id); 
            return $stmt->execute();
        }
        
    }
?>