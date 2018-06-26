CREATE database trumpbox;
USE trumpbox;
create table `USER`
(
   	USE_ID               int PRIMARY KEY AUTO_INCREMENT,
   	USE_MAIL             varchar(256) not null,
   	USE_PASSWORD         varchar(256) not null
);
CREATE TABLE `BOX`
(
	BOX_ID               int PRIMARY KEY AUTO_INCREMENT,
	USE_ID 				 int not null,
   	BOX_MAC              varchar(256) not null,
   	BOX_STATE         	 BOOLEAN not null
);
CREATE TABLE `SOUND`
(
	SO_ID               int PRIMARY KEY AUTO_INCREMENT,
   	BOX_ID              int not null,
   	SO_DATE         	DATETIME
);
CREATE TABLE `MOVE`
(
	MO_ID               int PRIMARY KEY AUTO_INCREMENT,
   	BOX_ID              int not null,
   	MO_DATE         	DATETIME
);
insert into SOUND(BOX_ID, SO_DATE) values (1,now());
insert into MOVE(BOX_ID, MO_DATE) values (1,now());

call get_move(1);