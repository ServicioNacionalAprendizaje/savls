<?php
    $respuesta = array();

    if (isset ($_POST['accion'])){
        switch ($accion) {
            case 'ADICIONAR':
                try {
                    $formularioRol = new FormularioRol();
                    $formularioRol->setIdRol(1);
                    $formularioRol->setIdFormulario(1);
                    $formularioRol->setEstado(1);
                    $formularioRol->setFechaCreacion('2021-03-03');
                    $formularioRol->setFechaModificacion('2021-03-06');
                    $formularioRol->setIdUsuarioCreacion(1);
                    $formularioRol->setIdUsuarioModificacion(1);

                    $resultado = $formularioRol->Agregar();
                    $respuesta['respuesta']="La información se adicionó correctamente.";
                }catch(Exception $e){
                    $respuesta['respuesta']="Error, no fué posible adicionar la información, consulte con el administrador.";
                } 
                json_encode($respuesta);
                break;
            
                case 'MODIFICAR':
                    try{
                        $formularioRol = new FormularioRol();
                        $formularioRol->setIdFormularioRol($_POST['idFormularioRol']);
                        $formularioRol->setIdRol($_POST['idRol']);
                        $formularioRol->setIdFormulario($_POST['idFormulario']);
                        $formularioRol->setEstado($_POST['estado']);
                        $formularioRol->setFechaCreacion($_POST['fechaCreacion']);
                        $formularioRol->setFechaModificacion($_POST['fechaModificacion']);
                        $formularioRol->setIdUsuarioCreacion($_POST['idUsuarioCreacion']);
                        $formularioRol->setIdUsuarioModificacion($_POST['idUsuarioModificacion']);
        
                        $resultado = $orden->Modificar();
                        $respuesta['respuesta']="La información se adicionó correctamente.";
                    }catch(Exception $e){
                        $respuesta['respuesta']="Error, no fué posible modificar la información, consulte con el administrador.";
                    }
                    json_encode($respuesta);
                break;
                case 'ELIMINAR':
                    try{
                        $formularioRol = new FormularioRol();
                        $formularioRol->setIdFormularioRol($_POST['idFormularioRol']);
                        $resultado = $formularioRol->Eliminar();
                        $respuesta['respuesta']="La información se adicionó correctamente.";
                    }catch(Exception $e){
                        $respuesta['respuesta']="Error, no fué posible eliminar la información, consulte con el administrador.";
                    }
                    json_encode($respuesta);
                break;
                case 'CONSULTAR':
                    try{
                        $formularioRol = new FormularioRol();
                        $formularioRol->setIdFormularioRol($_POST['idFormularioRol']);
                        $formularioRol->setIdRol($_POST['idRol']);
                        $formularioRol->setIdFormulario($_POST['idFormulario']);
                        $formularioRol->setEstado($_POST['estado']);
                        $formularioRol->setFechaCreacion($_POST['fechaCreacion']);
                        $formularioRol->setFechaModificacion($_POST['fechaModificacion']);
                        $formularioRol->setIdUsuarioCreacion($_POST['idUsuarioCreacion']);
                        $formularioRol->setIdUsuarioModificacion($_POST['idUsuarioModificacion']);
                        $resultado = $formularioRol->consultar();
        
                        $numeroRegistros = $formularioRol->conn->obtenerNumeroRegistros();
                        if($numeroRegistros === 1){
                            if ($rowBuscar = $formularioRol->conn->obtenerObjeto()){
                                $_POST['idFormularioRol'] = $rowBuscar->id_formulario_rol;
                                $_POST['idRol'] = $rowBuscar->id_rol;
                                $_POST['idFormulario'] = $rowBuscar->id_formulario;
                                $_POST['estado'] = $rowBuscar->estado;
                                $_POST['fechaCreacion'] = $rowBuscar->fecha_creacion;
                                $_POST['fechaModificacion'] = $rowBuscar->fecha_modificacion;
                                $_POST['idUsuarioCreacion'] = $rowBuscar->id_usuario_creacion;
                                $_POST['idUsuarioModificacion'] = $rowBuscar->id_usuario_modificacion;
                            }
                        }
                    }catch(Exception $e){
                        $respuesta['respuesta']="Error, no fué posible consultar la información, consulte con el administrador.";
                    }
                    json_encode($respuesta);
                break;
                
        }
    }
?>