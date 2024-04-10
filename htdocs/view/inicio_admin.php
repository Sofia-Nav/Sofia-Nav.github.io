<?php
//validar sesiones
include __DIR__.'/../controller/ctrl_sessions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="stylesheet" href="config/css/crm.css">
    <script src="config/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <!--CONTENIDO DE ENCABEZADO-->
    <header class="header">
        <div class="logo-container">
            <img src="config/images/logo.png" alt="#">
        </div>
        <div class="logo-container1">
            <h1>MLOGIC</h1>
        </div>
        <div class="logo-container2">
            <img src="config/images/aasa.png" alt="#">
        </div>
    </header>
    <!--CONTENIDO PRINCIPAL-->
    <div class="container">
        <div class="sidebar">
            <!--INICIO DEL MENÚ-->
            <ul class="menu">
                <li class="menu-item sub-menu">
                    <a class="tab-link" href="#tab1">Clientes</a>
                    <ul class="sub-menu-list">
                        <li><a class="sub-tab-link" href="#subtab1">Licencias</a></li>
                        <li><a class="sub-tab-link" href="#subtab2">Sistemas de Clientes</a></li>
                        <li><a class="sub-tab-link" href="#subtab3">Aplicaciones de Clientes</a></li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a class="tab-link" href="#tab2">Instalacion</a>
                </li>
                <li class="menu-item">
                    <a class="tab-link" href="#tab3">Capacitacion</a>
                </li>
                <li class="menu-item sub-menu">
                    <a class="tab-link">Implementacion</a>
                    <ul class="sub-menu-list">
                        <li><a class="sub-tab-link" href="#subtab4">Sistemas</a></li>
                        <li><a class="sub-tab-link" href="#subtab5">Aplicaciones</a></li>
                    </ul>
                </li>
                <li class="menu-item sub-menu">
                    <a class="tab-link" href="#tab4">Equipos</a>
                    <ul class="sub-menu-list">
                        <li><a class="sub-tab-link" href="#subtab6">Caracteristicas</a></li>
                        <li><a class="sub-tab-link" href="#subtab7">Especificaciones</a></li>
                        <li><a class="sub-tab-link" href="#subtab8">Especificaciones SQL</a></li>
                    </ul>
                </li>
                <li class="menu-item sub-menu">
                    <a class="tab-link">Catalago</a>
                    <ul class="sub-menu-list">
                        <li><a class="sub-tab-link" href="#subtab9">Sistemas</a></li>
                        <li><a class="sub-tab-link" href="#subtab10">Aplicaciones</a></li>
                        <li><a class="sub-tab-link" href="#subtab11">Actividades</a></li>
                        <li><a class="sub-tab-link" href="#subtab12">Vendedor</a></li>
                        <li><a class="sub-tab-link" href="#subtab13">Consultor</a></li>
                    </ul>
                </li>
                <li class="item">
                    <div>
                        <button class="logout-btn" onclick="cerrar_sesion()">Cerrar sesión</button>
