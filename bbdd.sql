CREATE DATABASE FAQ;
USE FAQ;

CREATE TABLE USUARIO(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    NOMBRE VARCHAR(100),
    NOMBRE_USUARIO VARCHAR(100),
    CENCRYPT VARCHAR(200),
    ROL VARCHAR(100)
);

CREATE TABLE PREGUNTAS(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    CATE VARCHAR(100),
    SOFT VARCHAR(100),
    FECHA VARCHAR(100),
    PREGUNTA VARCHAR(100),
    IMAGEN1 VARCHAR(2000),
    IMAGEN2 VARCHAR(2000),
    RESPUESTA VARCHAR(10000)
);

CREATE TABLE SUBCATEGORIAS(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    CATE VARCHAR(100),
    SUB_SOFT VARCHAR(100)
);

CREATE TABLE CATEGORIAS(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    NOMBRE_SOFT VARCHAR(100)
);

CREATE TABLE CHAT(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    USUARIO VARCHAR(100),
    FECHA VARCHAR(100),
    CATE VARCHAR(100),
    SOFTWARE VARCHAR(100),
    PREGUNTA VARCHAR(100),
    RESPUESTA VARCHAR(10000),
    INFORME VARCHAR(5000)
);

INSERT INTO USUARIO(NOMBRE, NOMBRE_USUARIO, CENCRYPT, ROL)
VALUES
("ADMIN", "ADMIN12", "$2y$10$ZcJLruQ1V1ckdtROg7jma./0IVxNBAC1gjEWqLvKUnT9LYQ0JPdJ2", "ADMIN"),
("MARCO", "MARCO13", "$2y$10$LnvQAFqbu/OL18UKOPuotei8NXRj7fT0BuJdjPcrbZP1UowHVc1x6", "USUARIO");

INSERT INTO CATEGORIAS(NOMBRE_SOFT)
VALUES
("OFFICE"),
("S.O"),
("A.P.I");


INSERT INTO SUBCATEGORIAS(CATE, SUB_SOFT)
VALUES
("OFFICE", "Microsoft Excel"),
("OFFICE", "Microsoft Word"),
("S.O", "Windows 10"),
("S.O", "Windows 6"),
("S.O", "Windows 4"),
("S.O", "Mac OS"),
("S.O", "Solaris"),
("S.O", "Fedora"),
("A.P.I", "Frankfurter"),
("A.P.I", "Fake Store"),
("A.P.I", "Unsplash"),
("A.P.I", "NASA"),
("A.P.I", "Open Weather Map"),
("A.P.I", "FOOTBALL"),
("OFFICE", "Microsoft PowerPoint");


INSERT INTO PREGUNTAS(CATE, SOFT, FECHA, PREGUNTA, IMAGEN1, IMAGEN2, RESPUESTA)
VALUES
("OFFICE", "Microsoft Excel", "24/02/1994","¿Cómo entro a Word?", "prueba12023_03_29_09_39_15.png", "prueba12023_03_29_09_39_15.png","Haz clic en inicio/todos los programas/Microsof office/Word"),
("OFFICE", "Microsoft Excel", "09/02/1994","¿En qué menú se encuentra la opción para cambiar el tipo de fuente en Word?", "prueba12023_03_29_09_39_15.png", "prueba12023_03_29_09_39_15.png","En el menú inicio"),
("S.O", "Windows 10", "04/02/1994", "¿La actualización a Windows 10 eliminará mis archivos o conservaré mis datos y configuraciones?", "prueba12023_03_29_09_39_15.png", "prueba12023_03_29_09_39_15.png" ,"
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidadesLa actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.incompatibilidadesLa actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidadesincompatibilidadesLa actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades"),
("S.O", "Windows 10", "04/02/1994", "¿La actualización a Windows 10 eliminará mis archivos o conservaré mis datos y configuraciones?", "prueba12023_03_29_09_39_15.png", "prueba12023_03_29_09_39_15.png" ,"
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidadesLa actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.incompatibilidadesLa actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidadesincompatibilidadesLa actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades"),
("S.O", "Windows 10", "04/02/1994", "¿La actualización a Windows 10 eliminará mis archivos o conservaré mis datos y configuraciones?", "prueba12023_03_29_09_39_15.png", "prueba12023_03_29_09_39_15.png" ,"
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidadesLa actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.incompatibilidadesLa actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidadesincompatibilidadesLa actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades"),
("S.O", "Windows 10", "04/02/1994", "¿La actualización a Windows 10 eliminará mis archivos o conservaré mis datos y configuraciones?", "prueba12023_03_29_09_39_15.png", "prueba12023_03_29_09_39_15.png" ,"
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidadesLa actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.incompatibilidadesLa actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidadesincompatibilidadesLa actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades"),
("S.O", "Windows 10", "04/02/1994", "¿La actualización a Windows 10 eliminará mis archivos o conservaré mis datos y configuraciones?", "prueba12023_03_29_09_39_15.png", "prueba12023_03_29_09_39_15.png" ,"
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidadesLa actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.incompatibilidadesLa actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidadesincompatibilidadesLa actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades.
La actualización conserva archivos, configuraciones y aplicaciones, aunque en este último caso, algunas aplicaciones de terceros podrían necesitar una reinstalación posterior o resultar incompatibles, el asesor de actualización de Windows 10 te ofrecerá un informe sobre las posibles incompatibilidades"),
("S.O", "Windows 10", "14/12/1994", "¿Será permanente o por tiempo limitado, tendré que pagar?", "prueba12023_03_29_09_39_15.png", "prueba12023_03_29_09_39_15.png", "Será permanente y gratuito en el equipo donde realices la actualización si se ejecuta dentro del periodo ofrecido por Microsoft durante toda la vida útil del equipo que va desde el pasado 29 de Julio de 2015 hasta el 29 de Julio de 2016."),
("S.O", "Windows 10", "22/06/1994", "¿En qué menú se encuentra la opción para cambiar el tipo de fuente en Word?", "prueba12023_03_29_09_39_15.png", "prueba12023_03_29_09_39_15.png", "En el menú inicio");


