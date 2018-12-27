create table User (
	username varchar(30) not null,
	password varchar(30),
	Name varchar(40),
	Type varchar(10),
	Episodes smallint,
	Country varchar(10),
	interest varchar(100)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;