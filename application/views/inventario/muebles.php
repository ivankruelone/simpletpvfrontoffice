							<div class="row-fluid">
                                <div class="span6">
                            
                                    <table id="muebles-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Mueble</th>
                                                <th>Detalle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($query->result() as $row){?>
                                            <tr>
                                                <td><?php echo $row->mueble; ?></td>
                                                <td><?php echo anchor('inventario/muebles__productos_por_mueble/'.$row->mueble, 'Ir al detalle'); ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                            
                                </div>
                            </div>
