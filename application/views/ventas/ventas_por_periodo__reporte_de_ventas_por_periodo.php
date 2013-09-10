							<div class="row-fluid">
                                <div class="span12">
                            
                                    <table id="ventas-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Ticket</th>
                                                <th>Cliente</th>
                                                <th>Fecha</th>
                                                <th>Caja</th>
                                                <th>Cajero</th>
                                                <th>Vendedor</th>
                                                <th>Piezas</th>
                                                <th>IVA</th>
                                                <th>Importe</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            
                                            $cantidad = 0;
                                            $iva = 0;
                                            $total = 0;
                                            
                                            foreach($query->result() as $row){
                                                
                                            ?>
                                            <tr>
                                                <td><?php echo $row->venta; ?></td>
                                                <td><?php echo $row->razon; ?></td>
                                                <td><?php echo $row->fecha; ?></td>
                                                <td><?php echo $row->caja; ?></td>
                                                <td><?php echo $row->cajero; ?></td>
                                                <td><?php echo $row->vendedor; ?></td>
                                                <td style="text-align: right;"><?php echo number_format($row->cantidad, 0); ?></td>
                                                <td style="text-align: right;"><?php echo number_format($row->iva, 2); ?></td>
                                                <td style="text-align: right;"><?php echo number_format($row->total, 2); ?></td>
                                            </tr>
                                            <?php 
                                            
                                                $cantidad = $cantidad + $row->cantidad;
                                                $iva = $iva + $row->iva;
                                                $total = $total + $row->total;
                                            
                                            } 
                                            
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="6" style="text-align: right;">Totales</td>
                                                <td style="text-align: right;"><?php echo number_format($cantidad, 0); ?></td>
                                                <td style="text-align: right;"><?php echo number_format($iva, 2); ?></td>
                                                <td style="text-align: right;"><?php echo number_format($total, 2); ?></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                            
                                </div>
                            </div>
