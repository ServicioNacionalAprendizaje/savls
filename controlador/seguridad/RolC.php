<?php
    $respuesta = array();

    if (isset ($_POST['accion'])){
        switch ($accion) {
            case 'ADICIONAR':
                try {
                    $rol = new Rol();
                    $rol->setDescripcion('Administrador');
                    $rol->setEstado(1);
                    $rol->setFechaCreacion('2021-03-03');
                    $rol->setFechaModificacion('2021-03-06');
                    $rol->setIdUsuarioCreacion(1);
                    $rol->setIdUsuarioModificacion(1);

                    $resultado = $rol->Agregar();
                    $respuesta['respuesta']="La información se adicionó correctamente.";
                }catch(Exception $e){
                    $respuesta['respuesta']="Error, no fué posible adicionar la información, consulte con el administrador.";
                } 
                json_encode($respuesta);
                break;
            
                case 'MODIFICAR':
                    try{
                        $rol = new Rol();
                        $rol->setIdRol($_POST['idRol']);
                        $rol->setDescripcion($_POST['descripcion']);
                        $rol->setEstado($_POST['estado']);
                        $rol->setFechaCreacion($_POST['fechaCreacion']);
                        $rol->setFechaModificacion($_POST['fechaModificacion']);
                        $rol->setIdUsuarioCreacion($_POST['idUsuarioCreacion']);
                        $rol->setIdUsuarioModificacion($_POST['idUsuarioModificacion']);
        
                        $resultado = $orden->Modificar();
                        $respuesta['respuesta']="La información se adicionó correctamente.";
                    }catch(Exception $e){
                        $respuesta['respuesta']="Error, no fué posible modificar la información, consulte con el administrador.";
                    }
                    json_encode($respuesta);
                break;
                case 'ELIMINAR':
                    try{
                        $rol = new Rol();
                        $rol->setIdRol($_POST['idRol']);
                        $resultado = $rol->Eliminar();
                        $respuesta['respuesta']="La información se adicionó correctamente.";
                    }catch(Exception $e){
                        $respuesta['respuesta']="Error, no fué posible eliminar la información, consulte con el administrador.";
                    }
                    json_encode($respuesta);
                break;
                case 'CONSULTAR':
                    try{
                        $rol = new Rol();
                        $rol->setIdRol($_POST['idRol']);
                        $rol->setDescripcion($_POST['descripcion']);
                        $rol->setEstado($_POST['estado']);
                        $rol->setFechaCreacion($_POST['fechaCreacion']);
                        $rol->setFechaModificacion($_POST['fechaModificacion']);
                        $rol->setIdUsuarioCreacion($_POST['idUsuarioCreacion']);
                        $rol->setIdUsuarioModificacion($_POST['idUsuarioModificacion']);
                        $resultado = $rol->consultar();
        
                        $numeroRegistros = $rol->conn->obtenerNumeroRegistros();
                        if($numeroRegistros === 1){
                            if ($rowBuscar = $rol->conn->obtenerObjeto()){
                                $_POST['idRol'] = $rowBuscar->id_rol;
                                $_POST['descripcion'] = $rowBuscar->descripcion;                                
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