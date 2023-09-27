<?php
    session_start();
    
    require("model/Chat.php");
    require("model/Conexion.php");
    require("model/Pregunta.php");
    require("model/Categoria.php");
    require("model/Subcategoria.php");
    require("model/Usuario.php");

    if(isset($_GET["cerrarSession"])){
        session_destroy();
        header("Location: index.php");
    }
    
    if(!isset($_SESSION["nombre"])){
        if(isset($_POST["username"]) && isset($_POST["pswrd"])){
            $claseUsuario = new Usuario();
            if($claseUsuario->logear($_POST["username"], $_POST["pswrd"])){
                $_SESSION["nombre"] = $_POST["username"];
                

                if($claseUsuario->getRol($_SESSION["nombre"])=="ADMIN"){
                    $_SESSION["rol"] = "ADMIN";

                    header("Location: index.php");
                }else{
                    $_SESSION["rol"] = "USUARIO";
                    header("Location: index.php");
                }
            }else{
                require("view/login.html");
            }
        }else{
            require("view/login.html");
        }
    }else{

    
    
    @$_SESSION["subs"] = $_POST["sub"];  
    @$_SESSION["m"] = $_POST["e"];

    //USUARIO
    $usuario = new Usuario();
    $realnameperson = $usuario->getnombrereal($_SESSION["nombre"]);
    $mostrarUsuario = $usuario->mostrarUsuario();
    $mostrarUsuarioNoRepeat = $usuario->mostrarNoRepetidosRoles();

    //chat
    $chatear = new Chat();
    $chating = $chatear->mostrarMandados();
    $verTotalMensajes = $chatear->cuentaMensajes();

    //pregunta

    $qtn = new Pregunta();
    $qtns = $qtn->mostrarPregunta();
    $qTns = $qtn->mostrarNoRepetidos();
    

    //subcategoria
    $subgr = new Subcategoria();
    $subCgry = $subgr->mostrarSubCategoria();
    $subgrS = $subgr->ordenarSub();
    $norepeatSub = $subgr->mostrarNorepetidasSubs();

    //categoria

    $cate = new Categoria();
    $mostrarCate = $cate->mostrarCategoria();

    //array
    
    

    if(isset($_POST["wp"])){
        $subCatee = new Subcategoria();
        $wpshow = $subCatee->mostrarLaSubCategoria($_POST["idwp"]);
    }

    if(isset($_POST["anadirCategoriaBD"])){
        $cate->anadirCategoria($_POST["agrCate"]);
        header("Location: index.php?=addcate");
    }




    if(isset($_POST["anadirSubCategoriaBD"])){
        $subgr->anadirSubCtrg($_POST["selectCate"], $_POST["agrSubCate"]);
        header("Location: index.php?=addSub");
    }

    //modificar imagen de pregunta
    

    if(isset($_POST["btnModPreg"])){

        if(!empty($_FILES["modImgPreg1s"]["size"] && $_FILES["modImgPreg2s"]["size"])){
        
            $dateImgOne = date("Y_m_d_H_i_s");
            $nombreModImg1 = $_FILES["modImgPreg1s"]["name"];
            
            $tipoImgOne = $_FILES["modImgPreg1s"]["type"];
            $tipoFormatoImgOne = strtolower(pathinfo($nombreModImg1, PATHINFO_EXTENSION));
            $tamImgOne = $_FILES["modImgPreg1s"]["size"];
            $name_FileOne = pathinfo($nombreModImg1, PATHINFO_FILENAME);
            $modNombreImgOne = $name_FileOne.$dateImgOne.".".$tipoFormatoImgOne;

            $dateImgTwo = date("Y_m_d_H_i_s");
            $nombreModImg2 = $_FILES["modImgPreg2s"]["name"];
            
            $tipoImgTwo = $_FILES["modImgPreg2s"]["type"];
            $tipoFormatoImgTwo = strtolower(pathinfo($nombreModImg2, PATHINFO_EXTENSION));
            $tamImgTwo = $_FILES["modImgPreg2s"]["size"];
            $name_FileTwo = pathinfo($nombreModImg2, PATHINFO_FILENAME);
            $modNombreImgTwo = $name_FileTwo.$dateImgTwo.".".$tipoFormatoImgTwo;
            

            if($tamImgOne <= 10000000 && $tamImgTwo <= 10000000){
                if($tipoImgOne=="image/jpg" || $tipoImgOne =="image/jpeg" || $tipoImgOne == "image/png" || $tipoImgOne == "image/svg"){
                    $carpetaDestino = $_SERVER["DOCUMENT_ROOT"].'/trabajos/upload/imagenesPregunta/'.$nombreModImg1;
                    move_uploaded_file($_FILES["modImgPreg1s"]["tmp_name"], $carpetaDestino);
                    rename($_SERVER["DOCUMENT_ROOT"].'/trabajos/upload/imagenesPregunta/'.$nombreModImg1 , $_SERVER["DOCUMENT_ROOT"].'/trabajos/upload/imagenesPregunta/'.$modNombreImgOne);
                }
    
                if($tipoImgTwo == "image/jpg" || $tipoImgTwo =="image/jpeg" || $tipoImgTwo == "image/png" || $tipoImgTwo == "image/svg"){
                    $carpetaDestino = $_SERVER["DOCUMENT_ROOT"].'/trabajos/upload/imagenesPregunta/'.$nombreModImg2;
                    move_uploaded_file($_FILES["modImgPreg2s"]["tmp_name"], $carpetaDestino);
                    rename($_SERVER["DOCUMENT_ROOT"].'/trabajos/upload/imagenesPregunta/'.$nombreModImg2 , $_SERVER["DOCUMENT_ROOT"].'/trabajos/upload/imagenesPregunta/'.$modNombreImgTwo);
                }

                $qtn->modificarPre($_POST["idModPregs"], $_POST["chooseModSubofPreg"], $_POST["modNamePreg"], $_POST["modRespPreg"], $modNombreImgOne, $modNombreImgTwo);
                header("Location: index.php?=tableQuestion");
            }
        }

        if(empty($_FILES["modImgPreg1s"]["size"] && $_FILES["modImgPreg2s"]["size"])){
            $qtn->modificarPre($_POST["idModPregs"], $_POST["chooseModSubofPreg"], $_POST["modNamePreg"], $_POST["modRespPreg"], $_POST["img1Pregmod"], $_POST["img2Pregmod"]);
            header("Location: index.php?=tableQuestion");
        }

        if(empty($_FILES["modImgPreg1s"]["size"]) && !empty($_FILES["modImgPreg2s"]["size"])){
            $dateImgTwo = date("Y_m_d_H_i_s");
            $nombreModImg2 = $_FILES["modImgPreg2s"]["name"];
            
            $tipoImgTwo = $_FILES["modImgPreg2s"]["type"];
            $tipoFormatoImgTwo = strtolower(pathinfo($nombreModImg2, PATHINFO_EXTENSION));
            $tamImgTwo = $_FILES["modImgPreg2s"]["size"];
            $name_FileTwo = pathinfo($nombreModImg2, PATHINFO_FILENAME);
            $modNombreImgTwo = $name_FileTwo.$dateImgTwo.".".$tipoFormatoImgTwo;

            if($tamImgTwo <= 10000000){
                if($tipoImgTwo == "image/jpg" || $tipoImgTwo =="image/jpeg" || $tipoImgTwo == "image/png" || $tipoImgTwo == "image/svg"){
                    $carpetaDestino = $_SERVER["DOCUMENT_ROOT"].'/trabajos/upload/imagenesPregunta/'.$nombreModImg2;
                    move_uploaded_file($_FILES["modImgPreg2s"]["tmp_name"], $carpetaDestino);
                    rename($_SERVER["DOCUMENT_ROOT"].'/trabajos/upload/imagenesPregunta/'.$nombreModImg2 , $_SERVER["DOCUMENT_ROOT"].'/trabajos/upload/imagenesPregunta/'.$modNombreImgTwo);
                }
            }

            $qtn->modificarPre($_POST["idModPregs"], $_POST["chooseModSubofPreg"], $_POST["modNamePreg"], $_POST["modRespPreg"], $_POST["img1Pregmod"], $modNombreImgTwo);
            header("Location: index.php?=tableQuestion");

        }

        if(!empty($_FILES["modImgPreg1s"]["size"]) && empty($_FILES["modImgPreg2s"]["size"])){

            
            $dateImgOne = date("Y_m_d_H_i_s");
            $nombreModImg1 = $_FILES["modImgPreg1s"]["name"];
            
            $tipoImgOne = $_FILES["modImgPreg1s"]["type"];
            $tipoFormatoImgOne = strtolower(pathinfo($nombreModImg1, PATHINFO_EXTENSION));
            $tamImgOne = $_FILES["modImgPreg1s"]["size"];
            $name_FileOne = pathinfo($nombreModImg1, PATHINFO_FILENAME);
            $modNombreImgOne = $name_FileOne.$dateImgOne.".".$tipoFormatoImgOne;

            if($tamImgOne <= 10000000){
                if($tipoImgOne=="image/jpg" || $tipoImgOne =="image/jpeg" || $tipoImgOne == "image/png" || $tipoImgOne == "image/svg"){
                    $carpetaDestino = $_SERVER["DOCUMENT_ROOT"].'/trabajos/upload/imagenesPregunta/'.$nombreModImg1;
                    move_uploaded_file($_FILES["modImgPreg1s"]["tmp_name"], $carpetaDestino);
                    rename($_SERVER["DOCUMENT_ROOT"].'/trabajos/upload/imagenesPregunta/'.$nombreModImg1 , $_SERVER["DOCUMENT_ROOT"].'/trabajos/upload/imagenesPregunta/'.$modNombreImgOne);
                }
            }

            $qtn->modificarPre($_POST["idModPregs"], $_POST["chooseModSubofPreg"], $_POST["modNamePreg"], $_POST["modRespPreg"], $modNombreImgOne, $_POST["img2Pregmod"]);
            header("Location: index.php?=tableQuestion");
        }
}

    //---------------------------------------------


    if(isset($_POST["anadirPreguntaBD"])){
        $datePreg1 = date("Y_m_d_H_i_s");
        $nombreImg1 = $_FILES["imagenPreg1"]["name"];
        
        $tipoImg1 = $_FILES["imagenPreg1"]["type"];
        $tipoFormatoImg1 = strtolower(pathinfo($nombreImg1, PATHINFO_EXTENSION));
        $tamImg = $_FILES["imagenPreg1"]["size"];
        $name_File= pathinfo($nombreImg1, PATHINFO_FILENAME); //x.png
        $modNombreImg1 = $name_File.$datePreg1.".".$tipoFormatoImg1;

        $datePreg2 = date("Y_m_d_H_i_s");
        $nombreImg2 = $_FILES["imagenPreg2"]["name"];
       
        $tipoImg2 = $_FILES["imagenPreg2"]["type"];
        $tipoFormatoImg2 = strtolower(pathinfo($nombreImg2, PATHINFO_EXTENSION));
        $tamImg2 = $_FILES["imagenPreg2"]["size"];
        $name_File2= pathinfo($nombreImg2, PATHINFO_FILENAME); //x.png
        $modNombreImg2 = $name_File2.$datePreg2.".".$tipoFormatoImg2;

        if($tamImg1 <= 10000000 && $tamImg2 <= 10000000){
            if($tipoImg1=="image/jpg" || $tipoImg1 =="image/jpeg" || $tipoImg1 == "image/png" || $tipoImg1 == "image/svg"){
                $carpetaDestino = $_SERVER["DOCUMENT_ROOT"].'/trabajos/upload/imagenesPregunta/'.$nombreImg1;
                move_uploaded_file($_FILES["imagenPreg1"]["tmp_name"], $carpetaDestino);
                rename($_SERVER["DOCUMENT_ROOT"].'/trabajos/upload/imagenesPregunta/'.$nombreImg1 , $_SERVER["DOCUMENT_ROOT"].'/trabajos/upload/imagenesPregunta/'.$modNombreImg1);
            }

            if($tipoImg2=="image/jpg" || $tipoImg2 =="image/jpeg" || $tipoImg2 == "image/png" || $tipoImg2 == "image/svg"){
                $carpetaDestino = $_SERVER["DOCUMENT_ROOT"].'/trabajos/upload/imagenesPregunta/'.$nombreImg2;
                move_uploaded_file($_FILES["imagenPreg2"]["tmp_name"], $carpetaDestino);
                rename($_SERVER["DOCUMENT_ROOT"].'/trabajos/upload/imagenesPregunta/'.$nombreImg2 , $_SERVER["DOCUMENT_ROOT"].'/trabajos/upload/imagenesPregunta/'.$modNombreImg2);
            }
        }
        
        $date = date("d/m/Y");
        $qtn->anadirPregunta($_POST["elegirCateParaAddPregunta2"], $_POST["elegirSubParaAddPregunta"], $date, $_POST["addQuestionComplete"], $modNombreImg1, $modNombreImg2, $_POST["addAnswerComplete"]);
        header("Location: index.php?=addQuesion");
    }
    
    if(isset($_POST["addUsuarioBD"])){

        $usuario->anadirUsuario($_POST["nameReal"], $_POST["nombreUsuario"], $_POST["contrasenaUsuario"], $_POST["rolUsuario"]);
        header("Location: index.php?=addUser");
    }
    
    if(isset($_POST["btnModCate"])){
        $cate->modificarCategoría($_POST["idModCate"], $_POST["modNameCate"]);
        $subgr->modificarLaCateDeSubCategoria($_POST["nombreModOriginal"], $_POST["modNameCate"]);
        $qtn->modificarLaCatedePregunta($_POST["nombreModOriginal"], $_POST["modNameCate"]);
        header("Location: index.php?=modCate");
    }
    
    if(isset($_POST["btnModSubCate"])){
        $subgr->modificarSubCategoria($_POST["idModSubCate"], $_POST["chooseModSub"], $_POST["modNameSubCate"]);
        $qtn->modificarLaSubDePregunta($_POST["nombreModSubOriginal"], $_POST["modNameSubCate"]);
        header("Location: index.php?=modSub");
    }


    if(isset($_POST["btnModUsuario"])){
        $pass_encriptada = password_hash($_POST["contrasenaMod"], PASSWORD_BCRYPT);
        
        if(empty($_POST["contrasenaMod"])){
            $usuario->modificarUsuario($_POST["idModUsuario"], $_POST["nombreRealMod"], $_POST["nombreUsuarioMod"], $_POST["contrasenaMod"], $_POST["escogerRol"], $_POST["by"]);
        }
        if(!empty($_POST["contrasenaMod"])){
            $usuario->modificarUsuario($_POST["idModUsuario"], $_POST["nombreRealMod"], $_POST["nombreUsuarioMod"], $_POST["contrasenaMod"], $_POST["escogerRol"], $pass_encriptada);
        }
        
        header("Location: index.php?=tableUser");
    }

    if(isset($_POST["btnBorrarCategoria"])){
        $cate->eliminarCate($_POST["idBorrarCate"]);
        $subgr->eliminarSubCategoriaConCategoria($_POST["softBorrarCate"]);
        $qtn->eliminarPreguntaTotal($_POST["softBorrarCate"]);
        header("Location: index.php");
    }

    if(isset($_POST["btnBorrarSubCate"])){
        $subgr->eliminarSubCate($_POST["idBorrarSubcate"]);
        $qtn->eliminarPreguntaSubTotal($_POST["softBorrarSubcate"]);
        header("Location: index.php");
    }

    if(isset($_POST["btnBorrarPregunta"])){
        $qtn->eliminarPregunta($_POST["idBorrarPregunta"]);
        header("Location: index.php?=tableQuestion");
    }

    if(isset($_POST["btnBorrarUsuario"])){
        $usuario->eliminarUsuario($_POST["idBorrarUsuario"]);
        header("Location: index.php?=tableUser");
    }

    if(isset($_POST["btnsendinforme"])){
        
        $chater= $chatear->anadirMandados($realnameperson, $_POST["informefecha"], "null", $_POST["informesoftware"], $_POST["informepregunta"], $_POST["informerespuesta"], $_POST["informeQuejas"]);
        header("Location: index.php");
    }

    if(isset($_POST["btninformeDeAddnuevaQuestionPregunta"])){
        $chater = $chatear->anadirMandados($realnameperson, $_POST["informeDeAddnuevaQuestionFecha"], $_POST["categoriaparaintentaraddquestion"], $_POST["subcategoriaparaintentaraddquestion"], $_POST["informeDeAddnuevaQuestionPregunta"], "null",  $_POST
    ["motivoparaintentar"]);
        header("Location: index.php");
    }

    if(isset($_POST["btnBorrarInforme"])){
        $deletechat = $chatear->borrarMensaje($_POST["idBorrarinforme"]);
        header("Location: index.php?=mensajeria");
    }



    if($_SESSION["rol"] == "ADMIN"){
        require("view/vista_admin.php");
    }else if($_SESSION["rol"] == "USUARIO"){
        require("view/vista_usuario.php");
    }

    
    
}

?>