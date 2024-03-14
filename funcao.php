<?php

function msg($nome){
    echo "Bem vindo".$nome;
}
function verificarusuario ($usuario){
if($usuario =="admin"){
    contentadmin();
    return 1;
} else {
    contenuser();
    return 0;
}
}
function contentadmin(){
    include "menu_admin.php";
    include "content_admin.php";
}
function contenuser(){
    include "menu_user.php";
}



