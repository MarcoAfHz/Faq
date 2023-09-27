$(document).ready(function () {

    $(document).on("click", ".bi-sliders", function() {
        $("#idModCate").val($(this).data("id"));
        $("#nombreModOriginal").val($(this).data("nombre"));
        $("#modNameCate").val($(this).data("nombre"));

    });

    //USUARIO
    $(document).on("click", ".bi-exclamation-square-fill", function () {
        
        $("#informepregunta").val($(this).data("informepregunta"));
        $("#informesoftware").val($(this).data("informesoftware"));
        $("#idmessage").val($(this).data("idinformeusuario"));
        $("#informerespuesta").val($(this).data("informerespuesta"));
        
        $("#informepreguntas").text($(this).data("informepregunta"));
        $("#informesoftwares").text($(this).data("informesoftware"));
        $("#informerespuestas").text($(this).data("informerespuesta"));
    });

    $(document).on("click", ".please",function () {
        $("#elegirCateParaAddPregunta2").val($(this).data("cateaddpregunta"));
        $("#elegirSubParaAddPregunta").val($(this).data("subcateaddpregunta"));
        $("#subcateelegidaparaadd2").hide(500);
        $("#cuadromensajes").hide("500");
        $("#elegirSubParaAddPregunta").val();
        $(".yaelegidosubcate").text($("#elegirSubParaAddPregunta").val());
    });

    $(document).on("click", ".paso", function(){
        $("#categoriaparaintentaraddquestion").val($(this).data("cateaddpreguntatryadd"));
        $("#subcategoriaparaintentaraddquestion").val($(this).data("subcateaddpreguntatryadd"));
        $("#subcateelegidaparaadd2tryadd").hide(500);
        $(".yaelegidosubcatetryadd").text($("#subcategoriaparaintentaraddquestion").val());

    });

    $(document).on("click", ".bi-gear-wide", function() {
        $("#idModSubCate").val($(this).data("idsubmod"));
        $("#nombreModSubOriginal").val($(this).data("nombremodsub"));
        $("#optvacia").val($(this).data("cate"));
        $("#optvacia").text($("#optvacia").val());
        $("#modNameSubCate").val($(this).data("nombremodsub"));
        $("#ModCatefromSub").val($(this).data("cate"));
        $('#mod2').show(500);
        $('#mod1').hide(500);
        $('#listQ').hide(500);
        $("#addCate").hide(500);
        $("#yasta").hide(500);
        $("#addPregunta").hide(500);
        $('#mod').hide(500);
        $('#addSubCategr').hide(500);
        $("#cuerpoPregunta").hide(200);
        $('#mod3').hide(200);
        $('#addWorkers').hide(200);
        $('#listaWorkers').hide(200);
        $('#addQuestion').hide(500);
        $("#cuadromensajes").hide(500);
    });

    $(document).on("click", ".bi-person-fill-gear", function () {
        $("#idModUsuario").val($(this).data("idusuario"));
        $("#nombreRealMod").val($(this).data("nombrereal"));
        $("#nombreUsuarioMod").val($(this).data("nombreusuario"))
        $("#contrasenaMod").val($(this).data("contrasenausuario"));
        $("#optUsuarioVacia").val($(this).data("rol"));
        $("#optUsuarioVacia").text($("#optUsuarioVacia").val());
        $("#by").val($(this).data("cryto"));
    });

    $(document).on("click", ".bi-gear", function() {
        $("#idModPregs").val($(this).data("idpreguntas"));
        $("#nombreModPregOriginal").val($(this).data("nombrepregunta"));
        $("#optvaciasub").val($(this).data("subpregunta"));
        $("#img1Pregmod").val($(this).data("imagenuno"));
        $("#visualizarmodImgPreg1s").attr("src", "../Faq/upload/imagenesPregunta/"+$("#img1Pregmod").val());
        
        $("#img2Pregmod").val($(this).data("imagendos"));
        $("#visualizarmodImgPreg2s").attr("src", "../Faq/upload/imagenesPregunta/"+$("#img2Pregmod").val());
        $("#nombreModRespOriginal").val($(this).data("nombrerespuesta"));
        $("#modNamePreg").val($(this).data("nombrepregunta"));
        $("#modRespPreg").val($(this).data("nombrerespuesta"));
        $("#optvaciasub").text($("#optvaciasub").val());
        $("#ModSubfromPreg").val($(this).data("subpregunta"));
    });

    $('#wp').click(function (e) { 
        $('#yasta').show(500);
        $("#cuadromensajes").hide(500);
    });

    $(".abrirsubcateparaadd").on("click", function(){
        $("#subcateelegidaparaadd2").show(500);
        
    })

    $(".abrirsubcateparaaddtryadd").on("click", function(){
        $("#subcateelegidaparaadd2tryadd").show(500);
        
    })

    $('#irAddCate').on("click", function () {
        $('#listQ').hide(500);
        $('#addCate').show(500);
        $("#yasta").hide(500);
        $("#addPregunta").hide(500);
        $('#mod').hide(500);
        $("#addSubCategr").hide(500);
        $('#addQuestion').hide(500);
        $("#cuerpoPregunta").hide();
        $('#listaWorkers').hide(500);
        $('#mod4').hide(500);
        $('#mod1').hide(500);
        $('#mod2').hide(500);
        $('#mod3').hide(500);
        $('#addWorkers').hide(500);
        $("#cuadromensajes").hide(500);
    });

    $("#go").on("click", function () {
        $("#cuerpoPregunta").show(500);
        $("#yasta").hide(500);
        $("#cuadromensajes").hide(500);
    });

    $("#ame").on("click", function () {
        $("#cuerpoAme").show();
        $("#cuerpoPregunta").hide();
        $("#cuadromensajes").hide(500);
    });

    $("#mostrar1").on("click", function () {
        $('#mod').hide();
        $('.down').toggle(400);
        $('#lasCate').hide(400);
        $('#lasAddHide').hide(300);
        $('#updown1').toggle();
        $('#up1').toggle();
        
    });

    $("#mostrar2").on("click", function () {
        $("#addPregunta").hide(500);
        $('#mod').hide();
        $('#lasCate').hide(500);
        $('#lasAddHide').hide(500);
        $('#down1').hide(500);
        $('#down2').hide(500);
        $('#lasAddHide2').hide(500);
        $('#lasAddHide3').hide(500);
        
    });

    $('#down1').click(function (e) { 
        $('#lasCate').toggle (400);
    });

    $('#down2').click(function (e) {
        $('#lasAdd').show(400);
        $('#lasAddHide').toggle(400);
    });

    $("#bajarMensajes").on("click", function () { 
        
        $("#cuadromensajes").show(500);
        $('#listQ').hide(500);
        $('#addCate').hide(500);
        $("#yasta").hide(500);
        $("#addPregunta").hide(500);
        $('#mod').hide(500);
        $("#addSubCategr").hide(500);
        $('#addQuestion').hide(500);
        $("#cuerpoPregunta").hide();
        $('#listaWorkers').hide(500);
        $('#mod4').hide(500);
        $('#mod1').hide(500);
        $('#mod2').hide(500);
        $('#mod3').hide(500);
        $('#addWorkers').hide(500);
        
    });
    
    $('#mostrar3').click(function (e) { 
        $('#lasAdd2').show(400);
        $('#lasAddHide2').toggle(400);
        $('#updown3').toggle();
        $('#up3').toggle();
        
    });

    $('#mostrar4').click(function (e) { 
        $('#lasAdd3').show("400");
        $('#lasAddHide3').toggle(400);
        $('#updown4').toggle();
        $('#up4').toggle();
    });



    $('#searchS').keyup(function(){
        var nombres = $('.subSoft');
        var buscando = $(this).val().toLowerCase();
        var item='';
        for( var i = 0; i < nombres.length; i++ ){
            item = $(nombres[i]).html().toLowerCase();
            
            for(var x = 0; x < item.length; x++ ){
                if( buscando.length == 0 || item.indexOf( buscando ) > -1){
                    $(nombres[i]).parents('.item').show(); 
                }else{
                    $(nombres[i]).parents('.item').hide();
                }
            }
        }
    });

    //usuario

    $("#buscarQR").keyup(function(){
        var nombres = $('.pregUser');
        var buscando = $(this).val().toLowerCase();
        var item='';
        for( var i = 0; i < nombres.length; i++ ){
            item = $(nombres[i]).html().toLowerCase();
            
            for(var x = 0; x < item.length; x++ ){
                if( buscando.length == 0 || item.indexOf( buscando ) > -1){
                    $(nombres[i]).parents('.item').show(); 
                }else{
                    $(nombres[i]).parents('.item').hide();
                }
            }
        }
    });

    $("#buscarFecha").keyup(function(){
        var nombres = $('.fechaUser');
        var buscando = $(this).val().toLowerCase();
        var item='';
        for( var i = 0; i < nombres.length; i++ ){
            item = $(nombres[i]).html().toLowerCase();
            
            for(var x = 0; x < item.length; x++ ){
                if( buscando.length == 0 || item.indexOf( buscando ) > -1){
                    $(nombres[i]).parents('.item').show(); 
                }else{
                    $(nombres[i]).parents('.item').hide();
                }
            }
        }
    });

    $("#buscarSoftware").keyup(function(){
        var nombres = $('.softUser');
        var buscando = $(this).val().toLowerCase();
        var item='';
        for( var i = 0; i < nombres.length; i++ ){
            item = $(nombres[i]).html().toLowerCase();
            
            for(var x = 0; x < item.length; x++ ){
                if( buscando.length == 0 || item.indexOf( buscando ) > -1){
                    $(nombres[i]).parents('.item').show(); 
                }else{
                    $(nombres[i]).parents('.item').hide();
                }
            }
        }
    });


    //admin
    
    $("#search").keyup(function(){
        _this = this;
        
        $.each($("#mytable tbody tr"), function() {
        if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
            $(this).hide(200);
        else
            $(this).show(200);
        });
    });



    $("#searchU").keyup(function(){
        _this = this;
        
        $.each($("#mytablee tbody tr"), function() {
        if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
            $(this).hide(200);
        else
            $(this).show(200);
        });
    });

    $('#irAddSubCate').on("click", function () {
        $('#addSubCategr').show(500);
        $("#addCate").hide(500);
        $("#yasta").hide(500);
        $("#addPregunta").hide(500);
        $('#mod').hide(500);
        $('#listQ').hide(500);
        $('#addQuestion').hide(500);
        $('#listaWorkers').hide(500);
        $("#cuerpoPregunta").hide();
        $('#mod4').hide(500);
        $('#mod1').hide(500);
        $('#mod2').hide(500);
        $('#mod3').hide(500);
        $('#addWorkers').hide(500);
        $("#cuadromensajes").hide(500);
    });
    
    $("#irAddListQ").on("click", function () {
        $('#listQ').show(500);
        $("#addCate").hide(500);
        $("#yasta").hide(500);
        $("#addPregunta").hide(500);
        $('#mod').hide(500);
        $('#addSubCategr').hide(500);
        $('#addQuestion').hide(500);
        $("#cuerpoPregunta").hide();
        $('#mod4').hide(500);
        $('#mod4').hide(500);
        $('#mod1').hide(500);
        $('#mod2').hide(500);
        $('#mod3').hide(500);
        $('#addWorkers').hide(500);
        $('#listaWorkers').hide(500);
        $("#cuadromensajes").hide(500);
    });

    $('#irAddQuestion').on("click", function () {
        $('#addQuestion').show(500);
        $('#listQ').hide(500);
        $("#addCate").hide(500);
        $("#yasta").hide(500);
        $("#addPregunta").hide(500);
        $('#mod').hide(500);
        $('#addSubCategr').hide(500);
        $("#cuerpoPregunta").hide();
        $('#mod4').hide(500);
        $('#mod1').hide(500);
        $('#mod2').hide(500);
        $('#mod3').hide(500);
        $('#listaWorkers').hide(500);
        $('#addWorkers').hide(500);
        $("#cuadromensajes").hide(500);
    });

    $('#irListWorkers').on("click", function () {
        $('#listaWorkers').show(500);
        $('#addWorkers').hide(500);
        $('#addQuestion').hide(500);
        $('#listQ').hide(500);
        $("#addCate").hide(500);
        $("#yasta").hide(500);
        $("#addPregunta").hide(500);
        $('#mod').hide(500);
        $('#addSubCategr').hide(500);
        $("#cuerpoPregunta").hide();
        $('#mod1').hide(500);
        $('#mod2').hide(500);
        $('#mod3').hide(500);
        $('#mod4').hide(500);
        $("#cuadromensajes").hide(500);
    });

    $('#irCreateUser').on("click", function () {
        $('#addWorkers').show(500);
        $('#listaWorkers').hide(500);
        $('#addQuestion').hide(500);
        $('#listQ').hide(500);
        $("#addCate").hide(500);
        $("#yasta").hide(500);
        $("#addPregunta").hide(500);
        $('#mod').hide(500);
        $('#addSubCategr').hide(500);
        $("#cuerpoPregunta").hide();
        $('#mod4').hide(500);
        $('#mod1').hide(500);
        $('#mod2').hide(500);
        $('#mod3').hide(500);
        $("#cuadromensajes").hide(500);
    });

    $('.confperson').on("click", function () {
        $('#mod4').show(500);
        $('#addWorkers').hide(500);
        $('#listaWorkers').hide(500);
        $('#addQuestion').hide(500);
        $('#listQ').hide(500);
        $("#addCate").hide(500);
        $("#yasta").hide(500);
        $("#addPregunta").hide(500);
        $('#mod').hide(500);
        $('#addSubCategr').hide(500);
        $("#cuerpoPregunta").hide();
        $("#cuadromensajes").hide(500);
    });

    $('.bi-sliders').on("click", function () {
        $('#mod1').show(500);
        $('#listQ').hide(500);
        $("#addCate").hide(500);
        $("#yasta").hide(500);
        $('#addQuestion').hide(500);
        $('#mod').hide(500);
        $('#addSubCategr').hide(500);
        $("#cuerpoPregunta").hide(200);
        $('#mod2').hide(200);
        $('#mod3').hide(200);
        $('#addWorkers').hide(200);
        $('#listaWorkers').hide(200);
        $('#mod4').hide(200);
        $("#cuadromensajes").hide(500);
    });

   

    $('.bi-gear').on("click", function () {
        $('#mod2').hide(500);
        $('#mod1').hide(500);
        $('#listQ').hide(500);
        $("#addCate").hide(500);
        $("#yasta").hide(500);
        $("#addPregunta").hide(500);
        $('#mod').hide(500);
        $('#addSubCategr').hide(500);
        $("#cuerpoPregunta").hide(200);
        $('#mod3').show(200);
        $('#addWorkers').hide(200);
        $('#listaWorkers').hide(200);
        $('#addQuestion').hide(500);
        $("#cuadromensajes").hide(500);
    });

    $('#mostrar_contrasena').click(function () {
        if ($('#mostrar_contrasena').is(':checked')) {
            $('#contrasenaMod').attr('type', 'text');
        } else {
            $('#contrasenaMod').attr('type', 'password');
        }
    });

    $('#mostrar_contrasenaLogin').click(function () {
        if ($('#mostrar_contrasenaLogin').is(':checked')) {
            $('#pswrd').attr('type', 'text');
        } else {
            $('#pswrd').attr('type', 'password');
        }
    });

    //el de cate
    var $popContainer = $('#popup-container');
    var $body = $('html,body');
    

    $('.bi-x-circle').on('click', function() {
        $popContainer.fadeIn();
        $('.selectpicker').css('background', 'rgba(0, 0, 0, 0.192)');
        $('.selectpicker').css({border:"1px solid rgba(0, 0, 0, 0.192)"});
        $('select').prop("disabled", true);
        $("#idBorrarCate").val($(this).data("idcatgrr"));
        $("#softBorrarCate").val($(this).data("catgrr"));
        $body.addClass('block-scroll'); // clase de manejo 
    });

    $('#cancelacionBorrar').on('click', function () {
        $('select').prop("disabled", false);
        
        $('.selectpicker').css('background', 'white');
    });

    $('.cancel').on('click', function() {
        $popContainer.fadeOut();
        $body.removeClass('block-scroll'); // clase de manejo
    });

    //el de subcategoria

    var $popContainer2 = $('#popup-container2');
    var $body2 = $('html,body');
    
    

    $('.bi-x-square').on('click', function() {
        $popContainer2.fadeIn();
        $('.selectpicker').css('background', 'rgba(0, 0, 0, 0.192)');
        $('.selectpicker').css({border:"1px solid rgba(0, 0, 0, 0.192)"});
        $('select').prop("disabled", true);
        $("#idBorrarSubcate").val($(this).data("idsubctgrr"));
        $("#softBorrarSubcate").val($(this).data("subctgrr"));
        $body2.addClass('block-scroll2'); // clase de manejo 
    });

    $('#cancelacionBorrarSubcate').on('click', function () {
        $('select').prop("disabled", false);
        
        $('.selectpicker').css('background', 'white');
    });

    $('.cancelacionBorrarSubcate').on('click', function() {
        $popContainer2.fadeOut();
        $body2.removeClass('block-scroll2'); // clase de manejo
    });

    //el de pregunta

    var $popContainer3 = $('#popup-container3');
    var $body3 = $('html,body');
    
    

    $('.bi-trash3-fill').on('click', function() {
        $popContainer3.fadeIn();
        $('.selectpicker').css('background', 'rgba(0, 0, 0, 0.192)');
        $('.selectpicker').css({border:"1px solid rgba(0, 0, 0, 0.192)"});
        $('select').prop("disabled", true);
        $("#idBorrarPregunta").val($(this).data("idborrarpregunta"));
        $body3.addClass('block-scroll3'); // clase de manejo 
    });

    $('#cancelacionBorrarPregunta').on('click', function () {
        $('select').prop("disabled", false);
        
        $('.selectpicker').css('background', 'white');
    });

    $('.cancelacionBorrarPregunta').on('click', function() {
        $popContainer3.fadeOut();
        $body3.removeClass('block-scroll3'); // clase de manejo
    });

    //el de usuario

    var $popContainer4 = $('#popup-container4');
    var $body4 = $('html,body');

    $('.bi-person-fill-x').on('click', function() {
        $popContainer4.fadeIn();
        $('.selectpicker').css('background', 'rgba(0, 0, 0, 0.192)');
        $('.selectpicker').css({border:"1px solid rgba(0, 0, 0, 0.192)"});
        $('select').prop("disabled", true);
        $("#idBorrarUsuario").val($(this).data("idborrarusuario"));
        $body3.addClass('block-scroll4'); // clase de manejo 
    });

    $('#cancelacionBorrarUsuario').on('click', function () {
        $('select').prop("disabled", false);
        
        $('.selectpicker').css('background', 'white');
    });

    $('.cancelacionBorrarUsuario').on('click', function() {
        $popContainer4.fadeOut();
        $body4.removeClass('block-scroll4'); // clase de manejo
    });

    $(document).on("click", ".bi-eye-fill", function(){
        $("#listQuser").hide(500);
        $("#verPreguntaUsuario").show(500);
        $("#im1").val($(this).data("verimagenuno"));
        $("#im2").val($(this).data("verimagendos"));
        $(".i1").attr("src", "../Faq/upload/imagenesPregunta/"+ $(this).data("verimagenuno"));
        $(".i2").attr("src", "../Faq/upload/imagenesPregunta/"+ $(this).data("verimagendos"));
        $("#verpreguntas").val($(this).data("verpregunta"));
        $("#lapreguntadeusuario").text($("#verpreguntas").val());
        $("#verrespuestas").val($(this).data("verrespuesta"));
        $("#larespuestadeusuario").text($("#verrespuestas").val());
        $("#versoftwareusuario").val($(this).data("versoftware"));
        $("#verfechausuario").val($(this).data("verfecha"));
        $("#elsoftwaredepregunta").text($("#versoftwareusuario").val());
        $("#lafechadepregunta").text($("#verfechausuario").val());


    });

    $(document).on("click", ".bi-x-lg", function(){
        $("#listQuser").show(500);
        $("#verPreguntaUsuario").hide(500);
    });

    $(document).on("click", ".i1", function() {
        
        $("#im1visual").attr("src", "../Faq/upload/imagenesPregunta/"+$("#im1").val()); 
        
    });

    var $popContainer5 = $('#popup-container5');
    var $body5 = $('html,body');

    $('.i1').on('click', function() {
        $popContainer5.fadeIn();
        $('select').prop("disabled", true);
        $("#idBorrarUsuario").val($(this).data("idborrarusuario"));
        $body5.addClass('block-scroll5'); // clase de manejo 
    });

    $('#popup-overlay5').on('click', function() {
        $popContainer5.fadeOut();
        $body5.removeClass('block-scroll5'); // clase de manejo
    });

    $(document).on("click", ".i2", function() {
        $("#im2visual").attr("src", "../Faq/upload/imagenesPregunta/"+$("#im2").val());
    });

    var $popContainer6 = $('#popup-container6');
    var $body6 = $('html,body');

    $('.i2').on('click', function() {
        $popContainer6.fadeIn();
        $("#idBorrarUsuario").val($(this).data("idborrarusuario"));
        $body6.addClass('block-scroll6'); // clase de manejo 
    });

    $('#popup-overlay6').on('click', function() {
        $popContainer6.fadeOut();
        $body6.removeClass('block-scroll6'); // clase de manejo
    });


    var $popContainer7 = $('#popup-container7');
    var $body7 = $('html,body');

    $('.bi-exclamation-square-fill').on('click', function() {
        $popContainer7.fadeIn();
        $body7.addClass('block-scroll7'); // clase de manejo 
    });

    $('#popup-overlay7').on('click', function() {
        $popContainer7.fadeOut();
        $body7.removeClass('block-scroll7'); // clase de manejo
    });

    
    var $popContainer9 = $('#popup-container9');
    var $body9 = $('html,body');

    $('#visualizarmodImgPreg1s').on('click', function() {
        $popContainer9.fadeIn();
        $("#idBorrarUsuario").val($(this).data("idborrarusuario"));
        $body9.addClass('block-scroll9'); // clase de manejo 
    });

    $('#popup-overlay9').on('click', function() {
        $popContainer9.fadeOut();
        $body9.removeClass('block-scroll9'); // clase de manejo
    });

    var $popContainer10 = $('#popup-container10');
    var $body10 = $('html,body');

    $('#visualizarmodImgPreg2s').on('click', function() {
        $popContainer10.fadeIn();
        $("#idBorrarUsuario").val($(this).data("idborrarusuario"));
        $body10.addClass('block-scroll10'); // clase de manejo 
    });

    $('#popup-overlay10').on('click', function() {
        $popContainer10.fadeOut();
        $body10.removeClass('block-scroll10'); // clase de manejo
    });

    
    
   


       
    setInterval(function(){
        $('#tablaInformeHijo').load('http://localhost/Faq/index.php #tablaInformeHijo');
    }, 10000);

    
    setInterval(function(){
        $("#countMessages").load("http://localhost/Faq/index.php #countMessages");
            
        }, 5000);

    
    if(jQuery(location).attr("href") == "http://localhost/Faq/index.php?=addcate"){
        $("#addCate").css("display", "block");
        $("#yasta").css("display", "none");
    }

    if(jQuery(location).attr("href") == "http://localhost/Faq/index.php?=addQuesion"){
        $("#addQuestion").css("display", "block");
        $("#yasta").css("display", "none");
    }

    if(jQuery(location).attr("href") == "http://localhost/Faq/index.php?=addUser"){
        $("#addWorkers").css("display", "block");
        $("#yasta").css("display", "none");
    }

    if(jQuery(location).attr("href") == "http://localhost/Faq/index.php?=modSub"){
        $("#mod2").css("display", "block");
        $("#yasta").css("display", "none");
    }

    if(jQuery(location).attr("href") == "http://localhost/Faq/index.php?=tableUser"){
        $("#listaWorkers").css("display", "block");
        $("#yasta").css("display", "none");
    }

    if(jQuery(location).attr("href") == "http://localhost/Faq/index.php?=modCate"){
        $("#mod1").css("display", "block");
        $("#yasta").css("display", "none");
    }

    if(jQuery(location).attr("href") == "http://localhost/Faq/index.php?=tableQuestion"){
        $("#listQ").css("display", "block");
        $("#yasta").css("display", "none");
    }

    if(jQuery(location).attr("href") == "http://localhost/Faq/index.php?=mensajeria"){
        $("#cuadromensajes").css("display", "block");
        $("#yasta").css("display", "none");
    }

    if(jQuery(location).attr("href") == "http://localhost/Faq/index.php?=addSub"){
        $("#addSubCategr").css("display", "block");
        $("#yasta").css("display", "none");
    }



    $("#tablaInformeHijo").on("click", 'i.bi-exclamation-triangle-fill', function (e) {
        e.preventDefault();
        
        $("#search").val($(this).data("preguntamensajeria"));
        $('#listQ').show(500);
        $('#mod1').hide(500);
        $("#addCate").hide(500);
        $("#yasta").hide(500);
        $('#addQuestion').hide(500);
        $('#mod').hide(500);
        $('#addSubCategr').hide(500);
        $("#cuerpoPregunta").hide(200);
        $('#mod2').hide(200);
        $('#mod3').hide(200);
        $('#addWorkers').hide(200);
        $('#listaWorkers').hide(200);
        $('#mod4').hide(200);
        $("#cuadromensajes").hide(200);
    });



    var $popContainer8 = $('#popup-container8');
    var $body8 = $('html,body');

    $("#tablaInformeHijo").on("click", 'i.bi-file-x-fill', function (e) {

        $popContainer8.fadeIn();
        $body8.addClass('block-scroll8');
        $("#idBorrarinforme").val($(this).data("idinforme"));
    });

    $('#cancelacionBorrarInforme').on('click', function() {
        $popContainer8.fadeOut();
        $body8.removeClass('block-scroll8'); // clase de manejo
    });
    
    function filePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#uploadForm + img').remove();
                $("#visualizarmodImgPreg1s").attr("src", e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }else{
            $("#visualizarmodImgPreg1s").attr("src", "../Faq/upload/imagenesPregunta/"+$("#img1Pregmod").val());
        }
    }

    $("#modImgPreg1s").change(function () {
        filePreview(this);
    });

    function filePreviews(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#uploadForm + img').remove();
                $("#visualizarmodImgPreg2s").attr("src", e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }else{
            $("#visualizarmodImgPreg2s").attr("src", "../Faq/upload/imagenesPregunta/"+$("#img2Pregmod").val());
        }
    }

    $("#modImgPreg2s").change(function () {
        filePreviews(this);
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('a.scroll-top').fadeIn('slow');
        } else {
            $('a.scroll-top').fadeOut('slow');
        }
    });
    $('a.scroll-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 600);
    }); 
    

    $("#visualizarmodImgPreg1s").click(function (e) { 
        e.preventDefault();
        $("#imadmin1").val($("#img1Pregmod").val());
        $("#imadmin1visual").attr("src", "../Faq/upload/imagenesPregunta/"+$("#imadmin1").val());
        
    });

    $("#visualizarmodImgPreg2s").click(function (e) { 
        e.preventDefault();
        $("#imadmin2").val($("#img2Pregmod").val());
        $("#imadmin2visual").attr("src", "../Faq/upload/imagenesPregunta/"+$("#imadmin2").val());
        
    });

    var $popContainer11 = $('#popup-container11');
    var $body11 = $('html,body');

    $('.bi-send-fill').on('click', function() {
        $popContainer11.fadeIn();
        $("#idBorrarUsuario").val($(this).data("idborrarusuario"));
        $body11.addClass('block-scroll11'); // clase de manejo 
    });

    $('#popup-overlay11').on('click', function() {
        $popContainer11.fadeOut();
        $body11.removeClass('block-scroll11'); // clase de manejo
    });

    var $popContainer12 = $('#popup-container12');
    var $body12 = $('html,body');

    $("#tablaInformeHijo").on("click", ".mipo", function (e) {

        $popContainer12.fadeIn();
        $body12.addClass('block-scroll12');
        $("#mandarsoftwareparatryadd").val($(this).data("softwaretryaddquestion"));
        $("#mandarpreguntaparatryadd").val($(this).data("preguntatryaddquestion"));
        $("#mandarcateparatryadd").val($(this).data("catetryaddquestion"));

    });

    $('#cancelartryaddquestion').on('click', function() {
        $popContainer12.fadeOut();
        $body12.removeClass('block-scroll12'); // clase de manejo
    });

    $("#irparatryaddquestion").on("click", function(){

        $("#addQuestionComplete").val($("#mandarpreguntaparatryadd").val());
        $(".yaelegidosubcate").text($("#mandarsoftwareparatryadd").val());
        $("#elegirCateParaAddPregunta2").val($("#mandarcateparatryadd").val());
        $("#elegirSubParaAddPregunta").val($("#mandarsoftwareparatryadd").val());


        $popContainer12.fadeOut();
        $body12.removeClass('block-scroll12');
       
        
        $('#listQ').hide(500);
        $('#mod1').hide(500);
        $("#addCate").hide(500);
        $("#yasta").hide(500);
        $('#addQuestion').show(500);
        $('#mod').hide(500);
        $('#addSubCategr').hide(500);
        $("#cuerpoPregunta").hide(200);
        $('#mod2').hide(200);
        $('#mod3').hide(200);
        $('#addWorkers').hide(200);
        $('#listaWorkers').hide(200);
        $('#mod4').hide(200);
        $("#cuadromensajes").hide(200);
        

    });

    var x = ["http://localhost/Faq/view/jade2.jpg", "http://localhost/Faq/view/jade.jpg"];
    var c = x[Math.floor((Math.random() * 2) + 0)];
    
    $('#idtodofondologin').css("background-image", "url(" + c + ")");
    




});