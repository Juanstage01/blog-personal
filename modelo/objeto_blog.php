<?php 
class Objeto_Blog{
    private  $id;
    private  $Titulo;
    private  $Fecha;
    private  $Descripcion;
    private  $Comentario;
    private  $Imagen;
    

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id=$id;
    }

    public function getTitulo(){
        return $this->Titulo;
    }
    public function setTitulo($Titulo){
        $this->Titulo=$Titulo;
    }

    public function getFecha(){
        return $this->Fecha;
    }
    public function setFecha($Fecha){
        $this->Fecha=$Fecha;
    }

    public function getDescripcion(){
        return $this->id;
    }
    public function setDescripcion($Descripcion){
        $this->Descripcion=$Descripcion;
    }

    public function getComentario(){
        return $this->Comentario;
    }
    public function setComentario($Comentario){
        $this->Comentario=$Comentario;
    }

    public function getImagen(){
        return $this->Imagen;
    }
    public function setImagen($Imagen){
        $this->Imagen=$Imagen;
    }
   
}

?>