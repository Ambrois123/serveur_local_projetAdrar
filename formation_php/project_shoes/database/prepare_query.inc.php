<?php

// function insert_shoe($mysqli,$name,$price,&$error_msg)
// {
    
//     try{
//         $stmt = $mysqli->prepare("INSERT INTO chaussures('id', 'nom', 'prix', Created_at)
//         VALUES(NULL, ?, ?, current_timestamp())");
//         $stmt->bind_param("sd", $name, $price);
//         $stmt->execute();
//         $stmt->close();
//     }catch(Exception $err){
//         $error_msg = $err->getMessage();

//     }
    
// }

function insert_shoe(&$mysqli,$name,$price,&$error_msg){
    try{

        if($mysqli instanceof mysqli == false){
        
            throw new Exception("Mysqli est pas de la classe mysqli !", 1);
        }
        if(!is_numeric($price)){
            $error_msg = "Le prix doit être un nombre";
            return false;
        }
        if(is_numeric($name)){
            $error_msg = "Le nom doit être un texte.";
            return false;
        }
    
        $prep_query = $mysqli->prepare("INSERT INTO `chaussures` (`id`, `nom`, `prix`, `created_at`) VALUES (NULL, ?, ?, current_timestamp()) ");
        if($prep_query == false){
            $error_msg = "Database erreur.";
            return false;
        }
    
        $res = $prep_query->bind_param("sd",$name,$price);
        if($res == false){
            $error_msg = "Database erreur";
            return false;
        }
        $res = $prep_query->execute();
        if($res == false){
            $error_msg = "Database erreur";
            return false;
        }
        return $res;
    }catch(Exception $e){
        $e->getMessage();
    }
    
}

function delete_shoe(&$mysqli,$id,&$error_msg){
    try{
        if($mysqli instanceof mysqli == false){
            throw new Exception("Mysqli est pas de la classe mysqli !", 1);
        }
        if(is_integer($id) && $id > 0){
            $error_msg = "L'identifiant doit être un nombre entier positif";
            return false;
        }
        $prep_query = $mysqli->prepare("DELETE FROM `chaussures` WHERE `chaussures`.`id` = ?;");
        if($prep_query == false){
            $error_msg = "Database erreur.";
            return false;
        }
        $res = $prep_query->bind_param("i",$id);
        if($res == false){
            $error_msg = "Database erreur";
            return false;
        }
        $res = $prep_query->execute();
        if($res == false){
            $error_msg = "Database erreur";
            return false;
        }
        return $res;
    }
    catch(Exception $err){
        $err->getMessage();
    }
    

}

function edit_shoe(&$mysqli,$id,$name,$price,&$error_msg){
    
}

// function delete_shoe(&$mysqli,$id,&$error_msg){
//     try{
//         if($mysqli instanceof mysqli == false){
        
//             throw new Exception("Mysqli est pas de la classe mysqli !", 1);
//         }
//         if(!is_integer($id) && $id > 0){
//             $error_msg = "L'identifiant doit être un nombre entier positif";
//             return false;
//         }
        
//         $prep_query = $mysqli->prepare("DELETE FROM `chaussures` WHERE `chaussures`.`id` = ?;");
//     if($prep_query == false){
//         $error_msg = "Database erreur.";
//         return false;
//     }
//         $res = $prep_query->bind_param("i", $id);
//             if($res == false){
//                 $error_msg = "Erreur de Database";
//                 return false;
//             }
//         $res = $prep_query->execute();
//         if($res == false){
//             $error_msg = "Erreur Database";
//             return false;
//         }
//         return $res;            
        
//     }catch(Exception $err){
//         $err->getMessage();
//     }

// }