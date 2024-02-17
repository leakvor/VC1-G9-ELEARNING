
-- insert to user table
INSERT INTO users(firstName, lastName, email, password, role)
VALUES('Senrin','Sim','senrin.sim@student.passerellesnumeriques.org','%senrin','admin'),
('Rady','Y','rady.Y@st.passerellesnumeriques.org','%rady','teacher'),
('Ng','Mam','ng.mam@student.passerellesnumeriques.org','%ngmam','student');

-- course category
CREATE TABLE categories(
    id int AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(30)
    );
-- inert in to categories table
INSERT INTO categories(category_name) VALUES('Web');

-- create courses table
CREATE TABLE courses(
    id int AUTO_INCREMENT PRIMARY KEY,
    cuorse_name VARCHAR(30),
    price int,
    teacher_id int(11),
    category_id int(11),
    FOREIGN KEY (teacher_id) REFERENCES users(id),
    FOREIGN KEY (category_id) REFERENCES categories(id)
    );
-- insert data to course table
INSERT INTO courses(cuorse_name, price, teacher_id, category_id) VALUES('JS',100,2,1);