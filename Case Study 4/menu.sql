create table coffee
( coffee_id int unsigned not null auto_increment primary key,
  coffee_name char(50) not null,
  coffee_price float(10) not null
);

create table orders
( order_id int unsigned not null auto_increment primary key,
  coffee_id int unsigned not null,
  quantity int unsigned
);