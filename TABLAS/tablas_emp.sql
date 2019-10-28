/*tablas normalizadas version 1.0*/
CREATE TABLE Empresas
(id_emp INT(5),
 nombre_emp VARCHAR(80) NOT NULL UNIQUE,
cel_emp VARCHAR(10) NOT NULL UNIQUE,
direccion_emp VARCHAR(100) NOT NULL,
representante_emp VARCHAR(50)NOT NULL,
CONSTRAINT in_emp_pk PRIMARY KEY(id_emp)
);
/*tablas administradores se dividio al normaliza*/
CREATE TABLE Adminstradores_login(
id_admi INT(5),
correo_admi VARCHAR(100) NOT NULL UNIQUE,
contrasena_admi VARCHAR(30) NOT NULL,    
CONSTRAINT id_admi_pk PRIMARY KEY(id_admi)    
);

CREATE TABLE Adminstradores_infopersonal
(id_admi INT(5),
 nombre_admi VARCHAR(50) NOT NULL,
 fechanac_admi DATE,
 celular_admi VARCHAR(10) NOT NULL UNIQUE,
 CONSTRAINT id_admi_fk FOREIGN KEY(id_admi)
 REFERENCES Adminstradores_login(id_admi)
);

CREATE TABLE Adminstradores_infoempresa
(id_admi INT(5),
 puesto_admi VARCHAR(100)NOT NULL,
 salario_admi INT(8)NOT NULL,
 CONSTRAINT id_admi_fk2 FOREIGN KEY(id_admi)
 REFERENCES Adminstradores_login(id_admi)
);
/*igual se dividió por la normalizacion*/
CREATE TABLE convocatorias
(id_conv INT(5),
 nombre_conv VARCHAR(100) NOT NULL,
 costo_conv INT(10),
 CONSTRAINT id_conv_pk PRIMARY KEY(id_conv)
);

CREATE TABLE convocatorias_precio
(id_conv INT(5),
 modalidad_cp VARCHAR(50) NOT NULL,
 precio_cp INT(5) NOT NULL,
 CONSTRAINT id_conv_pk FOREIGN KEY(id_conv)
 REFERENCES convocatorias(id_conv)
);

CREATE TABLE convocatorias_infoevento
(id_conv int(5),
 lugar_conv VARCHAR(100) NOT NULL,
 hora_conv TIME NOT NULL,
 fecha_conv DATE NOT NULL,
 CONSTRAINT id_conv_fk2 FOREIGN KEY(id_conv)
 REFERENCES convocatorias(id_conv)
);
/*solamente es una tabla de relaciones con 2 llaves foraneas*/
CREATE TABLE Empresas_evento(
id_emp INT(5),
id_conv INT(5),
CONSTRAINT id_emp_fk FOREIGN KEY(id_emp)
    REFERENCES Empresas(id_emp),
CONSTRAINT id_emp_fk3 FOREIGN KEY(id_conv)
    REFERENCES convocatorias(id_conv)
);

CREATE TABLE Ramas_eventos
(id_conv INT(5),
 rama_re VARCHAR(1),
 modalidad_re VARCHAR(70),
 categoria_re VARCHAR(70),
 edad_re_min INT(3) NOT NULL,
 edad_re_max INT(3) NOT NULL,
 CONSTRAINT id_conv_fk4 FOREIGN KEY(id_conv)
 REFERENCES convocatorias(id_conv),
 CONSTRAINT combinacion_re_pk PRIMARY KEY(id_conv, rama_re, modalidad_re, categoria_re)
);

CREATE TABLE kits
(id_conv INT(5),
 fecha_kits DATE NOT NULL,
 lugar_kits VARCHAR(100) NOT NULL,
 requisitos_kits VARCHAR(200),
 CONSTRAINT id_conv_fk5 FOREIGN KEY(id_conv)
 REFERENCES convocatorias(id_conv)
);


