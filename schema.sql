create database mapcrud;
use mapcrud;

create table place(
	id int not null auto_increment primary key,
	title varchar(255),
	description text,
	lat varchar(255),
	lng varchar(255),
	zoom varchar(255),
	created_at datetime
);

