							<div class="row-fluid">
                                <div class="span6">
                            
                                    <table id="lineas-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Linea</th>
                                                <th>Descripci&oacute;n</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($query->result() as $row){?>
                                            <tr>
                                                <td><?php echo $row->linea; ?></td>
                                                <td><?php echo $row->linea_desc; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                            
                                </div>
                            </div>
