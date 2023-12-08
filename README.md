# GymXpert

<p>
    Proyecto para la materia de <b>Programación avanzada en internet</b> impartida en la <b>Universidad Autónoma de Baja California Sur</b>.
    Este sistema ha sido desarrollado por:
    <ul>
        <li>Núñez Romero Marielena. Maquetadora</li>
        <li>Angulo Murillo Juan Antonio. QA.</li>
        <li>Domínguez Cota Miguel Iván. Backend.</li>
        <li>García Mancillas Adalberto. Frontend.</li>
        <li>Rodríguez Ramírez Brandon Alan. Frontend.</li>
    </ul>
</p>

## Setup del proyecto

<p>Una vez clonado el repositorio:</p>
<ol>
    <li>
        Instalar dependencias composer con el comando<br>
        <code>composer install</code>
    </li>
    <br>
    <li>
        Instalar dependencias npm con el comando<br>
        <code>npm install</code>
    </li>
    <br>
    <li>
        Crear y personalizar el archivo <i>.env</i> en base a <i>.env.example</i>.
    </li>
    <br>
    <li>
        Ejecutar migraciones con el comando<br>
        <code>php artisan migrate</code>
    </li>
    <br>
    <li>
        Ejecutar seeders de la base de datos con el comando<br>
        <code>php artisan db:seed</code>
    </li>
    <li>
        Crear una build de producción con el comando<br>
        <code>npm run build</code>
    </li>
        <li>
        Levantar el servidor de Laravel con el comando<br>
        <code>php artisan serve</code>
    </li>
</ol>

<p>
    Este proyecto cuenta con 5 usuarios predefinidos:
    <ul>
        <li>miguel@gmail.com</li>
        <li>mari@gmail.com</li>
        <li>brandon@gmail.com</li>
        <li>juan@gmail.com</li>
        <li>adal@gmail.com</li>
    </ul>
</p>
<p>La contraseña para cada uno de estos es <b><i>secret</i></b>.</p>
