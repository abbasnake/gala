
CREATE DATABASE printful_test;

------------------------------------------- test1
CREATE TABLE test1 (
    id INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    question VARCHAR(50) NOT NULL,
    answer VARCHAR(50) NOT NULL
);
-- question 1
INSERT INTO test1 VALUES (
    NULL,
    "What Is Love?",
    "Lady Dont Hurt Me"
);
-- question 2
INSERT INTO test1 VALUES (
    NULL,
    "I Get By With A Little Help From",
    "My Friends"
);
-- question 3
INSERT INTO test1 VALUES (
    NULL,
    "Never Gonna Give You Up",
    "Never Gonna Let You Down"
);
-- question 4
INSERT INTO test1 VALUES (
    NULL,
    "Born To Be",
    "Wild"
);

---------------------------- fake answers for test 1
CREATE TABLE fake_answers1 (
    id INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    question1 VARCHAR(50) NOT NULL,
    question2 VARCHAR(50) NOT NULL,
    question3 VARCHAR(50) NOT NULL,
    question4 VARCHAR(50) NOT NULL
);

INSERT INTO fake_answers1 VALUES (
    NULL,
    "Its Magic",
    "Love",
    "My Pizza",
    "Or Not To Be Born"
);

INSERT INTO fake_answers1 VALUES (
    NULL,
    "What Is Love",
    "Parents",
    "Never Gonna Give You Up",
    "A Bee"
);

INSERT INTO fake_answers1 VALUES (
    NULL,
    "Hurty Dont Babe Me",
    "Wallet",
    "Never Gonna Drive Your Truck",
    "Loving You"
);

INSERT INTO fake_answers1 VALUES (
    NULL,
    "Aliens",
    "Brother In Law",
    "Even If You Eat My Duck",
    "Free"
);
-------------------------------------------- test2
CREATE TABLE test2 (
    id INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    question VARCHAR(50) NOT NULL,
    answer VARCHAR(5) NOT NULL
);
-- question 1
INSERT INTO test2 VALUES (
    NULL,
    "Pi",
    "3.14"
);
-- question 2
INSERT INTO test2 VALUES (
    NULL,
    "2 + 2 * 2",
    "6"
);
-- question 3
INSERT INTO test2 VALUES (
    NULL,
    "2 + 2",
    "4"
);
-- question 4
INSERT INTO test2 VALUES (
    NULL,
    "8023 / 113",
    "71"
);

---------------------------- fake answers for test 2
CREATE TABLE fake_answers2 (
    id INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    question1 VARCHAR(50) NOT NULL,
    question2 VARCHAR(50) NOT NULL,
    question3 VARCHAR(50) NOT NULL,
    question4 VARCHAR(50) NOT NULL
);

INSERT INTO fake_answers2 VALUES (
    NULL,
    "3.15",
    "4",
    "5",
    "81"
);

INSERT INTO fake_answers2 VALUES (
    NULL,
    "Is Delicious",
    "8",
    "3",
    "91"
);

INSERT INTO fake_answers2 VALUES (
    NULL,
    "1.14",
    "2",
    "2",
    "61"
);

INSERT INTO fake_answers2 VALUES (
    NULL,
    "1.41",
    "666",
    "1",
    "3"
);


-------------------------------------------- test3
CREATE TABLE test3 (
    id INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    question VARCHAR(50) NOT NULL,
    answer VARCHAR(50) NOT NULL
);
-- question 1
INSERT INTO test3 VALUES (
    NULL,
    "A Gig Is",
    "A Gig Is A Gig Is A Gig"
);
-- question 2
INSERT INTO test3 VALUES (
    NULL,
    "Go Ahead",
    "Make My Day"
);
-- question 3
INSERT INTO test3 VALUES (
    NULL,
    "The First Rule Of Fight Club",
    "You Do Not Talk About Fight Club"
);
-- question 4
INSERT INTO test3 VALUES (
    NULL,
    "I Love The Smell Of Napalm",
    "In The Morning"
);

---------------------------- fake answers for test 3
CREATE TABLE fake_answers3 (
    id INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    question1 VARCHAR(50) NOT NULL,
    question2 VARCHAR(50) NOT NULL,
    question3 VARCHAR(50) NOT NULL,
    question4 VARCHAR(50) NOT NULL
);

INSERT INTO fake_answers3 VALUES (
    NULL,
    "Is Pretty Sweet",
    "Eat Sweets All Day",
    "Be Nice To Everybody",
    "Before A Shower"
);

INSERT INTO fake_answers3 VALUES (
    NULL,
    "Is A Concert",
    "Make My Bed",
    "You Talk About Fight Club",
    "Smells Like Home"
);

INSERT INTO fake_answers3 VALUES (
    NULL,
    "Giggity",
    "I Am Dead",
    "No Smoking",
    "Its Refreshing"
);

INSERT INTO fake_answers3 VALUES (
    NULL,
    "Of Destiny",
    "And Turn Right There",
    "There Are No Rules",
    "Lets Meet Marlon Brando"
);


-------------------------------------------- test4
CREATE TABLE test4 (
    id INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    question VARCHAR(50) NOT NULL,
    answer VARCHAR(50) NOT NULL
);
-- question 1
INSERT INTO test4 VALUES (
    NULL,
    "Capital of Latvia",
    "Riga"
);
-- question 2
INSERT INTO test4 VALUES (
    NULL,
    "Capital of Russia",
    "Moscow"
);
-- question 3
INSERT INTO test4 VALUES (
    NULL,
    "Capital of Serbia",
    "Bellgrade"
);
-- question 4
INSERT INTO test4 VALUES (
    NULL,
    "Capital of Japan",
    "Tokyo"
);
-- question 5
INSERT INTO test4 VALUES (
    NULL,
    "Capital of France",
    "Paris"
);

---------------------------- fake answers for test 4
CREATE TABLE fake_answers4 (
    id INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    question1 VARCHAR(50) NOT NULL,
    question2 VARCHAR(50) NOT NULL,
    question3 VARCHAR(50) NOT NULL,
    question4 VARCHAR(50) NOT NULL,
    question5 VARCHAR(50) NOT NULL
);

INSERT INTO fake_answers4 VALUES (
    NULL,
    "Figa",
    "Putin",
    "Bratislava",
    "Ninjatown",
    "Art"
);

INSERT INTO fake_answers4 VALUES (
    NULL,
    "Tallin",
    "KGB",
    "Ljubljana",
    "Kyoto",
    "Seville"
);

INSERT INTO fake_answers4 VALUES (
    NULL,
    "Vilnius",
    "Vodka",
    "Zagreb",
    "Osaka",
    "Marseille"
);

INSERT INTO fake_answers4 VALUES (
    NULL,
    "Sigulda",
    "St Petersburg",
    "Rome",
    "Sushi",
    "Toulouse"
);

INSERT INTO fake_answers4 VALUES (
    NULL,
    "Latvi",
    "Nasa",
    "Sticks And Stones",
    "Beijing",
    "Laris"
);
------------------------------------------ result table
CREATE TABLE results (
    id INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    test_name CHAR(5) NOT NULL,
    test_question VARCHAR(50) NOT NULL, 
    test_answer VARCHAR(50) NOT NULL,
    user_name VARCHAR(50) NOT NULL,
    user_answer VARCHAR(100) NOT NULL, 
    is_correct ENUM("true", "false") NOT NULL,
    dt DATETIME NOT NULL
);
