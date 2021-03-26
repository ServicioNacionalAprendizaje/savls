<?php
    $respuesta = array();

    if (isset ($_POST['accion'])){
        switch ($accion) {
            case 'ADICIONAR':
                try {
                    $usuarioRol = new UsuarioRol();
                    $usuarioRol->setIdUsuario(1);
                    $usuarioRol->setIdRol(1);
                    $usuarioRol->setEstado(1);
                    $usuarioRol->setFechaCreacion('2021-03-03');
                    $usuarioRol->setFechaModificacion('2021-03-06');
                    $usuarioRol->setIdUsuarioCreacion(1);
                    $usuarioRol->setIdUsuarioModificacion(1);

                    $resultado = $usuarioRol->Agregar();
                    $respuesta['respuesta']="La información se adicionó correctamente.";
                }catch(Exception $e){
                    $respuesta['respuesta']="Error, no fué posible adicionar la información, consulte con el administrador.";
                } 
                json_encode($respuesta);
                break;
            
                case 'MODIFICAR':
                    try{
                        $usuarioRol = new UsuarioRol();
                        $usuarioRol->setIdUsuarioRol($_POST['idUsuarioRol']);
                        $usuarioRol->setIdUsuario($_POST['idUsuario']);
                        $usuarioRol->setIdRol($_POST['idRol']);
                        $usuarioRol->setEstado($_POST['estado']);
                        $usuarioRol->setFechaCreacion($_POST['fechaCreacion']);
                        $usuarioRol->setFechaModificacion($_POST['fechaModificacion']);
                        $usuarioRol->setIdUsuarioCreacion($_POST['idUsuarioCreacion']);
                        $usuarioRol->setIdUsuarioModificacion($_POST['idUsuarioModificacion']);
        
                        $resultado = $orden->Modificar();
                        $respuesta['respuesta']="La información se adicionó correctamente.";
                    }catch(Exception $e){
                        $respuesta['respuesta']="Error, no fué posible modificar la información, consulte con el administrador.";
                    }
                    json_encode($respuesta);
                break;
                case 'ELIMINAR':
                    try{
                        $usuarioRol = new UsuarioRol();
                        $usuarioRol->setIdUsuarioRol($_POST['idUsuarioRol']);
                        $resultado = $usuarioRol->Eliminar();
                        $respuesta['respuesta']="La información se adicionó correctamente.";
                    }catch(Exception $e){
                        $respuesta['respuesta']="Error, no fué posible eliminar la información, consulte con el administrador.";
                    }
                    json_encode($respuesta);
                break;
                case 'CONSULTAR':
                    try{
                        $usuarioRol = new UsuarioRol();
                        $usuarioRol->setIdUsuarioRol($_POST['idUsuarioRol']);
                        $usuarioRol->setIdUsuario($_POST['idUsuario']);
                        $usuarioRol->setIdRol($_POST['idRol']);
                        $usuarioRol->setEstado($_POST['estado']);
                        $usuarioRol->setFechaCreacion($_POST['fechaCreacion']);
                        $usuarioRol->setFechaModificacion($_POST['fechaModificacion']);
                        $usuarioRol->setIdUsuarioCreacion($_POST['idUsuarioCreacion']);
                        $usuarioRol->setIdUsuarioModificacion($_POST['idUsuarioModificacion']);
                        $resultado = $usuarioRol->consultar();
        
                        $numeroRegistros = $usuarioRol->conn->obtenerNumeroRegistros();
                        if($numeroRegistros === 1){
                            if ($rowBuscar = $usuarioRol->conn->obtenerObjeto()){
                                $_POST['idUsuarioRol'] = $rowBuscar->id_usuario_rol;
                                $_POST['idUsuario'] = $rowBuscar->id_usuario;
                                $_POST['idRol'] = $rowBuscar->id_rol;
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