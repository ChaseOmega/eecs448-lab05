CREATE TABLE Users
(
user_id VARCHAR(255) NOT NULL,
PRIMARY KEY (user_id)
);

CREATE TABLE Posts
(
post_id INT NOT NULL AUTO_INCREMENT,
content VARCHAR(255) NOT NULL,
author_id VARCHAR(255) NOT NULL,
PRIMARY KEY (post_id),
FOREIGN KEY (author_id) REFERENCES Users(user_id)
)
TYPE=InnoDB;
