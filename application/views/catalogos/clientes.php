							<div class="row-fluid">
                                <div class="span12">
                            
                                    <table id="clientes-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>RFC</th>
                                                <th>Razon Social</th>
                                                <th>Direccion</th>
                                                <th>Colonia</th>
                                                <th>Municipio</th>
                                                <th>Estado</th>
                                                <th>CP</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($query->result() as $row){?>
                                            <tr>
                                                <td><?php echo $row->cliente; ?></td>
                                                <td><?php echo $row->razon; ?></td>
                                                <td><?php echo $row->calle . " " . $row->exterior . " " . $row->interior; ?></td>
                                                <td><?php echo $row->colonia; ?></td>
                                                <td><?php echo $row->municipio; ?></td>
                                                <td><?php echo $row->estado; ?></td>
                                                <td style="text-align: right;"><?php echo str_pad($row->cp, 5, '0', STR_PAD_LEFT); ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                            
                                </div>
                            </div>
