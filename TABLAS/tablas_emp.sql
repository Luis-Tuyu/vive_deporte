/*tablas normalizadas version 1.0*/
CREATE TABLE Empresas
(id_emp INT(5),
 nombre_emp VARCHAR(80) NOT NULL UNIQUE,
cel_emp VARCHAR(10) NOT NULL UNIQUE,
direccion_emp VARCHAR(100) NOT NULL,
repre_emp VARCHAR(50)NOT NULL,
CONSTRAINT in_emp_pk PRIMARY KEY(id_emp)
);
//modificacion

CREATE TABLE Administradores
(correo_admi VARCHAR(100) PRIMARY KEY,
 nombre_admi VARCHAR(50) NOT NULL,
 fechanac_admi DATE NOT NULL,
 celular_admi VARCHAR(10) NOT NULL UNIQUE,
 puesto_admi VARCHAR(100)NOT NULL,
 salario_admi INT(8)NOT NULL
);
CREATE TABLE login_admin(
correo_admi VARCHAR(100),
contrasena_admi VARCHAR(30) NOT NULL    ,
FOREIGN KEY(correo_admi) REFERENCES Administradores(correo_admi)
);

/*igual se dividió por la normalizacion*/
CREATE TABLE convocatorias
(id_conv INT(5)
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
 modalidad_re VARCHAR(70),
 categoria_re VARCHAR(70),
 edad_re INT(3) NOT NULL,
 CONSTRAINT id_conv_fk4 FOREIGN KEY(id_conv)
 REFERENCES convocatorias(id_conv)
);

CREATE TABLE kits
(id_conv INT(5),
 fecha_kits DATE NOT NULL,
 lugar_kits VARCHAR(100) NOT NULL,
 requisitos_kits VARCHAR(200),
 CONSTRAINT id_conv_fk5 FOREIGN KEY(id_conv)
 REFERENCES convocatorias(id_conv)
);

//modificacion
CREATE TABLE usuarios
(correo_us VARCHAR(100) PRIMARY KEY,
 nombre_us VARCHAR(100) NOT NULL,
 cel_us VARCHAR(10) NOT NULL UNIQUE,
 genero_us VARCHAR(1) NOT NULL,
 fechanac_us DATE NOT NULL
);

CREATE TABLE login_us
(correo_us VARCHAR(100),
contrasena_us VARCHAR(100) NOT NULL UNIQUE,
FOREIGN KEY(correo_us) REFERENCES usuarios(correo_us)
);

CREATE TABLE  contacto_emergencia
(id_us INT(5),
 nombre_cm VARCHAR(50) NOT NULL,
 apellido_cm VARCHAR(50) NOT NULL,
 cel_cm VARCHAR(10) NOT NULL,
 CONSTRAINT id_us_pk PRIMARY KEY(id_us)
);

CREATE TABLE inscripciones(
id_conv INT(5),
correo_us VARCHAR(100),
fecha_ins DATE NOT NULL,
hora_ins TIME NOT NULL,
CONSTRAINT id_us_fk2 FOREIGN KEY(correo_us)
    REFERENCES usuarios(correo_us),
    CONSTRAINT id_conv_fk6 FOREIGN KEY(id_conv)
    REFERENCES convocatorias(id_conv)
);