</div>
                </li>
            </ul>
        </div>
    
    <!--FIN DE MENU-->
    <!----------------------------------------------------------------------------------------------->
    <!--INICIO DE CONTENIDO-->

    <!--INICIO TABLA CLIENTES-->
    <div class="content">
        <div class="container1">
            <div class="tab" id="tab1">
                <h2>Registrar Nuevo Cliente</h2>
                <!--TABLA-->
                <table class="form-table">
                    <tr>
                        <th>Empresa</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Contacto</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Telefono</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Correo</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Ciudad</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Vendedor</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    
                </table>
                <!--BOTONES-->
                <div class="btn-container">
                        <button class="btn btn-cancel">Cancelar</button>
                        <button class="btn">Guardar</button>
                    </div>
            </div>
        </div>
        
        <!--FIN TABLA CLIENTES-->

        <!--INICIO TABLA LICENCIAS-->
        <div class="container2">
            <div class="tab" id="subtab1">
                <h2>Registrar Licencia</h2>
                <!--TABLA-->
                <table class="form-table">
                    <td>
                        <select class="form-field">
                          <option value="0">-- Cliente --</option>
                          <option value="1">Jose Juan</option>
                          <option value="2">Fernando</option>
                          <option value="3">Adrian</option>
                          <option value="4">Pedro</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-field">
                          <option value="0">-- Sucursal --</option>
                          <option value="1">Valle Oriente</option>
                          <option value="2">San Agustin</option>
                          <option value="3">Galerias Monterrey</option>
                          <option value="4">Calzada SP</option>
                        </select>
                      </td>
                    <tr>
                        <th>Licencia</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Tipo Licencia</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                </table>
                <!--BOTONES-->
                    <div class="btn-container">
                        <button class="btn btn-cancel">Cancelar</button>
                        <button class="btn">Guardar</button>
                    </div>
            </div>
        </div>
        <!--FIN DE LICENCIAS-->

        <!--INICIO TABLA CLIENTE SISTEMAS-->
        <div class="container3">
            <div class="tab" id="subtab2">
                <h2>Registrar Sistemas Para Cliente</h2>
                <!--TABLA-->
                <table class="form-table">
                    <td>
                        <select class="form-field">
                          <option value="0">-- Cliente --</option>
                          <option value="1">Jose Juan</option>
                          <option value="2">Fernando</option>
                          <option value="3">Adrian</option>
                          <option value="4">Pedro</option>
                        </select>
                      </td>
                    <tr>
                        <th>Nombre</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Usuarios</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Cantidad</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Versiones</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    
                </table>
                <!--BOTONES-->
                    <div class="btn-container">
                        <button class="btn btn-cancel">Cancelar</button>
                        <button class="btn">Guardar</button>
                    </div>
            </div>
        </div>
        <!--FIN TABLA CLIENTE SISTEMAS-->

        <!--INICIO TABLA CLIENTE APLICACIONES-->
        <div class="container4">
            <div class="tab" id="subtab3">
                <h2>Registrar Aplicaciones Para Cliente</h2>
                <!--TABLA-->
                <table class="form-table">
                    <td>
                        <select class="form-field">
                          <option value="0">-- Cliente --</option>
                          <option value="1">Jose Juan</option>
                          <option value="2">Fernando</option>
                          <option value="3">Adrian</option>
                          <option value="4">Pedro</option>
                        </select>
                      </td>
                    <tr>
                        <th>Nombre</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Usuarios</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Cantidad</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Versiones</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>

                    
                </table>
                <!--BOTONES-->
                    <div class="btn-container">
                        <button class="btn btn-cancel">Cancelar</button>
                        <button class="btn">Guardar</button>
                    </div>
            </div>
        </div>
        <!--FIN TABLA CLIENTES APLICACIONES-->

        <!--INICIO TABLA INSTALACION-->
        <div class="container5">
            <div class="tab" id="tab2">
                <h2>Instalación</h2>
                <!--TABLA-->
                <table class="form-table">
                    <td>
                        <select class="form-field">
                          <option value="0">-- Cliente --</option>
                          <option value="1">Jose Juan</option>
                          <option value="2">Fernando</option>
                          <option value="3">Adrian</option>
                          <option value="4">Pedro</option>
                        </select>
                      </td>
                    <tr>
                        <th>Sistema</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Fecha Inicial</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Hora Inicial</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Fecha Final</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Hora Inicial</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Duracion</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Consultor</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Tipo de Instalacion</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Estatus</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Detalles</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    
                </table>
                <!--BOTONES-->
                    <div class="btn-container">
                        <button class="btn btn-cancel">Cancelar</button>
                        <button class="btn">Guardar</button>
                    </div>
            </div>
        </div>
        <!--INICIO TABLA CAPACITACION-->    
        <div class="container6">
            <div class="tab" id="tab3">
                <h2>Capacitación</h2>
                <!--TABLA-->
                <table class="form-table">
                    <td>
                        <select class="form-field">
                          <option value="0">-- Cliente --</option>
                          <option value="1">Jose Juan</option>
                          <option value="2">Fernando</option>
                          <option value="3">Adrian</option>
                          <option value="4">Pedro</option>
                        </select>
                      </td>
                    <tr>
                        <th>Sistema</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Fecha Inicial</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Hora Inicial</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Fecha Final</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Hora Inicial</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Duracion</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Consultor</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Estatus</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Detalles</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    
                </table>
                <!--BOTONES-->
                    <div class="btn-container">
                        <button class="btn btn-cancel">Cancelar</button>
                        <button class="btn">Guardar</button>
                    </div>
            </div>
        </div>
        <!--FIN TABLA CAPACITACION-->

        <!--INICIO TABLA IMPLEMENTACION SISTEMAS-->
        <div class="container7">
            <div class="tab" id="subtab4">
                <h2>Implementacion de Sistemas </h2>
                <!--TABLA-->
                <table class="form-table">
                    <td>
                        <select class="form-field">
                          <option value="0">-- Cliente --</option>
                          <option value="1">Jose Juan</option>
                          <option value="2">Fernando</option>
                          <option value="3">Adrian</option>
                          <option value="4">Pedro</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-field">
                          <option value="0">-- Sistemas --</option>
                          <option value="1">Kirest</option>
                          <option value="2">Aasainve</option>
                          <option value="3">Aasavent</option>
                          <option value="4">ExpressPost</option>
                        </select>
                      </td>
                    <tr>
                        <th>Actividad</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Fecha Inicial</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Hora Inicial</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Fecha Final</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Hora Inicial</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Duracion</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Consultor</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Estatus</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Detalles</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    
                </table>
                <!--BOTONES-->
                    <div class="btn-container">
                        <button class="btn btn-cancel">Cancelar</button>
                        <button class="btn">Guardar</button>
                    </div>
            </div>
        </div>
        <!--FIN TABLA IMPLEMENTACION SISTEMAS-->

        <!--INICIO TABLA IMPLEMENTACION APLICACIONES-->
        <div class="container8">
            <div class="tab" id="subtab5">
                <h2>Implementacion de Aplicaciones </h2>
                <!--TABLA-->
                <table class="form-table">
                    <td>
                        <select class="form-field">
                          <option value="0">-- Cliente --</option>
                          <option value="1">Jose Juan</option>
                          <option value="2">Fernando</option>
                          <option value="3">Adrian</option>
                          <option value="4">Pedro</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-field">
                          <option value="0">-- Aplicaciones --</option>
                          <option value="1">SCOPPI</option>
                          <option value="2">PAD-R</option>
                          <option value="3">COLECTOR</option>
                        </select>
                      </td>
                    <tr>
                        <th>Actividad</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Fecha Inicial</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Hora Inicial</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Fecha Final</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Hora Inicial</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Duracion</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Consultor</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Estatus</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Detalles</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    
                </table>
                <!--BOTONES-->
                    <div class="btn-container">
                        <button class="btn btn-cancel">Cancelar</button>
                        <button class="btn">Guardar</button>
                    </div>
            </div>
        </div>
        <!--FIN TABLA IMPLEMENTACION APLICACIONES-->

        <!--INICIO TABLA EQUIPO-->
        <div class="container9">
            <div class="tab" id="tab4">
                <h2>Registro de Equipos </h2>
                <!--TABLA-->
                <table class="form-table">
                    <td>
                        <select class="form-field">
                          <option value="0">-- Cliente --</option>
                          <option value="1">Jose Juan</option>
                          <option value="2">Fernando</option>
                          <option value="3">Adrian</option>
                          <option value="4">Pedro</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-field">
                          <option value="0">-- Sucursal --</option>
                          <option value="1">Valle Oriente</option>
                          <option value="2">San Agustin</option>
                          <option value="3">Galerias Monterrey</option>
                          <option value="4">Calzada SP</option>
                        </select>
                      </td>
                    <tr>
                        <th>Estacion YAAX</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Nombre de Estacion</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Estatus</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    
                </table>
                <!--BOTONES-->
                    <div class="btn-container">
                        <button class="btn btn-cancel">Cancelar</button>
                        <button class="btn">Guardar</button>
                    </div>
            </div>
        </div>
        <!--FIN TABLA EQUIPO-->

        <!--INICIO TABLA CARACTERISTICAS-->
        <div class="container10">
            <div class="tab" id="subtab6">
                <h2>Registro de Caracteristicas Equipo</h2>
                <!--TABLA-->
                <table class="form-table">
                    <td>
                        <select class="form-field">
                          <option value="0">-- Cliente --</option>
                          <option value="1">Jose Juan</option>
                          <option value="2">Fernando</option>
                          <option value="3">Adrian</option>
                          <option value="4">Pedro</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-field">
                          <option value="0">-- Sucursal --</option>
                          <option value="1">Valle Oriente</option>
                          <option value="2">San Agustin</option>
                          <option value="3">Galerias Monterrey</option>
                          <option value="4">Calzada SP</option>
                        </select>
                      </td>
                      <tr>
                        <th>Procesador</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Velocidad del Equipo</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Estacion YAAX</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Marca de Equipo</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Region</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Disco</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Alterno</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Estatus</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    
                </table>
                <!--BOTONES-->
                    <div class="btn-container">
                        <button class="btn btn-cancel">Cancelar</button>
                        <button class="btn">Guardar</button>
                    </div>
            </div>
        </div>
        <!--FIN TABLA CARACTERISTICAS-->

        <!--INICIO TABLA ESPECIFICACIONES-->
        <div class="container11">
            <div class="tab" id="subtab7">
                <h2>Registro de Especificaciones Equipo </h2>
                <!--TABLA-->
                <table class="form-table">
                    <td>
                        <select class="form-field">
                          <option value="0">-- Cliente --</option>
                          <option value="1">Jose Juan</option>
                          <option value="2">Fernando</option>
                          <option value="3">Adrian</option>
                          <option value="4">Pedro</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-field">
                          <option value="0">-- Sucursal --</option>
                          <option value="1">Valle Oriente</option>
                          <option value="2">San Agustin</option>
                          <option value="3">Galerias Monterrey</option>
                          <option value="4">Calzada SP</option>
                        </select>
                      </td>
                      <tr>
                        <th>Proramas</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Ruta de Licencia</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Ruta Central</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Antivirus</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Region</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Mantenimiento de<br>Inventario</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Estatus</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    
                </table>
                <!--BOTONES-->
                    <div class="btn-container">
                        <button class="btn btn-cancel">Cancelar</button>
                        <button class="btn">Guardar</button>
                    </div>
            </div>
        </div>
        <!--FIN TABLA ESPECIFICACIONES-->

        <!--INICIO TABLA SQL-->
        <div class="container12">
            <div class="tab" id="subtab8">
                <h2>Registro de SQL Equipo </h2>
                <!--TABLA-->
                <table class="form-table">
                    <td>
                        <select class="form-field">
                          <option value="0">-- Cliente --</option>
                          <option value="1">Jose Juan</option>
                          <option value="2">Fernando</option>
                          <option value="3">Adrian</option>
                          <option value="4">Pedro</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-field">
                          <option value="0">-- Sucursal --</option>
                          <option value="1">Valle Oriente</option>
                          <option value="2">San Agustin</option>
                          <option value="3">Galerias Monterrey</option>
                          <option value="4">Calzada SP</option>
                        </select>
                      </td>
                      <tr>
                        <th>Tipo de SQL</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Version de SQL</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Tipo de SSMS</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Instancia de Sucursal</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Usuario SQL</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Contraseña SQL</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Base de Datos</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Instancia Local</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Usuario Local</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Contraseña lLocal</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Base de Datos Local</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    
                </table>
                <!--BOTONES-->
                    <div class="btn-container">
                        <button class="btn btn-cancel">Cancelar</button>
                        <button class="btn">Guardar</button>
                    </div>
            </div>
        </div>
        <!--FIN TABLA SQL-->

        <!--INICIO DE CATALAGO SISTEMAS-->
        <div class="container13">
            <div class="tab" id="subtab9">
                <h2>Catalago de Sistemas</h2>
                <!--TABLA-->
                <table class="form-table">
                    <td>
                        <select class="form-field">
                          <option value="0">-- Cliente --</option>
                          <option value="1">Jose Juan</option>
                          <option value="2">Fernando</option>
                          <option value="3">Adrian</option>
                          <option value="4">Pedro</option>
                        </select>
                      </td>
                    <tr>
                        <th>Nombre del Sistema</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Versiones</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                    
                </table>
                <!--BOTONES-->
                    <div class="btn-container">
                        <button class="btn btn-cancel">Cancelar</button>
                        <button class="btn">Guardar</button>
                    </div>
            </div>
        </div>
        <!--FIN DE CATALAGO SISTEMAS-->

        <!--INICIO DE CATALAGO SISTEMAS-->
        <div class="container14">
            <div class="tab" id="subtab10">
                <h2>Catalago de Aplicaciones</h2>
                <!--TABLA-->
                <table class="form-table">
                    <td>
                        <select class="form-field">
                          <option value="0">-- Cliente --</option>
                          <option value="1">Jose Juan</option>
                          <option value="2">Fernando</option>
                          <option value="3">Adrian</option>
                          <option value="4">Pedro</option>
                        </select>
                      </td>
                    <tr>
                        <th>Nombre del Aplicacion</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Versiones</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                    
                </table>
                <!--BOTONES-->
                    <div class="btn-container">
                        <button class="btn btn-cancel">Cancelar</button>
                        <button class="btn">Guardar</button>
                    </div>
            </div>
        </div>
        <!--FIN DE CATALAGO APLICACIONES-->
        
        <!--INICIO DE CATALAGO ACTIVIDADES-->
        <div class="container15">
            <div class="tab" id="subtab11">
                <h2>Catalago de Actividad</h2>
                <!--TABLA-->
                <table class="form-table">
                    <td>
                        <select class="form-field">
                          <option value="0">-- Cliente --</option>
                          <option value="1">Jose Juan</option>
                          <option value="2">Fernando</option>
                          <option value="3">Adrian</option>
                          <option value="4">Pedro</option>
                        </select>
                      </td>
                    <tr>
                        <th>Nombre de Actividad</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Tipo de Actividad</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Fecha Actividad</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    
                </table>
                <!--BOTONES-->
                    <div class="btn-container">
                        <button class="btn btn-cancel">Cancelar</button>
                        <button class="btn">Guardar</button>
                    </div>
            </div>
        </div>
        <!--FIN DE CATALAGO ACTIVIDADES-->

        <!--INICIO DE CATALAGO CONSULTOR-->
        <div class="container16">
            <div class="tab" id="subtab12">
                <h2>Catalago de Actividad</h2>
                <!--TABLA-->
                <table class="form-table">
                    <tr>
                        <th>Nombre de Consultor</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Detalles</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    
                </table>
                <!--BOTONES-->
                    <div class="btn-container">
                        <button class="btn btn-cancel">Cancelar</button>
                        <button class="btn">Guardar</button>
                    </div>
            </div>
        </div>
        <!--FIN DE CATALAGO CONSULTOR-->

        <!--INICIO DE CATALAGO VENDEDOR-->
        <div class="container17">
            <div class="tab" id="subtab13">
                <h2>Catalago de Vendedor</h2>
                <!--TABLA-->
                <table class="form-table">
                    <tr>
                        <th>Nombre de Vendedor</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    <tr>
                        <th>Detalles</th>
                        <td><input type="text" class="form-field"></td>
                    </tr>
                    
                </table
                ><!--BOTONES-->
                    <div class="btn-container">
                        <button class="btn btn-cancel">Cancelar</button>
                        <button class="btn">Guardar</button>
                    </div>
            </div>
        </div>
        <!--FIN DE CATALAGO VENDEDOR-->





</div>
 </div>
</div>
<script>
function cerrar_sesion() {
    Swal.fire({
        title: "Estas a punto de cerrar sesión.",
        text: "estás seguro?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#CFCFCF",
        cancelButtonText: "Cancelar",
        confirmButtonText: "Cerrar",
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var cookies = document.cookie.split(";");
        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i];
            var eqPos = cookie.indexOf("=");
            var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
            document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
        }
        location.replace('/');

        }
    });
}
    </script>

</body>
</html>