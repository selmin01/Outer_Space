create database outerSpace;
use outerSpace;

create table usuario (
	idUsuario int AUTO_INCREMENT not null,
    fase_idFase int,
    permissao int,
    nome varchar(50),
    nick varchar(20),
    email varchar(60),
    senha varchar(50),
    maxPonto int,
    primary key (idUsuario)
);
create table fase (
	idFase int AUTO_INCREMENT,
    pergunta_idPergunta int,
    tempo time,
    qtdMeteoro tinyint(100),
    velocidadeNave tinyint(100),
    primary key (idFase)
);
create table pergunta (
	idPergunta int AUTO_INCREMENT,
    tema_idTema int,
    bonus_idBonus int,
    descricaoPergunta varchar(100),
    primary key (idPergunta)
);
create table alternativa (
	idAlternativa int AUTO_INCREMENT,
    pergunta_idPergunta int,
    descricaoAlternativa varchar(100),
    opcaoCorreta int,
    primary key (idAlternativa)
);
create table tema (
	idTema int AUTO_INCREMENT,
    descricaoTema varchar(100),
    primary key (idTema)
);
create table bonus (
	idBonus int AUTO_INCREMENT,
    tipo_idTipo int,
    valor int,
    primary key (idBonus)
);
create table tipo (
	idTipo int AUTO_INCREMENT,
    descricaoTipo varchar(15),
    primary key (idTipo)
);
create table usuarioGrupo (
	idUsuarioGrupo int AUTO_INCREMENT,
    usuario_idUsuario int,
    grupo_idGrupo int,
    primary key (idUsuarioGrupo)
);
create table grupo (
	idGrupo int AUTO_INCREMENT,
    codigo int,
    rankingGrupo_idRankingGrupo int,
    descricaoGrupo varchar(100),
    primary key (idGrupo)
);
create table rankingGrupo (
	idRankingGrupo int AUTO_INCREMENT,
    grupo_idGrupo int,
    usuario varchar(50),
    ponto int,
    primary key (idRankingGrupo)
);
create table ranking (
	idRanking int AUTO_INCREMENT,
    usuario varchar(40),
    ponto int,
    primary key (idRanking)
);

alter table usuario
add constraint fk_fase
foreign key (fase_idFase)
references fase (idFase)
ON DELETE CASCADE
ON UPDATE CASCADE;

alter table fase
add constraint fk_pergunta
foreign key (pergunta_idPergunta)
references pergunta (idPergunta)
ON DELETE CASCADE
ON UPDATE CASCADE;

alter table pergunta 
add constraint fk_tema
foreign key (tema_idTema)
references tema (idTema),
add constraint fk_bonus
foreign key (bonus_idBonus)
references bonus (idBonus)
ON DELETE CASCADE
ON UPDATE CASCADE;

alter table alternativa
add constraint fk_pergunta_alternativa
foreign key (pergunta_idPergunta)
references pergunta (idPergunta)
ON DELETE CASCADE
ON UPDATE CASCADE;

alter table bonus
add constraint fk_tipo
foreign key (tipo_idTipo)
references tipo (idTipo)
ON DELETE CASCADE
ON UPDATE CASCADE;

alter table usuarioGrupo
add constraint fk_usuario
foreign key (usuario_idUsuario)
references usuario(idUsuario),
add constraint fk_grupo
foreign key (grupo_idGrupo)
references grupo (idGrupo)
ON DELETE CASCADE
ON UPDATE CASCADE;

alter table rankinggrupo
add constraint fk_grupo_RankingGrupo
foreign key (grupo_idGrupo)
references grupo (idGrupo)
ON DELETE CASCADE
ON UPDATE CASCADE; 

insert into usuario (
	idUsuario,
    permissao,
    nome,
    nick,
    email,
    senha
)

value (1, 1, "Administrador", "admin", "admin@mail.com", "123");
    
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
	idRanking,
    usuario,
    ponto
)
value	(1, "ricardin", 300),
		(2, "selmin", 600),
		(3, "henrique zika", 400),
        (4, "carlao", 500),
        (5, "zikao", 800);

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
        
        
        
        SELECT usuario, ponto FROM ranking ORDER BY ponto Desc Limit 10;