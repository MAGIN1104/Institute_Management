<?php
    session_start();
    include '../conexion/configServer.php';
    include '../conexion/consulSQL.php';
    sleep(2);

    $correo=$_POST['correo-login'];
    $contrasena=md5($_POST['clave-login']);

    if(!$correo==""&&!$contrasena==""){
        $verUser=ejecutarSQL::consultar("select * from estudiante where correo='$correo' and contrasena='$contrasena'");
        
        $verAdmin=ejecutarSQL::consultar("select * from administrador where correo='$correo' and contrasena='$contrasena'");
        $verDirector=ejecutarSQL::consultar("select * from director where correo='$correo' and contrasena='$contrasena'");
        $verProfesor=ejecutarSQL::consultar("select * from profesor where correo='$correo' and contrasena='$contrasena'");
        
        
        $AdminN=mysqli_fetch_array($verAdmin);
        $UserN=mysqli_fetch_array($verUser);
        $AdminC=mysqli_num_rows($verAdmin);
        
        $DirectorC=mysqli_num_rows($verDirector);
        $DirectorN=mysqli_fetch_array($verUser);
        
        $ProfesorC=mysqli_num_rows($verProfesor);
        $ProfesorN=mysqli_fetch_array($verUser);

        
        if($AdminC>0){
            $_SESSION['nameAdmin']=$AdminN['nombre'];
            $_SESSION['nombreAdmin']=$correo;
            $_SESSION['claveAdmin']=$contrasena;
                
            echo '<script> location.href="../admin/index.php"; </script>';
            }
            else{
                $UserC=mysqli_num_rows($verUser);
                if($UserC>0){
                    $_SESSION['nameUser']=$UserN['nombre'];                                           
                    $_SESSION['nombreUser']=$correo;
                    $_SESSION['claveUser']=$contrasena;
                    echo '<script> location.href="../estudiante/index.php"; </script>';
                }
                else if($DirectorC>0){
                    $_SESSION['nameDirector']=$DirectorN['nombre'];                                     
                    $_SESSION['nombreDirector']=$correo;
                    $_SESSION['claveDirector']=$contrasena;
                    echo '<script> location.href="../director/index.php"; </script>';
                }
                else if($ProfesorC>0){
                    $_SESSION['nameProfesor']=$ProfesorN['nombre'];                                    
                    $_SESSION['nombreProfesor']=$correo;
                    $_SESSION['claveProfesor']=$contrasena;
                    echo '<script> location.href="../profesor/index.php"; </script>';
                }
                
                
                else{
                    echo '<br>Error nombre o contraseña invalido';
                }  
            }
    }else{
        echo '<br>Error campo vacío<br>Intente nuevamente';
    }
