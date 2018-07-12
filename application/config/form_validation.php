<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array(
           'formCPP' => array(
               array(
                     'field'   => 'proyecto_empresa',
                     'label'   => 'Proyecto empresa',
                     'rules'   => 'trim|required'
                    ),
               array(
                     'field'   => 'actividad',
                     'label'   => 'Actividad',
                     'rules'   => 'trim|required'
                    ),
               array(
                     'field'   => 'cantidad',
                     'label'   => 'Cantidad',
                     'rules'   => 'trim|required'
                    ),
               array(
                     'field'   => 'fecha_inicio',
                     'label'   => 'Fecha inicio',
                     'rules'   => 'trim|required'
                    ),
               array(
                     'field'   => 'hora_inicio',
                     'label'   => 'Hora inicio',
                     'rules'   => 'trim|required'
                    ),
               array(
                     'field'   => 'fecha_finalizacion',
                     'label'   => 'Fecha finalización',
                     'rules'   => 'trim|required'
                    ),
               array(
                     'field'   => 'hora_finalizacion',
                     'label'   => 'Hora término',
                     'rules'   => 'trim|required'
                    ),
               array(
                     'field'   => 'proyecto_desc',
                     'label'   => 'Proyecto descripción',
                     'rules'   => 'trim'
                    ),
               array(
                     'field'   => 'comentarios',
                     'label'   => 'Comentarios',
                     'rules'   => 'trim'
                    )
           ),

            'formMantUs' => array(
               array(
                     'field'   => 'usuario',
                     'label'   => 'Usuario',
                     'rules'   => 'trim|required'
                    ),
               array(
                     'field'   => 'perfil',
                     'label'   => 'Perfil',
                     'rules'   => 'trim|required'
                    )
           )


 );
