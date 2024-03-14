
<?php
class ComentariosModel
{
    function __construct()
    {
    }

    function INSERT($nombre, $email, $telefono, $comentario)
    {
        $Conexion = new Conexion();
        $mysqli = $Conexion->crearConexion();

        if ($mysqli != null) {
            $sql = "INSERT INTO tblcomentarios (nombre, email, telefono, comentario) 
    VALUES ('$nombre', '$email', '$telefono', '$comentario')";
        }

        if ($mysqli->query($sql) == TRUE) {
            return "Registro insertado correctamente";
        } else {
            return "Hubo un error al insertar, intente de nuevo; error:" . $mysqli->error . "\n";
        }

        $mysqli->close();
    }


    function UPDATE($idComentario, $nombre, $email, $telefono, $comentario)
    {
    
        $Conexion = new Conexion();
        $mysqli = $Conexion->crearConexion();

        if ($mysqli!=null) {
            $sql = "UPDATE tblcomentarios 
        SET nombre='$nombre', email='$email', telefono='$telefono', comentario='$comentario' 
        WHERE idComentario = $idComentario";
}
        if ($mysqli->query($sql)) {
            return "Comentario actualizado";
        }else {
            return "Hubo un error: " . $mysqli->error;
        }

        $mysqli->close();
    }

    function SELECT()
    {

    }

    function DELETE($idComentario)
    {
        $Conexion=new Conexion();
        $mysqli=$Conexion->crearConexion();
        if ($mysqli!=null) {
           $sql = "DELETE * FROM tblComentarios WHERE idComentario='$idComentario' ";
        }
    }
}
?>