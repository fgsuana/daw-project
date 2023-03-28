-- Tabla de Proyectos
CREATE TABLE proyecto (
  id_proyecto INT PRIMARY KEY AUTO_INCREMENT,
  nombre_proyecto VARCHAR(50) NOT NULL,
  descripcion_proyecto TEXT,
  id_usuario_creador INT,
  FOREIGN KEY (id_usuario_creador) REFERENCES usuario(id_usuario)
);

-- Tabla de Usuarios
CREATE TABLE usuario (
  id_usuario INT PRIMARY KEY AUTO_INCREMENT,
  nombre_usuario VARCHAR(50) NOT NULL,
  apellidos_usuario VARCHAR(50),
  correo_electronico VARCHAR(50),
  telefono VARCHAR(20)
);

-- Tabla de Perfiles
CREATE TABLE perfil (
  id_perfil INT PRIMARY KEY AUTO_INCREMENT,
  nombre_perfil VARCHAR(50) NOT NULL
);

-- Tabla intermedia Usuario-Perfil
CREATE TABLE usuario_perfil (
  id_usuario_perfil INT PRIMARY KEY AUTO_INCREMENT,
  id_usuario INT,
  id_perfil INT,
  FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario),
  FOREIGN KEY (id_perfil) REFERENCES perfil(id_perfil)
);

-- Tabla intermedia Proyecto-Perfil
CREATE TABLE proyecto_perfil (
  id_proyecto_perfil INT PRIMARY KEY AUTO_INCREMENT,
  id_proyecto INT,
  id_perfil INT,
  FOREIGN KEY (id_proyecto) REFERENCES proyecto(id_proyecto),
  FOREIGN KEY (id_perfil) REFERENCES perfil(id_perfil)
);

-- Tabla intermedia Usuario-Proyecto
CREATE TABLE usuario_proyecto (
  id_usuario_proyecto INT PRIMARY KEY AUTO_INCREMENT,
  id_proyecto INT,
  id_usuario INT,
  tipo_usuario ENUM('posible', 'candidato'),
  FOREIGN KEY (id_proyecto) REFERENCES proyecto(id_proyecto),
  FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);