CREATE TABLE categoria_varonil(
num_cv NUMBER(2) CONSTRAINT  num_cv_nn NOT NULL,
modalidad_cv VARCHAR2(100) CONSTRAINT modalidad_cv_nn NOT NULL,
nombre_cv VARCHAR2(50),
edad_cv_min NUMBER(2),
edad_cv_max NUMBER(2),
id_conv VARCHAR2(100),
CONSTRAINT id_conv_var_fk FOREIGN KEY(id_conv)
REFERENCES convocatorias(id_conv)
);

CREATE TABLE categoria_femenil(
 modalidad_fem VARCHAR2(100) CONSTRAINT modalidad_fem_nn NOT NULL,   
cat1_fem VARCHAR2(50),
edad1_fem_min NUMBER(2),
edad1_fem_max NUMBER(2),

cat2_fem VARCHAR2(50),
edad2_fem_min NUMBER(2),
edad2_fem_max NUMBER(2),

cat3_fem VARCHAR2(50),
edad3_fem_min NUMBER(2),
edad3_fem_max NUMBER(2),

cat4_fem VARCHAR2(50),
edad4_fem_min NUMBER(2),
edad4_fem_max NUMBER(2),

cat5_fem VARCHAR2(50),
edad5_fem_min NUMBER(2),
edad5_fem_max NUMBER(2),

cat6_fem VARCHAR2(50),
edad6_fem_min NUMBER(2),
edad6_fem_max NUMBER(2),

cat7_fem VARCHAR2(50),
edad7_fem_min NUMBER(2),
edad7_fem_max NUMBER(2),

id_conv_fem VARCHAR2(100),
CONSTRAINT id_conv_fem_fk FOREIGN KEY(id_conv_fem)
REFERENCES convocatorias(id_conv)
);

CREATE TABLE usuarios(
id_us NUMBER(7) CONSTRAINT id_us_pk PRIMARY KEY, 
nombre_us VARCHAR2(50) CONSTRAINT nombre_us NOT NULL,
apellido_us VARCHAR2(50) CONSTRAINT apellido_us NOT NULL, 
correo_us VARCHAR2(80) CONSTRAINT correo_us_u UNIQUE,
cel_us NUMBER(10)CONSTRAINT cel_us_u UNIQUE,
genero_us CHAR CONSTRAINT genero_us_nn NOT NULL, 
nacimiento_us DATE CONSTRAINT nacimiento_us_nn NOT NULL,
);

CREATE TABLE contacto_emergencia(
nombre_cm VARCHAR2(50),
apellido_cm VARCHAR2(50),
/*nombre_conv VARCHAR2(100),*/
id_us NUMBER(7),
cel_us VARCHAR(15),
CONSTRAINT id_us_fk FOREIGN KEY(id_us)
REFERENCES usuarios(id_us),
/*CONSTRAINT nombre_conv_cm_fk FOREIGN KEY(nombre_conv)
REFERENCES convocatorias(nombre_conv)
*/
);

CREATE TABLE inscripciones(
fecha_ins DATE CONSTRAINT fecha_ins_nn NOT NULL,
lugar1_ins VARCHAR2(250) CONSTRAINT lugar1_ins_nn NOT NULL,
lugar2_ins VARCHAR2(250),
lugar3_ins VARCHAR2(250),
lugar4_ins VARCHAR2(250),
precio1_ins NUMBER(8,4) CONSTRAINT precio1_ins_nn NOT NULL, /*el precio máximo será de 9999.9999*/
precio2_ins NUMBER(8,4),
precio3_ins NUMBER(8,4),
precio4_ins NUMBER(8,4),
nombre_conv VARCHAR2(100),
CONSTRAINT id_conv_fk FOREIGN KEY(id_conv)
REFERENCES convocatorias(id_conv)
);

CREATE TABLE kits(
fecha_kits DATE CONSTRAINT fecha_kits_nn NOT NULL,
hora_kits TIME,
lugar_kits VARCHAR2(250),
requisitos_kits VARCHAR2(250), /*Son los requisitos extra de la empresa*/
nombre_conv VARCHAR2(100),
CONSTRAINT id_conv_kits_fk FOREIGN KEY(id_conv)
REFERENCES convocatorias(id_conv)
);
