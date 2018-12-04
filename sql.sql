drop database webdev;
create database webdev;
use webdev;
drop user 'bobbie'@'localhost';
CREATE USER 'bobbie'@'localhost' IDENTIFIED BY 'pug';
GRANT ALL PRIVILEGES ON USER.* TO 'bobbie'@'localhost';
GRANT ALL PRIVILEGES ON webdev.* TO 'bobbie'@'localhost';


DROP TABLE SHOWTIMES;
DROP TABLE MOVIESWATCHED;
DROP TABLE USER;
DROP TABLE MOVIES;


create table USER(
USERID int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Firstname VARCHAR(30) NOT NULL,
Lastname VARCHAR(30) NOT NULL,
Email VARCHAR(30) NOT NULL,
Address VARCHAR(70) NOT NULL,
Username VARCHAR(30) NOT NULL,
Password VARCHAR(30) NOT NULL,
Admin VARCHAR(1) NOT NULL
);

create table MOVIES(
MOVIEID int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(20) NOT NULL,
Genre VARCHAR(15) NOT NULL,
Age VARCHAR(15) NOT NULL,
Runtime VARCHAR(15) NOT NULL,
Photo VARCHAR(45) NOT NULL,
Discription VARCHAR(400) NOT NULL,
Price float(2,2) NOT NULL,
kids boolean NOT NULL
);

create table MOVIESWATCHED(
WATCHID int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(20) NOT NULL,
Day int(1) NOT NULL,
USERID int(6) UNSIGNED NOT NULL,
MOVIEID int(6) UNSIGNED NOT NULL,
TIME VARCHAR(5),
FOREIGN KEY (USERID) REFERENCES USER(USERID),
FOREIGN KEY (MOVIEID) REFERENCES MOVIES(MOVIEID)
);

create table SHOWTIMES(
DAYTYPE VARCHAR(1) NOT NULL,
MOVIEID int(6) UNSIGNED NOT NULL,
FOREIGN KEY (MOVIEID) REFERENCES MOVIES(MOVIEID),
TIME VARCHAR(5)
);

create table CCV(
DAYTYPE VARCHAR(1) NOT NULL,
MOVIEID int(6) UNSIGNED NOT NULL,
FOREIGN KEY (MOVIEID) REFERENCES MOVIES(MOVIEID),
TIME VARCHAR(5)
);

