<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/Departement')) {
            // departement_homepage
            if ($pathinfo === '/Departement') {
                return array (  '_controller' => 'Fss\\Website\\DepartementBundle\\Controller\\DefaultController::indexAction',  '_route' => 'departement_homepage',);
            }

            // departement_dep
            if (preg_match('#^/Departement/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departement_dep')), array (  '_controller' => 'Fss\\Website\\DepartementBundle\\Controller\\DefaultController::indexdepAction',));
            }

        }

        if (0 === strpos($pathinfo, '/Pedagogie')) {
            // pedagogie_pedagogie_homepage
            if ($pathinfo === '/Pedagogie') {
                return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DefaultController::indexAction',  '_route' => 'pedagogie_pedagogie_homepage',);
            }

            if (0 === strpos($pathinfo, '/Pedagogie/Filiere')) {
                // pedagogie_getdepfilieres
                if ($pathinfo === '/Pedagogie/Filiere/Get') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\FiliereController::GetDepFiliereAction',  '_route' => 'pedagogie_getdepfilieres',);
                }

                // pedagogie_addfiliere
                if ($pathinfo === '/Pedagogie/Filiere/Add') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\FiliereController::FiliereHandleAction',  '_route' => 'pedagogie_addfiliere',);
                }

                // pedagogie_updatefiliere
                if ($pathinfo === '/Pedagogie/Filiere/Update') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\FiliereController::FiliereHandleAction',  '_route' => 'pedagogie_updatefiliere',);
                }

                // pedagogie_deletefiliere
                if ($pathinfo === '/Pedagogie/Filiere/Delete') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\FiliereController::FiliereHandleAction',  '_route' => 'pedagogie_deletefiliere',);
                }

            }

            if (0 === strpos($pathinfo, '/Pedagogie/Departement')) {
                // pedagogie_adddepartement
                if ($pathinfo === '/Pedagogie/Departement/Add') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DepartementController::DepartementHandleAction',  '_route' => 'pedagogie_adddepartement',);
                }

                // pedagogie_updatedepartement
                if ($pathinfo === '/Pedagogie/Departement/Update') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DepartementController::DepartementHandleAction',  '_route' => 'pedagogie_updatedepartement',);
                }

                // pedagogie_deletedepartement
                if ($pathinfo === '/Pedagogie/Departement/Delete') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DepartementController::DepartementHandleAction',  '_route' => 'pedagogie_deletedepartement',);
                }

            }

            // pedagogie_getdismatieres
            if ($pathinfo === '/Pedagogie/Matiere/Get') {
                return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\MatiereController::GetDisMatiereAction',  '_route' => 'pedagogie_getdismatieres',);
            }

            // pedagogie_getmatnature
            if ($pathinfo === '/Pedagogie/Nature/Get') {
                return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\MatiereController::GetMatNatureAction',  '_route' => 'pedagogie_getmatnature',);
            }

            if (0 === strpos($pathinfo, '/Pedagogie/Matiere')) {
                // pedagogie_addmatiere
                if ($pathinfo === '/Pedagogie/Matiere/Add') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\MatiereController::MatiereHandleAction',  '_route' => 'pedagogie_addmatiere',);
                }

                // pedagogie_updatematiere
                if ($pathinfo === '/Pedagogie/Matiere/Update') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\MatiereController::MatiereHandleAction',  '_route' => 'pedagogie_updatematiere',);
                }

                // pedagogie_deletematiere
                if ($pathinfo === '/Pedagogie/Matiere/Delete') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\MatiereController::MatiereHandleAction',  '_route' => 'pedagogie_deletematiere',);
                }

            }

            if (0 === strpos($pathinfo, '/Pedagogie/Discipline')) {
                if (0 === strpos($pathinfo, '/Pedagogie/Discipline/Get')) {
                    // pedagogie_getdepdisciplines
                    if ($pathinfo === '/Pedagogie/Discipline/Get') {
                        return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DisciplineController::GetDepDisciplineAction',  '_route' => 'pedagogie_getdepdisciplines',);
                    }

                    // pedagogie_getfildisciplines
                    if ($pathinfo === '/Pedagogie/Discipline/Get') {
                        return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DisciplineController::GetFilDisciplineAction',  '_route' => 'pedagogie_getfildisciplines',);
                    }

                    // pedagogie_getgrpdisciplines
                    if ($pathinfo === '/Pedagogie/Discipline/Get') {
                        return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DisciplineController::GetGrpDisciplineAction',  '_route' => 'pedagogie_getgrpdisciplines',);
                    }

                }

                // pedagogie_adddiscipline
                if ($pathinfo === '/Pedagogie/Discipline/Add') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DisciplineController::DisciplineHandleAction',  '_route' => 'pedagogie_adddiscipline',);
                }

                // pedagogie_updatediscipline
                if ($pathinfo === '/Pedagogie/Discipline/Update') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DisciplineController::DisciplineHandleAction',  '_route' => 'pedagogie_updatediscipline',);
                }

                // pedagogie_deletediscipline
                if ($pathinfo === '/Pedagogie/Discipline/Delete') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DisciplineController::DisciplineHandleAction',  '_route' => 'pedagogie_deletediscipline',);
                }

            }

            if (0 === strpos($pathinfo, '/Pedagogie/Emploi')) {
                // pedagogie_addemploi
                if ($pathinfo === '/Pedagogie/Emploi/Add') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\EmploiController::EmploiHandleAction',  '_route' => 'pedagogie_addemploi',);
                }

                // pedagogie_updateemploi
                if ($pathinfo === '/Pedagogie/Emploi/Update') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\EmploiController::EmploiHandleAction',  '_route' => 'pedagogie_updateemploi',);
                }

                // pedagogie_deleteemploi
                if ($pathinfo === '/Pedagogie/Emploi/Delete') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\EmploiController::EmploiHandleAction',  '_route' => 'pedagogie_deleteemploi',);
                }

            }

            if (0 === strpos($pathinfo, '/Pedagogie/Classe')) {
                // pedagogie_getfilclasses
                if ($pathinfo === '/Pedagogie/Classe/Get') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\ClassesController::GetFilClassesAction',  '_route' => 'pedagogie_getfilclasses',);
                }

                // pedagogie_addclasse
                if ($pathinfo === '/Pedagogie/Classe/Add') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\ClassesController::ClassesHandleAction',  '_route' => 'pedagogie_addclasse',);
                }

                // pedagogie_updateclasse
                if ($pathinfo === '/Pedagogie/Classe/Update') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\ClassesController::ClassesHandleAction',  '_route' => 'pedagogie_updateclasse',);
                }

                // pedagogie_deleteclasse
                if ($pathinfo === '/Pedagogie/Classe/Delete') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\ClassesController::ClassesHandleAction',  '_route' => 'pedagogie_deleteclasse',);
                }

            }

            if (0 === strpos($pathinfo, '/Pedagogie/Groupe')) {
                // pedagogie_getclsgroupes
                if ($pathinfo === '/Pedagogie/Groupe/Get') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\GroupeController::GetClsGroupeAction',  '_route' => 'pedagogie_getclsgroupes',);
                }

                // pedagogie_addgroupe
                if ($pathinfo === '/Pedagogie/Groupe/Add') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\GroupeController::GroupeHandleAction',  '_route' => 'pedagogie_addgroupe',);
                }

                // pedagogie_updategroupe
                if ($pathinfo === '/Pedagogie/Groupe/Update') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\GroupeController::GroupeHandleAction',  '_route' => 'pedagogie_updategroupe',);
                }

                // pedagogie_deletegroupe
                if ($pathinfo === '/Pedagogie/Groupe/Delete') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\GroupeController::GroupeHandleAction',  '_route' => 'pedagogie_deletegroupe',);
                }

            }

            if (0 === strpos($pathinfo, '/Pedagogie/Voeux')) {
                // pedagogie_addvoeux
                if ($pathinfo === '/Pedagogie/Voeux/Add') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\VoeuxController::VoeuxHandleAction',  '_route' => 'pedagogie_addvoeux',);
                }

                // pedagogie_updatevoeux
                if ($pathinfo === '/Pedagogie/Voeux/Update') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\VoeuxController::VoeuxHandleAction',  '_route' => 'pedagogie_updatevoeux',);
                }

                // pedagogie_deletevoeux
                if ($pathinfo === '/Pedagogie/Voeux/Delete') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\VoeuxController::VoeuxHandleAction',  '_route' => 'pedagogie_deletevoeux',);
                }

            }

            if (0 === strpos($pathinfo, '/Pedagogie/Devoir')) {
                // pedagogie_getensdevoir
                if ($pathinfo === '/Pedagogie/Devoir/Get') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DevoirController::GetEnsDevoirAction',  '_route' => 'pedagogie_getensdevoir',);
                }

                // pedagogie_adddevoir
                if ($pathinfo === '/Pedagogie/Devoir/Add') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DevoirController::DevoirHandleAction',  '_route' => 'pedagogie_adddevoir',);
                }

                // pedagogie_updatedevoir
                if ($pathinfo === '/Pedagogie/Devoir/Update') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DevoirController::DevoirHandleAction',  '_route' => 'pedagogie_updatedevoir',);
                }

                // pedagogie_deletedevoir
                if ($pathinfo === '/Pedagogie/Devoir/Delete') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\DevoirController::DevoirHandleAction',  '_route' => 'pedagogie_deletedevoir',);
                }

            }

            if (0 === strpos($pathinfo, '/Pedagogie/Enseignant')) {
                // pedagogie_getmatenseignants
                if ($pathinfo === '/Pedagogie/Enseignant/Get') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\EnseignantController::GetMatEnseignantAction',  '_route' => 'pedagogie_getmatenseignants',);
                }

                // pedagogie_addenseignant
                if ($pathinfo === '/Pedagogie/Enseignant/Add') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\EnseignantController::EnseignantHandleAction',  '_route' => 'pedagogie_addenseignant',);
                }

                // pedagogie_updateenseignant
                if ($pathinfo === '/Pedagogie/Enseignant/Update') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\EnseignantController::EnseignantHandleAction',  '_route' => 'pedagogie_updateenseignant',);
                }

                // pedagogie_deleteenseignant
                if ($pathinfo === '/Pedagogie/Enseignant/Delete') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\EnseignantController::EnseignantHandleAction',  '_route' => 'pedagogie_deleteenseignant',);
                }

            }

            if (0 === strpos($pathinfo, '/Pedagogie/Salle')) {
                // pedagogie_getlixsalles
                if ($pathinfo === '/Pedagogie/Salle/Get') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\SalleController::GetLieuxSallesAction',  '_route' => 'pedagogie_getlixsalles',);
                }

                // pedagogie_addsalle
                if ($pathinfo === '/Pedagogie/Salle/Add') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\SalleController::SalleHandleAction',  '_route' => 'pedagogie_addsalle',);
                }

                // pedagogie_updatesalle
                if ($pathinfo === '/Pedagogie/Salle/Update') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\SalleController::SalleHandleAction',  '_route' => 'pedagogie_updatesalle',);
                }

                // pedagogie_deletesalle
                if ($pathinfo === '/Pedagogie/Salle/Delete') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\SalleController::SalleHandleAction',  '_route' => 'pedagogie_deletesalle',);
                }

            }

            if (0 === strpos($pathinfo, '/Pedagogie/Lieux')) {
                // pedagogie_getlieux
                if ($pathinfo === '/Pedagogie/Lieux/Get') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\LieuxController::GetLieuxAction',  '_route' => 'pedagogie_getlieux',);
                }

                // pedagogie_addlieux
                if ($pathinfo === '/Pedagogie/Lieux/Add') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\LieuxController::LieuxHandleAction',  '_route' => 'pedagogie_addlieux',);
                }

                // pedagogie_updatelieux
                if ($pathinfo === '/Pedagogie/Lieux/Update') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\LieuxController::LieuxHandleAction',  '_route' => 'pedagogie_updatelieux',);
                }

                // pedagogie_deletelieux
                if ($pathinfo === '/Pedagogie/Lieux/Delete') {
                    return array (  '_controller' => 'Pedagogie\\PedagogieBundle\\Controller\\LieuxController::LieuxHandleAction',  '_route' => 'pedagogie_deletelieux',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/User')) {
            // user_homepage
            if ($pathinfo === '/User') {
                return array (  '_controller' => 'PedagoFssUserBundle:Default:index',  '_route' => 'user_homepage',);
            }

            // user_login
            if ($pathinfo === '/User/login') {
                return array (  '_controller' => 'PedagoFssUserBundle:Login:login',  '_route' => 'user_login',);
            }

            // user_signin
            if ($pathinfo === '/User/signin') {
                return array (  '_controller' => 'PedagoFssUserBundle:Signin:signin',  '_route' => 'user_signin',);
            }

            // user_logout
            if ($pathinfo === '/User/logout') {
                return array (  '_controller' => 'PedagoFss\\UserBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'user_logout',);
            }

        }

        // test_homepage
        if (0 === strpos($pathinfo, '/TestBundle') && preg_match('#^/TestBundle(?:/(?P<name>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_homepage')), array (  '_controller' => 'TestBundle\\Controller\\DefaultController::indexAction',  'name' => 'World',));
        }

        // HelloTheWorld
        if ($pathinfo === '/hello-world') {
            return array (  '_controller' => 'TestBundle\\Controller\\MyAppController::indexAction',  '_route' => 'HelloTheWorld',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
