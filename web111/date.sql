create database if not exists 'news';
use 'news';

drop table if exits 'user';
create table 'user'
{
    'id' tinyint unsigned auto_increment key,
    'user' varchar(20) not null,
    'password' varchar (32) not null
};

insert into 'user' ('user','password') 
values('admin','21232f297a57a5a743894a0e4a801fc3');

