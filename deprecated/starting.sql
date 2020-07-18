CREATE TABLE IF NOT EXISTS `messages` (
     `id` int(11) primary key auto_increment NOT NULL,
     `message` varchar(2048) NOT NULL,
     `author` varchar(40) NOT NULL,
     `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- insert into chat1 (date, author, message, phrase, pass) VALUES ('2020-7-17 0:0:00', 'auth1', 'msg1', 'ph1', 'pswd1');
-- insert into chat1 (date, author, message, phrase, pass) VALUES ('2020-7-17 0:0:00', 'auth2', 'msg2', 'ph2', 'pswd2');

