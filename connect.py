from pickle import GLOBAL, TRUE
import mysql.connector as mysql
con = mysql.connect(host = 'localhost', database = 'bd', user = 'root', password = '')

def TesteConexao():

    if con.is_connected():
        db_info = con.get_server_info()
        print('conectado', db_info)
        cursor = con.cursor()
        cursor.execute("select database();")
        linha = cursor.fetchone()
        print('conectado ao banco', linha)
        estado = True
    if con.is_connected():
        cursor.close()
        con.close()
        print('conexão encerrada')

def adicionar(nome, cpf, senha):
    if con.is_connected():
        #if con.is_connected():
        sql = "INSERT INTO `clientes` (`id`, `nome`, `cpf`, `senha`) VALUES (NULL, '{}', '{}', '{}');".format(nome, cpf, senha)
        cursor = con.cursor()
        cursor.execute(sql)
        con.commit()


adicionar('paulo', '321', 'pass')