USE db_resendetech;
CREATE TABLE tbl_maquinas (
    id INT PRIMARY KEY,
    nome VARCHAR(100),
    status_operacional int
);

Alter table tbl_maquinas
ADD data_registro timestamp default current_timestamp,
add severidade tinyint check (severidade between 1 and 3);

CREATE USER 'app_resende'@'localhost' IDENTIFIED BY 'fundao';
GRANT SELECT, INSERT ON db_resendetech.tbl_maquinas 
TO 'app_resende'@'localhost';

FLUSH PRIVILEGES;

SHOW GRANTS FOR 'app_resende'@'localhost';

USE db_resendetech;
INSERT INTO tbl_maquinas (nome, status_operacional) VALUES ('Máquina 1', 'ok');
INSERT INTO tbl_maquinas (nome, status_operacional) VALUES ('Máquina 2', 'falha');

ALTER TABLE tbl_maquinas 
MODIFY id INT AUTO_INCREMENT;

DESCRIBE tbl_maquinas;