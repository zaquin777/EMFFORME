import tkinter as tk
from tkinter import messagebox

def create_account():
    full_name = entry_name.get()
    email = entry_email.get()
    password = entry_password.get()
    
    if not full_name or not email or not password:
        messagebox.showerror("Erro", "Todos os campos são obrigatórios!")
    else:
        messagebox.showinfo("Sucesso", "Conta criada com sucesso!")

# Criar a janela principal
root = tk.Tk()
root.title("Plataforma de Marketing")
root.geometry("500x400")
root.configure(bg="#00AEEF")

# Criar os elementos da interface
title_label = tk.Label(root, text="Crie uma conta gratuita agora", font=("Arial", 14, "bold"), bg="#00AEEF", fg="white")
title_label.pack(pady=10)

entry_name = tk.Entry(root, width=40)
entry_name.pack(pady=5)
entry_name.insert(0, "Nome Completo")

entry_email = tk.Entry(root, width=40)
entry_email.pack(pady=5)
entry_email.insert(0, "Email")

entry_password = tk.Entry(root, width=40, show="*")
entry_password.pack(pady=5)
entry_password.insert(0, "Senha")

create_button = tk.Button(root, text="Criar Conta", font=("Arial", 12, "bold"), bg="yellow", command=create_account)
create_button.pack(pady=20)

info_label = tk.Label(root, text="Plataforma de Marketing para Crescimento Empresarial", font=("Arial", 10), bg="#F5F5F5")
info_label.pack(pady=10)

# Menu
menu_bar = tk.Menu(root)
root.config(menu=menu_bar)

options_menu = tk.Menu(menu_bar, tearoff=0)
options_menu.add_command(label="Sobre")
options_menu.add_command(label="Ajuda")
options_menu.add_separator()
options_menu.add_command(label="Sair", command=root.quit)

menu_bar.add_cascade(label="Opções", menu=options_menu)

# Rodar a aplicação
root.mainloop()
