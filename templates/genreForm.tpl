{include file= 'templates/header.tpl'}


{if $action=="finishAddGenre"}
<form   action="{$action}" method="post">
    
    <div class="form-floating"> 
        
            <input type="text" class="form-control" id="name" name="genre" placeholder="name" value="">
            <label for="name">Genero</label>
          
</div>



<div class="form-floating"> 
    <input type="text" class="form-control" id="description" name="description" placeholder="descripcion" value="">
            <label for="description">Descripcion</label>
</div>
      <button type="Submit" class="btn btn-primary">Guardar</button>
  </form>


  
  {elseif $action=="finishUpdateGenre"}


  <form   action="{$action}/{$genre->id_genero}" method="post">
    
    <div class="form-floating"> 
        
            <input type="text" class="form-control" id="name" name="genre" placeholder="name" value="{$genre->genero}">
            <label for="name">Genero</label>
          
</div>



<div class="form-floating"> 
    <input type="text" class="form-control" id="description" name="description" placeholder="descripcion" value="{$genre->descripcion_genero}">
            <label for="description">Descripcion</label>
</div>
      <button type="Submit" class="btn btn-primary">Guardar</button>
  </form>
  {/if}

{include file= 'templates/footer.tpl'}