<p align="center">
  <a href="" rel="noopener">
 <img width=200px height=200px src="https://avatars.githubusercontent.com/u/45662503?v=4g" alt="Project logo" style="border-radius: 50%;"></a>
</p>
<h3 align="center">Thoth</h3>

<div align="center">

[![Status](https://img.shields.io/badge/status-active-success.svg)]()
[![GitHub Issues](https://img.shields.io/github/issues/Herdanis/Thoth)](https://github.com/Herdanis/Thoth/issues)
[![GitHub Pull Requests](https://img.shields.io/github/issues-pr/Herdanis/Thoth)](https://github.com/Herdanis/Thoth/pulls)
[![License](https://img.shields.io/github/license/Herdanis/Thoth)](/LICENSE)

</div>

---

## 📝 Table of Contents

-   [About](#about)
-   [Getting Started](#getting_started)
-   [Installing](#installing)
-   [Usage](#usage)
-   [Built Using](#built_using)
-   [Authors](#authors)

## 🧐 About <a name = "about"></a>

Thoth is OpenSource project to monitoring instance, service, database, DNS, etc.

## 🏁 Getting Started <a name = "getting_started"></a>

You require PHP 8.1 to run Thoth or you can use our [docker compose](https://github.com/Herdanis/Imentet) ✅ to run Thoth

## 🛠 Installing <a name = "installing"></a>

If you use a our docker-composer file <b>make sure</b> add crontab service to docker compose service for laravel cronjob

```
  crontab:
    image: herdanis/herdanis/php8.1-alpine-cronjob:1.0
    container_name: crontabReport
    volumes:
      - ./app:/var/www/html
    networks:
      - local
```

## 🎈 Usage <a name="usage"></a>

## 🚀 Deployment <a name = "deployment"></a>

## ⛏️ Built Using <a name = "built_using"></a>

-   [PHP](https://www.php.net/)
-   [MariaDB](https://mariadb.org/)
-   [Laravel](https://laravel.com/)

## ✍️ Authors <a name = "authors"></a>

-   [@Herdanis](https://github.com/Herdanis) - Idea & Initial work

See also the list of [contributors](https://github.com/Herdanis/Thoth/graphs/contributors) who participated in this project.
