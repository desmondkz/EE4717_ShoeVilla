create table products
( productId int unsigned not null auto_increment primary key,
  gender varchar(10) not null,
  newArrival int(1) not null,
  sales int(1) not null,
  price float(6.2) not null,
  introduction varchar(500),
  photos varchar(50) not null,
  name varchar(50) not null
);

create table orders
( orderId int unsigned not null auto_increment primary key,
  userId int unsigned not null,
  productId varchar(500) not null,
  price float(10,2),
  date date not null
);

create table users
(
    userid int unsigned not null auto_increment primary key,
    username varchar(10) not null,
    email VARCHAR(255) not null,
    password varchar(10) not null
)
