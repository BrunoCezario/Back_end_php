#create database campeonato;
use campeonato;

CREATE TABLE jogador (
id int primary key auto_increment,
nome varchar(100) not null,
modalidade varchar(40) not null,
qtdMedalha int,
salario decimal(10,2) not null,
id_clube int not null,
 FOREIGN KEY (id_clube)
        REFERENCES clube (id)
);


CREATE TABLE partida (
id int primary key auto_increment,
estadio varchar(40) not null,
juiz varchar(100) not null,
data_partida date not null,
quantidade_publico int not null,
id_jogador int not null,
id_clube int not null,
 FOREIGN KEY (id_jogador)
        REFERENCES jogador (id),
 FOREIGN KEY (id_clube)
        REFERENCES clube (id)
);


CREATE TABLE clube (
id int primary key auto_increment,
nome varchar(100) not null,
data_fundacao date not null,
bairro varchar(100) not null
);

CREATE TABLE juiz (
id int primary key auto_increment,
nome varchar(100) not null,
salario decimal(10,2) not null
);




