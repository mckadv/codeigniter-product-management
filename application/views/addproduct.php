<div class="container"> 	
	<div class="row"> 
		<div class="col-sm-12 col-md-12 col-lg-12">
			<?php
			if ( $this->session->flashdata('result_publish') ) {
				?> 
				<div class="alert alert-success">
          <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
          <?= $this->session->flashdata('result_publish') ?>
				</div> 
				<?php
			}
			?>
			<div class="content"> 
				<form action="" method="POST" enctype="multipart/form-data" name="coffe">
          <div class="form-group">
            <label for="name">Nombre del producto</label>
            <input type="text" id="name" name="name" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="reference">Referencia</label>
            <textarea id="reference" name="reference" rows="4" class="form-control" required></textarea>
          </div>
          <div class="form-group">
            <label for="price">Precio</label>
            <input type="number" id="price" name="price" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="weight">Peso</label>
            <input type="number" id="weight" name="weight" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="categories">Categoría</label>
            <input type="text" id="categories" name="categories" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="stock">Existencia:</label>
            <input type="number" id="stock" name="stock" class="form-control" required>
          </div>
          
					<?php if ($this->uri->segment(2) === 'update') { ?>
						<button type="submit" name="submit" class="btn btn-success" value="edit"><?= ' Editar ' ?></button>
					<?php } else { ?>
						<button type="submit" id="submit" name="submit" class="btn btn-success" value="save"><?= ' Registrar ' ?></button>
					<?php } ?>        
				</form>
		</div> <!-- /.col-sm-12 -->
	</div> <!-- /.row -->
</div> <!-- /.container -->          
