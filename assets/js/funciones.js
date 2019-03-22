
//----------------usuario---------------------
function editarUsuario(id){

    $.ajax({
        url:'assets/php/session/editarUsuario.php',
        method:'POST',
        data:{id:id},
        dataType:'json',
        success:function(data){ 
            console.log(data);
            $("#idEdit").val(data.id)
            $("#editName").val(data.nombre);
            $("#editCedula").val(data.cedula);
            $("#editCorreo").val(data.correo);
            $("#editUsuario").val(data.usuario);
            $("#editTusuario").val(data.tusuario);
            
        },
        error:function(xhr,status,error){
            $.alert({
                title:xhr.status,
                content: xhr.status+" "+error
                });
                

            console.log(xhr);
        }
    })
    $("#editModal").modal(true);
}

function updateUsuario(){
    var obj = {
        id  : $("#idEdit").val(),
        name : $("#editName").val(),
        cedula: $("#editCedula").val(),
        pass: $("#editPass").val(),
        confirm: $("#editConfirm").val(),
        correo :$("#editCorreo").val(),
        usuario : $("#editUsuario").val(),
        type :$("#editTusuario").val(),
        
    };
    console.log(obj)
    $.ajax({
        url:'assets/php/session/updateUsuario.php',
        method:'POST',
        data:obj,
        dataType:'json',
        success:function(data){
          if (data.Success) {
            
            $.confirm({
              title:'Equipo Actualizado',
              content:data.Msg,
              confirm:function(){
                location.reload();
              },
              cancel:function(){
                location.reload();
              }
            });
            location.reload();
            aler('USuario Actualizado');
          }
          else{
            var msj = data.Msg;
            msj = data.Msg === "undefined" ? data.Msg : data.Msg + ' ' + data.Error;
            $.alert({
              title: 'Error Al actualizar',
              content:data.Msg+" "+msj
            });
          }
        },
        error:function(xhr,status,error){

            console.log(xhr);

          $.alert({
            title:'Error',
            content:xhr.status+'. '+error
          });

          ;
          
        }
    });
    console.log($("#idEdit").val());
}

function eliminarUsuario(id){
    $("#loader").prop('hidden',false);
    console.log(id);
    alert('Esta Seguro de querer eliminar este usuario');
    $.ajax({
                url:'assets/php/session/eliminarUsuario.php',
                type:'POST',
                data:{id:id},
                dataType:'json',
                success:function(data){
                    if (data.Success){
                        $.alert({
                            title:'Eliminado',
                            content:data.Msg
                        });
                        location.reload();
                    }
                    else{
                        $.alert({
                            title:'Error',
                            content:data.Msg+' '+data.Error
                        });
                    }
                    $("#loader").prop('hidden',true);
                },
                error:function(xhr,status,error){
                    console.log(xhr);
                    $("#loader").prop('hidden',true);
                    $.alert({
                        title:xhr.status,
                        content: xhr.status+" "+error
                        });
                }
            });
  
}
//---Usiaorio---//

//---------------------------------------------------------------
//-------------------------Equipo-----------------------------------
//
function editarEquipo(id){

    $.ajax({
        url:'assets/php/session/editarEquipo.php',
        method:'POST',
        data:{id:id},
        dataType:'json',
        success:function(data){
            console.log(data);
            $("#idEdit").val(data.id)
            //$("#editEquipo").val(data.equipo);
            $("#editSerial").val(data.seriale);
            $("#editMarca").val(data.marca);
            $("#editMemoria").val(data.memoria);
            $("#editDisco").val(data.discod);
            $("#editFechas").val(data.fechai);
            $("#editMonitor").val(data.monitor);
            $("#editSerialm").val(data.serialmon);
            $("#editSerialmo").val(data.serialmous);
            $("#editTecr").val(data.serialtec);
            $("#editExtras").val(data.extras);

            
        },
        error:function(xhr,status,error){
            $.alert({
                title:xhr.status,
                content: xhr.status+" "+error
                });
                

            console.log(xhr);
        }
    })
    $("#editEquipo").modal(true);
}

function updateEquipo(){
    var obj = {
        id : $("#idEdit").val(),
        serial: $("#editSerial").val(),
        marca: $("#editMarca").val(),
        memoria: $("#editMemoria").val(),
        disco: $("#editDisco").val(),
        fecha: $("#editFecha").val(),
        monitor: $("#editMonitor").val(),
        serialm: $("#editSerialm").val(),
        serialmo: $("#editSerialmo").val(),
        serialtec: $("#editTecr").val(),
        extra: $("#editExtras").val(),
       
        
    };
    console.log(obj)
    $.ajax({
        url:'assets/php/session/updateEquipo.php',
        method:'POST',
        data:obj,
        dataType:'json',
        success:function(data){
          if (data.Success) {
            console.log('Equipo actualizado');
            $.confirm({
              title:'Equipo Actualizado',
              content:data.Msg,
              confirm:function(){
                location.reload();
              },
              cancel:function(){
                location.reload();
              }
            });
            location.reload();

            
          }
          else{
            var msj = data.Msg;
            msj = data.Msg === "undefined" ? data.Msg : data.Msg + ' ' + data.Error;
            $.alert({
              title: 'Error Al actualizar',
              content:data.Msg+" "+msj
            });
            cosole.log(msg);
          }
        },
        error:function(xhr,status,error){

            console.log(xhr);
            console.log(status);
            console.log(error);

          $.alert({
            title:'Error',
            content:xhr.status+'. '+error
          });

          ;
          
        }
    });
    console.log($("#editEquipo").val());
}

