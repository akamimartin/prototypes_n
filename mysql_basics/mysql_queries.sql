

 Select * from 'users' where 'username' = "snowwhite"
 Update 'users' set 'email' = 'myawesomeemail'
            where 'username' = 'snowwhite'
 INSERT INTO `myfirst_db`.`users` (`id`, `username`, `email`, `password`)
       VALUES (NULL, 'Sally', SHA1('mandy@gmail.com'), SHA1(' thisisagreatpassword'))
 
 DELETE FROM `users` WHERE `username`='Sally'
 Prototype 2 
 Delete * from 'todo_items' (table already created - deleted)  

 DROP TABLE 'todo_items';  
CREATE TABLE todo_items( 
 
 id int(11),  
title varchar(50), 
detail varchar(500), 
timestamp int(11)); 

INSERT INTO `myfirst_db`.`todo_items` (`id`, `title`, `details`, `timestamp`) VALUES ('1', 'go to store', 'get eggs', DATE('6/10/15'));
INSERT INTO `myfirst_db`.`todo_items` (`id`, `title`, `details`, `timestamp`) VALUES ('1', 'go to store', 'get milk', DATE('6/10/15'));
INSERT INTO `myfirst_db`.`todo_items` (`id`, `title`, `details`, `timestamp`) VALUES ('1', 'go to store', 'get nuts', DATE('6/10/15'));
INSERT INTO `myfirst_db`.`todo_items` (`id`, `title`, `details`, `timestamp`) VALUES ('1', 'go to store', 'get cookies', DATE('6/10/15'));
INSERT INTO `myfirst_db`.`todo_items` (`id`, `title`, `details`, `timestamp`) VALUES ('1', 'go to store', 'get ham', DATE('6/10/15'));
INSERT INTO `myfirst_db`.`todo_items` (`id`, `title`, `details`, `timestamp`) VALUES ('1', 'go to store', 'get hotdogs', DATE('6/10/15'));
INSERT INTO `myfirst_db`.`todo_items` (`id`, `title`, `details`, `timestamp`) VALUES ('1', 'go to store', 'get card', DATE('6/10/15'));
INSERT INTO `myfirst_db`.`todo_items` (`id`, `title`, `details`, `timestamp`) VALUES ('1', 'go to store', 'get apples', DATE('6/10/15'));
INSERT INTO `myfirst_db`.`todo_items` (`id`, `title`, `details`, `timestamp`) VALUES ('1', 'go to store', 'get oranges', DATE('6/10/15'));
INSERT INTO `myfirst_db`.`todo_items` (`id`, `title`, `details`, `timestamp`) VALUES ('1', 'go to store', 'get water', DATE('6/10/15'));

INSERT INTO `myfirst_db`.`todo_items` (`id`, `title`, `details`, `timestamp`, `user_id`) VALUES ('6', 'go to store', 'get bread', DATE('2015-06-03'), '2')
DELETE FROM `todo_items` WHERE user_id = 2; 
UPDATE `todo_items` SET `id`=3,`title`='go to disney',`details`='have fun' WHERE user_id = 2; 
SELECT * from 'users' where id = 1;

 