							<div class="row-fluid">
                                <div class="span6">
                            
                                    <table id="descuentos_por_mayoreo-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Minimo</th>
                                                <th>Maximo</th>
                                                <th>Tasa de Descuento</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($query->result() as $row){?>
                                            <tr>
                                                <td style="text-align: right;"><?php echo $row->iddescuentos_mayoreo; ?></td>
                                                <td style="text-align: right;"><?php echo number_format($row->minimo, 2); ?></td>
                                                <td style="text-align: right;"><?php echo number_format($row->maximo, 2); ?></td>
                                                <td style="text-align: right;"><?php echo number_format($row->tasa_descuento_mayoreo, 2); ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                            
                                </div>
                            </div>
