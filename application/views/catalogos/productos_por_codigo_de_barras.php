							<div class="row-fluid">
                                <div class="span12">
                            
                                    <table id="products-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Secuencia</th>
                                                <th>Codigo</th>
                                                <th>Descripcion</th>
                                                <th>Substancia</th>
                                                <th>Precio</th>
                                                <th>Fisico</th>
                                                <th>Linea</th>
                                                <th>Sublinea</th>
                                                <th>Antibiotico</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($query->result() as $row){?>
                                            <tr>
                                                <td><?php echo $row->sec; ?></td>
                                                <td><?php echo $row->ean; ?></td>
                                                <td><?php echo $row->descripcion; ?></td>
                                                <td><?php echo $row->sustancia; ?></td>
                                                <td style="text-align: right;"><?php echo $row->precio; ?></td>
                                                <td class="center"><?php echo table_ok_cancel_element($row->fisico); ?></td>
                                                <td><?php echo $row->linea_desc; ?></td>
                                                <td><?php echo $row->sublinea_desc; ?></td>
                                                <td class="center"><?php echo table_ok_cancel_element($row->antibiotico); ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                            
                                </div>
                            </div>
