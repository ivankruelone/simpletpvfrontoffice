							<div class="row-fluid">
                                <div class="span12">
                            
                                    <table id="proveedores-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Puesto</th>
                                                <th>Status</th>
                                                <th>Ultimo acceso</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($query->result() as $row){?>
                                            <tr>
                                                <td><?php echo $row->nombrecompleto; ?></td>
                                                <td><?php echo $row->puesto; ?></td>
                                                <td class="center"><?php echo table_ok_cancel_element($row->activo); ?></td>
                                                <td><?php echo $row->ultimo_login; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                            
                                </div>
                            </div>
