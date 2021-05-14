
DROP DATABASE IF EXISTS pizza;

CREATE DATABASE pizza DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE pizza;

DROP USER IF EXISTS 'admpizza'@'localhost';

CREATE USER 'admpizza'@'localhost' IDENTIFIED BY '12345'; 

GRANT SELECT, INSERT, UPDATE, DELETE ON pizza.* TO 'admpizza'@'localhost';

CREATE TABLE cliente (
  codigo INTEGER AUTO_INCREMENT PRIMARY KEY,    
  nome VARCHAR(50) NOT NULL, 
  email VARCHAR(50) NOT NULL,
  telefone VARCHAR(14) NOT NULL,
  dataNascimento DATE,
  senha VARCHAR(72),
  endereco VARCHAR(100),
  bairro VARCHAR(20),
  comoConheceu BOOLEAN,
  promoPizza BOOLEAN,
  promoParceiros BOOLEAN,
  observacoes TEXT
);

CREATE TABLE sabor (
  codigo INTEGER AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(20),
  ingredientes VARCHAR(100),
  nomeImagem VARCHAR(50)  
);

CREATE TABLE pedido (
  numero INTEGER AUTO_INCREMENT PRIMARY KEY,  
  codCliente INTEGER,
  taxaEntrega REAL,
  tipoEntrega tinyint(1),
  dataPedido DATETIME,
  status tinyint(1),
  FOREIGN KEY (codCliente) REFERENCES cliente(codigo)
);

CREATE TABLE itemPedido (
  codItem INTEGER AUTO_INCREMENT,
  numPedido INTEGER,
  sabor1 INTEGER,
  sabor2 INTEGER,
  sabor3 INTEGER,
  sabor4 INTEGER,
  quantidade INTEGER,
  valor REAL,
  PRIMARY KEY (codItem),
  FOREIGN KEY (numPedido) REFERENCES pedido(numero),
  FOREIGN KEY (sabor1) REFERENCES sabor(codigo),
  FOREIGN KEY (sabor2) REFERENCES sabor(codigo),
  FOREIGN KEY (sabor3) REFERENCES sabor(codigo),
  FOREIGN KEY (sabor4) REFERENCES sabor(codigo)
);

INSERT INTO sabor values (NULL, "Calabresa", "Molho, calabresa e mussarela", "calabresa.jpg");
INSERT INTO sabor values (NULL, "Alho e Óleo", "Molho, alho, óleo e mussarela", "alho.jpg");
INSERT INTO sabor values (NULL, "Atum", "Molho, Atum, cebola e mussarela", "atum.jpg");
INSERT INTO sabor values (NULL, "Marguerita", "Molho, mussarela, manjericão, tomate", "marguerita.jpg");
INSERT INTO sabor values (NULL, "Milho", "Molho, milho e mussarela", "milho.jpg");
INSERT INTO sabor values (NULL, "Vegetariana", "Molho, rúcula, tomate seco e mussarela", "vegetariana.jpg");
INSERT INTO sabor values (NULL, "Mussarela", "Molho, mussarela e orégano", "mussarela.jpg");
INSERT INTO sabor values (NULL, "Strogonoff", "Molho, strogonoff e batata palha", "strogonoff.jpg");
INSERT INTO sabor values (NULL, "Frango", "Molho, frango, catupiry e mussarela", "frango.jpg");


