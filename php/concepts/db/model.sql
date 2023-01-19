drop database if exists dbtest;
create database dbtest;
use dbtest;


create table task(
    id      integer     not null    unique      AUTO_INCREMENT,
    title   nvarchar(300),
    isDone  boolean
);


insert into task values (1,"buy pen",false);
insert into task values (2,"clean house",true);
insert into task values (3,"test something",false);