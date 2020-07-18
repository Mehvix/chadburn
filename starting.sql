create table chat1(
    id      int(6) auto_increment primary key,
    date    datetime        not null,
    author  varchar(128)    not null,
    message varchar(2056)   not null,
    phrase  varchar(512)    not null,
    pass    varchar(512)    not null
);


insert into chat1 (date, author, message, phrase, pass) VALUES ('2020-7-17 0:0:00', 'auth1', 'msg1', 'ph1', 'pswd1');
insert into chat1 (date, author, message, phrase, pass) VALUES ('2020-7-17 0:0:00', 'auth2', 'msg2', 'ph2', 'pswd2');

