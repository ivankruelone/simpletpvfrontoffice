							<div class="row-fluid">
                            
                                <div class="span12">
                            
                                    <table id="por_codigo_de_barras-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Secuencia</th>
                                                <th>Descripcion</th>
                                                <th>Sustancia</th>
                                                <th>Inventario</th>
                                                <th>Precio</th>
                                                <th>Linea</th>
                                                <th>Sublinea</th>
                                                <th>Antibiotico</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            
                                            $inventario = 0;
                                            
                                            foreach($query->result() as $row){
                                            
                                            ?>
                                            <tr>
                                                <td><?php echo $row->sec; ?></td>
                                                <td><?php echo $row->descripcion; ?></td>
                                                <td><?php echo $row->sustancia; ?></td>
                                                <td style="text-align: right;"><?php echo number_format($row->inventario, 0); ?></td>
                                                <td style="text-align: right;"><?php echo number_format($row->precio, 2); ?></td>
                                                <td><?php echo $row->linea_desc; ?></td>
                                                <td><?php echo $row->sublinea_desc; ?></td>
                                                <td class="center"><?php echo table_ok_cancel_element($row->antibiotico); ?></td>
                                            </tr>
                                            <?php 
                                            
                                                $inventario = $inventario + $row->inventario;
                                                
                                            } 
                                            
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="3" style="text-align: right;">Total</td>
                                                <td style="text-align: right;"><?php echo number_format($inventario, 0); ?></td>
                                                <td colspan="4">&nbsp;</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    
                                </div>
                            
                            </div>
