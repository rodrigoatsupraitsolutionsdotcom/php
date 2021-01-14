CREATE SCHEMA `login_system` DEFAULT CHARACTER SET utf8mb4 ;

DROP TABLE IF EXISTS users;

CREATE TABLE users ( 
				id MEDIUMINT NOT NULL AUTO_INCREMENT, 
				name TEXT, 
				password TEXT, 
				PRIMARY KEY( id )
);

INSERT INTO users VALUES ( 0, 'jack', MD5( 'toronto' ) );
INSERT INTO users VALUES ( 0, 'megan', MD5( 'seattle' ) );
INSERT INTO users VALUES ( 0, 'rodrigo', MD5( 'nakahodo' ) );

select * from users;
