CREATE TABLE users (
    id INTEGER NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE posts (
    id INTEGER NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    post_title VARCHAR(255) NOT NULL,
    post_content LONGTEXT NOT NULL,
    post_image VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT now(),
    PRIMARY KEY (id)
);

INSERT INTO posts (username, post_title, post_content, post_image)
VALUE ('niga', 'This is a totally new post', 'This is a sentence of the post content', 'https://i.imgur.com/1t6Vkct.jpg');