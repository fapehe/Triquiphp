<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tablero
 *
 * @author Estudiantes
 */
class Tablero {
    //put your code here
     var $tablero= array(
         0 => array(0,0,0),
         0 => array(0,0,0),
         0 => array(0,0,0),
     ); 
     
     function ficha_jugador($bandera){
        
         if ($bandera==0)
         {
             return 'X';
         }
         else 
         {
            return'O';
         }
     }
}
