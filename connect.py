from cgitb import text
import mysql.connector as mysql
from mysql.connector import Error

#Dados base da conexão
con = mysql.connect(host = 'localhost', database = 'bd', user = 'root', password = '')

def TesteConexao():
    #teste de conexão
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

#INSERT
def cadastrarCliente(nome, cpf, senha):
    if con.is_connected():
        #if con.is_connected():
        sql = "INSERT INTO `clientes` (`id`, `nome`, `cpf`, `senha`) VALUES (NULL, '{}', '{}', '{}');".format(nome, cpf, senha)
        cursor = con.cursor()
        cursor.execute(sql)
        con.commit()

def apagarCliente(idCliente):
    if con.is_connected():
        sql = 'DELETE FROM `clientes` WHERE `clientes`.`id` = {}'.format(idCliente)
        cursor = con.cursor()
        cursor.execute(sql)
        con.commit()

def atualizarCliente(nome, cpf, senha, idCliente):
    if con.is_connected():
        sql = 'UPDATE `clientes` SET `nome` = "{}", `cpf` = "{}", `senha` = "{}" WHERE `clientes`.`id` = {};'.format(nome, cpf, senha, idCliente)
        cursor = con.cursor()
        cursor.execute(sql)
        con.commit()

def consultaCliente(idCliente):
    if con.is_connected():
        sql = 'SELECT * FROM `clientes` WHERE `id` = "{}"'. format(idCliente)
        cursor = con.cursor()
        cursor.execute(sql)
        
        dados = cursor.fetchall()
        #print(cursor.rowcount)
        #print("Mostrando os autores cadastrados")
        
        for linha in dados:
            conteudo = f'''
            Id: {linha[0]}
            Nome: { linha[1]}
            CPF: {linha[2]}
            Senha: {linha[3]}
            '''
        return conteudo

def ConsultaListaClientes():
    if con.is_connected():
        sql = 'SELECT id, nome FROM `clientes`'
        cursor = con.cursor()
        cursor.execute(sql)
        conteudo = ''
        dados = cursor.fetchall()
        #print(cursor.rowcount)
        #print("Mostrando os autores cadastrados")
        
        for linha in dados:
            conteudo += 'Id: {:<3} | {}\n'.format(linha[0], str(linha[1]).upper())
        #print(conteudo)
        return conteudo

ConsultaListaClientes()