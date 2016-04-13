create table auth(
	uname varchar(30)primary key,
	pwd varchar(30)not null,
	reciept varchar(15)not null,
	p1 varchar(50)not null,
	p2 varchar(50)not null,
	phno numeric(15)not null,
	emailid varchar(50)not null,
	college varchar(50)not null
);

create table score(
	uname varchar(30)references auth(uname),
	level numeric(2)not null,
);

create table levels(
	level numeric(2),
	imgurl varchar(100)
);

//Data Inside levels table
insert into levels values('1','http://www.com'),...,('11','http://win.com');


//During Creating new Login
insert into auth values(...);
insert into score values(<uname>,1);		//Level 11 indicate win

