							<div class="row-fluid">
                                <div class="span8">
                            
                                    <table id="sublineas-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Linea</th>
                                                <th>Descripci&oacute;n L.</th>
                                                <th>Sublinea</th>
                                                <th>Descripci&oacute;n S.</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($query->result() as $row){?>
                                            <tr>
                                                <td><?php echo $row->linea; ?></td>
                                                <td><?php echo $row->linea_desc; ?></td>
                                                <td><?php echo $row->sublinea; ?></td>
                                                <td><?php echo $row->sublinea_desc; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                            
                                </div>
                            </div>
