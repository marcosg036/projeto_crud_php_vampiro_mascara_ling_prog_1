create database vampiro_mascara;

use vampiro_mascara;

create table clas(
    id_cla int primary key auto_increment,
    nome varchar(255) not null,
    descricao text
);

create table personagens(
    id_personagem int primary key auto_increment,
    nome varchar(255) not null,
    geracao int,
    cla int not null,
    foreign key (cla) references clas(id_cla),
    conceito text
);

create table disciplinas(
    id_disciplina int primary key auto_increment,
    nome varchar(255) not null,
    funcionamento text
);

create table cronicas(
    id_cronica int primary key auto_increment,
    nome varchar(255) not null,
    era varchar(255),
    regiao varchar(255),
    prologo text
);

-- RELAÇÕES ENTRE AS ENTIDADE

create table personagens_disciplinas(
    id_personagens_disciplinas int primary key auto_increment,
    personagem int,
    foreign key (personagem) references personagens(id_personagem),
    disciplina int,
    foreign key (disciplina) references disciplinas(id_disciplina)
);

create table personagens_cronicas(
    id_personagens_cronicas int primary key auto_increment,
    personagem int,
    foreign key (personagem) references personagens(id_personagem),
    cronica int,
    foreign key (cronica) references cronicas(id_cronica)
);

-- INSERTs PRÉ-INSERIDOS

insert into clas (nome, descricao) values
('Brujah', 'Vampiros impulsivos, guerreiros e apaixonados por revolução.'),
('Toreador', 'Artistas sensíveis que prezam pela beleza e estética.'),
('Ventrue', 'Líderes naturais, aristocráticos e dominadores.'),
('Nosferatu', 'Criaturas deformadas que vivem nas sombras e coletam segredos.'),
('Tremere', 'Feiticeiros vampíricos mestres da Taumaturgia.');

insert into personagens (nome, geracao, cla, conceito) values
('Marcus Valerius', 9, 1, 'Um revolucionário antigo que busca destruir tiranias.'),
('Elena Duval', 10, 2, 'Uma dançarina que usa sua arte para manipular emoções.'),
('Sir Alistair Crown', 8, 3, 'Um nobre britânico que deseja governar sua cidade com mão de ferro.'),
('Ratskin', 11, 4, 'Um informante grotesco que conhece todos os segredos da cidade.'),
('Lucius Verdan', 9, 5, 'Um mago vampírico obcecado por conhecimento arcano.');

insert into disciplinas (nome, funcionamento) values
('Potência', 'Aumenta a força física além dos limites humanos.'),
('Rapidez', 'Permite movimentos extremamente velozes.'),
('Fortitude', 'Concede resistência sobrenatural contra danos.'),
('Auspex', 'Amplia os sentidos e percepção sobrenatural.'),
('Dominação', 'Permite controlar a mente e ações de mortais.');

insert into cronicas (nome, era, regiao, prologo) values
('Sangue e Cinzas', 'Era Moderna', 'Chicago', 'A cidade ferve com intrigas entre anciões e neófitos.'),
('A Dança Carmesim', 'Vitoriana', 'Londres', 'Mistérios sobrenaturais assolam os becos da capital.'),
('Os Sussurros do Abismo', 'Medieval', 'Transilvânia', 'Uma presença antiga desperta nas montanhas.'),
('Noite dos Condenados', 'Atual', 'São Paulo', 'Uma guerra silenciosa ocorre entre os clãs locais.'),
('Sombras do Nilo', 'Antiguidade', 'Egito', 'Segredos enterrados retornam para cobrar seu preço.');

insert into personagens_disciplinas (personagem, disciplina) values
(1, 1),
(2, 4),
(3, 5),
(4, 3),
(5, 2);

insert into personagens_cronicas (personagem, cronica) values
(1, 4),
(2, 1),
(3, 2),
(4, 5),
(5, 3);