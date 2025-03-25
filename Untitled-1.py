from flask import Flask , render_template, request # type: ignore

app = Flask(__name__) 

# Simulando um banco de dados de alunos
alunos = []

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/cadastro', methods=['GET','POST'])
def cadastro():
    nome = request.form.get('nome')
    idade = request.form.get('idade')
    cidade = request.form.get('cidade')
    endereco = request.form.get('end')

    if request.method == 'GET':
        return render_template('cadastro.html')

    if request.method == 'POST':
        if nome and idade:
            aluno = {"nome": nome, "idade": idade, "cidade":cidade, "endereco":endereco}
            alunos.append(aluno)
            print(alunos)
            return render_template('cadastroSucesso.html', aluno=aluno)
        else:
            return "Dados inválidos", 400   
    

if __name__ == '__main__':
    app.run(debug=True)
