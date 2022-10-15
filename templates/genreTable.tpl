{include file= 'templates/header.tpl'}

<table>
    
    <thead>
        <tr>
            <th>genero</th>
            <th>descripcion</th>
            <th>juegos</th>
            {if isset($smarty.session.user)}
            <th>edit</th>
            <th>delete</th>
            {/if}
        </tr>
    </thead>
        <tbody>
        
            {foreach from=$genres item=$genre}

                <tr>
                    <td>{$genre->genero}</td>
                    <td>{$genre->descripcion_genero}</td>
                    <td><a href="showByGenre/{$genre->id_genero}">ver juegos</a></td>
                    {if isset($smarty.session.user)}
                    <td> <a href='updateGenre/{$genre->id_genero}'>edit</a></td>
                    <td> <a href="deleteGenre/{$genre->id_genero}">delete</a></td>
                    {/if}
                </tr>

            {/foreach}
        </tbody>
</table>
{include file= 'templates/footer.tpl'}