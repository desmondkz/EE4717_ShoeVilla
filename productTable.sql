create table products
( productId int unsigned not null auto_increment primary key,
  gender varchar(10) not null,
  newArrival int(1) not null,
  sales int(1) not null,
  price float(6.2) not null,
  introduction varchar(500),
  photos varchar(50) not null,
  name varchar(50) not null,
  color varchar(20) not null
);

create table orders
( orderId int(50) unsigned not null auto_increment primary key,
  userId int unsigned not null,
  productId varchar(255) not null,
  firstName varchar(255) not null,
  lastName varchar(255) not null,
  address1 varchar(255) not null,
  address2 varchar(255) not null,
  country varchar(50) not null,
  state varchar(50) not null,
  city varchar(50) not null,
  zipcode int(50) not null,
  phone int(50) not null,
  nameoncard varchar(255) not null,
  cardnumber int(50) not null,
  cardType varchar(50) not null,
  month varchar(50) not null,
  year int(50) not null,
  cvv varchar(255) not null,
  subtotal float(10,2),
  datePurchase date not null
);

create table users
(
    id int(10) not null auto_increment primary key,
    username varchar(255) not null,
    email VARCHAR(255) not null,
    password varchar(255) not null
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;
