CREATE TABLE posts (
  id INTEGER PRIMARY KEY,
  author VARCHAR NOT NULL,
  text VARCHAR NOT NULL
);

INSERT INTO posts VALUES (NULL, 'johndoe', 'Hello world!');