<?php
/**
 * Created by PhpStorm.
 * User: murtiuso
 * Date: 09/11/2017
 * Time: 11:09
 */
// esto es para ponwerlo en el html
/*<?php while( $row = $queryResult->fetch(PDO::FETCH_ASSOC) ): */?><!--
    <tr>
        <td><img src="<?/*=$row['image']*/?>" alt="Logo de <?/*=$row['name']*/?>"></td>
        <td><?/*=$row['name']*/?></td>
        <td><?/*=$row['based']*/?></td>
        <td><?/*=$row['version']*/?></td>
        <td><?/*=$row['main_page']*/?></td>
        <td><a href="edit.php?id=<?/*=$row['id']*/?>" class="editar">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </a>
        </td>
        <td><a href="delete.php?id=<?/*=$row['id']*/?>" class="borrar"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
    </tr>


--><?php /*endwhile; */?>



<td><img src="<?=$row['image']?>" alt="Logo de <?=$row['name']?>"></td>


<!-- <td><a href="edit.php?id=<?=$row['id']?>" class="editar">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                </td> -->
<!-- <td><a href="delete.php?id=<?=$row['id']?>" class="borrar"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td> -->


DISEÑO DE LA BASE DE DATOS

Definición del "problema"
Se necesita que la aplicación guarde información sobre cada objeto que se cree.
Estos objetos contendrán una frase, un conjunto de títulos de campo más el contenido de tal campo (ambos de una cantidad variable) o en definitiva, cualquier información susceptible de ser guardada. No se podrán crear objetos vacíos.
Vendrían a ser unos contenedores, cuyo contenido en esta versión sería principalmente texto.
Un objeto o conjunto de ellos forman una tabla en la base de datos de tal usuario, o dicho de otra manera, una base de datos es una colección de objetos de diferentes temas, los cuales son creados mediante diferentes tablas.

Las tablas de tal BD serán los elementos (objetos) de los que se quiere guardar la información.
Por ejemplo, si se quiere almacenar información sobre, aplicaciones compradas, a cuyo objeto podríamos llamar "Aplicaciones Compradas", tendría un registro llamado 1Password, que tendría un campo llamado número de serie, que tendría un valor, tendría un campo llamado Fin Licencia, que tendría un valor que indicaría cuando acabaría tal licencia, otro campo llamado por ejemplo, notas, que podría tener un valor como: "Este programa tiene una versión para que se sincronicen los contenidos a través de diferentes dispositivos"… Y así, de manera similar, con más ejemplos .

Hay que recordar que el/la usuari@ no deberá preocuparse de medir cuánto deberá ocupar cada campo que cree, será tarea de l@s programadore/as dejar ese tipo de aspectos completamente transparentes al/la usuari@, por tanto el campo creado se ajustará automáticamente a la cantidad de texto que el/la usuari@ haya creado, y no será fijo, pudiéndose redimensionar con posterioridad.

Podrá haber diferentes usuari@s, cada cual con su respectiva cuenta.
Como ya existe la tabla users, información relevante a usuarios la podría guardar en una tabla con los campos que necesite, ya que no podría modificar la base de datos users.
En tal BD creada por la aplicación, se podría almacenar, nombre de usuari@, contraseña, dirección de correo electrónico, fecha de creación, un id, una frase para recordar contraseña, un email alternativo para recuperar la cuenta en caso de problemas.


(campos de base de datos == fields)
TABLAS
* los nombres de las tablas, ¿admitirán caracteres de otras lenguas?
de momento sólo en inglés
Objetos de los que guardar información
ID -> autoincremental, clave, no admite nulos
ObjectName -> no admite nulo, texto (limitar tamaño), (comprobar a la hora de la creación de la tabla si está tiene contenido, y si no, entonces evitar que se cree, en vez de poner este.campo en la base de datos como que no admite nulos, pues será un lío con los siguientes campos del mismo tipo)
FieldName -> texto (limitar tamaño), no único
FieldContent -> texto u otro contenido, si no ahora más adelante. Se puede cambiar de tamaño pero de tipo.
DateCreation ->
UpdateAt ->
CreateAt ->



Usuari@:
* mysql tiene una tabla users, que es donde se guardan los usuarios. Por tanto no me tengo que crear una tabla usuarios, sino crear los usuarios en la tabla de la base de datos. A partir de ahí, crearme las bases de datos de cada usuario.
id
name
surname
email
userName
password
repassword
createAt
updateAt
lastAccess ->


SERIAL NUMBERS
id
appName
version
serialNumber
purchased
price




* los nombres de las tabas también se pueden cambiar
* adecuado que se cree una base de datos en local, al menos para almacenar los cambios hechos, sin tener por qué estar conectado a internet, y después sincronizar. Se sincronizaría la base de datos usu1 por ejemplo en local, con usu1 del servidor. Por tanto crear una base de datos por cada usuario.
* para cada ekemepto q se cree en cada objeto, debe aparecer un fecha de creación, y al princiìo de cuando se borra, se debería conservar por si se decide volver atrás, para cada elenmetpdebería haber un id
* ¿no hay riesgo de que al acceder un usuario a su cuenta puede ver el contenido de los campos de los demás si están las diferentes tablas al nivel de los nombres de usuario y demás?
* podría poner el tipo de campo

* en el login ip, etc -> puede q login debiera ser una entidad
* campo id
* ¿cómo Hacer los diferentes usuarios, metiendo en una base de datos nombres de usuario y contraseña o creando usuarios con usuarios con permisos limitados?

* según la cantidad de caracteres se podría crear un campo de un tipo, y en el momento en que se necesite más espacio, convertirlo a un tipo más grande

* un campo de un tipo, se queda de ese tipo, aunque ase pueda aumentar su tamaño, pero si es texto no se puede convertir a imagen

* ¿cómo se hace para crear desde la aplicación nuevos usuarios?

* nombres de la base de datos:
por el momento restringir los nombres a usar los caracteres latinos, sin ñ ni caracteres raros. Sí punto, guión o guión bajo.
Para los nombres de la base de datos de cada usuario, cogeré el nombre tal y como está y le añadiré al principio this_is_the , y al final data_base quedando como resultado this_is_thenomBredeUsuariodata_base

* restringir por tanto al tamaño de nombre de usuario
* mysql restringe la cantidad de caracteres aa 20 a la hora de crear un nombre de usuario

* da un nombre a esta agrupación de elementos sobre los que vas a guardar información


* me he creado un usuario:
nomBredeUsuario
contra:
nomBredeUsuario

* para este tipo de proyecto, no necesito una base datos relacional. investigar mongo











