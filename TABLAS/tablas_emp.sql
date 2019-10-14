/*subirlo al repositorio*/
CREATE TABLE administradores(
 usuario_admi VARCHAR2(100) CONSTRAINT usuario_admi_pk PRIMARY KEY,
 nombre_admi VARCHAR(50) CONSTRAINT nombre_admi_U UNIQUE,
 clave_admi VARCHAR(100) CONSTRAINT clave_admi_nn NOT NULL   
);

CREATE TABLE convocatorias(
nombre_conv VARCHAR2(100) CONSTRAINT nombre_cov_pk PRIMARY KEY,
lugar_conv VARCHAR2(100), 
hora_conv TIME,
/*imagen_ conv BFILE
no me lo reconoce con el plugin xd*/
);

CREATE TABLE categoria_varonil(
modalidad_var VARCHAR2(100) CONSTRAINT modalidad_var_nn NOT NULL,
cat1_var VARCHAR2(50),
edad1_var_min NUMBER(2),
edad1_var_max NUMBER(2),

cat2_var VARCHAR2(50),
edad2_var_min NUMBER(2),
edad2_var_max NUMBER(2),

cat3_var VARCHAR2(50),
edad3_var_min NUMBER(2),
edad3_var_max NUMBER(2),

cat4_var VARCHAR2(50),
edad4_var_min NUMBER(2),
edad4_var_max NUMBER(2),

cat5_var VARCHAR2(50),
edad5_var_min NUMBER(2),
edad5_var_max NUMBER(2),

cat6_var VARCHAR2(50),
edad6_var_min NUMBER(2),
edad6_var_max NUMBER(2),

cat7_var VARCHAR2(50),
edad7_var_min NUMBER(2),
edad7_var_max NUMBER(2),

nombre_conv_var VARCHAR2(100),
CONSTRAINT nombre_conv_var_fk FOREIGN KEY(nombre_conv_var)
REFERENCES convocatorias(nombre_conv)
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

nombre_conv_fem VARCHAR2(100),
CONSTRAINT nombre_conv_fem_fk FOREIGN KEY(nombre_conv_fem)
REFERENCES convocatorias(nombre_conv)
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
nombre_conv VARCHAR2(100),
id_us NUMBER(7),
CONSTRAINT id_us_fk FOREIGN KEY(id_us)
REFERENCES usuarios(id_us),
CONSTRAINT nombre_conv_cm_fk FOREIGN KEY(nombre_conv)
REFERENCES convocatorias(nombre_conv)
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
CONSTRAINT nombre_cov_fk FOREIGN KEY(nombre_conv)
REFERENCES convocatorias(nombre_conv)
);

CREATE TABLE kits(
fecha_kits DATE,
hora_kits TIME,
lugar_kits VARCHAR2(250),
requisitos_kit VARCHAR2(250), /*Son los requisitos extra de la empresa*/
nombre_conv VARCHAR2(100),
CONSTRAINT nombre_conv_kits_fk FOREIGN KEY(nombre_conv)
REFERENCES convocatorias(nombre_conv)
);
