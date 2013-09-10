							<div class="row-fluid">
                                <div class="span12">
                            
                                    <table id="productos_con_comision-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Secuencia</th>
                                                <th>Codigo de Barras</th>
                                                <th>Descripci&oacute;n</th>
                                                <th>Sustancia Activa</th>
                                                <th>Precio</th>
                                                <th>Marca</th>
                                                <th>Comisionable</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($query->result() as $row){?>
                                            <tr>
                                                <td><?php echo $row->sec; ?></td>
                                                <td><?php echo $row->ean; ?></td>
                                                <td><?php echo $row->descripcion; ?></td>
                                                <td><?php echo $row->sustancia; ?></td>
                                                <td><?php echo $row->precio; ?></td>
                                                <td style="text-align: right;"><?php echo number_format($row->marca, 2); ?></td>
                                                <td><?php echo $row->comisionable_descripcion; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                            
                                </div>
                            </div>
