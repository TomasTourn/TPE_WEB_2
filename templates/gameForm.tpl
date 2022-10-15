{include file= 'templates/header.tpl'}

{if $action=="finishAddGame"}
<form   action="{$action}" method="post" enctype="multipart/form-data">
    
  <div class="form-floating"> 
      
    <input type="text" class="form-control" id="name"  name="name" placeholder="name" value="">
    <label for="name">Nombre</label>
        
</div>

<div class="form-floating"> 
  <input type="number" class="form-control" id="precio" name="price" placeholder="precio" value="">
          <label for="price">Precio</label>
</div>

<div class="form-floating"> 
  <input type="text" class="form-control" id="description" name="description" placeholder="descripcion" value="">
          <label for="description">Descripcion</label>
</div>

<div class="form-floating"> 
  <input type="file" class="form-control" id="image" name="image" placeholder="image" value="">
          <label  for="description">Imagen</label>
</div>

  <div class="form-floating">
      <select name="genre" class="form-select" id="floatingSelect" aria-label="Floating label select example">
        <option selected>...</option>
        {foreach from=$genres item=$genre}
            <option value='{$genre->id_genero}'>{$genre->genero}</option>
        {/foreach}
      </select>
      <label for="floatingSelect">Genero</label>
    </div>

    <button type="Submit" class="btn btn-primary">Guardar</button>
</form>



{elseif $action=="finishUpdateGame"}



<form   action="{$action}/{$game->id_juego}" method="post" enctype="multipart/form-data">
  <div class="form-floating"> 
      
          <input type="text" class="form-control" id="name" value="{$game->nombre}" name="name" placeholder="name" >
          <label for="name">Nombre</label>
        
</div>

<div class="form-floating"> 
  <input type="number" class="form-control" id="precio" name="price" placeholder="precio" value="{$game->precio}">
          <label for="precio">Precio</label>
</div>

<div class="form-floating"> 
  <input type="text" class="form-control" id="description" name="description" placeholder="descripcion" value="{$game->descripcion}">
          <label for="description">Descripcion</label>
</div>

<div class="form-floating"> 
  <input type="file" class="form-control" id="image" value="{$game->imagen}" name="image" placeholder="image">
          <label  for="description">Imagen</label>
</div>

  <div class="form-floating">
      <select name="genre" class="form-select" id="floatingSelect" aria-label="Floating label select example">
        <option value="{$game->id_genero_fk}"  selected>{$game->genero}</option>
        {foreach from=$genres item=$genre}
        
          {if $genre->genero!=$game->genero}
            <option value='{$genre->id_genero}'>{$genre->genero}</option>
          {/if}
        {/foreach}
      </select>
      <label for="floatingSelect">Genero</label>
    </div>

    <button type="Submit" class="btn btn-primary">Guardar</button>
</form>


{/if}





{include file= 'templates/footer.tpl'}ch