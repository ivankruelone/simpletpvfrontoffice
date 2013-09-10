				<ul class="nav nav-list">
					<li id="navlist-workspace">
                    
                            <?php echo anchor('workspace', '<i class="icon-home"></i><span class="menu-text"> Home </span>'); ?>

					</li>

					<li id="navlist-catalogos">
						<a href="#" class="dropdown-toggle">
							<i class="icon-desktop"></i>
							<span class="menu-text"> Catalogos </span>
							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
                        

							<li id="navlist-catalogos-tipos_de_clientes">
                                <?php echo anchor('catalogos/tipos_de_clientes', '<i class="icon-double-angle-right"></i>Tipos de Clientes'); ?>
							</li>

							<li id="navlist-catalogos-clientes">
                                <?php echo anchor('catalogos/clientes', '<i class="icon-double-angle-right"></i>Clientes'); ?>
							</li>

							<li id="navlist-catalogos-clientes_de_credito_autorizados">
                                <?php echo anchor('catalogos/clientes_de_credito_autorizados', '<i class="icon-double-angle-right"></i>Clientes de credito autorizados'); ?>
							</li>

							<li id="navlist-catalogos-productos_por_secuencia">
                                <?php echo anchor('catalogos/productos_por_secuencia', '<i class="icon-double-angle-right"></i>Productos por secuencia'); ?>
							</li>

							<li id="navlist-catalogos-productos_por_codigo_de_barras">
                                <?php echo anchor('catalogos/productos_por_codigo_de_barras', '<i class="icon-double-angle-right"></i>Productos por codigo de barras'); ?>
							</li>

							<li id="navlist-catalogos-productos_con_comision">
                                <?php echo anchor('catalogos/productos_con_comision', '<i class="icon-double-angle-right"></i>Productos con comisi&oacute;n'); ?>
							</li>

							<li id="navlist-catalogos-descuentos_por_mayoreo">
                                <?php echo anchor('catalogos/descuentos_por_mayoreo', '<i class="icon-double-angle-right"></i>Descuentos por mayoreo'); ?>
							</li>

							<li id="navlist-catalogos-formas_de_pago">
                                <?php echo anchor('catalogos/formas_de_pago', '<i class="icon-double-angle-right"></i>Formas de pago'); ?>
							</li>

							<li id="navlist-catalogos-lineas">
                                <?php echo anchor('catalogos/lineas', '<i class="icon-double-angle-right"></i>Lineas'); ?>
							</li>

							<li id="navlist-catalogos-sublineas">
                                <?php echo anchor('catalogos/sublineas', '<i class="icon-double-angle-right"></i>Sublineas'); ?>
							</li>

							<li id="navlist-catalogos-proveedores">
                                <?php echo anchor('catalogos/proveedores', '<i class="icon-double-angle-right"></i>Proveedores'); ?>
							</li>

							<li id="navlist-catalogos-sucursales">
                                <?php echo anchor('catalogos/sucursales', '<i class="icon-double-angle-right"></i>Sucursales'); ?>
							</li>

							<li id="navlist-catalogos-usuarios">
                                <?php echo anchor('catalogos/usuarios', '<i class="icon-double-angle-right"></i>Usuarios'); ?>
							</li>

						</ul>
					</li>

					<li id="navlist-inventario">
						<a href="#" class="dropdown-toggle">
							<i class="icon-book"></i>
							<span class="menu-text"> Inventario </span>
							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
                        
							<li id="navlist-inventario-por_secuencia">
                                <?php echo anchor('inventario/por_secuencia', '<i class="icon-double-angle-right"></i>Por secuencia'); ?>
							</li>
                            
							<li id="navlist-inventario-por_codigo_de_barras">
                                <?php echo anchor('inventario/por_codigo_de_barras', '<i class="icon-double-angle-right"></i>Por codigo de barras'); ?>
							</li>

							<li id="navlist-inventario-secuencias_en_cero">
                                <?php echo anchor('inventario/secuencias_en_cero', '<i class="icon-double-angle-right"></i>Secuencias en cero'); ?>
							</li>

							<li id="navlist-inventario-negativos">
                                <?php echo anchor('inventario/negativos', '<i class="icon-double-angle-right"></i>Negativos'); ?>
							</li>

							<li id="navlist-inventario-negativos_con_codigo_de_barras">
                                <?php echo anchor('inventario/negativos_con_codigo_de_barras', '<i class="icon-double-angle-right"></i>Negativos con codigo de barras'); ?>
							</li>

							<li id="navlist-inventario-muebles">
                                <?php echo anchor('inventario/muebles', '<i class="icon-double-angle-right"></i>Muebles'); ?>
							</li>

                        </ul>
                    
                    </li>
                    
                    <li id="navlist-ventas">
						<a href="#" class="dropdown-toggle">
							<i class="icon-money"></i>
							<span class="menu-text"> Ventas </span>
							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
                        
							<li id="navlist-ventas-ventas_por_periodo">
                                <?php echo anchor('ventas/ventas_por_periodo', '<i class="icon-double-angle-right"></i>Ventas por periodo'); ?>
							</li>
                            
                        </ul>
                    
                    </li>
                        
                        
   				</ul><!--/.nav-list-->