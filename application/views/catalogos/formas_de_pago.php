							<div class="row-fluid">
                                <div class="span6">
                            
                                    <table id="formas_de_pago-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID. forma de pago</th>
                                                <th>Tipo de Cliente</th>
                                                <th>Forma de pago</th>
                                                <th>Corte</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($query->result() as $row){?>
                                            <tr>
                                                <td><?php echo $row->idformas_pago; ?></td>
                                                <td><?php echo $row->cliente_tipo_desc; ?></td>
                                                <td><?php echo $row->forma_pago; ?></td>
                                                <td><?php echo $row->corte; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                            
                                </div>
                            </div>
