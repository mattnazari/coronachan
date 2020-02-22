CREATE TABLE users{
    id INTEGER NOT NULL AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
}

CREATE TABLE posts{
    id INTEGER NOT NULL AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    post_title VARCHAR(50) NOT NULL,
    post_content VARCHAR(255) NOT NULL,
    post_image VARCHAR(255) NOT NULL,
    post_date DATE NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT now(),
    PRIMARY KEY (id)
}