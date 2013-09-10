							<div class="row-fluid">
                                <div class="span6">
                            
                                    <table id="clientes-tipo-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Tipo</th>
                                                <th>Cliente</th>
                                                <th>Autorizado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($query->result() as $row){?>
                                            <tr>
                                                <td><?php echo $row->cliente_tipo; ?></td>
                                                <td><?php echo $row->cliente_tipo_desc; ?></td>
                                                <td class="center"><?php echo table_ok_cancel_element($row->autorizado); ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                            
                                </div>
                            </div>
