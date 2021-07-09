<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/appointement' => [
            [['_route' => 'app_appointement_findappointement', '_controller' => 'App\\Controller\\AppointementController::findAppointement'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'appointement', '_controller' => 'App\\Controller\\AppointementController::addappointement'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/appointement/medecin' => [[['_route' => 'app_appointement_findappointementbymedecin', '_controller' => 'App\\Controller\\AppointementController::findAppointementByMedecin'], null, ['GET' => 0], null, false, false, null]],
        '/api/ordonnance' => [
            [['_route' => 'ordonnance', '_controller' => 'App\\Controller\\OrdonnanceController::findOrdonnance'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'ordonnance_post', '_controller' => 'App\\Controller\\OrdonnanceController::addOrdonnance'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/patientData/ordonnance' => [[['_route' => 'patientDataOrdonnance', '_controller' => 'App\\Controller\\OrdonnanceController::findpatientDataOrdonnance'], null, ['GET' => 0], null, false, false, null]],
        '/api/patient' => [
            [['_route' => 'app_patient_findpatient', '_controller' => 'App\\Controller\\PatientController::findPatient'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'addpatient', '_controller' => 'App\\Controller\\PatientController::addPatient'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/patient/medecin' => [[['_route' => 'app_patient_findpatientmedecin', '_controller' => 'App\\Controller\\PatientController::findPatientMedecin'], null, ['GET' => 0], null, false, false, null]],
        '/api/patientdata/data' => [
            [['_route' => 'app_patientdata_findpatientsdata', '_controller' => 'App\\Controller\\PatientDataController::findPatientsData'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_patientdata_addpatientdata', '_controller' => 'App\\Controller\\PatientDataController::addPatientData'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/patientdata/medecin' => [[['_route' => 'app_patientdata_findpatientsdatabymedecin', '_controller' => 'App\\Controller\\PatientDataController::findPatientsDataByMedecin'], null, ['GET' => 0], null, false, false, null]],
        '/api/users' => [
            [['_route' => 'app_security_findusers', '_controller' => 'App\\Controller\\SecurityController::findUsers'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'adduser', '_controller' => 'App\\Controller\\SecurityController::addUser'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/profil' => [[['_route' => 'app_security_addprofile', '_controller' => 'App\\Controller\\SecurityController::addProfile'], null, ['POST' => 0], null, false, false, null]],
        '/api/roles' => [[['_route' => 'roles', '_controller' => 'App\\Controller\\SecurityController::findRoles'], null, ['GET' => 0], null, false, false, null]],
        '/api/connect' => [[['_route' => 'app_security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api(?'
                    .'|/(?'
                        .'|appointement/(?'
                            .'|([^/]++)(?'
                                .'|(*:80)'
                            .')'
                            .'|status/([^/]++)(*:103)'
                        .')'
                        .'|ordonnance/([^/]++)(?'
                            .'|(*:134)'
                        .')'
                        .'|p(?'
                            .'|atient(?'
                                .'|/(?'
                                    .'|([^/]++)(*:168)'
                                    .'|dataids/([^/]++)(*:192)'
                                    .'|([^/]++)(?'
                                        .'|(*:211)'
                                    .')'
                                    .'|data(?'
                                        .'|/([^/]++)(*:236)'
                                        .'|id/([^/]++)(*:255)'
                                    .')'
                                    .'|examen(*:270)'
                                .')'
                                .'|data/data/([^/]++)(?'
                                    .'|(*:300)'
                                .')'
                            .')'
                            .'|rofil/([^/]++)(?'
                                .'|(*:327)'
                            .')'
                        .')'
                        .'|u(?'
                            .'|sers/(?'
                                .'|([^/]++)(?'
                                    .'|(*:360)'
                                .')'
                                .'|update/([^/]++)(*:384)'
                                .'|disunable/([^/]++)(*:410)'
                            .')'
                            .'|pdate/login/([^/]++)(*:439)'
                        .')'
                        .'|roles/([^/]++)(?'
                            .'|(*:465)'
                        .')'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:503)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:534)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:570)'
                        .'|roles(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:604)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:642)'
                            .')'
                        .')'
                        .'|appointements(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:686)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:724)'
                            .')'
                        .')'
                        .'|ordonnances(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:766)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:804)'
                            .')'
                        .')'
                        .'|p(?'
                            .'|atient(?'
                                .'|s(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:849)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:887)'
                                    .')'
                                .')'
                                .'|_datas(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:924)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:962)'
                                    .')'
                                .')'
                            .')'
                            .'|rofils(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1000)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1039)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        80 => [
            [['_route' => 'app_appointement_findappointementbyid', '_controller' => 'App\\Controller\\AppointementController::findAppointementByid'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'appointdelete', '_controller' => 'App\\Controller\\AppointementController::deleteAppointement'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'app_appointement_updateappointement', '_controller' => 'App\\Controller\\AppointementController::updateAppointement'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        103 => [[['_route' => 'app_appointement_statusappointement', '_controller' => 'App\\Controller\\AppointementController::statusAppointement'], ['id'], ['PUT' => 0], null, false, true, null]],
        134 => [
            [['_route' => 'app_ordonnance_findordonnancebyid', '_controller' => 'App\\Controller\\OrdonnanceController::findOrdonnanceByid'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'ordonnance_delete', '_controller' => 'App\\Controller\\OrdonnanceController::deleteDelete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'app_ordonnance_updateordonnance', '_controller' => 'App\\Controller\\OrdonnanceController::updateOrdonnance'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        168 => [[['_route' => 'app_patient_findpatientbyid', '_controller' => 'App\\Controller\\PatientController::findPatientByid'], ['id'], ['GET' => 0], null, false, true, null]],
        192 => [[['_route' => 'app_patient_findpatientbypatientdataid', '_controller' => 'App\\Controller\\PatientController::findPatientByPatientDataId'], ['id'], ['GET' => 0], null, false, true, null]],
        211 => [
            [['_route' => 'app_patient_deletepatient', '_controller' => 'App\\Controller\\PatientController::deletePatient'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'patient_update', '_controller' => 'App\\Controller\\PatientController::updatePatient'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        236 => [[['_route' => 'app_patientdata_findpatientdatabypatientid', '_controller' => 'App\\Controller\\PatientDataController::findPatientDataByPatientId'], ['id'], ['GET' => 0], null, false, true, null]],
        255 => [[['_route' => 'app_patientdata_findpatientbypatientdataid', '_controller' => 'App\\Controller\\PatientDataController::findPatientByPatientDataId'], ['id'], ['GET' => 0], null, false, true, null]],
        270 => [[['_route' => 'app_patientdata_examenpatient', '_controller' => 'App\\Controller\\PatientDataController::examenPatient'], [], ['POST' => 0], null, false, false, null]],
        300 => [
            [['_route' => 'app_patientdata_findpatientdatabyid', '_controller' => 'App\\Controller\\PatientDataController::findPatientDataByid'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_patientdata_deletepatientdata', '_controller' => 'App\\Controller\\PatientDataController::deletePatientData'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'app_patientdata_updatepatientdata', '_controller' => 'App\\Controller\\PatientDataController::updatePatientData'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        327 => [
            [['_route' => 'app_security_findprofilbyid', '_controller' => 'App\\Controller\\SecurityController::findProfilById'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_security_deleteprofile', '_controller' => 'App\\Controller\\SecurityController::deleteProfile'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        360 => [
            [['_route' => 'app_security_findusersbyid', '_controller' => 'App\\Controller\\SecurityController::findUsersById'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_security_deleteuser', '_controller' => 'App\\Controller\\SecurityController::deleteUser'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        384 => [[['_route' => 'update.user', '_controller' => 'App\\Controller\\SecurityController::updateUser'], ['id'], ['PUT' => 0], null, false, true, null]],
        410 => [[['_route' => 'app_security_disunableuser', '_controller' => 'App\\Controller\\SecurityController::disUnableUser'], ['id'], ['PUT' => 0], null, false, true, null]],
        439 => [[['_route' => 'app_security_updatelogin', '_controller' => 'App\\Controller\\SecurityController::updateLogin'], ['id'], ['PUT' => 0], null, false, true, null]],
        465 => [
            [['_route' => 'role.id', '_controller' => 'App\\Controller\\SecurityController::findRolesById'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update.role', '_controller' => 'App\\Controller\\SecurityController::updateRoles'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        503 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        534 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        570 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        604 => [
            [['_route' => 'api_roles_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_roles_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        642 => [
            [['_route' => 'api_roles_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_roles_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_roles_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_roles_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        686 => [
            [['_route' => 'api_appointements_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Appointement', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_appointements_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Appointement', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        724 => [
            [['_route' => 'api_appointements_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Appointement', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_appointements_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Appointement', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_appointements_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Appointement', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_appointements_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Appointement', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        766 => [
            [['_route' => 'api_ordonnances_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ordonnance', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_ordonnances_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ordonnance', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        804 => [
            [['_route' => 'api_ordonnances_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ordonnance', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_ordonnances_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ordonnance', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_ordonnances_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ordonnance', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_ordonnances_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ordonnance', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        849 => [
            [['_route' => 'api_patients_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Patient', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_patients_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Patient', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        887 => [
            [['_route' => 'api_patients_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Patient', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_patients_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Patient', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_patients_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Patient', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_patients_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Patient', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        924 => [
            [['_route' => 'api_patient_datas_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\PatientData', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_patient_datas_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\PatientData', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        962 => [
            [['_route' => 'api_patient_datas_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\PatientData', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_patient_datas_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\PatientData', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_patient_datas_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\PatientData', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_patient_datas_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\PatientData', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1000 => [
            [['_route' => 'api_profils_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1039 => [
            [['_route' => 'api_profils_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_profils_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profils_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
