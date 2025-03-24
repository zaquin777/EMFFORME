
from flask import Flask , render_template, request

app = Flask(__name__) 

# Simulando um banco de dados de alunos
alunos = []

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/cadastro', methods=['POST'])
def cadastro():
    nome = request.form.get('nome')
    idade = request.form.get('idade')
    serie = request.form.get('serie')
    cidade = request.form.get('cidade')
    

    if nome and idade and serie:
        aluno = {"nome": nome, "idade": idade, "serie": serie}
        alunos.append(aluno)
        return render_template('sucesso.html', aluno=aluno)
    else:
        return "Dados inválidos", 400

if __name__ == '__main__':
    app.run(debug=True)
