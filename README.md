# Projeto-Php-Cadastro

projeto feito em PHP e MySql

Script do banco de dados

```
create database cadastro_motores;

use cadastro_motores;

create table motores
(
	id int unsigned not null auto_increment,
	modelo varchar(255) not null,
	numero_serie varchar(255) not null,
	potencia int not null,
	primary key(id)
);
```
