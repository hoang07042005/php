CREATE TABLE students (
                          id INT PRIMARY KEY AUTO_INCREMENT,
                          name VARCHAR(250),
                          email VARCHAR(250)
);

INSERT INTO students (name, email)
VALUES
    ('hoang', 'doviethoang07042005@gmail.com'),
    ('son', 'theson123@ggmail.com');


DROP TABLE students