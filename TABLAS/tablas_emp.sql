/*tablas normalizadas version 1.0*/
CREATE TABLE Empresas
(id_emp INT(5),
 nombre_emp VARCHAR(80) NOT NULL UNIQUE,
cel_emp VARCHAR(10) NOT NULL UNIQUE,
direccion_emp VARCHAR(100) NOT NULL,
representante_emp VARCHAR(50)NOT NULL,
CONSTRAINT in_emp_pk PRIMARY KEY(id_emp)
);

CREATE TABLE administradores(
id_admi NUMBER(3) CONSTRAINT id_admi_pk PRIMARY KEY, /*llave primaria nueva*/
 correo_admi VARCHAR(100) CONSTRAINT correo_admi_u UNIQUE  /*cambio de dato*/
 nombre_admi VARCHAR2(50) CONSTRAINT nombre_admi_nn NOT NULL,
 clave_admi VARCHAR2(100) CONSTRAINT clave_admi_nn NOT NULL,
 puesto_admi VARCHAR2(50) CONSTRAINT puesto_admi_nn NOT NULL,
 salario_Admi NUMBER(9,4),
 edad_admi NUMBER(3) CONSTRAINT edad_admi_nn NOT NULL,
 celular_admi NUMBER(10) CONSTRAINT celular_admi_u UNIQUE,
 
);

CREATE TABLE convocatorias(
id_conv NUMBER(10) CONSTRAINT id_conv_pk PRIMARY KEY,/*cambio de llave primaria*/
nombre_conv VARCHAR2(100) CONSTRAINT nombre_cov_u UNIQUE,
lugar_conv VARCHAR2(100), 
hora_conv TIME,
fecha_conv DATE CONSTRAINT fecha_conv_u UNIQUE,
costo_conv NUMBER(9,2) CONSTRAINT consto_conv_nn NOT NULL
/*DEBEMOS LIGAR EL ID_EMP CON LOS EVENTOS*/
/*imagen_ conv BFILE
no me lo reconoce con el plugin xd*/
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
