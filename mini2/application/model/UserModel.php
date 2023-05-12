<?php

namespace application\model;

use Exception;

class UserModel extends Model
{
    public function getUser($arrUserInfo)
    {
        $sql = 
        " select "
        ." * "
        ." From "
        ." user_info "
        ." where "
        ." user_id = :id "
        ." and "
        ." user_pw = :pw ";

        $prepare = [
            ":id" => $arrUserInfo["id"]
            ,":pw" => $arrUserInfo["pw"]
        ];
        try{
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt->fetchAll();
        }
        catch(Exception $e){
            echo "UserModel -> getUser Error : ". $e->getMessage();
            exit();
        } finally {
            $this->closeConn();
        }

        return $result;
    }

    
}
?>