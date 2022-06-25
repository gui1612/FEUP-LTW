CREATE TABLE users (
  username VARCHAR PRIMARY KEY,
  password VARCHAR NOT NULL
);

-- INSERT INTO users VALUES ('johndoe', '$2y$12$gtrUszGA/GzWOQZifHmwP.VtiZCqCLQF/eelI/UWZ7I8DhZRf4RFu');
-- INSERT INTO users VALUES ('janedoe', '$2y$12$W071llMzSIO4dT9nvjNh3eKBTZkoGNrQ0AdmzxT/oUpBXRNW5nYz6');
-- INSERT INTO users VALUES ('marydoe', '$2y$12$iM0oM68vxhy7gRKbGKbKwOM8IviOnRUMJFjdgVxXnQpy318DZEwqq');
-- INSERT INTO users VALUES ('jackdoe', '$2y$12$iM0oM68vxhy7gRKbGKbKwOM8IviOnRUMJFjdgVxXnQpy318DZEwqq');

INSERT INTO users VALUES ('johndoe', '$2y$10$c/JQ.PEWDhSjlyeTHA3FMeNTk4hR.3p1QnwS1QmDd75kUzT9ZkI/m');
INSERT INTO users VALUES ('janedoe', '$2y$10$q0R/MLy2CsM1o/rzbmZb5Or80bx5oCcnNL60QOjIIBU3COq6wWrA6');
INSERT INTO users VALUES ('marydoe', '$2y$10$awJ5W9nt9iBeExdABgs9MOhYc5FvnBamjwgqM3PaKdNuTeKhwSufu');
INSERT INTO users VALUES ('jackdoe', '$2y$10$BCczLtMa2wvV152ESsX.xOjQn2g0qlBwJsiauZToAHJPpweF.lrJ.')