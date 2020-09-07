create database My_Company;
create data if not exists base My_Company;
use database My_Company; --d5alt feha
drop database My_Company;
drop database if exists My_Company;
-------------------------------------------------------------
-- create table employee; lazam ad5al l attr
--attr type constarin
create table employee (
    name varchar(255) not null,
    id int(11),
    email varchar(255)
);

DESCRIBE employee; --ytl3 shaklha table wa7da
show table status; --kol l tables
show create table employee;--yzhr l command elii kot 3amla beh l table create

create table if not exists employee (
    name varchar(255),
    id int(11),
    email varchar(255)
);
/*
NUMERIC
TINY =>MAX[4]
SMALL=>MAX[6]
MED=>MAX[9]
INTEGER=>MAX[11]
BIG=>MAX[20]

..date..

Date        =>yyyy-mm-dd
Datetime    =>yyyy-mm-dd hh:mi:ss
Timestamp   =>yyyy-mm-dd hh:mi:ss
time        =>hh:mi:ss
year        =>yyyy
*/
----------------------------------------------------------------------
-- //rename table
rename table employee to EMPLOYEE,s1 to s2; --a8yar name l 2 tables aw aktar
--alter y8yar l cols elii gwa l table zy data type w name w a3dl trteb l attr

alter table EMPLOYEE add password varchar(255); --azwad attr gded

alter table EMPLOYEE add password varchar(255) after name; --azwad attr w a7dad mkano

alter table EMPLOYEE add password varchar(255) first;

alter table EMPLOYEE drop password; --remove attr

alter table EMPLOYEE change name name varchar(255) after password;--a8yar l mkan 

alter table EMPLOYEE change name name char(255); --a8yar l type bta3o

alter table EMPLOYEE change name name2 char(255);--a8yar l type w ame

alter table EMPLOYEE modify name char(255);--aktab l gded 3la tol

alter table EMPLOYEE rename employee; --8yar asm l table b tre2a alter

alter table employee modify name2 char(50),change id userid int(11); --3ml 7agten m3 b3d

alter table employee convert to CHARACTER SET UTF8; --a8yar l trmez

--alter table table name change ..etc
--alter table tablename fun ...., another fun....
                            
--constrains
alter table employee modify password varchar(255) not null;--7tet constrain aw zwdto

alter table employee add merna varchar(255) not null; --zwadt attr

alter table employee add unique(id);--5leto unique

alter table employee drop index id; --shelt ano unique

alter table employee add primary key(id);

alter table employee drop primary key;

show indexes from employee;

--forign key
create table class(
    id int not null,
    primary key(id),
    name varchar(255) not null unique,
    number int(11) unique
);
CREATE TABLE Orders (
    OrderID int NOT NULL,
    OrderNumber int NOT NULL,
    PersonID int,
    PRIMARY KEY (OrderID),
    FOREIGN KEY (PersonID) REFERENCES class(id) --l person id da hwa hwa l id fe class lzam l values tkon wa7da
);

--add forign key after
alter table orders add constrains ordering FOREIGN key (OrderID) REFERENCES class(id);--7tet constrain b3d l create

--functios
select left(text,2)from try;--awal 7arfen

select mid(text,2,5)from try;--position elii abda2 mno mn ela

select right(text,2)from try;

--select left(tuples,len)from table;
--3add l a7raf
select text,length(text) as count from try;
--select tuples ,a3mly l function de 3la kol record w smeha fe tuple asmo count mn table try;

select text,char_length(text) as count from try;--3add l a7raf ad eh mn bytes
--8er l length ygeb 3add l bytes mesh char char len a7san

select upper(text)from try;

select text,upper(text) from try ;
--l far2 bena w ben elii fo2 anha bt3mal col b2asm l fun
select ucase(text )from try;

select text,char_length(text) as count from try order by char_length(text);

--3wza artab 3n tre2 len
--repeat(string ,no of repeats)
--replace(string.from,to)
--reverse(string)
select text, repeat(text,3) as repeated from try;--y3mly tuples gded asmeh repeated
select text ,replace(text,"a","@")as replaced from try;
--mmkn bdal ma a3ml tuple gded la a3ml update fe l 2adem
update try set text=replace(text,"a","@");

--concat(str,str,str)
--concat_wa(separator,string,string) with seperator y7tolii shak; seprator

select text ,concat(text,"added by me")as mytext from try;
select text ,concat(text,"added by me",id)as mytext from try;
select text ,concat(",",text,"added by me",id)as mytext from try;
select text ,concat(",",text,concat(" ",id))as mytext from try;
select text ,reverse(concat(id,text))as mytext from try;

--insert(string,position,length,new string)--new string mmkn agebo mn data base
select text ,insert(text,3,2,"new") --ybdal
update try set text=insert(text,7,1,id);

--trim(leading |trailing|both removw from strig)
--method option both will use
--remove if you not written space will remove
select text from try;
select text,trim(text) as trimed from try;
select text,trim(leading from text) as trimed from try;
select text ,trim(both from text) as trimed from try;
select text,trim(leading,"@", from text) as text withoutspace , char_length(text) as textwithspaces,char_length(trim(both from text)as bothtrimed from try)
select text,ltrim(text) as trimed from try;

--padding
--lpad(string,len elii ywrhali,paddedstring)
--rpad(string,len,paddedstring)
select text as maintext,lpad(text,10,".txt") as withpadded from try;

--math
select number as mainnumber ,ceil(number) as newnumber from try;
select number as mainnumber ,floor(number) as newnumber from try;
select number as mainnumber ,round(number) as newnumber from try;
select number as mainnumber ,round(number,2) as newnumber from try;
