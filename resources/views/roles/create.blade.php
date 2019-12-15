<div class="modal fade left" id="rol-add-modal" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-notify modal-sm modal-right modal-success" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel"><i class="fa fa-registered" aria-hidden="true"> Nuevo</i></h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <!-- Per Name Field -->
                                        <div class="form-group">
                                            <label for="rol_name">Ingrese un rol:</label>
                                            <input type="text" name="rol_name" class="form-control">
                                        </div>
                                        
                                    </div>

                                    <div class="modal-footer">
                                        {!! Form::submit('Crear',['class' => 'btn btn-warning']) !!}
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
                                    </div>

                                </div>
                            </div>
                        </div>

