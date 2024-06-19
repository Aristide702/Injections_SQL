    <form method="post" action="<?=hlien("plat","save")?>">
		<input type="hidden" name="pla_id" id="pla_id" value="<?= $id ?>" />
		
                        <div class='form-group'>
                            <label for='pla_nom'>Pla_nom</label>
                            <input id='pla_nom' name='pla_nom' type='text' size='80' value='<?=$pla_nom?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='pla_prix'>Pla_prix</label>
                            <input id='pla_prix' name='pla_prix' type='number' size='80' value='<?=$pla_prix?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
		<input class="btn btn-warning" type="button" name="annuler" value="Annuler" onclick="history.back()" />
	</form>              