    
<h1>Symfony test</h1>

Para la prueba debe realizar los siguientes pasos:
<ul>
    <li>Instala Symfony desde el repositorio oficial.</li>
    <ul><li>curl -sS https://get.symfony.com/cli/installer | bash</li></ul>
    <li>Crea un proyecto desde 0. </li>
        <ul><li> symfony new --full my_project</li>
            <li> composer install</li>
        </ul>
    <li>Crea una tabla(Usuario) con Doctrine con los siguientes datos:
            <pre>
            +-------------+---------+
            | Column Name | Type    |
            +-------------+---------+
            | Id          | int     |
            | FirstName   | varchar |
            | LastName    | varchar |
            | CreatedAt   | datetime|
            | UpdatedAt   | datetime|
            +-------------+---------+
        </pre></li>
    <li>Crea al menos un controlador.</li>
    <li>Crea al menos una entidad.</li>
    <li>Crea al menos un servicio.</li>
    <li>Crea al menos un template.</li>
   <li>Para que todo esto funcione, en el template se debe visualizar los datos de la tabla (Usuario).</li>
</ul>    
