<?php
    $respuesta = array();

    if (isset ($_POST['accion'])){
        switch ($accion) {
            case 'ADICIONAR':
                try {
                    $formulario = new Formulario();
                    $formulario->setDescripcion('');
                    $formulario->setEtiqueta('');
                    $formulario->setUbicacion('');
                    $formulario->setEstado(1);
                    $formulario->setFechaCreacion('2021-03-03');
                    $formulario->setFechaModificacion('2021-03-06');
                    $formulario->setIdUsuarioCreacion(1);
                    $formulario->setIdUsuarioModificacion(1);

                    $resultado = $formulario->Agregar();
                    $respuesta['respuesta']="La información se adicionó correctamente.";
                }catch(Exception $e){
                    $respuesta['respuesta']="Error, no fué posible adicionar la información, consulte con el administrador.";
                } 
                json_encode($respuesta);
                break;
            
                case 'MODIFICAR':
                    try{
                        $formulario = new Formulario();
                        $formulario->setIdFormulario($_POST['idFormulario']);
                        $formulario->setDescripcion($_POST['descripcion']);
                        $formulario->setEtiqueta($_POST['etiqueta']);
                        $formulario->setUbicacion($_POST['ubicacion']);
                        $formulario->setEstado($_POST['estado']);
                        $formulario->setFechaCreacion($_POST['fechaCreacion']);
                        $formulario->setFechaModificacion($_POST['fechaModificacion']);
                        $formulario->setIdUsuarioCreacion($_POST['idUsuarioCreacion']);
                        $formulario->setIdUsuarioModificacion($_POST['idUsuarioModificacion']);
        
                        $resultado = $orden->Modificar();
                        $respuesta['respuesta']="La información se adicionó correctamente.";
                    }catch(Exception $e){
                        $respuesta['respuesta']="Error, no fué posible modificar la información, consulte con el administrador.";
                    }
                    json_encode($respuesta);
                break;
                case 'ELIMINAR':
                    try{
                        $formulario = new Formulario();
                        $formulario->setIdFormulario($_POST['idFormulario']);
                        $resultado = $formulario->Eliminar();
                        $respuesta['respuesta']="La información se adicionó correctamente.";
                    }catch(Exception $e){
                        $respuesta['respuesta']="Error, no fué posible eliminar la información, consulte con el administrador.";
                    }
                    json_encode($respuesta);
                break;
                case 'CONSULTAR':
                    try{
                        $formulario = new Formulario();
                        $formulario->setIdFormulario($_POST['idFormulario']);
                        $formulario->setDescripcion($_POST['descripcion']);
                        $formulario->setEtiqueta($_POST['etiqueta']);
                        $formulario->setUbicacion($_POST['ubicacion']);
                        $formulario->setEstado($_POST['estado']);
                        $formulario->setFechaCreacion($_POST['fechaCreacion']);
                        $formulario->setFechaModificacion($_POST['fechaModificacion']);
                        $formulario->setIdUsuarioCreacion($_POST['idUsuarioCreacion']);
                        $formulario->setIdUsuarioModificacion($_POST['idUsuarioModificacion']);
                        $resultado = $formulario->consultar();
        
                        $numeroRegistros = $formulario->conn->obtenerNumeroRegistros();
                        if($numeroRegistros === 1){
                            if ($rowBuscar = $formulario->conn->obtenerObjeto()){
                                $_POST['idFormulario'] = $rowBuscar->id_formulario;
                                $_POST['descripcion'] = $rowBuscar->descripcion;
                                $_POST['etiqueta'] = $rowBuscar->etiqueta;
                                $_POST['ubicacion'] = $rowBuscar->ubicacion;
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