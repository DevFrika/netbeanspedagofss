<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'departement_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fss\\Website\\DepartementBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Departement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'departement_dep' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Fss\\Website\\DepartementBundle\\Controller\\DefaultController::indexdepAction',  ),  2 =>   array (    'id' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Departement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_pedagogie_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_getdepfilieres' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\FiliereController::GetDepFiliereAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Filiere/Get',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_addfiliere' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\FiliereController::FiliereHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Filiere/Add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_updatefiliere' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\FiliereController::FiliereHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Filiere/Update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_deletefiliere' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\FiliereController::FiliereHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Filiere/Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_adddepartement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DepartementController::DepartementHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Departement/Add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_updatedepartement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DepartementController::DepartementHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Departement/Update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_deletedepartement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DepartementController::DepartementHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Departement/Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_getdismatieres' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\MatiereController::GetDisMatiereAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Matiere/Get/Discipline/Matiere',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_getmatnature' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\MatiereController::GetMatNatureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Nature/Get/Nature/Matiere',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_addmatiere' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\MatiereController::MatiereHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Matiere/Add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_updatematiere' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\MatiereController::MatiereHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Matiere/Update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_deletematiere' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\MatiereController::MatiereHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Matiere/Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_getdepdisciplines' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DisciplineController::GetDepDisciplineAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Discipline/Get/Departement/Discipline',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_getfildisciplines' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DisciplineController::GetFilDisciplineAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Discipline/Get/Filiere/Discipline',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_getgrpdisciplines' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DisciplineController::GetGrpDisciplineAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Discipline/Get/Groupe/Discipline',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_adddiscipline' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DisciplineController::DisciplineHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Discipline/Add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_updatediscipline' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DisciplineController::DisciplineHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Discipline/Update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_deletediscipline' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DisciplineController::DisciplineHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Discipline/Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_emploifiliere' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\EmploiController::EmploiHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Emploi/Filiere/Get',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_emploigroupe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\EmploiController::EmploiHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Emploi/Groupe/Get',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_emploisalle' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\EmploiController::EmploiHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Emploi/Salle/Get',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_emploienseignant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\EmploiController::EmploiHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Emploi/Enseignant/Get',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_addemploi' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\EmploiController::EmploiHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Emploi/Add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_updateemploi' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\EmploiController::EmploiHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Emploi/Update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_deleteemploi' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\EmploiController::EmploiHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Emploi/Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_getfilclasses' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\ClassesController::GetFilClassesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Classe/Get/Filiere/Classe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_addclasse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\ClassesController::ClassesHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Classe/Add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_updateclasse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\ClassesController::ClassesHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Classe/Update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_deleteclasse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\ClassesController::ClassesHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Classe/Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_getclsgroupes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\GroupeController::GetClsGroupeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Groupe/Get/Classe/Groupe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_addgroupe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\GroupeController::GroupeHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Groupe/Add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_updategroupe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\GroupeController::GroupeHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Groupe/Update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_deletegroupe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\GroupeController::GroupeHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Groupe/Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_addvoeux' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\VoeuxController::VoeuxHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Voeux/Add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_updatevoeux' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\VoeuxController::VoeuxHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Voeux/Update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_deletevoeux' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\VoeuxController::VoeuxHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Voeux/Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_getensdevoir' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DevoirController::GetEnsDevoirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Devoir/Get/Enseignant/Devoir',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_adddevoir' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DevoirController::DevoirHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Devoir/Add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_updatedevoir' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DevoirController::DevoirHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Devoir/Update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_deletedevoir' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DevoirController::DevoirHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Devoir/Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_getmatenseignants' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\EnseignantController::GetMatEnseignantAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Enseignant/Get/Matiere/Enseignant',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_addenseignant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\EnseignantController::EnseignantHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Enseignant/Add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_updateenseignant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\EnseignantController::EnseignantHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Enseignant/Update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_deleteenseignant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\EnseignantController::EnseignantHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Enseignant/Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_getlixsalles' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\SalleController::GetLieuxSallesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Salle/Get/Lieux/Salles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_addsalle' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\SalleController::SalleHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Salle/Add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_updatesalle' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\SalleController::SalleHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Salle/Update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_deletesalle' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\SalleController::SalleHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Salle/Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_getlieux' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\LieuxController::GetLieuxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Lieux/Get',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_addlieux' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\LieuxController::LieuxHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Lieux/Add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_updatelieux' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\LieuxController::LieuxHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Lieux/Update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_deletelieux' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\LieuxController::LieuxHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Lieux/Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_getmutex' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\MutexController::GetMutexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Mutex/Get',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_addmutex' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\MutexController::MutexHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Mutex/Add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_deletemutex' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\MutexController::MutexHandleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Mutex/Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_gettransaction' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PedagogiePedagogieBundle:Transaction:GetTransaction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Transaction/Get',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_addtransaction' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PedagogiePedagogieBundle:Transaction:TransactionHandle',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Transaction/Add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedagogie_deletetransaction' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PedagogiePedagogieBundle:Transaction:TransactionHandle',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pedagogie/Transaction/Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PedagoFssUserBundle:Default:index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/User',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PedagoFssUserBundle:Login:login',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/User/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_signin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PedagoFssUserBundle:Signin:signin',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/User/signin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PedagoFss\\UserBundle\\Controller\\DefaultController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/User/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'TestBundle\\Controller\\DefaultController::indexAction',    'name' => 'World',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/TestBundle',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'HelloTheWorld' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TestBundle\\Controller\\MyAppController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/hello-world',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
