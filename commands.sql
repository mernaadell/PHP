create database My_Company;
create database if not exists  My_Company;
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
alter table orders add  FOREIGN key (OrderID) REFERENCES class(id);--7tet constrain b3d l create

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
--ceil
--floor
--round(num,decimal)
--truncate(number,decimal) zy l round bs mesh bt2rab a5er rkam 3ashry

select number as mainnumber ,ceil(number) as newnumber from try;
select number as mainnumber ,floor(number) as newnumber from try;
select number as mainnumber ,round(number) as newnumber from try;
select number as mainnumber ,round(number,2) as newnumber from try;

select number as mainnumber round(number ,2),truncate(number,2) from try
select number pow(number,2) from try;
select number mod(number,2)from try;

--date&time functions

select curtime();--hh;mm;ss
select curdate();--yy-mm-dd
select now(); --l attnen swa
select current_timestamp();

--dayname(date) thursday
--dayofmonth(date) 20
--dayofweek(date)23
--dayofyear(date)123

--month(date)
--monthname(date)
--hour(date)
--minute(date)

--datediff(date1,date2)l far2 benhom

--last_day(date)a5er yom fe l shahr
--date_add(date,interval exp time unit)
--date_sub()
update try set date=date_add(date,interval 10 day) --yzwd 10 ayam 3la date l asly
update try set date=date_add(date,interval 1 month);


--comparison functions
-- between exp1(min) and exp2(max)
select * from try where number between 2 and 6;
select * from try where number not between 2 and 6;
select * from try where number in (4,5,8,"m");
select * from try where number not in (4,5,8);
--in
-- not in

--like lw mesh 3arf l asm kamel
--%empty or collection of char
-- _ one char
select * from try where name like "%erna";--merna
select * from try where name like "%erna%";

--comparison 
-- ==,>,<,>=

--logical
--or not xor and && ! || xor[a and not b] lazam wa7ed mt7a2a2 w wa7ed la
-- 7a2a2 l awalany w l tay la

--if (condition,true,false)

select id,name,if(number<24,"hard luck","congrats")as result from try 
update try set number =if (number<1,number+10,number)

--case 
--    when exp=value then result
--    when exp=value then result
--    else result
--end
select id,name,
case
    when number=10 then "not bad"
    when number=20 then "good"
    else then "hi"
end as result from try

--arithmatic

select (2*2)+100
select name,days as daysofwork,days*daysofwork as res from try

--information function
select user();
select session user();
select version();
select charset(user());

--imp
--order by
select name from try order by id ;
--group ygma3 elii zy bed ygbhom mra wa7da
select name,sum(points) from try group by name;
select name,count(status) from try group by name;
--having filter
select name,count(status) howmuch from try group by name having howmuch >1;


------------------------------------

/*
select * from table //attr l table kolha

SELECT - extracts data from a database
UPDATE - updates data in a database
DELETE - deletes data from a database
INSERT INTO - inserts new data into a database
CREATE DATABASE - creates a new database
ALTER DATABASE - modifies a database
CREATE TABLE - creates a new table
ALTER TABLE - modifies a table
DROP TABLE - deletes a table
CREATE INDEX - creates an index (search key)
DROP INDEX - deletes an index

SELECT column1, column2, ...
FROM table_name;


SELECT DISTINCT column1, column2, ... The SELECT DISTINCT statement is used to return only distinct (different) values.
FROM table_name;

SELECT COUNT(DISTINCT Country) FROM Customers; //3add l mo5tlfen

SELECT column1, column2, ...
FROM table_name
WHERE condition;  ex colum1>10 aw ay col mwgod fe table


=	Equal	
>	Greater than	
<	Less than	
>=	Greater than or equal	
<=	Less than or equal	
<>	Not equal. Note: In some versions of SQL this operator may be written as !=	
BETWEEN	Between a certain range	
LIKE	Search for a pattern	
IN	To specify multiple possible values for a column

SELECT column1, column2, ...
FROM table_name
WHERE condition1 AND condition2 AND condition3 ...;

and or not
-----------------------------------------------
-------------order by

The ORDER BY keyword is used to sort the result-set in ascending or descending order.

SELECT column1, column2, ...
FROM table_name
ORDER BY column1, column2, ... ASC|DESC;


 sorted by the "Country" and the "CustomerName" column. This means that it orders by Country, 
 but if some rows have the same Country, it orders them by CustomerName:

 SELECT * FROM Customers
ORDER BY Country, CustomerName;

---------insert into

INSERT INTO table_name (column1, column2, column3, ...)
VALUES (value1, value2, value3, ...);

------null values

If a field in a table is optional, it is possible to insert a new record or update a record without adding a value to this field.
 Then, the field will be saved with a NULL value.
 mmkn asebha null wala la

 ---------test null

 SELECT column_names
FROM table_name
WHERE column_name IS NULL;

----------update

UPDATE Customers
SET ContactName = 'Alfred Schmidt', City= 'Frankfurt'
WHERE CustomerID = 1;

-----------delete

DELETE FROM table_name WHERE condition;

------- select top
fe database l kbera b7dadlo 3wza shof mha ad eh

SELECT TOP number|percent column_name(s)
FROM table_name
WHERE condition;

SELECT TOP 50 PERCENT * FROM Customers;

aw

SELECT column_name(s)
FROM table_name
WHERE condition
LIMIT number;

----------min&nmax

The MIN() function returns the smallest value of the selected column.

The MAX() function returns the largest value of the selected column.


SELECT MIN(column_name)
FROM table_name
WHERE condition;

The COUNT() function returns the number of rows that matches a specified criterion.

The AVG() function returns the average value of a numeric column.

The SUM() function returns the total sum of a numeric column.

------------like

The LIKE operator is used in a WHERE clause to search for a specified pattern in a column.

There are two wildcards often used in conjunction with the LIKE operator:

% - The percent sign represents zero, one, or multiple characters
_ - The underscore represents a single character

SELECT column1, column2, ...
FROM table_name
WHERE columnN LIKE pattern;

------------in

SELECT column_name(s)
FROM table_name
WHERE column_name IN (value1, value2, ...);

-------------between

SELECT column_name(s)
FROM table_name
WHERE column_name BETWEEN value1 AND value2;

SELECT * FROM Products
WHERE ProductName BETWEEN "Carnarvon Tigers" AND "Chef Anton's Cajun Seasoning"
ORDER BY ProductName;

l text elii between dol

-----------SQL Aliases
tempo name 

SELECT column_name AS alias_name
FROM table_name;


----------join

A JOIN clause is used to combine rows from two or more tables,
 based on a related column between them.

 bged attr mo5tlfa mn tablesmo5tlfa bs based 3la attr mwgoda same fe l atnen

select orederid,customername 

 SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
FROM Orders
INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID;


SELECT column_name(s)
FROM table1
INNER JOIN table2
ON table1.column_name = table2.column_name;






*/

