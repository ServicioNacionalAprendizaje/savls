<?php
    $respuesta = array();

    if (isset ($_POST['accion'])){
        switch ($accion) {
            case 'ADICIONAR':
                try {
                    $persona = new Persona();
                    $persona->setNombre('Natalia');
                    $persona->setApellido('Garzón');
                    $persona->setEdad(18);
                    $persona->setGenero('F');
                    $persona->setEstado(1);
                    $persona->setFechaCreacion('2021-03-03');
                    $persona->setFechaModificacion('2021-03-06');
                    $persona->setIdUsuarioCreacion(1);
                    $persona->setIdUsuarioModificacion(1);

                    $resultado = $persona->Agregar();
                    $respuesta['respuesta']="La información se adicionó correctamente.";
                }catch(Exception $e){
                    $respuesta['respuesta']="Error, no fué posible adicionar la información, consulte con el administrador.";
                } 
                json_encode($respuesta);
                break;
            
                case 'MODIFICAR':
                    try{
                        $persona = new Persona();
                        $persona->setIdPersona($_POST['idUsuario']);
                        $persona->setNombre($_POST['usuario']);
                        $persona->setApellido($_POST['contrasenia']);
                        $persona->setEdad($_POST['edad']);
                        $persona->setGenero($_POST['genero']);
                        $persona->setEstado($_POST['estado']);
                        $persona->setFechaCreacion($_POST['fechaCreacion']);
                        $persona->setFechaModificacion($_POST['fechaModificacion']);
                        $persona->setIdUsuarioCreacion($_POST['idUsuarioCreacion']);
                        $persona->setIdUsuarioModificacion($_POST['idUsuarioModificacion']);
        
                        $resultado = $orden->Modificar();
                        $respuesta['respuesta']="La información se adicionó correctamente.";
                    }catch(Exception $e){
                        $respuesta['respuesta']="Error, no fué posible modificar la información, consulte con el administrador.";
                    }
                    json_encode($respuesta);
                break;
                case 'ELIMINAR':
                    try{
                        $persona = new Persona();
                        $persona->setIdPersona($_POST['idPersona']);
                        $resultado = $persona->Eliminar();
                        $respuesta['respuesta']="La información se adicionó correctamente.";
                    }catch(Exception $e){
                        $respuesta['respuesta']="Error, no fué posible eliminar la información, consulte con el administrador.";
                    }
                    json_encode($respuesta);
                break;
                case 'CONSULTAR':
                    try{
                        $persona = new Persona();
                        $persona->setIdPersona($_POST['idUsuario']);
                        $persona->setNombre($_POST['usuario']);
                        $persona->setApellido($_POST['contrasenia']);
                        $persona->setEdad($_POST['edad']);
                        $persona->setGenero($_POST['genero']);
                        $persona->setEstado($_POST['estado']);
                        $persona->setFechaCreacion($_POST['fechaCreacion']);
                        $persona->setFechaModificacion($_POST['fechaModificacion']);
                        $persona->setIdUsuarioCreacion($_POST['idUsuarioCreacion']);
                        $persona->setIdUsuarioModificacion($_POST['idUsuarioModificacion']);
                        $resultado = $persona->consultar();
        
                        $numeroRegistros = $persona->conn->obtenerNumeroRegistros();
                        if($numeroRegistros === 1){
                            if ($rowBuscar = $persona->conn->obtenerObjeto()){
                                $_POST['idPersona'] = $rowBuscar->id_persona;
                                $_POST['nombre'] = $rowBuscar->nombre;
                                $_POST['apellido'] = $rowBuscar->apellido;
                                $_POST['edad'] = $rowBuscar->edad;
                                $_POST['genero'] = $rowBuscar->genero;
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