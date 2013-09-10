							<div class="row-fluid">
                                <div class="span12">
                            
                                    <table id="proveedores-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>NID</th>
                                                <th>Sucursal</th>
                                                <th>Direccion</th>
                                                <th>Referencia</th>
                                                <th>Colonia</th>
                                                <th>Municipio</th>
                                                <th>Estado</th>
                                                <th>CP</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($query->result() as $row){?>
                                            <tr>
                                                <td><?php echo $row->sucursal; ?></td>
                                                <td><?php echo $row->nombresucursal; ?></td>
                                                <td><?php echo $row->callesucursal . " " . $row->exteriorsucursal . " " . $row->interiorsucursal; ?></td>
                                                <td><?php echo $row->referenciasucursal; ?></td>
                                                <td><?php echo $row->coloniasucursal; ?></td>
                                                <td><?php echo $row->municipiosucursal; ?></td>
                                                <td><?php echo $row->estadosucursal; ?></td>
                                                <td style="text-align: right;"><?php echo str_pad($row->cpsucursal, 5, '0', STR_PAD_LEFT); ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                            
                                </div>
                            </div>
