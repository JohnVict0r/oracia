<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Configuração

Clone o projeto e execute os seguintes comandos:

```shell
$ git clone git@github.com:JohnVictor2017/oracia.git
$ cd oracia
$ composer install
$ cp .env.example .env
$ php artisan key:generate
$ php artisan migrate
```

Altere o arquivo .env com suas configurações locais, como por exemplo, as informações do banco de dados (DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD, etc)
Lembre-se se alterar o DB_HOST para 127.0.0.1

Inicie o servidor e acesse via http://127.0.0.1:3333 🤞🙏⏱👍

```
$ php artisan serve
```

### Colaboradores

<hr>
<table>
  <tr>
    <td align="center">
      <a href="http://github.com/johnvictor2017">
        <img src="https://avatars0.githubusercontent.com/u/30505330?s=400&v=4" width="100px;" alt="John Victor"/>
        <br />
        <sub><b>John Victor</b></sub>
      </a><br />
      <a href="https://github.com/mb-neto/oracia/commits?author=johnvictor2017" title="Code">💻</a>
    </td>
    <td align="center">
      <a href="https://github.com/Iolch">
        <img src="https://avatars0.githubusercontent.com/u/42042614?s=400&v=4" width="100px;" alt="Iolanda"/>
        <br />
        <sub><b>Iolanda</b></sub>
      </a><br />
      <a href="https://github.com/mb-neto/oracia/commits?author=Iolch" title="Code">💻</a>
    </td>
    <td align="center">
      <a href="https://github.com/SrtaEnne">
        <img src="https://avatars3.githubusercontent.com/u/26802307?s=400&v=4" width="100px;" alt="Iolanda"/>
        <br />
        <sub><b>Nátaly Enne</b></sub>
      </a><br />
      <a href="https://github.com/mb-neto/oracia/commits?author=SrtaEnne" title="Code">💻</a>
    </td>
    <td align="center">
      <a href="https://github.com/mb-neto">
        <img src="https://avatars0.githubusercontent.com/u/41993863?s=400&v=4" width="100px;" alt="Manoel Neto"/>
        <br />
        <sub><b>Manoel Neto</b></sub>
      </a><br />
      <a href="https://github.com/mb-neto/oracia/commits?author=mb-neto" title="Code">💻</a>
    </td>
    <td align="center">
      <a href="https://github.com/isaacgdo">
        <img src="https://avatars1.githubusercontent.com/u/20069403?s=400&v=4" width="100px;" alt="Manoel Neto"/>
        <br />
        <sub><b>Isaac Gomes</b></sub>
      </a><br />
      <a href="https://github.com/mb-neto/oracia/commits?author=isaacgdo" title="Code">💻</a>
    </td>
  </tr>
</table>

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
