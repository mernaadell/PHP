create data base My_Company;
create data if not exists base My_Company;
use database My_Company;
drop database My_Company;
drop database if exists My_Company;
-- create table employee; lazam ad5al l attr
create table employee (
    name varchar(255),
    id int(11),
    email varchar(255)
);
DESCRIBE employee;
show table status; --kol l tables
show create table employee;--yzhr l command elii kot 3amla beh l table DESCRIBE
create table if not exists employee (
    name varchar(255),
    id int(11),
    email varchar(255)
);
-- //rename table
rename table employee to EMPLOYEE,s1 to s2;
--alter y8yar l cols elii gwa l table zy data type w name w a3dl trteb l attr

alter table EMPLOYEE add password varchar(255);
alter table EMPLOYEE add password varchar(255) after name;
alter table EMPLOYEE add password varchar(255) first;
alter table EMPLOYEE drop password;
alter table EMPLOYEE change name name varchar(255) after password;--a8yar l mkan
alter table EMPLOYEE change name name char(255);
alter table EMPLOYEE change name name2 char(255);--a8yar l type
alter table EMPLOYEE modify ame char(255);--aktab l gded 3la tol
alter table EMPLOYEE rename employee;
alter table employee modify name2 char(50),change id userid int(11);
alter table employee convert to CHARACTER SET UTF8;
--constrains
alter table employee modify password varchar(255) not null;
alter table employee add merna varchar(255) not null;
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
    FOREIGN KEY (PersonID) REFERENCES class(id)
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