{include file= 'templates/header.tpl'}
<table>
    
    <thead>
        <tr>
            <th>nombre</th>
            <th>precio</th>
            <th>descripcion</th>
            <th>genero</th>
            <th>imagen</th>
        </tr>
    </thead>
        <tbody>
                <tr>
                    
                    <td>{$game->nombre}</td>
                    <td>{$game->precio}</td> 
                    <td>{$game->descripcion}</td>
                    <td>{$game->genero}</td>
                    <td><img class="img" src='{$game->imagen}' alt=""></td>
                </tr>

        </tbody>
</table>
{include file= 'templates/footer.tpl'}