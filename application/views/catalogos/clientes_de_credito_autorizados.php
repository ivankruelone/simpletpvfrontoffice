							<div class="row-fluid">
                                <div class="span6">
                            
                                    <table id="clientes_de_credito_autorizados-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>RFC</th>
                                                <th>Razon Social</th>
                                                <th>Activo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($query->result() as $row){?>
                                            <tr>
                                                <td><?php echo $row->cliente; ?></td>
                                                <td><?php echo $row->razon; ?></td>
                                                <td class="center"><?php echo table_ok_cancel_element($row->activo); ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                            
                                </div>
                            </div>
