CREATE DATABASE IF NOT EXISTS db_help;
USE db_help;

-- Exclui a tabela se já existir
DROP TABLE IF EXISTS sprint;

CREATE TABLE sprint (
    
  nome VARCHAR(50) COLLATE utf8_unicode_ci NOT NULL,
  email VARCHAR(50) COLLATE utf8_unicode_ci NOT NULL,
  numero VARCHAR(50) COLLATE utf8_unicode_ci NOT NULL,
  subject VARCHAR(58) COLLATE utf8_unicode_ci NOT NULL,
  message TEXT COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE UTF8_UNICODE_CI;

INSERT INTO sprint (nome, email, numero, message, subject)
VALUES
  ('José dos Campos', 'josecampos@gmail.com', '99999999', 'slaaaa', "Eu gostaria muito de entrar em contato com a equipe HelpCrime"),
  ('Maria Lascada', 'marialascada@gmail.com', '888888888', 'Mds do Céuuu', "Eu gostaria de relatar um caso de roubo de dados"),
  ('Carlos Almeida', 'carlosalmeida@gmail.com', '7777777777', 'Cristo', "Eu gostaria de esclarecer uma dúvida sobre como funciona o app");
