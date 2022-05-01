from cgitb import text
from importlib import import_module
from ipaddress import collapse_addresses
import connect
from tkinter import *

#teste = connect.consultaCliente()
'''
janela = Tk()

janela.title('Dados Clientes')

texto = Label(janela, text= 'Dados dos Clientes')
texto.grid(column=0, row=0)

botao1 = Button(janela, text='Clica ai', command = connect.consultaCliente())
botao1.grid(column=0, row= 1)

texto2 = Label(janela, text= connect.consultaCliente())
texto2.grid(column = 0, row= 2)


janela.mainloop()
'''


def cadastro():
    print('CADASTRO DE NOVOS CLIENTES')
    nome = input('Nome: ')
    cpf = input('CPF: ')
    senha = input('Senha: ')

    connect.cadastrarCliente(nome, cpf, senha)

    print(connect.consultaCliente(nome))

#print(connect.consultaCliente('paulo h'))


def menu():
    #\033[1m "texto" \033[0m encontrei esse ANSI que me permite deixar o texto em negrito ocomando \033[1m representa o começo de onde deve ser negrito enquanto o \033[0m representa o final
    print(
        "\033[1m 1-\033[0m CADASTRAR CLIENTE\n"
        "\033[1m 2-\033[0m CONSULTAR CLIENTE\n"
        "\033[1m 3-\033[0m DELETAR CLIENTE\n"
        "\033[1m 4-\033[0m ???????????????\n"
        "\033[1m 5-\033[0m SAIR SISTEMA\n"
    )
    num = int(input('ESCOLHA UMA DAS OPÇÕES ACIMA: '))

    #CADASTRAR CLIENTE
    if num == 1:
        cadastro()
    #CONSULTAR CLIENTE
    elif num == 2:
        print(connect.ConsultaListaClientes())
        #num = int(input('digite o ID do cliente a ser consultado: '))
        #print(connect.consultaCliente(num))


    #DELETAR CLIENTE
    elif num == 3:
        print(num)
    #???????????????
    elif num == 4:
        print(num)
    #SAIR SISTEMA
    elif num == 5:
        print(num)
    elif num == 6:
        print(num)
    
    

menu()
