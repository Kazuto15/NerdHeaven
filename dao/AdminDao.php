<?php
    require_once __DIR__.'../../model/Conexao.php';
    class AdminDao{
        public static function insert($admin){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbAdmin (nomeUser, sobrenomeUser, cpfUser, nascUser, emailUser, senhaUser, tokenUser, imagemUser ) VALUES (?,?,?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $admin->getNome());
            $stmt->bindValue(2, $admin->getSobrenome());
            $stmt->bindValue(3, $admin->getCpf());
            $stmt->bindValue(4, $admin->getNasc());
            $stmt->bindValue(5, $admin->getEmail());
            $stmt->bindValue(6, $admin->getPassword());
            $stmt->bindValue(7, $admin->getImagem());
            $stmt->bindValue(8, $admin->getToken());
            
            try{
            $stmt->execute();
            }catch (PDOException $e){
                echo 'erro na inseção do usaário: '. $e->getMessage();
            }
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbAdmin";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbAdmin WHERE idAdmin = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbAdmin WHERE idAdmin = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
        }
        public static function update($id, $admin ){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbAdmin SET 
            nomeAdmin = ?, 
            sobrenomeAdmin = ?, 
            cpfAdmin = ?,
            nascAdmin = ?, 
            emailAdmin = ?, 
            senhaAdmin = ?, 
            imagemAdmin = ?, 
            tokenAdmin = ? 
            WHERE idAdmin = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $admin->getNome());
            $stmt->bindValue(2, $admin->getSobrenome());
            $stmt->bindValue(3, $admin->getCpf());
            $stmt->bindValue(4, $admin->getNasc());
            $stmt->bindValue(5, $admin->getEmail());
            $stmt->bindValue(6, $admin->getPassword());
            $stmt->bindValue(7, $admin->getImagem());
            $stmt->bindValue(8, $admin->getToken());
            $stmt->bindValue(9, $id); // Certifique-se de que o ID seja o terceiro valor
            return $stmt->execute();
        }
        public static function checkCredentials($email, $senha){
            /* $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbUser WHERE emailUser = ? and passwordUser = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC); */
        }

    }
?>