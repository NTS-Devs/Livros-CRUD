# Livros-CRUD

Este repositório conta um simples CRUD que registra livros. Ele foi desenvolvido para a disciplina de Laboratório de Aplicações para Web II por aluno do CEFET-MG Campus Contagem.

## Desenvolvedores
  - [João Vitor Lima Zeferino](https://github.com/SenhorLime)
  - [Núbia Torres de Oliveira](https://github.com/nubyoli)
  - [Otto Emanuel Martins Abreu](https://github.com/Otto-abreu)

## Requisitos
  - Xampp (8.0.30 ou superior)

  > ### Nota
  > O site foi testado somente no Windows 10 e 11 e foi desenvolvido usando o Visual Studio Code

## Rodando localmente

1. Clone o repositório em sua máquina
```bash
  git clone https://github.com/NTS-Devs/Site-Lweb
```

2. Mova o arquivo para a pasta htdocs do xampp
```bash
  move Site-Lweb c:\xampp\htdocs
```

3. Inicie o Apache e o MySQL no Xampp Control Panel

4. Rode o arquivo localizado em /Database para criar o banco de dados e a tabela

5. Digite a seguinte URL no seu navegador e registre algum livro
```
  http://localhost/Site-Lweb/App/livros/form
```

6. Se tudo ocorreu corretamente, você será redirecionado para a página inicial

## Telas

### Computador
![Computador](/Git_Files/pc.gif)


### Mobile
![Mobile](/Git_Files/mobile.gif)

## Estrutura do Projeto

```
└── Livros-CRUD/
    ├── App/
    │   ├── Controller/
    │   │   └── LivroController.php
    │   │
    │   ├── DAO/
    │   │   └── LivroDAO.php
    │   │
    │   ├── Model/
    │   │   └── LivroModel.php
    │   │
    │   ├── View/
    │   │   └── Modules/
    │   │       ├── Livro/
    │   │       │   ├── Assets/
    │   │       │   │   └── favicon.ico
    │   │       │   │
    │   │       │   └── CSS/
    │   │       │       ├── styles.css
    │   │       │       └── styles-mobile.css
    │   │       │ 
    │   │       ├── FormLivro.php
    │   │       └── ListaLivro.php
    │   │
    │   ├── Config.php
    │   └── index.php
    │
    └── Database/
        └── Database.sql
```