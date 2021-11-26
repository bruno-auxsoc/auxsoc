<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Dashboard');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Dashboard::index');


$routes->get('psicologo/(:any)/editar', 'Psicologo::editar/$1');
$routes->get('psicologo/(:any)/excluir', 'Psicologo::excluir/$1');


$routes->get('assistente/(:any)/editar', 'Assistente::editar/$1');
$routes->get('assistente/(:any)/excluir', 'Assistente::excluir/$1');


$routes->get('agendamento/(:any)/editar', 'Agendamento::editar/$1');
$routes->get('agendamento/(:any)/excluir', 'Agendamento::excluir/$1');


$routes->get('encaminhamento/(:any)/editar', 'Encaminhamento::editar/$1');
$routes->get('encaminhamento/(:any)/excluir', 'Encaminhamento::excluir/$1');


$routes->get('atendimento/(:any)/editar', 'Atendimento::editar/$1');
$routes->get('atendimento/(:any)/excluir', 'Atendimento::excluir/$1');


$routes->get('visita/(:any)/editar', 'Visita::editar/$1');
$routes->get('visita/(:any)/excluir', 'Visita::excluir/$1');


$routes->get('familia/(:any)/editar', 'Famillia::editar/$1');
$routes->get('familia/(:any)/excluir', 'Familia::excluir/$1');


$routes->get('projeto/(:any)/editar', 'Projeto::editar/$1');
$routes->get('projeto/(:any)/excluir', 'Projeto::excluir/$1');


$routes->get('grupo/(:any)/editar', 'Grupo::editar/$1');
$routes->get('grupo/(:any)/excluir', 'Grupo::excluir/$1');


$routes->get('participante/(:any)/editar', 'Participante::editar/$1');
$routes->get('participante/(:any)/excluir', 'Participante::excluir/$1');


$routes->get('encontro/(:any)/editar', 'Encontro::editar/$1');
$routes->get('encontro/(:any)/excluir', 'Encontro::excluir/$1');


$routes->get('usuario/(:any)/editar', 'Usuario::editar/$1');
$routes->get('usuario/(:any)/excluir', 'Usuario::excluir/$1');


$routes->get('grupousuario/(:any)/editar', 'GrupoUsuario::editar/$1');
$routes->get('grupousuario/(:any)/excluir', 'GrupoUsuario::excluir/$1');


$routes->get('grupoacesso/(:any)/editar', 'GrupoAcesso::editar/$1');
$routes->get('grupoacesso/(:any)/excluir', 'GrupoAcesso::excluir/$1');


$routes->get('programa/(:any)/editar', 'Programa::editar/$1');
$routes->get('programa/(:any)/excluir', 'Programa::excluir/$1');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
