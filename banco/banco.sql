create table if not exists pessoa (
id_pes serial not null primary key,
pes_nome varchar(50) not null,
pes_cpf int not null,
pes_tipo int not null,
pes_senha varchar(20) not null
);

create table if not exists contato(
id_cont serial not null primary key,
tipo int not null,
descricao varchar(255) not null,
id_pes integer not null,
foreign key (id_pes) references pessoa (id_pes)
);