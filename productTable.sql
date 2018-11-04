create table products
( 
    productId int unsigned not null auto_increment primary key,
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
( 
    orderId int(50) unsigned not null auto_increment primary key,
    userId int unsigned not null,
    productId varchar(255) not null,
    productname varchar(255) not null,
    color varchar(255) not null,
    size int(50) not null,
    quantity int(50) not null,
    subtotal float(10,2),
    datepurchase date not null
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;

create table billing_info
(
    userId int unsigned not null,
    firstname varchar(255) not null,
    lastname varchar(255) not null,
    address1 varchar(255) not null,
    address2 varchar(255) not null,
    country varchar(50) not null,
    state varchar(50) not null,
    city varchar(50) not null,
    zipcode int(50) not null,
    phone int(50) not null,
    nameoncard varchar(255) not null,
    cardnumber int(50) not null,
    cardtype varchar(50) not null,
    month varchar(50) not null,
    year int(50) not null,
    cvv varchar(255) not null
);

create table users
(
    id int(10) not null auto_increment primary key,
    username varchar(255) not null,
    email varchar(255) not null,
    password varchar(255) not null
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;
