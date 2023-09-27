<body>

<nav class="headeer">
    <div>
        <img src="https://dragon.grupofuturo.es/img/logo_2.png" alt="">
    </div>
    <div class="botonmandarmensajeaddquestion">
        <span id="nombrecuenta"><i class="bi bi-person-circle"></i> <?php echo $realnameperson; ?></span>
    </div>
    <div class="botonmandarmensajeaddquestion">
        <i class="bi bi-send-fill" title="mensaje para añadir nueva pregunta"></i>
    </div>
    <div id="btnd">
        <a href="index.php?cerrarSession=true" id="btncerrarsesion">Cerrar Sesión <i class="bi bi-box-arrow-left"></i></a>
    </div>

</nav>
<main>
    <div id="padreParent">
        <div class="parent">
            <div class="div1">
                <label id="buscarQRP">Buscar: 
                    <input type="text" id="buscarQR" name="buscarQR">
                </label>
                
            </div>
            <div class="div2">
                <label for="">Fecha:  
                    <input type="search" id="buscarFecha" name="buscarFecha">
                </label>
            </div>
            <div class="div3">
                <label for="">Software: 
                    <input type="search" id="buscarSoftware" name="buscarSoftware">
                </label>
            </div>
            
        </div>
    </div>
    <div id="listQuser">
        <div>
            <table class="table-bordered table pull-right" id="mytable" cellspacing="0" style="font-size:13px; text-align:center;">
                <thead>
                    <tr style="width:100%;">
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
                        <input type="hidden" name="cateUser" id="cateUser" value="<?php echo $quest->CATE;?>">
                        <td class="preg col" style="width:5%;"><span class="softUser"><?php echo $quest->SOFT;?></span></td>
                        <td class="preg col" style="width:5%;"><span class="fechaUser"><?php echo $quest->FECHA;?></span></td>
                        <td class="preg col" style="width:35%;"><span class="pregUser"><?php echo $quest->PREGUNTA;?></span></td>
                        <td class="preg col r" style="width:50%;"><p class="pregResps"><?php echo $quest->RESPUESTA; ?></p></td>
                        <td id="informe" style="width:5%;"><div id="me"><div><i class="bi bi-exclamation-square-fill" title="enviar informe de algún tipo de error en la preguntas" data-idinformeusuario="<?php echo $quest->ID; ?>" data-fechainformeusuario = "<?php echo $quest->FECHA ?>"  data-informepregunta = "<?php echo $quest->PREGUNTA; ?>" data-informesoftware= "<?php echo $quest->SOFT; ?>" data-informerespuesta ="<?php echo $quest->RESPUESTA; ?>"></i></div></div><div id="ma"><div><i title="ver la pregunta, respuesta y la imagen agregada" class="bi bi-eye-fill" data-versoftware="<?php echo $quest->SOFT;?>" data-verpregunta="<?php echo $quest->PREGUNTA;?>" data-verrespuesta="<?php echo $quest->RESPUESTA;?>" data-verfecha=<?php echo $quest->FECHA;?> data-verimagenuno="<?php echo $quest->IMAGEN1; ?>" data-verimagendos="<?php echo $quest->IMAGEN2; ?>"></i></div></div></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div id="verPreguntaUsuario">
        <div id="salirdeverpregunta"><i class="bi bi-x-lg"></i></div>
        <input type="hidden" name="versoftwareusuario" id="versoftwareusuario" value="">
        <input type="hidden" name="verfechausuario" id="verfechausuario" value="">
        <div id="cuerpopreguntausuario">
            <div id="encabezadodeverpregunta">
                <label for="">SOFTWARE: <span id="elsoftwaredepregunta"></span></label>
                <label for="">FECHA: <span id="lafechadepregunta"></span></label>
            </div>
            <div id="cuerpodeverpregunta">
                <div id="pregyrespver">
                    <div>
                        <input type="hidden" value="" id="verpreguntas" name="verpreguntas">
                        <label for="">Pregunta: <p id="lapreguntadeusuario"></p></label>
                    </div>
                    <div>
                        <input type="hidden" name="verrespuestas" id="verrespuestas" value="">
                        <label for=""><p>Respuesta:</p><p id="larespuestadeusuario"></p></label>
                    </div>
                </div>
                <div>
                    <div><label for="">Imagen 1: </label><br>
                    <img src="" class="i1" style="width:500px; height:200px;"></div>
                    <div><label for="">Imagen 2: </label><br>
                    <img src="" class="i2" style="width:500px; height:200px;"></div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div id="popup-container5" class="full-layer5">
            <div id="popup-content5" style="height: 100%; width: 80%;">
                    <input type="hidden" name="im1" id="im1" value="">
                    <img id="im1visual" src="" value="" alt="" style="height: 100%; width:100%;">
            </div>
            <div class="full-layer5" id="popup-overlay5"></div>
        </div>
    </div>
    <div>
        <div id="popup-container6" class="full-layer6">
            <div id="popup-content6" style="height: 100%; width: 80%;">
                    <input type="hidden" name="im2" id="im2" value="">
                    <img id="im2visual" src="" value="" alt="" style="height: 100%; width:100%;">
            </div>
            <div class="full-layer6" id="popup-overlay6" style="padding:15px;"></div>
        </div>
    </div>
    <div>
        <!--Esto es para el informe de usuario-->
        <div id="popup-container7" class="full-layer7">
            <div id="popup-content7" style="height: auto; width: 94%;">
            <form action="index.php" method="POST">
                <div id="cabeceradeInforme">
                    <div id="hijocabeceradeInforme">
                        
                        <label>De: <span><?php echo $realnameperson; ?></span></label>
                    </div>
                    <div id="hijocabeceradeInforme2">
                        <input type="hidden" id="informefecha" name="informefecha" value="<?php echo $date = date("d/m/Y"); ?>">
                        <label>Fecha: <span id="informefechas"><?php echo $date = date("d/m/Y"); ?></span></label>
                    </div>
                </div>
                
                <div id="cuerpodeInforme">
                    <input type="hidden" name="idmessage" id="idmessage" value="">
                    <div class="hijocuerpodeInforme">
                        <input type="hidden" id="informepregunta" name="informepregunta" value="">
                        <label for="">Pregunta: <span id="informepreguntas"><span></label>
                    </div>
                    <div class="hijocuerpodeInforme2">
                        <input type="hidden" id="informesoftware" name="informesoftware" value="">
                        <label for="">Software: <span id="informesoftwares"><span></label>
                    </div>
                    <div class="hijocuerpodeInforme3">
                        <input type="hidden" id="informerespuesta" name="informerespuesta" value="">
                        <label for="">Respuesta: <p id="informerespuestas"></p></label>
                    </div>
                    <div class="hijocuerpodeInforme4">
                        <label for="">Informe: </label><br>
                        <textarea name="informeQuejas" style="width:100%;" id="informeQuejas"></textarea>
                    </div>
                </div>
                <div id="botoninforme">
                        <input type="submit" id="btnsendinforme" name="btnsendinforme" value="Enviar">
                </div>
            </form>
            </div>
            
            <div class="full-layer7" id="popup-overlay7" style="padding:15px;"></div>
        </div>
    </div>
    <div>
        <div id="popup-container11" class="full-layer11">
            <div id="popup-content11" style="height: auto; width: 80%;">
                <form action="index.php" method="POST">
                    <div>
                        <div id="cabecerainformeDeAddnuevaQuestionPregunta">
                            <div>
                                <input type="hidden" name="informeDeAddnuevaQuestionPersona" id="informeDeAddnuevaQuestionPersona" value="<?php echo $realnameperson; ?>">
                                <p><b>De:  </b><?php echo $realnameperson; ?></p>
                            </div>
                            <div>
                                <input type="hidden" name="informeDeAddnuevaQuestionFecha" id="informeDeAddnuevaQuestionFecha" value="<?php echo $date = date("d/m/Y");?>">
                                <p id="textfechaaddquestion"><b>Fecha: </b><?php echo $date = date("d/m/Y");?></p>
                            </div>
                        </div>
                        <div id="cuerpoinformeDeAddnuevaQuestionPregunta">
                            <div class="hijocuerpoinformeDeAddnuevaQuestionPregunta">
                                <div>
                                    <input type="hidden" name="motivoparaintentar" id="motivoparaintentar" value="Añadir pregunta nueva a la subcategoría">
                                    <p><b>Motivo: </b> Añadir pregunta nueva a la subcategoría</p>
                                </div>
                                <div>
                                    <label for="">Pregunta: </label><br>
                                    <textarea name="informeDeAddnuevaQuestionPregunta" id="informeDeAddnuevaQuestionPregunta" cols="75" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="hijocuerpoinformeDeAddnuevaQuestionPregunta2">
                                <div class="adqgrid2" style="padding:15px;">
                                    
                                        <div>
                                            <input type="hidden" id="categoriaparaintentaraddquestion" name="categoriaparaintentaraddquestion" value="">
                                            <input type="hidden" id="subcategoriaparaintentaraddquestion" name="subcategoriaparaintentaraddquestion" value="">
                                                
                                            <span class="abrirsubcateparaaddtryadd">SUBCATEGORÍA</span>&nbsp; &nbsp; <span class="yaelegidosubcatetryadd">ELIGE...</span><br><br>
                                                <div id="subcateelegidaparaadd2tryadd">
                                                    <div id="subcateelegidaparaaddtryadd">
                                                            <?php foreach($subgrS as $kg): ?>
                                                                <div class="paso2">
                                                                    <div class="paso" data-cateaddpreguntatryadd="<?php echo $kg->CATE;?>" data-subcateaddpreguntatryadd="<?php echo $kg->SUB_SOFT;?>">
                                                                        <span><?php echo $kg->SUB_SOFT; ?></span>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; ?>
                                                    </div>
                                                </div>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div id="divdebtntryaddquestion">
                            <input type="submit" name="btninformeDeAddnuevaQuestionPregunta" id="btninformeDeAddnuevaQuestionPregunta" value="Enviar">
                        </div>
                    </div>
                </form>
            </div>
            <div class="full-layer11" id="popup-overlay11" style="padding:15px;"></div>
        </div>
    </div>
    <a href="#" class="scroll-top" title="Ir arriba">
        <i class="bi bi-caret-up-fill"></i>
    </a>
</main>



</body>