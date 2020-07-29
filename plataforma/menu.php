<aside id="sidebar">


                    <div id="sidebar-wrap">

                        <div class="panel-group slim-scroll" role="tablist">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#sidebarNav">
                                            Menu principal <i class="fa fa-angle-up"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">


                                        <!-- ===================================================
                                        ================= NAVIGATION Content ===================
                                        ==================================================== -->
                                        <ul id="navigation">
                                            <li class="<?php if ($menu== '0'){ echo 'active'; } else {}	?>">
                                                <a href="./"><i class="fa fa-dashboard"></i> <span>Escritorio</span></a> 
                                          </li>
                                            
                                             <li class="<?php if ($menu== '2'){ echo 'active'; } else {}	?>">
                                                <a href="carga_pago.php" tabindex="0"><i class="fa fa-upload"></i> <span>Cargar Pago</span></a>
                                            </li>
                                            <li class="<?php if ($menu== '3'){ echo 'active'; } else {}	?>">
                                                <a href="descarga_docs.php" tabindex="0"><i class="fa fa-download"></i> <span>Mis Documentos</span></a>
                                            </li>
                                            
                                            <li class="<?php if ($menu== '5'){ echo 'active'; } else {}	?>">
                                                <a href="salir.php"  tabindex="0"><i class="fa fa-power-off"></i> <span>Salir</span></a>
                                            </li>
                                            
                                           

                                        </ul>
                                        <!--/ NAVIGATION Content -->


                                    </div>
                                </div>
                            </div>
                            
                        </div>

                    </div>


                </aside>