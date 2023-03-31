<h1 align="center">QrCode</h1>

   <p>
   
   - [Sobre](#sobre)
   - [Preview](#preview)
   - [Funcionalidades](#Funcionalidades)
   - [Como Usar](#como-usar)
   - [Como Contribuir](#como-contribuir)
   - [Licença](#licença)

   </p>

---

<h2 align="center">Sobre</h2>

Esse projeto foi desenvolvido no intuito de gerar uma imagem qrcode com os dados para substituir a necessidade de um cartão de visitas;

---

<h2 align="center">Preview</h2>

-   Funcionamento da aplicação:

     <p align="center">
        <img src="https://i.ibb.co/GT6xvYK/Captura-de-tela-2023-03-30-195143.png" width="400" alt="Preview">
     </p>

-   Caso prefira ver o funcionamento passo a passo no [YT](https://youtu.be/MTeT7RwVbgo)

---

<h2 align="center">Funcionalidades</h2>
   
- Criar QrCode com dados passados por um formulario;

<h2 align="center">Como Usar</h2>

-   Clone esse repositorio:

```sh
git clone https://github.com/AndreSnow/generate-qrcode-about-Neves.git qrcode
```

-   Entrar no diretorio:

```sh
cd qrcode
```

<h3> Com Docker </h3>

-   Renomei o **.env.exemple** para **.env**
-   Com docker, será necessário ter:

    -   docker

-   Inicialize o container:

```sh
docker compose up -d --build
```

-   Crie o banco entrando no container **php_qrcode** para rodar as migrations

```sh
docker exec -it php_qrcode bash
```

-   Rode as migrations com:

```sh
php artisan migrate
```

<h3>Sem Docker</h3>

-   Sem o docker, será necessário ter:

    -   PHP>=8.1

-   Mude as configurações de conexão com o banco de dados em **.env** basta comentar as configurações do **mysql** e descomentar do **sqlite** e execute as migrations como mostrado acima:

-   Execute o servidor do PHP:

```sh
php -S localhost:88
```

-   Acesse:

```sh
localhost:88
```

---

<h2 align="center">Como Contribuir</h2>

-   De um Fork no projeto.

-   Crie uma nova branch com sua modificações:

```sh
git checkout -b my-feature
```

-   Salve suas configurações e crie um commit dizendo com o que você contribuiu:

```sh
git commit -m "feature: My new feature"
```

-   Nos envie:

```sh
git push origin my-feature
```

---

<h2 align="center">Licença</h2>

<p align="center">
   Este repositório está sob licença MIT. Você pode acessar o arquivo <a href="https://github.com/AndreSnow/generate-qrcode-about-Neves/blob/master/LICENSE">LICENSE</a> para mais detalhes. 😉
</p>

---

Esse projeto foi desenvolvido por **[@André Neves](https://www.linkedin.com/in/andré-n-922181a6/)**.

---

Se isso te ajudou, dê uma ⭐, isso vai me ajudar também!
😉

---

   <div align="center">

[![Linkedin Badge](https://img.shields.io/badge/-Andre%20Neves-292929?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/andr%C3%A9-n-922181a6/)](https://www.linkedin.com/in/andré-n-922181a6/)

   </div>
