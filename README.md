<div align="center">
    <h1>Tugas Besar</h1>
    <h3>II3160 - Teknologi Sistem Terintegrasi</h3>
</div>
<br>

<div align="center">
    <img src="https://readme-typing-svg.herokuapp.com?font=Itim&size=48&pause=1000&color=20C20E&center=true&vCenter=true&random=false&width=1000&height=60&lines=Teknologi+Sistem+-+Terintegrasi;Sistem+Rumah+Sakit;Sistem+Apotek" alt="Typing SVG">
</div>

## List of Contents

1. [Description](#description)
2. [Group's Members](#groups-members)
3. [Tech Stack](#tech-stack)
4. [How to Run](#how-to-run)
5. [API Endpoints](#api-endpoints)
6. [Deployment](#deployment)

## System Overview

Service ini menyediakan API yang digunakan sebagai backend untuk aplikasi [Intelligente Landwirtschaft - Frontend](https://github.com/rasyadanfz/intelligente-landwirtschaft-frontend). Service ini dibuat untuk mendukung proses bisnis penanaman dan pemeliharaan berdasarkan rancangan SoaML (Service-oriented architecture Modelling Language) smart farming.

## Group's Members

<table>
    <tr align="center">
        <th>No.</th>
        <th>Nama</th>
        <th>NIM</th>
    </tr>
    <tr>
        <td>1.</td>
        <td>Frendy Sanusi</td>
        <td>18221041</td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Nadira R. A.</td>
        <td>18221059</td>
    </tr>
    <tr>
        <td>3.</td>
        <td>Vania Salsabila</td>
        <td>18221075</td>
    </tr>
</table>

## Tech Stack

- Codeigniter 4
- MySQLdb
- Github dan Git
- Visual Studio Code

## How to run

1. Clone respository ini

2. Masuk ke directory

```
cd /ci-hospital
```

3. Copy konten file .env.example menjadi .env

4. Setup aplikasi menggunakan command berikut

```
composer install
npm install
php spark migrate
php spark db:seed DataSeeder
```

5. Jalankan aplikasi menggunakan command berikut dalam dua terminal berbeda
```
php spark serve --port 8081
npx tailwindcss -i ./public/css/input.css -o ./public/css/styles.css --watch
```
7. Service berjalan pada http://localhost:8081 pada browser Anda

