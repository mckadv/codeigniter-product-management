<div class="container"> 	
	<div class="row"> 
		<div class="col-sm-12 col-md-12 col-lg-12">
			<?php
			$messages = $this->session->flashdata('result_publish');
			if ( $this->session->flashdata('result_delete') || $this->session->flashdata('result_publish') || $this->session->flashdata('result_cart') ) {
				?> 
          <div class="alert alert-success alert-dismissible text-center" role="alert">
              <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
              <?= $this->session->flashdata('result_publish')??isset($this->session->flashdata('result_delete'))?$this->session->flashdata('result_delete'):$this->session->flashdata('result_cart') ?>
          </div>
				<?php
			}
			?>
 		</div> <!-- /.col-sm-12 -->
  </div> <!-- /.row -->     
      
  <div class="row"> 
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Referencia</th>
                <th>Precio</th>
                <th>Peso</th>
                <th>Categoría</th>
                <th>Existencia</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
		<th>Vender</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $row) { ?>
            <tr>
                <td><?php echo $row->name ?></td>
                <td><?php echo $row->reference ?></td>
                <td><?php echo $row->price ?></td>
                <td><?php echo $row->weight ?></td>
                <td><?php echo $row->categories ?></td>
                <td><?php echo $row->stock ?></td>
                <td><a class="btn btn-primary" href="<?php echo base_url() ."products/addproduct/" . $row->id ?>"><i class="fa fa-edit"></i></a></td>
                <td><a class="btn btn-warning" href="<?php echo base_url() ."products/addproduct/" . $row->id ?>"><i class="fa fa-trash"></i></a></td>
		<td><a class="btn btn-success" href="<?php echo base_url() ."products/sellproduct/" . $row->id ?>"><i class="fa fa-opencart"></i></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
  </div> <!-- /.row -->
</div> <!-- /.container -->
      
