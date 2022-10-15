{{include file= 'templates/header.tpl'}}



    <h1>{$genero->genero}</h1>
    <table>
        <thead>
            <tr>
                <th>nombre</th>
                <th>imagen</th>
                <th>precio</th>
                <th>descripcion</th>
            </tr>
        </thead>
            <tbody>
                
                
            
                {foreach from=$games item=$game}

                    <tr>
                        <td>{$game->nombre}</td>
                        <td><img class="img" src="{$game->imagen}" alt=""></td>
                        <td>{$game->precio}</td>
                        <td>{$game->descripcion}</td>
                    </tr>

                {/foreach}
                
            </tbody>
    </table>


{{include file= 'templates/footer.tpl'}}