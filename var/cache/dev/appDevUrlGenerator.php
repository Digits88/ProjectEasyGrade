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
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'assignment_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\AssignmentController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/course/mycourses/assignments/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'course_assignments' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\AssignmentController::courseassignmentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/course/mycourses/assignments/assignmentlist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'assignment_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\AssignmentController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/course/mycourses/assignments/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'assignment_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\AssignmentController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user/course/mycourses/assignments',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'assignment_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\AssignmentController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user/course/mycourses/assignments',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'assignment_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\AssignmentController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user/course/mycourses/assignments',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'course_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\CourseController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/course/admin/allcourses',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_courses' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\CourseController::usercourseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/course/mycourses',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'course_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\CourseController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/course/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'course_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\CourseController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user/course',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'course_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\CourseController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user/course',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'course_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\CourseController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user/course',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nsep_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nsep_default_graph' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\DefaultController::graphAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/graph',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'submission_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\SubmissionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/submission/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'submissions_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\SubmissionController::showsubmissionsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/submission/all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'submission_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\SubmissionController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/submission/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'submission_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\SubmissionController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/submission',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'submission_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\SubmissionController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/submission',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'submission_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\SubmissionController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/submission',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\TestingController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/test/assignment/qwerty',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test_courseshow' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\TestingController::showcourseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/test/assignment/testing',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test_showass' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\TestingController::showassignmentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/test/assignment/submission',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test_grade' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\TestingController::gradeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/test/assignment/grade',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test_status' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\TestingController::statusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/test/assignment/grade/status',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test_co' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\TestingController::m2mAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/test/assignment/test/m2m',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/admin/allusers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'own_account' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\UserController::owneditAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/ownaccount',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\UserController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\UserController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\UserController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NSEPBundle\\Controller\\UserController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
