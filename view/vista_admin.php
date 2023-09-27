<body>

<nav class="headeeer">
    <div id="logopag"><img src="https://dragon.grupofuturo.es/img/logo_2.png" alt=""></div>
    
    <div>
        <a href="index.php?cerrarSession=true" id="btncerrarsesionadmin">Cerrar Sesión <i class="bi bi-box-arrow-left"></i></a>
    </div>

</nav>

<!-- cuerpo-->
<div id="cuerpoMain">

    <div id="cuerpoAme">
        
        
        <div id="cuerpoAmeDos">
            <nav>
                <div id="mostrarAmes">
                    <span class="nombrecuenta"><i class="bi bi-person-circle"></i> <?php echo $realnameperson; ?></span>
                    <span id="mostrar2" name="boton2" value="MODIFICAR" class="tiCa"><i class="bi bi-house-fill"></i> INICIO</span>
                    <span id="mostrar1" name="boton2"  value="MODIFICAR" class="tiCa"><i class="bi bi-pc-display-horizontal"> CATEGORÍA</i> <i id="up1" class="bi bi-caret-up-fill"></i><i id="updown1" class="bi bi-caret-down-fill"></i></span>
                        <span id="down1" class="down">Categorías</span>
                            <div class="lasCate" id="lasCate">
                                <?php foreach($mostrarCate as $eria): ?>
                                <form action="index.php" method ="post">
                                <span id="nombreCate"><p><?php echo $eria->NOMBRE_SOFT;?></p>
                                    <label class="iconi">
                                        <i class="bi bi-sliders" data-id="<?php echo $eria->ID;?>" data-nombre="<?php echo $eria->NOMBRE_SOFT;?>"></i>
                                    </label>
                                    <label class="iconi">
                                        <i class="bi bi-x-circle" data-idcatgrr= "<?php echo $eria->ID;?>" data-catgrr ="<?php echo $eria->NOMBRE_SOFT;?>"></i>
                                    </label>
                                    <label class="iconi">
                                        <i class="bi bi-caret-right-fill" id="ic"></i>
                                        <input type="submit" id= "wp" name="wp" style="display:none;">
                                        <input type="hidden" name="idwp" value="<?php echo $eria->NOMBRE_SOFT;?>">
                                    </label>
                                </span>
                                </form>
                                <?php endforeach; ?>
                            </div>
                    <span id="down2" class="down">Añadir</span>
                            <div id="lasAddHide">
                                <div id="lasAdd">
                                    <span id="irAddCate">Añadir Categoría</span>
                                    <span id="irAddSubCate">Añadir Subcategoría</span>
                                </div>
                            </div>
                        <span id="mostrar3" name="boton2" value="MODIFICAR" class="tiCa"><i class="bi bi-question-circle-fill"> PREGUNTAS</i><i id="up3" class="bi bi-caret-up-fill"></i><i id="updown3" class="bi bi-caret-down-fill"></i></span>
                        <div id="lasAddHide2">
                            <div id="lasAdd2">
                                <span class="downv" id="irAddListQ">Lista Preguntas</span>
                                <span class="downv" id="irAddQuestion">Añadir Pregunta</span>
                            </div>
                        </div>
                    <span id="mostrar4" name="boton2" value="MODIFICAR" class="tiCa"><i class="bi bi-person-gear"> USUARIOS</i><i id="up4" class="bi bi-caret-up-fill"></i><i id="updown4" class="bi bi-caret-down-fill"></i></i></span>
                        <div id="lasAddHide3">
                            <div id="lasAdd3">
                                <span class="downv" id="irListWorkers">Lista Usuarios</span>
                                <span class="downv" id="irCreateUser">Crear Usuario</span>
                            </div>
                        </div>
                    <span class="tiCa" id="bajarMensajes"><i class="bi bi-chat-dots-fill"></i> INFORMES <sup id="countMessages">(<?php echo $verTotalMensajes; ?>)</sup></span>
                        
                    
                </div>
            </nav> 
            <div id="todogridventanas">
            
                <!--lista subsoftware-->
                <div id="yasta">
                    <div id="yasta2">
                    <div>
                        <input type="text" name="searchS" id="searchS" class="form-control pull-left" style="width:20%" placeholder="Buscar Software...">
                        </div>
                        <?php foreach($wpshow as $h): ?>
                            <div class="item">
                            <span id="subSoft" class="subSoft"><?php echo $h->SUB_SOFT; ?>
                                <label class="iconi">
                                    <i class="bi bi-gear-wide setting" data-idsubmod="<?php echo $h->ID; ?>" data-nombremodsub="<?php echo $h->SUB_SOFT; ?>" data-cate="<?php echo $h->CATE;?>"></i>
                                </label>
                                <label class="iconi">
                                    <i class="bi bi-x-square eraser" data-idsubctgrr="<?php echo $h->ID; ?>" data-subctgrr="<?php echo $h->SUB_SOFT; ?>"></i>
                                </label>
                            </span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <div id="addCate">
                    
                    <div id="tituloaddCate" href="?=addcate">
                        <h3>AÑADIR CATEGORÍA</h3>
                    </div>
                    <form action="index.php" method ="post">
                        <div id="addCatecuerpo">
                            <div>
                                <label for="">Categoría: </label>
                                <input type="text" id="agrCate" name="agrCate" required>
                            </div><br>
                            <div>
                                <input type="submit" class="disenobotonfuncion" name="anadirCategoriaBD" id="anadirCategoriaBD" value="Añadir">
                            </div>
                        </div>
                    </form>
                </div>
                <div id="addSubCategr" href="?=addSub">
                    <div id="tituloaddSubCate"><h3>AÑADIR SUBCATEGORÍA</h3></div>
                    <form action="index.php" method ="post">
                        <div id="addSubCategrcuerpo">
                            <div>
                                <label for="">Categoría: </label>
                                <select name="selectCate" id="selectCate" class="selectpicker" data-show-subtext="true" data-live-search="true">
                                    <option value="" disabled>Selecciona...</option>
                                    <?php foreach($mostrarCate as $sc): ?>
                                    <option value="<?php echo $sc->NOMBRE_SOFT; ?>"><?php echo $sc->NOMBRE_SOFT; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div>
                                <label for="">Subcategoría: </label>
                                <input type="text" id="agrSubCate" name="agrSubCate" required>
                            </div>
                        </div>
                        <div>
                                <label for="">
                                    <input type="submit" class="disenobotonfuncion" name="anadirSubCategoriaBD" id="anadirSubCategoriaBD" value="Añadir">
                                </label>
                        </div>
                    </form>
                </div>
                <div id="listQ" href="?=tableQuestion">
                    <h3>LISTA PREGUNTAS</h3>
                    <div class="form-group">
                        <input type="text" class="form-control pull-left" style="width:20%" id="search" value="" placeholder="Buscar..">
                    </div>
                    <div>
                        <table class="table-bordered table pull-right" id="mytable" cellspacing="0"
                        style="font-size:13px; text-align:center;">
                            <thead>
                                <tr>
                                    <th>SOFTWARE</th>
                                    <th>FECHA</th>
                                    <th>PREGUNTA</th>
                                    <th>RESPUESTA</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($qtns as $quest): ?>
                                    <tr class="item" style="width:100%;">
                                        <td style="width:5%" class="preg col"><span class="preg"><?php echo $quest->SOFT;?></span></td>
                                        <td style="width:10%" class="preg col"><span class="preg"><?php echo $quest->FECHA;?></span></td>
                                        <td style="width:15%" class="preg col"><span class="preg"><?php echo $quest->PREGUNTA;?></span></td>
                                        <td style="width:5%" class="preg col"><div class="pregsr"><?php echo $quest->RESPUESTA; ?></div></td>
                                        <td style="width:5%" class="col"><div class="col2"><i class="bi bi-trash3-fill" data-idborrarpregunta="<?php echo $quest->ID; ?>"></i><i class="bi bi-gear" data-idpreguntas="<?php echo $quest->ID;?>" data-subpregunta="<?php echo $quest->SOFT;?>" data-nombrepregunta="<?php echo $quest->PREGUNTA;?>" data-nombrerespuesta="<?php echo $quest->RESPUESTA;?>" data-imagenuno="<?php echo $quest->IMAGEN1;?>" data-imagendos="<?php echo $quest->IMAGEN2;?>"></i></div></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="addQuestion" href="?=addQuesion">
                    <div id="tituloaddq">
                        <h3>Añadir Pregunta</h3>   
                    </div>
                    <form action="index.php" method="post" enctype="multipart/form-data" value="">
                            <div id="addQuestionG1">
                                <div class="adqgrid1">
                                    <div class="childadqgrid1">
                                        <label for="" class="form-label">Pregunta:  </label>
                                        <input type="text" id="addQuestionComplete" class="form-control" name="addQuestionComplete" value="" required>
                                    </div>
                                    <div class="childadqgrid2">
                                        <label for="" class="form-label">Respuesta: </label>
                                        <textarea class="form-control" rows="3" name="addAnswerComplete" id="addAnswerComplete" cols="10" rows="10" required></textarea>
                                    </div>
                                    <div class="childadqgrid3">
                                    <label for="">IMAGEN 1</label>
                                        <input type="file" name="imagenPreg1" id="imagenPreg1" value="">
                                    </div>
                                    <div class="childadqgrid4">
                                        <label for="">IMAGEN 2</label>
                                        <input type="file" name="imagenPreg2" id="imagenPreg2" value="">
                                    </div><br>
                                </div>
                                <div class="adqgrid2">
                                    <div>
                                        <input type="hidden" id="elegirCateParaAddPregunta2" name="elegirCateParaAddPregunta2" value="">
                                        <input type="hidden" id="elegirSubParaAddPregunta" name="elegirSubParaAddPregunta" value="">
                                        
                                        <span class="abrirsubcateparaadd">SUBCATEGORÍA</span>&nbsp; &nbsp; <span class="yaelegidosubcate">ELIGE...</span><br><br>
                                        <div id="subcateelegidaparaadd2">
                                            <div id="subcateelegidaparaadd">
                                                    <?php foreach($subgrS as $kg): ?>
                                                        <div class="please2">
                                                            <div class="please" data-cateaddpregunta="<?php echo $kg->CATE;?>" data-subcateaddpregunta="<?php echo $kg->SUB_SOFT;?>">
                                                            <input type="hidden" id="elegirCateParaAddPregunta" value="<?php echo $kg->CATE; ?>" required>
                                                            <span><?php echo $kg->SUB_SOFT; ?></span>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="adqgrid3">
                                    <input type="submit" class="disenobotonfuncion" id="anadirPreguntaBD" name="anadirPreguntaBD" value="AÑADIR PREGUNTA">
                                </div>
                            </div> 
                    </form>   
                </div>
                <div id="listaWorkers" href="?=tableUser">
                <h3>LISTA DE USUARIOS</h3>
                    <div class="form-group">
                        <input type="text" class="form-control pull-left" style="width:20%" id="searchU" placeholder="Buscar...">
                    </div>
                    <div>
                        <table class="table-bordered table pull-right" id="mytablee" cellspacing="0"
                        style="font-size:13px; text-align:center;">
                            <thead>
                                <tr>
                                    <th>#CODIGO</th>
                                    <th>NOMBRE</th>
                                    <th>NOMBRE USUARIO</th>
                                    <th>ROL</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($mostrarUsuario as $usershow): ?>
                                    <tr class="item">
                                        <td class="preg col"><span class="preg">#<?php echo $usershow->ID; ?></span></td>
                                        <td class="preg col"><span class="preg"><?php echo $usershow->NOMBRE; ?></span></td>
                                        <td class="preg col"><span class="preg"><?php echo $usershow->NOMBRE_USUARIO; ?></span></td>
                                        <td class="preg col" ><span class="preg"><?php echo $usershow->ROL; ?></span></td>
                                        <td class="col"><div class="col2"><i class="bi bi-person-fill-x" data-idborrarusuario="<?php echo $usershow->ID; ?>"></i><i class="bi bi-person-fill-gear confperson" data-idusuario="<?php echo $usershow->ID;?>" data-nombrereal="<?php echo $usershow->NOMBRE; ?>" data-nombreusuario = "<?php echo $usershow->NOMBRE_USUARIO; ?>" data-rol="<?php echo $usershow->ROL; ?>" data-cryto="<?php echo $usershow->CENCRYPT; ?>"></i></div></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="addWorkers" href="?=addUser">
                    <div id="tituloaddworkers">
                        <h3>Añadir Usuario</h3>
                    </div>
                    
                    <form action="index.php" method="post">
                        <div id="cuerpoCuentacrear">
                            <div class="hijocuerpoCuentacrear1">
                                <label for="">Nombre: </label>
                                <input type="text" name="nameReal" id="nameReal" required>
                            </div>
                            <div class="hijocuerpoCuentacrear2">
                                <label for="">Nombre Usuario: </label>
                                <input type="text" name="nombreUsuario" id="nombreUsuario" required>
                            </div>
                            <div class="hijocuerpoCuentacrear3">
                                <label for="">Contraseña: </label>
                                <input type="password" name="contrasenaUsuario" id="contrasenaUsuario" required>
                            </div>
                            <div class="hijocuerpoCuentacrear4">
                                <label for="">Rol: </label>
                                    <select name="rolUsuario" id="rolUsuario" class="selectpicker" data-show-subtext="true" data-live-search="true">
                                        <option value="" selected="true" disabled>Selecciona...</option>
                                        <option value="ADMIN">ADMIN</option>
                                        <option value="USUARIO">USUARIO</option>
                                    </select>
                            </div>
                            <div class="hijocuerpoCuentacrear5">
                                <input type="submit" class="disenobotonfuncion" name="addUsuarioBD" id="addUsuarioBD" value="Añadir Usuario">
                            </div>
                        </div>
                    </form>
                    
                </div>
                <div id="mod1" href="?=modCate">
                    <div id="titulomod1"><h3>MODIFICAR CATEGORÍA</h3></div>

                    <form action="index.php" method="post">
                        <div id="mod1cuerpo">
                            <input type="hidden" name="idModCate" id="idModCate" value="">
                            <input type="hidden" name="nombreModOriginal" id="nombreModOriginal" value="">
                            <div>
                                <label for="">Categoria: </label>
                                <input type="text" name="modNameCate" id="modNameCate" required>
                            </div>
                        </div>
                        <div id="contenedorboton1cuerpo">
                            <input type="submit" class="disenobotonfuncion" value="Modificar" id="btnModCate" name="btnModCate">
                        </div>
                    </form>
                </div>
                <div id="mod2" href="?=modSub">
                    <div id="titulomod2"><h3>MODIFICAR SUBCATEGORÍA</h3></div>
                    
                    <form action="index.php" method="post">
                        <div id="mod2cuerpo">
                            
                            <input type="hidden" name="idModSubCate" id="idModSubCate" value="">
                            <input type="hidden" name="ModCatefromSub" id="ModCatefromSub" value="">
                            <input type="hidden" name="nombreModSubOriginal" id="nombreModSubOriginal" value="">
                            <div class="classmod2cuerpo">
                                <label for="">Categoría: </label>
                                <select name="chooseModSub" id="chooseModSub">
                                    <?php foreach($mostrarCate as $mCateSub): ?>
                                        <option value="<?php echo $mCateSub->NOMBRE_SOFT; ?>"><?php echo $mCateSub->NOMBRE_SOFT; ?></option>
                                    <?php endforeach; ?>
                                        <option value="" id="optvacia" selected></option>
                                </select>
                            </div>
                            <div class="classmod2cuerpo">
                                <label for="">Subcategoría: </label>
                                <input type="text" name="modNameSubCate" id="modNameSubCate" required>
                            </div>
                        </div>
                        <div id="contenedorDeBotonModificar">
                            <input type="submit" class="disenobotonfuncion" value="Modificar" id="btnModSubCate" name="btnModSubCate">
                        </div>
                    </form>
                </div>
                <div id="mod3">
                    <div id="titulomod3"><h3>MODIFICAR PREGUNTA</h3></div>
                    <form action="index.php" method="post" enctype="multipart/form-data" id="uploadForm" value=""> 
                        <input type="hidden" name="idModPregs" id="idModPregs" value="">
                        <input type="hidden" name="img1Pregmod" id="img1Pregmod" value="">
                        <input type="hidden" name="img2Pregmod" id="img2Pregmod" value="">
                        <input type="hidden" name="ModSubfromPreg" id="ModSubfromPreg" 
                        value="">
                        <input type="hidden" name="nombreModRespOriginal" id="nombreModRespOriginal" value="">
                        <input type="hidden" name="nombreModPregOriginal" id="nombreModPregOriginal" value="">
                        <div id="mod3pregunta">
                            <div class="semihijomod3pregunta1">
                                <div class="hijomod3pregunta1">
                                    <label for="">Pregunta: </label><br>
                                    <textarea name="modNamePreg" id="modNamePreg" rows="3" cols="50" required></textarea>
                                </div>
                                <div class="hijomod3pregunta2">
                                    
                                    <label for="">Respuesta: </label><br>
                                    <textarea name="modRespPreg" id="modRespPreg" rows="8" cols="60" required></textarea>
                                </div>
                                <div class="hijomod3pregunta3"> 
                                    <label for="">Subcategoría: </label>
                                    <select name="chooseModSubofPreg" id="chooseModSubofPreg" value="">
                                    <?php foreach($norepeatSub as $que): ?>
                                        <option value="<?php echo $que->SUB_SOFT;?>"><?php echo $que->SUB_SOFT;?></option>
                                    <?php endforeach; ?>
                                        <option value="" id="optvaciasub" selected style="background:red;"></option>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="semihijomod3pregunta2">
                                <div class="hijomod3pregunta4">
                                    <input type="file" id="modImgPreg1s" name="modImgPreg1s" value=""><br>
                                    <img id="visualizarmodImgPreg1s" src="" width="450" height="200" alt="">
                                </div>
                                <div class="hijomod3pregunta5">
                                    <input type="file" id="modImgPreg2s" name="modImgPreg2s" value=""><br>
                                    <img id="visualizarmodImgPreg2s" src="" alt="" width="450" height="200">
                                </div>
                            </div>
                            <div class="semihijomod3pregunta3">
                                    <input type="submit" class="disenobotonfuncion" value="Modificar" id="btnModPreg" name="btnModPreg">
                            </div>
                            
                        </div>
                    </form>
                </div>
                
                <div id="mod4">
                    <div id="titulomod4"><h3>MODIFICAR USUARIOS</h3></div>
                    <form action="index.php" method="post">
                        <div id="mod4usuarios">
                            <input type="hidden" name="idModUsuario" id="idModUsuario" value="">
                            <div class="hijomod4usuarios1">
                                <label for="">Nombre: </label>
                                <input type="text" name="nombreRealMod" id="nombreRealMod" value="">
                            </div>
                            <div class="hijomod4usuarios2">
                                <label for="">Nombre Usuario: </label>
                                <input type="text" name="nombreUsuarioMod" id="nombreUsuarioMod" value="">
                            </div>
                            <div class="hijomod4usuarios3">
                                <label for="">Contraseña:  </label>
                                <input type="hidden" name="by" id="by" value="">
                                <input type="password" name="contrasenaMod" id="contrasenaMod" value="" placeholder="********">
                                <input style="margin-left:20px;" type="checkbox" id="mostrar_contrasena" title="clic para mostrar contraseña"/>
                                &nbsp;&nbsp;Mostrar Contraseña
                            </div>
                            <div class="hijomod4usuarios4">
                                <label for="">ROL: </label>
                                <select name="escogerRol" id="escogerRol" value="">
                                    <?php foreach($mostrarUsuarioNoRepeat as $mu): ?>
                                    <option value="<?php echo $mu->ROL; ?>"><?php echo $mu->ROL; ?></option>
                                    <?php endforeach; ?>
                                    <option value="" id="optUsuarioVacia" selected></option>
                                </select>
                            </div>
                        </div>
                        <div id="contenedordebotonmodificarusuario">
                            <input type="submit" class="disenobotonfuncion" name="btnModUsuario" id="btnModUsuario" value="Modificar Cuenta">
                        </div>
                    </form>
                </div>
                <div id="cuadromensajes" href="?=mensajeria" style="width:100%; height:100%;">
                <h3>MENSAJERÍA</h3>
                    
                    <div id="tablaInforme">
                        <table id="tablaInformeHijo" class="table-bordered table pull-right" cellspacing="0"
                        style="font-size:12px; text-align:center; width: 100%">
                            <thead>
                                <tr>
                                    <th>USUARIO</th>
                                    <th>FECHA</th>
                                    <th>SOFTWARE</th>
                                    <th>PREGUNTA</th>
                                    <th>INFORME</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($chating as $chat):?>
                                    <tr style="width: 100%">
                                        <td style="width: 5%;" class="preg col mipo" data-idtryaddquestion = "<?php echo $chat->ID; ?>" data-softwaretryaddquestion="<?php echo $chat->SOFTWARE;?>" data-preguntatryaddquestion = "<?php echo $chat->PREGUNTA; ?>" data-catetryaddquestion="<?php echo $chat->CATE; ?>"><span><?php echo $chat->USUARIO; ?></span></td>
                                        <td style="width: 10%;" class="preg col mipo" data-idtryaddquestion = "<?php echo $chat->ID; ?>" data-softwaretryaddquestion="<?php echo $chat->SOFTWARE;?>" data-preguntatryaddquestion = "<?php echo $chat->PREGUNTA; ?>" data-catetryaddquestion="<?php echo $chat->CATE; ?>"><span><?php echo $chat->FECHA; ?></span></td>
                                        <td style="width: 10%;" class="preg col mipo" data-idtryaddquestion = "<?php echo $chat->ID; ?>" data-softwaretryaddquestion="<?php echo $chat->SOFTWARE;?>" data-preguntatryaddquestion = "<?php echo $chat->PREGUNTA; ?>" data-catetryaddquestion="<?php echo $chat->CATE; ?>"><span><?php echo $chat->SOFTWARE; ?></span></td>
                                        <td style="width: 30%;" class="preg col mipo" data-idtryaddquestion = "<?php echo $chat->ID; ?>" data-softwaretryaddquestion="<?php echo $chat->SOFTWARE;?>" data-preguntatryaddquestion = "<?php echo $chat->PREGUNTA; ?>" data-catetryaddquestion="<?php echo $chat->CATE; ?>"><span><?php echo $chat->PREGUNTA; ?></span></td>
                                        <td style="width: 40%;" class="preg col mipo" data-idtryaddquestion = "<?php echo $chat->ID; ?>" data-softwaretryaddquestion="<?php echo $chat->SOFTWARE;?>" data-preguntatryaddquestion = "<?php echo $chat->PREGUNTA; ?>" data-catetryaddquestion="<?php echo $chat->CATE; ?>"><span><?php echo $chat->INFORME; ?></span></td>
                                        <td style="width: 40%;" class="preg col"><div class="iconInforme1"><div><i class="bi bi-exclamation-triangle-fill" data-preguntamensajeria = "<?php echo $chat->PREGUNTA; ?>"></i></div></div><div class="iconInforme2"><div><i class="bi bi-file-x-fill" data-idinforme="<?php echo $chat->ID; ?>"></i></div></div></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <div id="popup-container" class="full-layer">
                        <div id="popup-content">
                                <form action="" method="post">
                                    <div id="popupcate">
                                        <input type="hidden" id="idBorrarCate" name="idBorrarCate" value="">
                                        <input type="hidden" id="softBorrarCate" name="softBorrarCate" value="">
                                        <div class="borrarCatepopup1"><label for=""><p>¿Estas seguro de borrar esta Categoría?</p></label></div>
                                        <div class="borrarCatepopup2">
                                            <input type="submit" name="btnBorrarCategoria" id="btnBorrarCategoria" value="Borrar">
                                        </div>
                                        <div class="borrarCatepopup3">
                                            <input class="cancel" class="disenoBotonBorrar" class="disenoBotonBorrar" type="button" value="Cancelar" id="cancelacionBorrar" name="cancelacionBorrar">
                                        </div>
                                    </div>
                                </form>
                        </div>
                        <div class="full-layer" id="popup-overlay"></div>
                    </div>
                </div>
                <div>
                    <div id="popup-container2" class="full-layer2">
                        <div id="popup-content2">
                                <form action="index.php" method="post">
                                    <div id="popupsubcate">
                                        <input type="hidden" id="idBorrarSubcate" name="idBorrarSubcate" value="">
                                        <input type="hidden" id="softBorrarSubcate" name="softBorrarSubcate" value="">
                                        <div class="borrarsubcate1"><label for=""><p>¿Estas seguro de borrar esta Subcategoría?</p></label></div>
                                        <div class="borrarsubcate2">
                                            <input type="submit" class="disenoBotonBorrar" name="btnBorrarSubCate" id="btnBorrarSubCate" value="Borrar">
                                        </div>
                                        <div class="borrarsubcate3">
                                            <input class="cancelacionBorrarSubcate disenoBotonBorrar" type="button" value="Cancelar" id="cancelacionBorrarSubcate" name="cancelacionBorrarSubcate">
                                        </div>
                                    </div>
                                </form>
                        </div>
                        <div class="full-layer2" id="popup-overlay2"></div>
                    </div>
                </div>
                <div>
                    <div id="popup-container3" class="full-layer3">
                        <div id="popup-content3">
                                <form action="index.php" method="post">
                                    <div id="popuppregunta">
                                        <input type="hidden" id="idBorrarPregunta" name="idBorrarPregunta" value="">
                                        <div class="borrarpregunta1"><label for=""><p>¿Estas seguro de borrar esta pregunta?</p></label></div>
                                        <div class="borrarpregunta2">
                                            <input type="submit" class="disenoBotonBorrar" name="btnBorrarPregunta" id="btnBorrarPregunta" value="Borrar">
                                        </div>
                                        <div class="borrarpregunta3">
                                            <input class="cancelacionBorrarPregunta disenoBotonBorrar" type="button" value="Cancelar" id="cancelacionBorrarPregunta" name="cancelacionBorrarPregunta">
                                        </div>
                                    </div>
                                </form>
                        </div>
                        <div class="full-layer3" id="popup-overlay3"></div>
                    </div>
                </div>
                <div>
                    <div id="popup-container4" class="full-layer4">
                        <div id="popup-content4">
                                <form action="index.php" method="post">
                                    <div id="popupusuario">
                                        <input type="hidden" id="idBorrarUsuario" name="idBorrarUsuario" value="">
                                        <div class="borrarusuario1"><label for=""><p>¿Estas seguro de borrar este usuario?</p></label></div>
                                        <div class="borrarusuario2">
                                            <input type="submit" class="disenoBotonBorrar" name="btnBorrarUsuario" id="btnBorrarUsuario" value="Borrar">
                                        </div>
                                        <div class="borrarusuario3">
                                            <input class="cancelacionBorrarUsuario disenoBotonBorrar" type="button" value="Cancelar" id="cancelacionBorrarUsuario" name="cancelacionBorrarUsuario">
                                        </div>
                                    </div>
                                </form>
                        </div>
                        <div class="full-layer4" id="popup-overlay4"></div>
                    </div>
                </div>
                <div>
                    <div id="popup-container8" class="full-layer8">
                        <div id="popup-content8">
                                <form action="index.php" method="post">
                                    <div id="popupinforme">
                                        <input type="hidden" id="idBorrarinforme" name="idBorrarinforme" value="">
                                        <div class="borrarinforme1"><label for=""><p>¿Haz terminado de corregir el error?, si es así puedes borrar</p></label></div>
            
                                        <div class="borrarinforme2">
                                            <input type="submit" class="disenoBotonBorrar" name="btnBorrarInforme" id="btnBorrarInforme" value="Borrar">
                                        </div>
                                        <div class="borrarinforme3">
                                            <input class="cancelacionBorrarInforme disenoBotonBorrar" type="button" value="Cancelar" id="cancelacionBorrarInforme" name="cancelacionBorrarInforme">
                                        </div>
                                    </div>
                                </form>
                        </div>
                        <div class="full-layer8" id="popup-overlay8"></div>
                    </div>
                </div>
                <div>
                    <div id="popup-container9" class="full-layer9">
                        <div id="popup-content9" style="height: 100%; width: 80%;">
                            <input type="hidden" name="imadmin1" id="imadmin1" value="">
                            <img id="imadmin1visual" src="" value="" alt="" style="height: 100%; width:100%;">
                        </div>
                            <div class="full-layer9" id="popup-overlay9">
                        </div>
                    </div>
                </div>
                <div>
                    <div id="popup-container10" class="full-layer10">
                        <div id="popup-content10" style="height: 100%; width: 80%;">
                            <input type="hidden" name="imadmin2" id="imadmin2" value="">
                            <img id="imadmin2visual" src="" value="" alt="" style="height: 100%; width:100%;">
                        </div>
                            <div class="full-layer10" id="popup-overlay10">
                        </div>
                    </div>
                </div>
                <div>
                    <div id="popup-container12" class="full-layer12">
                        <div id="popup-content12">
                            <div id="contenedordepreguntatryadd">
                                <input type="hidden" name="mandarsoftwareparatryadd" id="mandarsoftwareparatryadd" value="">
                                <input type="hidden" name="mandarpreguntaparatryadd" id="mandarpreguntaparatryadd" value="">
                                <input type="hidden" name="mandarcateparatryadd" id="mandarcateparatryadd" value="">
                                <p>¿Deseas añadir la pregunta?</p>
                            </div>
                            <div id="contenedordepreguntatryadd2">
                                <button id="irparatryaddquestion">Añadir</button>
                                <button id="cancelartryaddquestion">Cancelar</button>
                            </div>
                        </div>
                        <div class="full-layer12" id="popup-overlay12">
                        </div>
                    </div>
                </div>
                <a href="#" class="scroll-top" title="Ir arriba">
                    <i class="bi bi-caret-up-fill"></i>
                </a>
                
        </div>
    </div>
</div>
</body>