
drop database farmaz;


create database farmaz;

use farmaz;

create table medicamento (
	id int not null primary key auto_increment,
	nome_do_prod varchar(50),
    preco decimal(6,2)
    );   
    
    
create table medicam_vend (
    id int not null,
    id_venda int,
    email varchar(250),
    foreign key (id) references medicamento(id)    
    );

create table medico_contact (
	id int primary key not null auto_increment,
    nome varchar(250),
    telefone varchar(12),
    email varchar(250)
);


	insert into medicamento values (DEFAULT,'Eurofarma ZIAGENAVIR',60.00);
    insert into medicamento values (DEFAULT,'Glaxosmithkline ZYTIGA',70.00);
    insert into medicamento values (DEFAULT,'Bayer ASPIRINA',90.00);
    insert into medicamento values (DEFAULT,'Teva Farmacêutica COPAXONE',30.00);
    insert into medicamento values (DEFAULT,'Teuto  SULFATO DE AMICACINA',120.00);
    insert into medicamento values (DEFAULT,'Janssen Cilag  BUDECORT AQUA',80.00);
    
    
    
    select * from medicamento;
    