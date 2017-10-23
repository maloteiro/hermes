/*
SQLyog Community v12.4.3 (64 bit)
MySQL - 5.5.36 : Database - db_padrao
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_padrao` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_padrao`;

/*Table structure for table `aux_auxiliar` */

DROP TABLE IF EXISTS `aux_auxiliar`;

CREATE TABLE `aux_auxiliar` (
  `codigo` varchar(5) DEFAULT NULL,
  `nome_coluna` varchar(255) DEFAULT NULL,
  `descricao` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `aux_auxiliar` */

insert  into `aux_auxiliar`(`codigo`,`nome_coluna`,`descricao`) values 
('1','ind_estado_civil','Solteiro(a)'),
('2','ind_estado_civil','Casado(a)'),
('3','ind_estado_civil','Divorciado(a)'),
('4','ind_estado_civil','Viúvo(a)'),
('5','ind_estado_civil','Separado(a)'),
('6','ind_estado_civil','Companheiro(a)'),
('CON','ind_tipo_orgao','Conselho'),
('TRI','ind_tipo_orgao','Tribunal'),
('CN','ind_tipo_orgao','Corregedoria Nacional'),
('FED','ind_tipo_orgao','Orgão Federal'),
('EST','ind_tipo_orgao','Orgão Estadual'),
('COR','ind_tipo_orgao','Corregedoria'),
('01','ind_mes','Janeiro'),
('02','ind_mes','Fevereiro'),
('03','ind_mes','Março'),
('04','ind_mes','Abril'),
('05','ind_mes','Maio'),
('06','ind_mes','Junho'),
('07','ind_mes','Julho'),
('08','ind_mes','Agosto'),
('09','ind_mes','Setembro'),
('10','ind_mes','Outubro'),
('11','ind_mes','Novembro'),
('12','ind_mes','Dezembro'),
('2015','ind_ano','2015'),
('2016','ind_ano','2016');

/*Table structure for table `aux_uf` */

DROP TABLE IF EXISTS `aux_uf`;

CREATE TABLE `aux_uf` (
  `seq_uf` int(11) NOT NULL AUTO_INCREMENT,
  `dsc_uf_sigla` varchar(2) DEFAULT NULL,
  `dsc_uf_descricao` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`seq_uf`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `aux_uf` */

insert  into `aux_uf`(`seq_uf`,`dsc_uf_sigla`,`dsc_uf_descricao`) values 
(1,'AC','ACRE'),
(2,'AL','ALAGOAS'),
(3,'AP','AMAPÁ'),
(4,'AM','AMAZONAS'),
(5,'BA','BAHIA'),
(6,'CE','CEARÁ'),
(7,'DF','DISTRITO FEDERAL'),
(8,'ES','ESPÍRITO SANTO'),
(9,'RR','RORAIMA'),
(10,'GO','GOIÁS'),
(11,'MA','MARANHÃO'),
(12,'MT','MATO GROSSO'),
(13,'MS','MATO GROSSO DO SUL'),
(14,'MG','MINAS GERAIS'),
(15,'PA','PARÁ'),
(16,'PB','PARAÍBA'),
(17,'PR','PARANÁ'),
(18,'PE','PERNAMBUCO'),
(19,'PI','PIAUÍ'),
(20,'RJ','RIO DE JANEIRO'),
(21,'RN','RIO GRANDE DO NORTE'),
(22,'RS','RIO GRANDE DO SUL'),
(23,'RO','RONDÔNIA'),
(24,'TO','TOCANTINS'),
(25,'SC','SANTA CATARINA'),
(26,'SP','SÃO PAULO'),
(27,'SE','SERGIPE');

/*Table structure for table `cfg_configuracoes` */

DROP TABLE IF EXISTS `cfg_configuracoes`;

CREATE TABLE `cfg_configuracoes` (
  `seq_configuracao` int(11) NOT NULL AUTO_INCREMENT,
  `nom_configuracao_parametro` varchar(30) DEFAULT NULL,
  `dsc_configuracao_valor` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`seq_configuracao`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `cfg_configuracoes` */

insert  into `cfg_configuracoes`(`seq_configuracao`,`nom_configuracao_parametro`,`dsc_configuracao_valor`) values 
(1,'ambiente','DESENVOLVIMENTO'),
(2,'versao','0.4.1'),
(3,'uploaddir','../arquivos_padrao/'),
(4,'nomesistema','Template Padrão');

/*Table structure for table `erro` */

DROP TABLE IF EXISTS `erro`;

CREATE TABLE `erro` (
  `seq_erro` int(11) NOT NULL AUTO_INCREMENT,
  `dsc_erro_area` varchar(500) DEFAULT NULL,
  `dsc_erro_descricao` text,
  `dat_data_cadastro` datetime DEFAULT NULL,
  `seq_usuario_casdastro` int(11) DEFAULT NULL,
  PRIMARY KEY (`seq_erro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `erro` */

/*Table structure for table `seg_logsql` */

DROP TABLE IF EXISTS `seg_logsql`;

CREATE TABLE `seg_logsql` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `logdate` datetime NOT NULL,
  `databaseid` varchar(20) NOT NULL,
  `transactionid` varchar(20) NOT NULL,
  `sqlstatus` char(1) NOT NULL,
  `sqlcommand` text NOT NULL,
  `sqlerror` text NOT NULL,
  `sqlparams` text NOT NULL,
  `loginid` varchar(11) DEFAULT '0',
  `perfilid` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `NewIndex1` (`logdate`),
  KEY `NewIndex2` (`sqlstatus`),
  KEY `NewIndex3` (`loginid`),
  KEY `NewIndex4` (`perfilid`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `seg_logsql` */

insert  into `seg_logsql`(`id`,`logdate`,`databaseid`,`transactionid`,`sqlstatus`,`sqlcommand`,`sqlerror`,`sqlparams`,`loginid`,`perfilid`) values 
(1,'2017-01-01 11:47:43','principal','','T','INSERT INTO tbl_proposta ( 		seq_template,          seq_categoria,          cod_prosposta_codigo,          nom_proposta_pessoa,          dsc_proposta_endereco,       	dsc_proposta_titulo,         dsc_proposta_video,         dsc_proposta_titulo_video,          txt_proposta_descricao_video,          dsc_proposta_pergunta,         flg_proposta_ativa,         dat_data_cadastro,       	seq_usuario_cadastro,          cod_token_codigo ) VALUES ( 	 		?|$nf(|tmp.edt.seq_template|,CLR)$|,          ?|$nf(|tmp.edt.seq_categoria|,CLR)$|,          ?|tmp.edt.cod_prosposta_codigo|,       	?|tmp.edt.nom_proposta_pessoa|,          ?|tmp.edt.dsc_proposta_endereco|,          ?|tmp.edt.dsc_proposta_titulo|,          ?|tmp.edt.dsc_proposta_video|,      	?|tmp.edt.dsc_proposta_titulo_video|,          ?|tmp.edt.txt_proposta_descricao_video|,          ?|tmp.edt.dsc_proposta_pergunta|,         ?|tmp.edt.flg_proposta_ativa|,      	now(),          ?|pvt.login.seq_usuario|,                   ?|wi.token| )','','{|$nf(|tmp.edt.seq_template|,CLR)$|=1, |$nf(|tmp.edt.seq_categoria|,CLR)$|=3, |tmp.edt.cod_prosposta_codigo|=201612000001, |tmp.edt.nom_proposta_pessoa|=Rafael Ferreira, |tmp.edt.dsc_proposta_endereco|=SQS 315 BLOCO A BRASÍLIA - DF, |tmp.edt.dsc_proposta_titulo|=A CEB ESTÁ PEGANDO SEU DINHEIRO. ASSISTA AO VÍDEO E VEJA COMO., |tmp.edt.dsc_proposta_video|=e2OK8oC6r9w, |tmp.edt.dsc_proposta_titulo_video|=ICMS COBRADO ERRADO, |tmp.edt.txt_proposta_descricao_video|=NÓS PODEMOS FAZER SUA DEFESA. \r\nHONORÁRIOS SOMENTE NO ÊXITO DA AÇÃO. \r\nLEIA NOSSA PROPOSTA. PREENCHA OS CAMPOS ABAIXO., |tmp.edt.dsc_proposta_pergunta|=VOCÊ DESEJA RECEBER UMA PROPOSTA DOS NOSSOS SERVIÇOS ?, |tmp.edt.flg_proposta_ativa|=S, |pvt.login.seq_usuario|=1, |wi.token|=K8TDQQ7XY2HLLI3U7FRF}','1','1'),
(2,'2017-01-01 11:48:51','principal','','T','INSERT INTO tbl_proposta ( 		seq_template,          seq_categoria,          cod_prosposta_codigo,          nom_proposta_pessoa,          dsc_proposta_endereco,       	dsc_proposta_titulo,         dsc_proposta_video,         dsc_proposta_titulo_video,          txt_proposta_descricao_video,          dsc_proposta_pergunta,         flg_proposta_ativa,         dat_data_cadastro,       	seq_usuario_cadastro,          cod_token_codigo ) VALUES ( 	 		?|$nf(|tmp.edt.seq_template|,CLR)$|,          ?|$nf(|tmp.edt.seq_categoria|,CLR)$|,          ?|tmp.edt.cod_prosposta_codigo|,       	?|tmp.edt.nom_proposta_pessoa|,          ?|tmp.edt.dsc_proposta_endereco|,          ?|tmp.edt.dsc_proposta_titulo|,          ?|tmp.edt.dsc_proposta_video|,      	?|tmp.edt.dsc_proposta_titulo_video|,          ?|tmp.edt.txt_proposta_descricao_video|,          ?|tmp.edt.dsc_proposta_pergunta|,         ?|tmp.edt.flg_proposta_ativa|,      	now(),          ?|pvt.login.seq_usuario|,                   ?|wi.token| )','','{|$nf(|tmp.edt.seq_template|,CLR)$|=1, |$nf(|tmp.edt.seq_categoria|,CLR)$|=3, |tmp.edt.cod_prosposta_codigo|=201612000001, |tmp.edt.nom_proposta_pessoa|=Rafael Ferreira, |tmp.edt.dsc_proposta_endereco|=SQS 315 BLOCO A BRASÍLIA - DF, |tmp.edt.dsc_proposta_titulo|=A CEB ESTÁ PEGANDO SEU DINHEIRO. ASSISTA AO VÍDEO E VEJA COMO., |tmp.edt.dsc_proposta_video|=e2OK8oC6r9w, |tmp.edt.dsc_proposta_titulo_video|=ICMS COBRADO ERRADO, |tmp.edt.txt_proposta_descricao_video|=NÓS PODEMOS FAZER SUA DEFESA. \r\nHONORÁRIOS SOMENTE NO ÊXITO DA AÇÃO. \r\nLEIA NOSSA PROPOSTA. PREENCHA OS CAMPOS ABAIXO., |tmp.edt.dsc_proposta_pergunta|=VOCÊ DESEJA RECEBER UMA PROPOSTA DOS NOSSOS SERVIÇOS ?, |tmp.edt.flg_proposta_ativa|=S, |pvt.login.seq_usuario|=1, |wi.token|=T1UTU39OVCOT6IIPYHE7}','1','1'),
(3,'2017-01-01 11:48:51','principal','','F','UPDATE tbl_proposta SET cod_prosposta_codigo= 201701000000+ WHERE seq_proposta=?|tmp.wi.key1|','(-1064)You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near \'WHERE seq_proposta=\'3\'\' at line 1','{|tmp.wi.key1|=3}','1','1'),
(4,'2017-01-01 11:48:51','principal','','T','DELETE FROM seg_grupo_proposta WHERE seq_proposta=\'3\'','(-1064)You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near \'WHERE seq_proposta=\'3\'\' at line 1','{}','1','1'),
(5,'2017-01-01 11:50:59','principal','','T','UPDATE tbl_proposta  SET 	seq_template = ?|$nf(|tmp.edt.seq_template|,CLR)$|,   		seq_categoria = ?|$nf(|tmp.edt.seq_categoria|,CLR)$|,       	cod_prosposta_codigo = ?|tmp.edt.cod_prosposta_codigo|,          nom_proposta_pessoa = ?|tmp.edt.nom_proposta_pessoa|,       	dsc_proposta_endereco = ?|tmp.edt.dsc_proposta_endereco|,          dsc_proposta_titulo = ?|tmp.edt.dsc_proposta_titulo|,         dsc_proposta_video = ?|tmp.edt.dsc_proposta_video|,      	dsc_proposta_titulo_video = ?|tmp.edt.dsc_proposta_titulo_video|,          txt_proposta_descricao_video = ?|tmp.edt.txt_proposta_descricao_video|,       	dsc_proposta_pergunta = ?|tmp.edt.dsc_proposta_pergunta|,         flg_proposta_ativa = ?|tmp.edt.flg_proposta_ativa|,         dat_data_alteracao = now(),       	seq_usuario_alteracao = ?|pvt.login.seq_usuario|  WHERE (tbl_proposta.seq_proposta = ?|tmp.id|)','','{|$nf(|tmp.edt.seq_template|,CLR)$|=1, |$nf(|tmp.edt.seq_categoria|,CLR)$|=3, |tmp.edt.cod_prosposta_codigo|=201612000001, |tmp.edt.nom_proposta_pessoa|=Rafael Ferreira, |tmp.edt.dsc_proposta_endereco|=SQS 315 BLOCO A BRASÍLIA - DF, |tmp.edt.dsc_proposta_titulo|=A CEB ESTÁ PEGANDO SEU DINHEIRO. ASSISTA AO VÍDEO E VEJA COMO., |tmp.edt.dsc_proposta_video|=e2OK8oC6r9w, |tmp.edt.dsc_proposta_titulo_video|=ICMS COBRADO ERRADO, |tmp.edt.txt_proposta_descricao_video|=NÓS PODEMOS FAZER SUA DEFESA. \r\nHONORÁRIOS SOMENTE NO ÊXITO DA AÇÃO. \r\nLEIA NOSSA PROPOSTA. PREENCHA OS CAMPOS ABAIXO., |tmp.edt.dsc_proposta_pergunta|=VOCÊ DESEJA RECEBER UMA PROPOSTA DOS NOSSOS SERVIÇOS ?, |tmp.edt.flg_proposta_ativa|=S, |pvt.login.seq_usuario|=1, |tmp.id|=2}','1','1'),
(6,'2017-01-01 11:50:59','principal','','T','DELETE FROM seg_grupo_proposta WHERE seq_proposta=\'2\'','','{}','1','1'),
(7,'2017-01-01 11:50:59','principal','','T','INSERT INTO seg_grupo_proposta ( 	seq_proposta,    	seq_grupo ) VALUES ( 	?|$nf(|tmp.id|,CLR)$|,    	?|$nf(|tmp.check1.seq_grupo|,CLR)$| )','','{|$nf(|tmp.id|,CLR)$|=2, |$nf(|tmp.check1.seq_grupo|,CLR)$|=1}','1','1'),
(8,'2017-01-01 11:50:59','principal','','T','INSERT INTO seg_grupo_proposta ( 	seq_proposta,    	seq_grupo ) VALUES ( 	?|$nf(|tmp.id|,CLR)$|,    	?|$nf(|tmp.check2.seq_grupo|,CLR)$| )','','{|$nf(|tmp.id|,CLR)$|=2, |$nf(|tmp.check2.seq_grupo|,CLR)$|=2}','1','1'),
(9,'2017-01-01 11:51:22','principal','','T','INSERT INTO tbl_proposta ( 		seq_template,          seq_categoria,          cod_prosposta_codigo,          nom_proposta_pessoa,          dsc_proposta_endereco,       	dsc_proposta_titulo,         dsc_proposta_video,         dsc_proposta_titulo_video,          txt_proposta_descricao_video,          dsc_proposta_pergunta,         flg_proposta_ativa,         dat_data_cadastro,       	seq_usuario_cadastro,          cod_token_codigo ) VALUES ( 	 		?|$nf(|tmp.edt.seq_template|,CLR)$|,          ?|$nf(|tmp.edt.seq_categoria|,CLR)$|,          ?|tmp.edt.cod_prosposta_codigo|,       	?|tmp.edt.nom_proposta_pessoa|,          ?|tmp.edt.dsc_proposta_endereco|,          ?|tmp.edt.dsc_proposta_titulo|,          ?|tmp.edt.dsc_proposta_video|,      	?|tmp.edt.dsc_proposta_titulo_video|,          ?|tmp.edt.txt_proposta_descricao_video|,          ?|tmp.edt.dsc_proposta_pergunta|,         ?|tmp.edt.flg_proposta_ativa|,      	now(),          ?|pvt.login.seq_usuario|,                   ?|wi.token| )','','{|$nf(|tmp.edt.seq_template|,CLR)$|=1, |$nf(|tmp.edt.seq_categoria|,CLR)$|=3, |tmp.edt.cod_prosposta_codigo|=201612000001, |tmp.edt.nom_proposta_pessoa|=Rafael Ferreira, |tmp.edt.dsc_proposta_endereco|=SQS 315 BLOCO A BRASÍLIA - DF, |tmp.edt.dsc_proposta_titulo|=A CEB ESTÁ PEGANDO SEU DINHEIRO. ASSISTA AO VÍDEO E VEJA COMO., |tmp.edt.dsc_proposta_video|=e2OK8oC6r9w, |tmp.edt.dsc_proposta_titulo_video|=ICMS COBRADO ERRADO, |tmp.edt.txt_proposta_descricao_video|=NÓS PODEMOS FAZER SUA DEFESA. \r\nHONORÁRIOS SOMENTE NO ÊXITO DA AÇÃO. \r\nLEIA NOSSA PROPOSTA. PREENCHA OS CAMPOS ABAIXO., |tmp.edt.dsc_proposta_pergunta|=VOCÊ DESEJA RECEBER UMA PROPOSTA DOS NOSSOS SERVIÇOS ?, |tmp.edt.flg_proposta_ativa|=S, |pvt.login.seq_usuario|=1, |wi.token|=YXX0LHEEG78YOBG1TKBC}','1','1'),
(10,'2017-01-01 11:51:22','principal','','T','UPDATE tbl_proposta SET cod_prosposta_codigo= 201701000000+4 WHERE seq_proposta=?|tmp.wi.key1|','','{|tmp.wi.key1|=4}','1','1'),
(11,'2017-01-01 11:51:22','principal','','T','DELETE FROM seg_grupo_proposta WHERE seq_proposta=\'4\'','','{}','1','1'),
(12,'2017-01-01 11:52:50','principal','','T','INSERT INTO tbl_proposta ( 		seq_template,          seq_categoria,          cod_prosposta_codigo,          nom_proposta_pessoa,          dsc_proposta_endereco,       	dsc_proposta_titulo,         dsc_proposta_video,         dsc_proposta_titulo_video,          txt_proposta_descricao_video,          dsc_proposta_pergunta,         flg_proposta_ativa,         dat_data_cadastro,       	seq_usuario_cadastro,          cod_token_codigo ) VALUES ( 	 		?|$nf(|tmp.edt.seq_template|,CLR)$|,          ?|$nf(|tmp.edt.seq_categoria|,CLR)$|,          ?|tmp.edt.cod_prosposta_codigo|,       	?|tmp.edt.nom_proposta_pessoa|,          ?|tmp.edt.dsc_proposta_endereco|,          ?|tmp.edt.dsc_proposta_titulo|,          ?|tmp.edt.dsc_proposta_video|,      	?|tmp.edt.dsc_proposta_titulo_video|,          ?|tmp.edt.txt_proposta_descricao_video|,          ?|tmp.edt.dsc_proposta_pergunta|,         ?|tmp.edt.flg_proposta_ativa|,      	now(),          ?|pvt.login.seq_usuario|,                   ?|wi.token| )','','{|$nf(|tmp.edt.seq_template|,CLR)$|=1, |$nf(|tmp.edt.seq_categoria|,CLR)$|=3, |tmp.edt.cod_prosposta_codigo|=201612000001, |tmp.edt.nom_proposta_pessoa|=Rafael Ferreira, |tmp.edt.dsc_proposta_endereco|=SQS 315 BLOCO A BRASÍLIA - DF, |tmp.edt.dsc_proposta_titulo|=A CEB ESTÁ PEGANDO SEU DINHEIRO. ASSISTA AO VÍDEO E VEJA COMO., |tmp.edt.dsc_proposta_video|=e2OK8oC6r9w, |tmp.edt.dsc_proposta_titulo_video|=ICMS COBRADO ERRADO, |tmp.edt.txt_proposta_descricao_video|=NÓS PODEMOS FAZER SUA DEFESA. \r\nHONORÁRIOS SOMENTE NO ÊXITO DA AÇÃO. \r\nLEIA NOSSA PROPOSTA. PREENCHA OS CAMPOS ABAIXO., |tmp.edt.dsc_proposta_pergunta|=VOCÊ DESEJA RECEBER UMA PROPOSTA DOS NOSSOS SERVIÇOS ?, |tmp.edt.flg_proposta_ativa|=S, |pvt.login.seq_usuario|=1, |wi.token|=M098QSUHQ2DWF9P3QULI}','1','1'),
(13,'2017-01-01 11:52:50','principal','','T','UPDATE tbl_proposta SET cod_prosposta_codigo= 201701000000+5 WHERE seq_proposta=?|tmp.wi.key1|','','{|tmp.wi.key1|=5}','1','1'),
(14,'2017-01-01 11:52:50','principal','','T','DELETE FROM seg_grupo_proposta WHERE seq_proposta=\'5\'','','{}','1','1'),
(15,'2017-01-01 11:52:55','principal','','T','UPDATE tbl_proposta  SET 	seq_template = ?|$nf(|tmp.edt.seq_template|,CLR)$|,   		seq_categoria = ?|$nf(|tmp.edt.seq_categoria|,CLR)$|,       	cod_prosposta_codigo = ?|tmp.edt.cod_prosposta_codigo|,          nom_proposta_pessoa = ?|tmp.edt.nom_proposta_pessoa|,       	dsc_proposta_endereco = ?|tmp.edt.dsc_proposta_endereco|,          dsc_proposta_titulo = ?|tmp.edt.dsc_proposta_titulo|,         dsc_proposta_video = ?|tmp.edt.dsc_proposta_video|,      	dsc_proposta_titulo_video = ?|tmp.edt.dsc_proposta_titulo_video|,          txt_proposta_descricao_video = ?|tmp.edt.txt_proposta_descricao_video|,       	dsc_proposta_pergunta = ?|tmp.edt.dsc_proposta_pergunta|,         flg_proposta_ativa = ?|tmp.edt.flg_proposta_ativa|,         dat_data_alteracao = now(),       	seq_usuario_alteracao = ?|pvt.login.seq_usuario|  WHERE (tbl_proposta.seq_proposta = ?|tmp.id|)','','{|$nf(|tmp.edt.seq_template|,CLR)$|=1, |$nf(|tmp.edt.seq_categoria|,CLR)$|=3, |tmp.edt.cod_prosposta_codigo|=201701000005, |tmp.edt.nom_proposta_pessoa|=Rafael Ferreira, |tmp.edt.dsc_proposta_endereco|=SQS 315 BLOCO A BRASÍLIA - DF, |tmp.edt.dsc_proposta_titulo|=A CEB ESTÁ PEGANDO SEU DINHEIRO. ASSISTA AO VÍDEO E VEJA COMO., |tmp.edt.dsc_proposta_video|=e2OK8oC6r9w, |tmp.edt.dsc_proposta_titulo_video|=ICMS COBRADO ERRADO, |tmp.edt.txt_proposta_descricao_video|=NÓS PODEMOS FAZER SUA DEFESA. \r\nHONORÁRIOS SOMENTE NO ÊXITO DA AÇÃO. \r\nLEIA NOSSA PROPOSTA. PREENCHA OS CAMPOS ABAIXO., |tmp.edt.dsc_proposta_pergunta|=VOCÊ DESEJA RECEBER UMA PROPOSTA DOS NOSSOS SERVIÇOS ?, |tmp.edt.flg_proposta_ativa|=S, |pvt.login.seq_usuario|=1, |tmp.id|=5}','1','1'),
(16,'2017-01-01 11:52:55','principal','','T','DELETE FROM seg_grupo_proposta WHERE seq_proposta=\'5\'','','{}','1','1'),
(17,'2017-01-01 11:52:55','principal','','T','INSERT INTO seg_grupo_proposta ( 	seq_proposta,    	seq_grupo ) VALUES ( 	?|$nf(|tmp.id|,CLR)$|,    	?|$nf(|tmp.check1.seq_grupo|,CLR)$| )','','{|$nf(|tmp.id|,CLR)$|=5, |$nf(|tmp.check1.seq_grupo|,CLR)$|=1}','1','1'),
(18,'2017-01-01 11:52:55','principal','','T','INSERT INTO seg_grupo_proposta ( 	seq_proposta,    	seq_grupo ) VALUES ( 	?|$nf(|tmp.id|,CLR)$|,    	?|$nf(|tmp.check2.seq_grupo|,CLR)$| )','','{|$nf(|tmp.id|,CLR)$|=5, |$nf(|tmp.check2.seq_grupo|,CLR)$|=2}','1','1'),
(19,'2017-01-01 11:54:25','principal','','T','UPDATE tbl_proposta  SET 	seq_template = ?|$nf(|tmp.edt.seq_template|,CLR)$|,   		seq_categoria = ?|$nf(|tmp.edt.seq_categoria|,CLR)$|,       	cod_prosposta_codigo = ?|tmp.edt.cod_prosposta_codigo|,          nom_proposta_pessoa = ?|tmp.edt.nom_proposta_pessoa|,       	dsc_proposta_endereco = ?|tmp.edt.dsc_proposta_endereco|,          dsc_proposta_titulo = ?|tmp.edt.dsc_proposta_titulo|,         dsc_proposta_video = ?|tmp.edt.dsc_proposta_video|,      	dsc_proposta_titulo_video = ?|tmp.edt.dsc_proposta_titulo_video|,          txt_proposta_descricao_video = ?|tmp.edt.txt_proposta_descricao_video|,       	dsc_proposta_pergunta = ?|tmp.edt.dsc_proposta_pergunta|,         flg_proposta_ativa = ?|tmp.edt.flg_proposta_ativa|,         dat_data_alteracao = now(),       	seq_usuario_alteracao = ?|pvt.login.seq_usuario|  WHERE (tbl_proposta.seq_proposta = ?|tmp.id|)','','{|$nf(|tmp.edt.seq_template|,CLR)$|=1, |$nf(|tmp.edt.seq_categoria|,CLR)$|=3, |tmp.edt.cod_prosposta_codigo|=201701000004, |tmp.edt.nom_proposta_pessoa|=José da Silva, |tmp.edt.dsc_proposta_endereco|=SQS 316 BLOCO B BRASÍLIA - DF, |tmp.edt.dsc_proposta_titulo|=A CEB ESTÁ PEGANDO SEU DINHEIRO. ASSISTA AO VÍDEO E VEJA COMO., |tmp.edt.dsc_proposta_video|=e2OK8oC6r9w, |tmp.edt.dsc_proposta_titulo_video|=ICMS COBRADO ERRADO, |tmp.edt.txt_proposta_descricao_video|=NÓS PODEMOS FAZER SUA DEFESA. \r\nHONORÁRIOS SOMENTE NO ÊXITO DA AÇÃO. \r\nLEIA NOSSA PROPOSTA. PREENCHA OS CAMPOS ABAIXO., |tmp.edt.dsc_proposta_pergunta|=VOCÊ DESEJA RECEBER UMA PROPOSTA DOS NOSSOS SERVIÇOS ?, |tmp.edt.flg_proposta_ativa|=S, |pvt.login.seq_usuario|=1, |tmp.id|=4}','1','1'),
(20,'2017-01-01 11:54:25','principal','','T','DELETE FROM seg_grupo_proposta WHERE seq_proposta=\'4\'','','{}','1','1'),
(21,'2017-01-01 11:54:25','principal','','T','INSERT INTO seg_grupo_proposta ( 	seq_proposta,    	seq_grupo ) VALUES ( 	?|$nf(|tmp.id|,CLR)$|,    	?|$nf(|tmp.check1.seq_grupo|,CLR)$| )','','{|$nf(|tmp.id|,CLR)$|=4, |$nf(|tmp.check1.seq_grupo|,CLR)$|=1}','1','1'),
(22,'2017-01-01 11:54:25','principal','','T','INSERT INTO seg_grupo_proposta ( 	seq_proposta,    	seq_grupo ) VALUES ( 	?|$nf(|tmp.id|,CLR)$|,    	?|$nf(|tmp.check3.seq_grupo|,CLR)$| )','','{|$nf(|tmp.id|,CLR)$|=4, |$nf(|tmp.check3.seq_grupo|,CLR)$|=3}','1','1'),
(23,'2017-01-01 11:54:58','principal','','T','UPDATE tbl_proposta  SET 	seq_template = ?|$nf(|tmp.edt.seq_template|,CLR)$|,   		seq_categoria = ?|$nf(|tmp.edt.seq_categoria|,CLR)$|,       	cod_prosposta_codigo = ?|tmp.edt.cod_prosposta_codigo|,          nom_proposta_pessoa = ?|tmp.edt.nom_proposta_pessoa|,       	dsc_proposta_endereco = ?|tmp.edt.dsc_proposta_endereco|,          dsc_proposta_titulo = ?|tmp.edt.dsc_proposta_titulo|,         dsc_proposta_video = ?|tmp.edt.dsc_proposta_video|,      	dsc_proposta_titulo_video = ?|tmp.edt.dsc_proposta_titulo_video|,          txt_proposta_descricao_video = ?|tmp.edt.txt_proposta_descricao_video|,       	dsc_proposta_pergunta = ?|tmp.edt.dsc_proposta_pergunta|,         flg_proposta_ativa = ?|tmp.edt.flg_proposta_ativa|,         dat_data_alteracao = now(),       	seq_usuario_alteracao = ?|pvt.login.seq_usuario|  WHERE (tbl_proposta.seq_proposta = ?|tmp.id|)','','{|$nf(|tmp.edt.seq_template|,CLR)$|=1, |$nf(|tmp.edt.seq_categoria|,CLR)$|=3, |tmp.edt.cod_prosposta_codigo|=201701000005, |tmp.edt.nom_proposta_pessoa|=Carlos Manuel, |tmp.edt.dsc_proposta_endereco|=SQS 110 BLOCO C BRASÍLIA - DF, |tmp.edt.dsc_proposta_titulo|=A CEB ESTÁ PEGANDO SEU DINHEIRO. ASSISTA AO VÍDEO E VEJA COMO., |tmp.edt.dsc_proposta_video|=e2OK8oC6r9w, |tmp.edt.dsc_proposta_titulo_video|=ICMS COBRADO ERRADO, |tmp.edt.txt_proposta_descricao_video|=NÓS PODEMOS FAZER SUA DEFESA. \r\nHONORÁRIOS SOMENTE NO ÊXITO DA AÇÃO. \r\nLEIA NOSSA PROPOSTA. PREENCHA OS CAMPOS ABAIXO., |tmp.edt.dsc_proposta_pergunta|=VOCÊ DESEJA RECEBER UMA PROPOSTA DOS NOSSOS SERVIÇOS ?, |tmp.edt.flg_proposta_ativa|=S, |pvt.login.seq_usuario|=1, |tmp.id|=5}','1','1'),
(24,'2017-01-01 11:54:58','principal','','T','DELETE FROM seg_grupo_proposta WHERE seq_proposta=\'5\'','','{}','1','1'),
(25,'2017-01-01 11:54:58','principal','','T','INSERT INTO seg_grupo_proposta ( 	seq_proposta,    	seq_grupo ) VALUES ( 	?|$nf(|tmp.id|,CLR)$|,    	?|$nf(|tmp.check1.seq_grupo|,CLR)$| )','','{|$nf(|tmp.id|,CLR)$|=5, |$nf(|tmp.check1.seq_grupo|,CLR)$|=1}','1','1'),
(26,'2017-01-01 11:54:58','principal','','T','INSERT INTO seg_grupo_proposta ( 	seq_proposta,    	seq_grupo ) VALUES ( 	?|$nf(|tmp.id|,CLR)$|,    	?|$nf(|tmp.check2.seq_grupo|,CLR)$| )','','{|$nf(|tmp.id|,CLR)$|=5, |$nf(|tmp.check2.seq_grupo|,CLR)$|=2}','1','1'),
(27,'2017-01-01 19:10:58','principal','','T','UPDATE tbl_proposta_template  SET 	dsc_template_descricao = ?|tmp.edt.dsc_template_descricao|,   		txt_template_corpo = ?|txt_template_corpo|,       	flg_template_ativo = ?|tmp.edt.flg_template_ativo|,          dat_data_alteracao = now(),       	seq_usuario_alteracao = ?|pvt.login.seq_usuario|  WHERE (tbl_proposta_template.seq_template = ?|tmp.id|)','','{|tmp.edt.dsc_template_descricao|=Template - Condôminios, |txt_template_corpo|=<div>\r\n	Sr. <strong>{nome}</strong>, <br />\r\n	<br />\r\n	Estamos passando por tempos dif&iacute;ceis. Sabemos da sua dedica&ccedil;&atilde;o para com seu <strong>{categoria} na {endereco}</strong>. <br />\r\n	<br />\r\n	&Eacute; hora de economizar e exigir direitos com <strong>SEGURAN&Ccedil;A JUR&Iacute;DICA</strong>. Se voc&ecirc; iniciar uma a&ccedil;&atilde;o, veja o que pode acontecer com sua conta de energia el&eacute;trica: <br />\r\n	<br />\r\n	- <strong>REDU&Ccedil;&Atilde;O</strong> de at&eacute; R$ 400,00 mensalmente. <br />\r\n	- <strong>RECUPERA&Ccedil;&Atilde;O</strong> de at&eacute; R$ 48.000,00. <br />\r\n	- Fazemos sua defesa sem custos iniciais. <br />\r\n	- Honor&aacute;rios somente no &ecirc;xito da a&ccedil;&atilde;o. <br />\r\n	<br />\r\n	Responda a quest&atilde;o abaixo e mandaremos proposta com outros esclarecimentos. <br />\r\n	<br />\r\n	<strong>Anote o c&oacute;digo: {codigo}</strong> <br />\r\n	<br />\r\n	www.mundialdefesadedireitos.com.br</div>, |tmp.edt.flg_template_ativo|=S, |pvt.login.seq_usuario|=1, |tmp.id|=1}','1','1');

/*Table structure for table `seg_modulo` */

DROP TABLE IF EXISTS `seg_modulo`;

CREATE TABLE `seg_modulo` (
  `seq_modulo` int(11) NOT NULL AUTO_INCREMENT,
  `dsc_modulo_descricao` varchar(150) DEFAULT NULL,
  `dsc_modulo_classe` varchar(50) DEFAULT NULL,
  `num_modulo_ordem` int(11) DEFAULT '0',
  `flg_modulo_ativo` enum('S','N') DEFAULT NULL,
  `cod_token_codigo` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`seq_modulo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `seg_modulo` */

insert  into `seg_modulo`(`seq_modulo`,`dsc_modulo_descricao`,`dsc_modulo_classe`,`num_modulo_ordem`,`flg_modulo_ativo`,`cod_token_codigo`) values 
(1,'Segurança','fa fa-key',0,'S',NULL),
(2,'Cadastro','fa fa-edit',1,'S',NULL),
(5,'Auxiliar','fa fa-bars ',5,'S','O4GFMM4EXUYXRCU40CNB');

/*Table structure for table `seg_perfil` */

DROP TABLE IF EXISTS `seg_perfil`;

CREATE TABLE `seg_perfil` (
  `seq_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `dsc_perfil_nome` varchar(45) DEFAULT NULL,
  `sig_perfil_sigla` varchar(4) DEFAULT NULL,
  `flg_perfil_ativo` enum('S','N') DEFAULT NULL,
  `dat_data_cadastro` datetime DEFAULT NULL,
  `seq_usuario_cadastro` int(11) DEFAULT NULL,
  `dat_data_alteracao` datetime DEFAULT NULL,
  `seq_usuario_alteracao` int(11) DEFAULT NULL,
  `cod_token_codigo` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`seq_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `seg_perfil` */

insert  into `seg_perfil`(`seq_perfil`,`dsc_perfil_nome`,`sig_perfil_sigla`,`flg_perfil_ativo`,`dat_data_cadastro`,`seq_usuario_cadastro`,`dat_data_alteracao`,`seq_usuario_alteracao`,`cod_token_codigo`) values 
(1,'ADMINISTRADOR','ADM','S','2011-02-22 22:14:02',1,NULL,NULL,NULL),
(2,'ADMINISTRADOR GRUPO','ADMG','S','2016-09-30 18:39:24',2,'2016-12-24 11:42:51',1,'AKY5EFI0G2CYOW92A2TJ'),
(3,'USUÁRIO','USU','S','2016-12-24 11:43:14',1,'2017-10-14 08:23:34',1,'S45VDERR4Q3LM4LCY1SQ');

/*Table structure for table `seg_permissao` */

DROP TABLE IF EXISTS `seg_permissao`;

CREATE TABLE `seg_permissao` (
  `seq_permissao` int(11) NOT NULL AUTO_INCREMENT,
  `seq_rotina` int(11) DEFAULT NULL,
  `seq_perfil` int(11) DEFAULT NULL,
  PRIMARY KEY (`seq_permissao`)
) ENGINE=InnoDB AUTO_INCREMENT=277 DEFAULT CHARSET=latin1;

/*Data for the table `seg_permissao` */

insert  into `seg_permissao`(`seq_permissao`,`seq_rotina`,`seq_perfil`) values 
(234,32,3),
(259,2,2),
(260,32,2),
(261,33,2),
(262,35,2),
(263,30,2),
(264,28,2),
(265,2,1),
(266,1,1),
(267,13,1),
(268,5,1),
(269,4,1),
(270,32,1),
(271,33,1),
(272,35,1),
(273,37,1),
(274,30,1),
(275,28,1),
(276,39,1);

/*Table structure for table `seg_rotina` */

DROP TABLE IF EXISTS `seg_rotina`;

CREATE TABLE `seg_rotina` (
  `seq_rotina` int(11) NOT NULL AUTO_INCREMENT,
  `seq_modulo` int(11) DEFAULT NULL,
  `dsc_rotina_descricao` varchar(255) DEFAULT NULL,
  `dsc_rotina_arquivo` varchar(150) DEFAULT NULL,
  `dsc_rotina_diretorio` varchar(150) DEFAULT NULL,
  `dsc_rotina_funcao` varchar(150) DEFAULT NULL,
  `dsc_rotina_pagina` varchar(255) DEFAULT NULL,
  `num_rotina_ordem` int(11) DEFAULT '0',
  `flg_rotina_ativa` enum('S','N') DEFAULT NULL,
  `cod_token_codigo` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`seq_rotina`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

/*Data for the table `seg_rotina` */

insert  into `seg_rotina`(`seq_rotina`,`seq_modulo`,`dsc_rotina_descricao`,`dsc_rotina_arquivo`,`dsc_rotina_diretorio`,`dsc_rotina_funcao`,`dsc_rotina_pagina`,`num_rotina_ordem`,`flg_rotina_ativa`,`cod_token_codigo`) values 
(1,1,'Perfil','admin','admin','formPerfil','seguranca/perfil/cadastro.wsp',1,'S',NULL),
(2,1,'Usuário','admin','admin','formUsuario','seguranca/usuario/cadastro.wsp',0,'S',NULL),
(4,1,'Permissões','admin','admin','formPermissao','seguranca/permissao/cadastro.wsp',4,'S',NULL),
(5,1,'Funcionalidades','admin','admin','formRotina','seguranca/rotina/cadastro.wsp',3,'S',NULL),
(13,1,'Módulos','admin','admin','formModulo','seguranca/modulo/cadastro.wsp',2,'S',NULL),
(28,5,'Categorias',NULL,NULL,NULL,'auxiliar/categoria/cadastro.wsp',1,'S','JFTC1OCMN05K0W18YLAS'),
(30,5,'Estágio',NULL,NULL,NULL,'auxiliar/estagio/cadastro.wsp',0,'S','8KADN4PMJXAGFHDF1ULF'),
(32,2,'Empresa',NULL,NULL,NULL,'cadastro/empresa/cadastro.wsp',0,'S','N3AAW23MNGQ8DQXR7YQV'),
(33,2,'Campanha',NULL,NULL,NULL,'cadastro/campanha/cadastro.wsp',1,'S','YHM9USTY75AMXYI5Q6RC'),
(35,2,'Script',NULL,NULL,NULL,'cadastro/script/cadastro.wsp',2,'S','C6VB1XBWNOF6EE9AP6ME'),
(36,2,'Template','a','a','a','cadastro/template/cadastro.wsp',3,'N','SCXCDF9OH8VDN58YNOWY'),
(37,2,'Proposta',NULL,NULL,NULL,'cadastro/proposta/cadastro.wsp',4,'S','03ITLXX1YWNF9SI20MHI'),
(38,0,'','','','',NULL,0,'N',NULL),
(39,5,'Grupos','grupo','grupo','formCadastro',NULL,3,'S',NULL);

/*Table structure for table `seg_senha_fraca` */

DROP TABLE IF EXISTS `seg_senha_fraca`;

CREATE TABLE `seg_senha_fraca` (
  `seq_senha` int(11) NOT NULL AUTO_INCREMENT,
  `dsc_senha` varchar(50) DEFAULT NULL,
  `flg_senha_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`seq_senha`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `seg_senha_fraca` */

insert  into `seg_senha_fraca`(`seq_senha`,`dsc_senha`,`flg_senha_status`) values 
(1,'123',1),
(2,'1234',1),
(3,'12345',1),
(4,'123456',1),
(5,'321',1),
(6,'54321',1),
(7,'654321',1),
(8,'senhafacil',1),
(9,'teste123',1),
(10,'1234567',1),
(11,'7654231',1),
(12,'123456789',1),
(13,'111111',1),
(14,'222222',1),
(15,'333333',1),
(16,'000000',1),
(17,'444444',1),
(18,'555555',1),
(19,'666666',1),
(20,'777777',1),
(21,'888888',1),
(22,'999999',1),
(23,'102030',1);

/*Table structure for table `seg_usuario` */

DROP TABLE IF EXISTS `seg_usuario`;

CREATE TABLE `seg_usuario` (
  `seq_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `seq_empresa` int(11) DEFAULT NULL,
  `seq_perfil` int(11) DEFAULT NULL,
  `dsc_usuario_senha` varchar(45) DEFAULT NULL,
  `dsc_usuario_assinatura` varchar(32) DEFAULT NULL,
  `dsc_usuario_nome` varchar(250) DEFAULT NULL,
  `dsc_usuario_email` varchar(150) DEFAULT NULL,
  `dsc_usuario_email2` varchar(150) DEFAULT NULL,
  `num_usuario_telefone` varchar(20) DEFAULT NULL,
  `dsc_usuario_cpf` varchar(14) DEFAULT NULL,
  `flg_usuario_ativo` enum('S','N') DEFAULT NULL,
  `dsc_usuario_token` varchar(45) DEFAULT NULL,
  `dat_data_cadastro` datetime DEFAULT NULL,
  `seq_usuario_cadastro` int(11) DEFAULT NULL,
  `dat_data_alteracao` datetime DEFAULT NULL,
  `seq_usuario_alteracao` int(11) DEFAULT NULL,
  PRIMARY KEY (`seq_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Tabela de usuÃ¡rios que acessam o sistema';

/*Data for the table `seg_usuario` */

insert  into `seg_usuario`(`seq_usuario`,`seq_empresa`,`seq_perfil`,`dsc_usuario_senha`,`dsc_usuario_assinatura`,`dsc_usuario_nome`,`dsc_usuario_email`,`dsc_usuario_email2`,`num_usuario_telefone`,`dsc_usuario_cpf`,`flg_usuario_ativo`,`dsc_usuario_token`,`dat_data_cadastro`,`seq_usuario_cadastro`,`dat_data_alteracao`,`seq_usuario_alteracao`) values 
(1,1,1,'4badaee57fed5610012a296273158f5f','81dc9bdb52d04dc20036dbd8313ed055','CHARLLES DE MATOS SOUSA','charlles.matos@i9tecnologia.com','charlles.matos@gmail.com','6181116753','908.066.031-00','S',NULL,NULL,NULL,'2017-10-17 22:33:03',1),
(2,NULL,2,'4badaee57fed5610012a296273158f5f','0919b5c38396c3f0c41f1112d538e42c','José da Silva','charlles.matos@gmail.com','','(61) 9811-16753','','S','170QDFFX6AU1WG95GAKO','2016-12-24 11:51:22',1,NULL,NULL),
(3,NULL,3,'4badaee57fed5610012a296273158f5f','def7924e3199be5e18060bb3e1d547a7','Francisco da Silva','charlles@matosconsultoria.com','','(61) 9843-82593','','S','AJAL24R8850C1HBA7YXH','2016-12-24 17:23:19',2,NULL,NULL);

/*Table structure for table `tbl_grupo` */

DROP TABLE IF EXISTS `tbl_grupo`;

CREATE TABLE `tbl_grupo` (
  `seq_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `dsc_grupo_descricao` varchar(250) DEFAULT NULL,
  `flg_grupo_ativo` enum('S','N') DEFAULT NULL,
  `dat_data_cadastro` datetime DEFAULT NULL,
  `seq_usuario_cadastro` int(11) DEFAULT NULL,
  `dat_data_alteracao` datetime DEFAULT NULL,
  `seq_usuario_alteracao` int(11) DEFAULT NULL,
  `cod_token_codigo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`seq_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_grupo` */

insert  into `tbl_grupo`(`seq_grupo`,`dsc_grupo_descricao`,`flg_grupo_ativo`,`dat_data_cadastro`,`seq_usuario_cadastro`,`dat_data_alteracao`,`seq_usuario_alteracao`,`cod_token_codigo`) values 
(1,'SAÚDE','S','2017-10-18 01:05:00',1,NULL,NULL,NULL),
(2,'EDUCAÇÃO','S','2017-10-18 01:05:23',1,NULL,NULL,NULL),
(3,'SEGURANÇA','S','2017-10-18 01:06:19',1,NULL,NULL,NULL),
(4,'RECEITAS E DESPESAS','S','2017-10-18 01:09:11',1,NULL,NULL,NULL),
(5,'IMPOSTOS E TAXAS','S','2017-10-18 01:09:26',1,NULL,NULL,NULL),
(6,'ESPORTE','S','2017-10-18 01:09:43',1,'2017-10-18 01:09:47',1,NULL),
(7,'ENTRETERIMENTO','S','2017-10-18 01:10:08',1,NULL,NULL,NULL),
(8,'MEIO AMBIENTE','S','2017-10-18 01:10:23',1,NULL,NULL,NULL),
(9,'TRANSPORTE E MOBILIDADE','S','2017-10-18 01:10:40',1,'2017-10-18 01:11:02',1,NULL),
(10,'URBANISMO','S','2017-10-18 01:12:43',1,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
