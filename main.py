from cgitb import text
from ipaddress import collapse_addresses
import connect
from tkinter import *

#teste = connect.consultaCliente()

janela = Tk()

janela.title('Dados Clientes')

texto = Label(janela, text= 'Dados dos Clientes')
texto.grid(column=0, row=0)

botao1 = Button(janela, text='Clica ai', command = connect.consultaCliente())
botao1.grid(column=0, row= 1)

texto2 = Label(janela, text= connect.consultaCliente())
texto2.grid(column = 0, row= 2)


janela.mainloop()
