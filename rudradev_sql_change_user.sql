select user from mysql.user;
create user rudradev@localhost identified by 'rudradev' ;

grant all privileges on *.* to rudradev@localhost;

show grants for root@localhost;