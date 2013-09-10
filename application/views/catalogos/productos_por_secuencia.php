							<div class="row-fluid">
                            
                                <div class="span12">
                            
                                    <table id="products-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Secuencia</th>
                                                <th>Sustancia</th>
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
                                                <td><?php echo $row->sustancia; ?></td>
                                                <td style="text-align: right;"><?php echo number_format($row->precio, 2); ?></td>
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
