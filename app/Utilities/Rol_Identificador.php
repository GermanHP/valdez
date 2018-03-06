<?php

namespace App\Utilities;

class Rol_Identificador{

    public function Rolsistema($user){
        $RolID = 0;
        if($this->isAdmin($user)){
            $RolID=1;
        }else if($this->isGestor($user)){
            $RolID=2;
        }else if($this->isAsesor($user)) {
            $RolID =3;
        }else if($this->isCliente($user)){
            $RolID = 4;
        }
        return $RolID;
    }

    public function isAdmin($user){
        $encontrado = false;
        foreach ($user->rolessistemausuarios as $roles){
            if($roles->idRolSistema==1){
                $encontrado= true;
            }
        }
        return $encontrado;
    }



    public function isAsesor($user){
        $encontrado = false;
        foreach ($user->rolessistemausuario as $roles){
            if ($roles->idRolSistema==3){
                $encontrado= true;
            }
        }
        return $encontrado;
    }

    public function isCliente($user){
        $encontrado = false;
        foreach ($user->rolessistemausuario as $roles){
            if ($roles->idRolSistema==4){
                $encontrado= true;
            }
        }
        return $encontrado;
    }
}