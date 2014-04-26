<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace users;

/**
 * Description of usuario
 *
 * @author abyx
 */
class usuario {
    protected $username;
    protected $password;
    protected $birthdate;
    protected $curp;
    protected $name;
    protected $apellidpaterno;
    protected $apellidiomaterno;
    public function createuser($user,$pass,$birdat,$cur,$nombre,$app,$apm){
        $username=$user;
        $password->$pass;
        $birthdate->$birdat;
        $curp->$cur;
        $name->$nombre;
        $apellidpaterno->$app;
        $apellidiomaterno->$apm;
        return($username.",".$password.",". $birthdate .",". $curp .",". $name .",". $apellidpaterno .",". $apellidiomaterno );
    }
}
