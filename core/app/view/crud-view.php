<?php if(isset($_GET["opt"]) && $_GET["opt"]=="all"):
$persons = PlaceData::getAll();
?>
	<div class="container">
	<div class="row">
	<div class="col-md-12">
	<h1>Lugares</h1>
	<a href="./?view=crud&opt=new" class="btn btn-default">Nuevo</a>
	<br><br>
	<?php if(count($persons)>0):?>
		<table class="table table-bordered">
			<thead>
				<th>Titulo</th>
				<th>Descripcion</th>
				<th>Lat</th>
				<th>Lng</th>
        <th>Zoom</th>
				<th></th>
			</thead>
			<?php foreach($persons as $p):?>
			<tr>
				<td><?=$p->title;?></td>
				<td><?=$p->description;?></td>
				<td><?=$p->lat;?></td>
				<td><?=$p->lng;?></td>
        <td><?=$p->zoom;?></td>
				<td>
					<a href="./?view=crud&opt=edit&id=<?=$p->id;?>" class="btn btn-warning btn-xs">Editar</a>
					<a href="./?action=crud&opt=del&id=<?=$p->id;?>" class="btn btn-danger btn-xs">Eliminar</a>
				</td>
			</tr>

			<?php endforeach;?>
		</table>

	<?php else:?>
		<p class="alert alert-warning">No hay elementos!</p>
	<?php endif; ?>

	</div>
	</div>
	</div>
<?php elseif(isset($_GET["opt"]) && $_GET["opt"]=="new"):?>
	<div class="container">
	<div class="row">
	<div class="col-md-12">
	<h1>Nuevo Lugar</h1>

<form method="post" action="./?action=crud&opt=add">
  <div class="form-group">
    <label for="exampleInputEmail1">Titulo</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Titulo" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Descripcion</label>
    <textarea name="description" class="form-control" id="exampleInputEmail1" placeholder="Descripcion"></textarea>
  </div>

<div class="form-group">
                                <label>Mapa</label>

<fieldset class="gllpLatlonPicker">
    <div class="gllpMap" style="height: 300px; width: 100%; "></div>
    <input type="hidden" name="lat" class="gllpLatitude" value="-12.044960"/>
    <input type="hidden" name="lng" class="gllpLongitude" value="-76.952807"/>
    <input type="hidden" name="zoom" class="gllpZoom" value="13"/>
  </fieldset>
                            </div>




  <button type="submit" class="btn btn-primary">Agregar</button>
</form>



	</div>
	</div>
	</div>
<?php elseif(isset($_GET["opt"]) && $_GET["opt"]=="edit"):
$person = PlaceData::getById($_GET["id"]);
?>
		<div class="container">
	<div class="row">
	<div class="col-md-12">
	<h1>Editar Lugar</h1>

<form method="post" action="./?action=crud&opt=upd">
  <div class="form-group">
    <label for="exampleInputEmail1">Titulo</label>
    <input type="text" name="title" value="<?=$person->title;?>" class="form-control" id="exampleInputEmail1" placeholder="Titulo" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Descripcion</label>
    <textarea name="description" class="form-control" id="exampleInputEmail1" placeholder="Descripcion"><?=$person->description;?></textarea>
  </div>
<div class="form-group">
                                <label>Mapa</label>

<fieldset class="gllpLatlonPicker">
    <div class="gllpMap" style="height: 300px; width: 100%; "></div>
    <input type="hidden" name="lat" class="gllpLatitude" value="<?php echo $person->lat; ?>"/>
    <input type="hidden" name="lng" class="gllpLongitude" value="<?php echo $person->lng; ?>"/>
    <input type="hidden" name="zoom" class="gllpZoom" value="<?php echo $person->zoom; ?>"/>
  </fieldset>
                            </div>


  <input type="hidden" name="id" value="<?=$person->id;?>">
  <button type="submit" class="btn btn-success">Actualizar</button>
</form>



	</div>
	</div>
	</div>
<?php endif;?>
