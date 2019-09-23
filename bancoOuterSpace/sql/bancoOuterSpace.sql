create database outerSpace;
use outerSpace;

create table usuario (
	idUsuario int AUTO_INCREMENT,
    fase_idFase int,
    nome varchar(50),
    nick varchar(20),
    email varchar(60),
    senha varchar(50),
    maxPonto int,
    primary key (idUsuario)
);
create table fase (
	idFase int,
    pergunta_idPergunta int,
    tempo time,
    qtdMeteoro tinyint(100),
    velocidadeNave tinyint(100),
    primary key (idFase)
);
create table pergunta (
	idPergunta int,
    tema_idTema int,
    bonus_idBonus int,
    descricaoPergunta varchar(100),
    primary key (idPergunta)
);
create table alternativa (
	idAlternativa int,
    pergunta_idPergunta int,
    descricaoAlternativa varchar(100),
    opcaoCorreta bit,
    primary key (idAlternativa)
);
create table tema (
	idTema int,
    descricaoTema varchar(100),
    primary key (idTema)
);
create table bonus (
	idBonus int,
    tipo_idTipo int,
    valor int,
    primary key (idBonus)
);
create table tipo (
	idTipo int,
    descricaoTipo varchar(15),
    primary key (idTipo)
);
create table usuarioGrupo (
	idUsuarioGrupo int,
    usuario_idUsuario int,
    grupo_idGrupo int,
    primary key (idUsuarioGrupo)
);
create table grupo (
	idGrupo int,
    rankingGrupo_idRankingGrupo int,
    descricaoGrupo varchar(100),
    primary key (idGrupo)
);
create table rankingGrupo (
	idRankingGrupo int,
    usuario int,
    ponto int,
    primary key (idRankingGrupo)
);
create table ranking (
	idRanking int,
    usuario int,
    ponto int,
    primary key (idRanking)
);

alter table usuario
add constraint fk_fase
foreign key (fase_idFase)
references fase (idFase);

alter table fase
add constraint fk_pergunta
foreign key (pergunta_idPergunta)
references pergunta (idPergunta);

alter table pergunta 
add constraint fk_tema
foreign key (tema_idTema)
references tema (idTema),
add constraint fk_bonus
foreign key (bonus_idBonus)
references bonus (idBonus);

alter table alternativa
add constraint fk_pergunta_alternativa
foreign key (pergunta_idPergunta)
references pergunta (idPergunta);

alter table bonus
add constraint fk_tipo
foreign key (tipo_idTipo)
references tipo (idTipo);

alter table usuarioGrupo
add constraint fk_usuario
foreign key (usuario_idUsuario)
references usuario(idUsuario),
add constraint fk_grupo
foreign key (grupo_idGrupo)
references grupo (idGrupo);

alter table grupo 
add constraint fk_rankingGrupo
foreign key (rankingGrupo_idRankingGrupo)
references rankingGrupo (idRankingGrupo);

insert into usuario (
	idUsuario,
    nome,
    nick,
    email,
    senha,
    maxPonto
)
value (1, "Henrique", "hacker", "henrique@mail.com", "java=1000", "1999999");
    
insert into usuarioGrupo (
	idUsuarioGrupo
)
value (
	1
);

insert into tipo (
	idTipo,
    descricaoTipo
)
value	(1, "XP");

insert into tema(
	idTema,
    descricaoTema
)
value	(1, "Tecnologia");

insert into rankingGrupo (
	idRankingGrupo
)
value	(1);

insert into ranking (
	idRanking
)
value	(1);

insert into pergunta (
	idPergunta,
    descricaoPergunta
)
value	( 1, "O que faz um servidor DHCP ?");

insert into grupo (
	idGrupo,
    descricaoGrupo
) 
value	(1, "Extreme");

insert into fase (
	idFase,
    tempo,
    qtdMeteoro,
    velocidadeNave
)
value	(1, "00:05:00", "20", "2");

insert into bonus (
	idBonus,
    valor
)
value	(1, "500");

insert into alternativa (
	idAlternativa,
    descricaoAlternativa,
    opcaoCorreta
)
value	(1, "Distribui endereço de rede.", 1),
		(2, "Tradução de enderço.", 0),
		(3, "Controla o acesso a internet.", 0),
		(4, "Imprimi arquivos.", 0);