insert into MOVIES (Kids,Price,Age,Runtime,Name,Genre,Photo,Discription) values(true,'10.50','12a','120m','Goosebumps 2: Haunted Halloween','Horror','movie_photos/goosebumps.jpg','book hidden in a 
mysterious chest, they unwittingly resurrect evil ventriloquist dummy Slappy who sets out to unleash the apocalypse by bringing Halloween to life in a brand-new comedy adventure based on 
R.L. Stines best-selling series of books');

insert into MOVIES (Kids,Price,Age,Runtime,Name,Genre,Photo,Discription) values(false,'10.50','PG','260m','A star is born','Romance','movie_photos/starisborn.jpg','A movie star helps a young singer and 
actress find fame, even as age and alcoholism send his own career into a downward spiral.');

insert into MOVIES (Kids,Price,Age,Runtime,Name,Genre,Photo,Discription) values(false,'15.50','15','120m','Johnny English Strikes Again','Action','movie_photos/johnnyenglish.jpg','When a cyber-attack 
reveals the identity of all active undercover agents in Britain, the secret services last hope, Johnny English, is called out of retirement for a mission to find the mastermind hacker. As a man with few 
skills and analogue methods, Johnny English must overcome the challenges of modern technology to make this mission a success.');

insert into MOVIES (Kids,Price,Age,Runtime,Name,Genre,Photo,Discription) values(false,'11.50','15A','100m','A Simple Favour','Romance','movie_photos/simplefavour.jpg','Mummy blogger Stephanie seeks to uncover the truth behind her best friend Emilys sudden disappearance from their small town. Stephanie is joined in her search by Emilys husband Sean in this stylish post-modern film noir filled with twists and betrayals, secrets and revelations, love and loyalty, murder and revenge.');

insert into MOVIES (Kids,Price,Age,Runtime,Name,Genre,Photo,Discription) values(false,'10.50','15','100m','Venom','Action.scifi','movie_photos/venom.jpg','One of Marvels most enigmatic, complex and badass characters comes to the big screen, starring Academy Award® nominated actor Tom Hardy as the lethal protector Venom.');


insert into MOVIES (Kids,Price,Age,Runtime,Name,Genre,Photo,Discription) values(false,'9.50','PG','90m','Robin hood','Action','movie_photos/robinhood.png','Robin Hood a war-hardened Crusader and his Moorish commander mount an audacious revolt against the corrupt English crown in a thrilling action-adventure packed with gritty battlefield exploits, mind-blowing fight choreography, and a timeless romance. Taron Egerton stars as Robin Hood alongside Jamie Foxx as Little John, Eve Hewson as Maid Marian, Jamie Dornan as Will Scarlet, and Ben Mendelsohn as the Sheriff of Nottingham.');

insert into MOVIES (Kids,Price,Age,Runtime,Name,Genre,Photo,Discription) values(false,'14.50','PG','124m','Bohemian Rhapsody','Drama','movie_photos/rapisity.jpg','A foot-stomping celebration of Queen, their music, and their extraordinary lead singer Freddie Mercury, who defied stereotypes and shattered convention to become one of the most beloved entertainers on the planet. The film traces the bands meteoric rise through their iconic songs and revolutionary sound, their near-implosion as Mercurys lifestyle spirals out of control, and their triumphant reunion on the eve of Live Aid, where Mercury, facing a life-threatening illness, leads the band in one of the greatest performances in the history of rock music.');

insert into MOVIES (Kids,Price,Age,Runtime,Name,Genre,Photo,Discription) values(false,'9.50','18','130m','Creed 2','Drama','movie_photos/creed2.jpg','Life has become a balancing act for Adonis Creed. Between personal obligations and training for his next big fight, hes up against the challenge of his life. Facing an opponent with ties to his familys past only intensifies his impending battle in the ring. Rocky Balboa is there by his side through it all and, together, Rocky and Adonis will confront their shared legacy, question whats worth fighting for, and discover that nothings more important than family. Creed II is about going back to basics to rediscover what made you a champion in the first place, and remembering that, no matter where you go, you cant escape your history.');

insert into MOVIES (Kids,Price,Age,Runtime,Name,Genre,Photo,Discription) values(true,'10.50','12A','134m','Fantastic Beasts: The Crimes of Grindelwald
','Adventure','movie_photos/potter.jpg','Warner Bros. Pictures’ “Fantastic Beasts: The Crimes of Grindelwald” is the second of five all new adventures in J.K. Rowling’s Wizarding World™. At the end of the first film, the powerful Dark wizard Gellert Grindelwald (Johnny Depp) was captured by MACUSA (Magical Congress of the United States of America), with the help of Newt Scamander (Eddie Redmayne). But, making good on his threat, Grindelwald escaped custody and has set about gathering followers, most unsuspecting of his true agenda: to raise pure-blood wizards up to rule over all non-magical beings. In an effort to thwart Grindelwald’s plans, Albus Dumbledore (Jude Law) enlists his former student Newt Scamander, who agrees to help, unaware of the dangers that lie ahead. Lines are drawn as love and loyalty are tested, even among the truest friends and family, in an increasingly divided wizarding world.');

insert into MOVIES (Kids,Price,Age,Runtime,Name,Genre,Photo,Discription) values(true,'6.50','G','115m','Ralph Breaks The Internet: Wreck-It Ralph 2','Comedy','movie_photos/ralph.jpg','Join Ralph and Vanellope in their newest buddy-comedy adventure as they leave the arcade world behind and enter the uncharted and thrilling world of the internet. On a quest to save Vanellopes racing game, how will these two misfits ever succeed in this vast new world full of humour, heart, and some unexpected guests that only Disney can bring along?');

insert into MOVIES (Kids,Price,Age,Runtime,Name,Genre,Photo,Discription) values(true,'5.50','G','100m','Nativity Rocks!','Adventure','movie_photos/nat.jpg','Were back with the kids from St Bernadettes Primary School as the staff and students audition for a place in a spectacular rock musical. Celia Imrie reprises her role as Headmistress Mrs Keen to lead an exciting cast that includes Meera Syal, Ruth Jones, Hugh Dennis, and Craig Revel Horwood as the ruthless show director. With all the feel-good charm of the original film, this Christmas, Nativity Rocks');


insert into MOVIES (Kids,Price,Age,Runtime,Name,Genre,Photo,Discription) values(true,'9.50','G','96m','Smallfoot','Aniomation','movie_photos/bigfoot.jpg','The legend of Bigfoot is turned upside down when a bright young Yeti finds something he thought didnt exist - a human! News of this "smallfoot" brings him fame and a chance with the girl of his dreams. It also throws the simple Yeti community into an uproar over what else might be out there in the big world beyond their snowy village.');

insert into MOVIES (Kids,Price,Age,Runtime,Name,Genre,Photo,Discription) values(true,'7.50','PG','90m','The grinch','Comedy','movie_photos/grinch.jpg','Illumination and Universal Pictures present their funny, heartwarming, and visually stunning take on Dr Seuss beloved Christmas classic. The Grinch is a despicable grump who goes on a mission to steal Christmas, only to have his heart changed by a young girl in a universal story about the spirit of Christmas and the indomitable power of optimism.');


insert into MOVIES (Kids,Price,Age,Runtime,Name,Genre,Photo,Discription) values(false,'12.50','18','85m','The Possession Of Hannah Grace','Horror','movie_photos/scary.jpg','When a cop who is just out of rehab takes the graveyard shift in a city hospital morgue, she faces a series of bizarre, violent events A shocking exorcism spirals out of control, claiming the life of a young woman. Months later, Megan Reed (Shay Mitchell) is working the graveyard shift in the morgue when she takes delivery of a disfigured cadaver. Locked alone inside the basement corridors, Megan begins to experience horrifying visions and starts to suspect that the body may be possessed by a ruthless demonic force.');

insert into MOVIES (Kids,Price,Age,Runtime,Name,Genre,Photo,Discription) values(false,'7.50','PG','105m','The Greatest Showman','Musical','movie_photos/showman.jpg','Inspired by the imagination of P.T. Barnum, The Greatest Showman is an original musical that celebrates the birth of show business and tells of a visionary who rose from nothing to create a spectacle that became a worldwide sensation.');

insert into MOVIES (Kids,Price,Age,Runtime,Name,Genre,Photo,Discription) values(false,'9.50','15A','115m','The Girl in the Spiders Web
','Crime','movie_photos/spider.jpg','Lisbeth Salander, the cult figure and title character of Steig Larssons acclaimed Millennium book series, returns in an adaptation of the recent global bestseller where the outcast vigilante hacker and her journalist companion Mikael Blomkvist find themselves caught in a web of spies, cybercriminals, and corrupt government officials.');








insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','1','10:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','1','12:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','1','13:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','1','19:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','1','22:45');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','1','10:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','1','12:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','1','13:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','1','22:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','2','11:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','2','12:50');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','2','15:50');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','2','22:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','2','13:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','2','15:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','2','22:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','3','10:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','3','11:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','3','14:40');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','3','19:40');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','3','22:45');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','3','10:20');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','3','12:30');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','3','13:30');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','3','22:30');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','4','10:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','4','12:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','4','13:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','4','10:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','4','12:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','4','13:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','4','22:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','5','11:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','5','12:50');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','5','22:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','6','14:40');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','6','19:40');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','6','13:30');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','6','22:30');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','7','22:45');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','7','10:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','7','12:20');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','7','13:24');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','7','22:40');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','8','11:40');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','8','12:50');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','8','15:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','8','22:20');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','8','13:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','8','15:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','9','10:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','9','11:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','9','14:40');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','9','19:40');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','9','22:45');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','9','10:20');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','9','12:30');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','9','13:30');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','9','22:30');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','10','11:40');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','10','12:50');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','10','15:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','10','13:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','10','15:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','10','10:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','11','11:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','11','14:40');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','11','19:40');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','11','22:45');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','12','10:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','12','12:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','12','13:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','12','19:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','12','22:45');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','12','10:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','12','12:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','12','13:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','12','22:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','13','10:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','13','12:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','13','13:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','13','10:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','13','12:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','13','13:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','13','22:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','14','22:45');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','14','10:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','14','12:20');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','14','13:24');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','14','22:40');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','15','10:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','15','11:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','15','14:40');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','15','19:40');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','15','22:45');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','15','10:20');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','15','12:30');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','15','13:30');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','15','22:30');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','16','10:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','16','12:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','16','13:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','16','19:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','16','22:45');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','16','10:10');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','16','12:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','16','13:00');
insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','16','22:10');