function eliminarEquipo(id){
    $("#loader").prop('hidden',false);
    console.log(id);
     alert('Esta Seguro de querer eliminar este usuario');
    $.ajax({
                url:'assets/php/session/eliminarEquipo.php',
                type:'POST',
                data:{id:id},
                dataType:'json',
                success:function(data){
                    if (data.Success){
                        $.alert({
                            title:'Eliminado',
                            content:data.Msg
                        });
                        location.reload();
                    }
                    else{
                        $.alert({
                            title:'Error',
                            content:data.Msg+' '+data.Error
                        });
                    }
                    $("#loader").prop('hidden',true);
                },
                error:function(xhr,status,error){
                    console.log(xhr);
                    $("#loader").prop('hidden',true);
                    $.alert({
                        title:xhr.status,
                        content: xhr.status+" "+error
                        });
                }
            });
  
}
//----------------------fin equipo----------------
//-----------------------------------
//---------------------------
//--------------------repuesto-----------
//
//
//
function editarRepuesto(id){

    $.ajax({
        url:'assets/php/session/editarRepuesto.php',
        method:'POST',
        data:{id:id},
        dataType:'json',
        success:function(data){
            console.log(data);
            $("#idEdit").val(data.id)
            $("#editSerial").val(data.seriale);
            $("#editMarca").val(data.marca);
            $("#editDescripcion").val(data.descripcion);
            
        },
        error:function(xhr,status,error){
            $.alert({
                title:xhr.status,
                content: xhr.status+" "+error
                });
                

            console.log(xhr);
        }
    })
    $("#editRepuesto").modal(true);
}



function eliminarRepuesto(id){
    $("#loader").prop('hidden',false);
    console.log(id);
     alert('Esta Seguro de querer eliminar este usuario');
    $.ajax({
                url:'assets/php/session/eliminarRepuesto.php',
                type:'POST',
                data:{id:id},
                dataType:'json',
                success:function(data){
                    if (data.Success){
                        $.alert({
                            title:'Eliminado',
                            content:data.Msg
                        });
                        location.reload();
                    }
                    else{
                        $.alert({
                            title:'Error',
                            content:data.Msg+' '+data.Error
                        });
                    }
                    $("#loader").prop('hidden',true);
                },
                error:function(xhr,status,error){
                    console.log(xhr);
                    $("#loader").prop('hidden',true);
                    $.alert({
                        title:xhr.status,
                        content: xhr.status+" "+error
                        });
                }
            });
  
}
//-------------------------------------
//
///--------------------Asignar
///

function asignar(id){

    $.ajax({
        url:'assets/php/session/editarEquipo.php',
        method:'POST',
        data:{id:id},
        dataType:'json',
        success:function(data){
            console.log(data);
            $("#idEdit").val(data.id)
            $("#editEquipo").val(data.equipo);
            $("#editSerial").val(data.seriale);
            $("#editAsignado").val(data.asignado);
            $("#editCedula").val(data.cedula);
            $("#editDepartamento").val(data.departamento);
            
        },
        error:function(xhr,status,error){
            $.alert({
                title:xhr.status,
                content: xhr.status+" "+error
                });
                

            console.log(xhr);
        }
    })
    $("#editAsignar").modal(true);
}






   //----------------------
function updateAsignar(){
    var obj = {
       id : $("#idEdit").val(),
        serial: $("#editSerial").val(),
        equipo: $("#editEquipo").val(),
        asignado: $("#editAsignado").val(),
        cedula: $("#editCedula").val(),
        departamento: $("#editDepartamento").val(),
        
        
    };
    console.log(obj)
    $.ajax({
        url:'assets/php/session/updateAsignar.php',
        method:'POST',
        data:obj,
        dataType:'json',
        success:function(data){
          if (data.Success) {
            
            $.confirm({
              title:'Equipo Actualizado',
              content:data.Msg,
              confirm:function(){
                location.reload();
              },
              cancel:function(){
                location.reload();
              }
            });
            location.reload();
            alert('Equipo  Asignado');
          }
          else{
            var msj = data.Msg;
            msj = data.Msg === "undefined" ? data.Msg : data.Msg + ' ' + data.Error;
            $.alert({
              title: 'Error Al actualizar',
              content:data.Msg+" "+msj
            });
          }
        },
        error:function(xhr,status,error){

            console.log(xhr);

          $.alert({
            title:'Error',
            content:xhr.status+'. '+error
          });

          ;
          
        }
    });
    console.log($("#editAsignar").val());
}