<?php
//
// Copyright (c) ZeroC, Inc. All rights reserved.
//
//
// Ice version 3.7.3
//
// <auto-generated>
//
// Generated from file `domain.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace model
{
    global $model__t_Sexo;
    class Sexo
    {
        const _VAR = 0;
        const MUJ = 1;
    }

    $model__t_Sexo = IcePHP_defineEnum('::model::Sexo', array('VAR', 0, 'MUJ', 1));
}

namespace model
{
    global $model__t_Persona;
    class Persona extends \Ice\Value
    {
        public function __construct($uid=0, $webId=0, $nombre='', $rut='', $sexo=\model\Sexo::_VAR, $cargo='', $unidad='', $email='', $telefono='', $oficina='', $direccionTrabajo='', $direccionCasa='', $comuna='')
        {
            $this->uid = $uid;
            $this->webId = $webId;
            $this->nombre = $nombre;
            $this->rut = $rut;
            $this->sexo = $sexo;
            $this->cargo = $cargo;
            $this->unidad = $unidad;
            $this->email = $email;
            $this->telefono = $telefono;
            $this->oficina = $oficina;
            $this->direccionTrabajo = $direccionTrabajo;
            $this->direccionCasa = $direccionCasa;
            $this->comuna = $comuna;
        }

        public function ice_id()
        {
            return '::model::Persona';
        }

        public static function ice_staticId()
        {
            return '::model::Persona';
        }

        public function __toString()
        {
            global $model__t_Persona;
            return IcePHP_stringify($this, $model__t_Persona);
        }

        public $uid;
        public $webId;
        public $nombre;
        public $rut;
        public $sexo;
        public $cargo;
        public $unidad;
        public $email;
        public $telefono;
        public $oficina;
        public $direccionTrabajo;
        public $direccionCasa;
        public $comuna;
    }

    global $Ice__t_Value;
    global $IcePHP__t_int;
    global $IcePHP__t_string;
    global $model__t_Sexo;
    $model__t_Persona = IcePHP_defineClass('::model::Persona', '\\model\\Persona', -1, false, false, $Ice__t_Value, array(
        array('uid', $IcePHP__t_int, false, 0),
        array('webId', $IcePHP__t_int, false, 0),
        array('nombre', $IcePHP__t_string, false, 0),
        array('rut', $IcePHP__t_string, false, 0),
        array('sexo', $model__t_Sexo, false, 0),
        array('cargo', $IcePHP__t_string, false, 0),
        array('unidad', $IcePHP__t_string, false, 0),
        array('email', $IcePHP__t_string, false, 0),
        array('telefono', $IcePHP__t_string, false, 0),
        array('oficina', $IcePHP__t_string, false, 0),
        array('direccionTrabajo', $IcePHP__t_string, false, 0),
        array('direccionCasa', $IcePHP__t_string, false, 0),
        array('comuna', $IcePHP__t_string, false, 0)));
}

namespace model
{
    global $model__t_Vehiculo;
    class Vehiculo extends \Ice\Value
    {
        public function __construct($uid=0, $Patente='', $marca='', $Modelo='', $anio=0, $observacion='', $responsable='')
        {
            $this->uid = $uid;
            $this->Patente = $Patente;
            $this->marca = $marca;
            $this->Modelo = $Modelo;
            $this->anio = $anio;
            $this->observacion = $observacion;
            $this->responsable = $responsable;
        }

        public function ice_id()
        {
            return '::model::Vehiculo';
        }

        public static function ice_staticId()
        {
            return '::model::Vehiculo';
        }

        public function __toString()
        {
            global $model__t_Vehiculo;
            return IcePHP_stringify($this, $model__t_Vehiculo);
        }

        public $uid;
        public $Patente;
        public $marca;
        public $Modelo;
        public $anio;
        public $observacion;
        public $responsable;
    }

    global $Ice__t_Value;
    global $IcePHP__t_int;
    global $IcePHP__t_string;
    $model__t_Vehiculo = IcePHP_defineClass('::model::Vehiculo', '\\model\\Vehiculo', -1, false, false, $Ice__t_Value, array(
        array('uid', $IcePHP__t_int, false, 0),
        array('Patente', $IcePHP__t_string, false, 0),
        array('marca', $IcePHP__t_string, false, 0),
        array('Modelo', $IcePHP__t_string, false, 0),
        array('anio', $IcePHP__t_int, false, 0),
        array('observacion', $IcePHP__t_string, false, 0),
        array('responsable', $IcePHP__t_string, false, 0)));
}

namespace model
{
    global $model__t_Contratos;
    global $model__t_ContratosPrx;

    class ContratosPrxHelper
    {
        public static function checkedCast($proxy, $facetOrContext=null, $context=null)
        {
            return $proxy->ice_checkedCast('::model::Contratos', $facetOrContext, $context);
        }

        public static function uncheckedCast($proxy, $facet=null)
        {
            return $proxy->ice_uncheckedCast('::model::Contratos', $facet);
        }

        public static function ice_staticId()
        {
            return '::model::Contratos';
        }
    }
    $model__t_Contratos = IcePHP_defineClass('::model::Contratos', '\\model\\Contratos', -1, false, true, null, null);

    global $Ice__t_ObjectPrx;
    $model__t_ContratosPrx = IcePHP_defineProxy('::model::Contratos', $Ice__t_ObjectPrx, null);

    global $model__t_Persona;
    global $model__t_Vehiculo;
    global $IcePHP__t_string;
    IcePHP_defineOperation($model__t_ContratosPrx, 'crearPersona', 0, 0, 0, array(array($model__t_Persona)), null, array($model__t_Persona), null);
    IcePHP_defineOperation($model__t_ContratosPrx, 'crearVehiculo', 0, 0, 0, array(array($model__t_Vehiculo)), null, array($model__t_Vehiculo), null);
    IcePHP_defineOperation($model__t_ContratosPrx, 'obtenerPersona', 0, 0, 0, array(array($IcePHP__t_string)), null, array($model__t_Persona), null);
    IcePHP_defineOperation($model__t_ContratosPrx, 'obtenerVehiculo', 0, 0, 0, array(array($IcePHP__t_string)), null, array($model__t_Vehiculo), null);
    IcePHP_defineOperation($model__t_ContratosPrx, 'ingresarVehiculo', 0, 0, 0, array(array($IcePHP__t_string)), null, array($model__t_Vehiculo), null);
}
?>
