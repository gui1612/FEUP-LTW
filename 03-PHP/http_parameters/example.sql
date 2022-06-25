CREATE TABLE names (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  firstName VARCHAR NOT NULL,
  lastName VARCHAR NOT NULL,
  number INTEGER NOT NULL
);

INSERT INTO names (firstName, lastName, number) VALUES ('Guilherme', 'Almeida', 7);
INSERT INTO names (firstName, lastName, number) VALUES ('Joao', 'Sousa', 5);
INSERT INTO names (firstName, lastName, number) VALUES ('Manuel', 'Ferreira', 13);
INSERT INTO names (firstName, lastName, number) VALUES ('Herman', 'Jose', 12);
INSERT INTO names (firstName, lastName, number) VALUES ('Armando', 'Pinto', 11);
INSERT INTO names (firstName, lastName, number) VALUES ('Troller', 'Trueman', 12);
INSERT INTO names (firstName, lastName, number) VALUES ('Albert', 'Einstein', 43);