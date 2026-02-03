CREATE DATABASE student_management;

USE student_management;

-- Tabela com restrições para assegurar a integridade dos dados 
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    course VARCHAR(100) NOT NULL,
    enrollment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Inserção inicial para teste
INSERT INTO students (name, course) VALUES 
('Bruno Estevão', 'Engenharia de Software'),
('João Silva', 'IA & ML');
