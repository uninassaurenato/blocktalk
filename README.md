# Block Talk

<div align="center">
  <img src="https://i.imgur.com/g9OFwQI.png" alt="Block Talk Logo" height="80">
</div>

## 📋 Intenção do Projeto

O projeto tem como destino trazer acessibilidade para pessoas que têm algum tipo de neurodivergência, trazendo facilidade e praticidade ao público alvo no ambiente de criação de e-mails, cartas, currículos, convites de aniversário...

## 🚀 Tecnologias Utilizadas

<div align="center">

| Laravel | CSS | HTML | JavaScript | Blade | PHP |
|---------|-----|------|------------|-------|-----|
| <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/985px-Laravel.svg.png" height="40"> | <img src="https://cdn-icons-png.flaticon.com/512/5968/5968242.png" height="40"> | <img src="https://icons.iconarchive.com/icons/cornmanthe3rd/plex/512/Other-html-5-icon.png" height="40"> | <img src="https://static.vecteezy.com/system/resources/previews/027/127/463/non_2x/javascript-logo-javascript-icon-transparent-free-png.png" height="40"> | <img src="https://avatars.githubusercontent.com/u/63051368?s=280&v=4" height="40"> | <img src="https://www.brandlogopng.com/files/logo/php/php-language-logo-hd-png-image-download-baby-elephant-clipart-qs6r.png" height="40"> |

</div>

## 📦 Pré-requisitos

Antes de começar, certifique-se de ter instalado:

- **PHP** >= 8.2
- **Composer**
- **Node.js & NPM**
- **Banco de Dados** (SQLite, MySQL, etc)

## 🔧 Como Instalar

Siga os passos abaixo para configurar o projeto localmente:

1. **Clone o repositório:**
   ```bash
   git clone https://github.com/uninassaurenato/blocktalk.git
   ```

2. **Entre no diretório:**
   ```bash
   cd blocktalk/blocktalk
   ```

3. **Instale as dependências do PHP:**
   ```bash
   composer install
   ```

4. **Configure o ambiente:**
   ```bash
   cp .env.example .env
   ```

5. **Gere a chave da aplicação:**
   ```bash
   php artisan key:generate
   ```

6. **Execute as migrações:**
   ```bash
   php artisan migrate
   ```

7. **Instale as dependências do Node:**
   ```bash
   npm install && npm run build
   ```

8. **Inicie o servidor:**
   ```bash
   php artisan serve
   ```

Agora acesse a aplicação em: `http://localhost:8000`

## 📝 Licença

Este projeto está sob a licença MIT.

## 👥 Contribuidores

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues e pull requests.

---

<div align="center">
  Desenvolvido com ❤️ para promover acessibilidade
</div>
