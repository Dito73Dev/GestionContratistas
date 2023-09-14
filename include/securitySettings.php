<?php
$securitySettings_var = array( 'providers' => array( array( 'type' => '%db',
'activationField' => 'active',
'active' => true,
'code' => '00',
'codeField' => '',
'emailField' => 'contractor_email',
'extUserIdField' => '',
'fullnameField' => 'contractor_nombresfull',
'label' => array( 'text' => 'Database',
'type' => 0 ),
'name' => 'db',
'passwordField' => 'contractor_pwd',
'phoneField' => 'phone1',
'resetDateField' => 'reset_date1',
'resetTokenField' => 'reset_token1',
'table' => array( 'connId' => 'dbct_at_localhost',
'table' => 'contractor_master' ),
'twoFactorField' => '',
'userGroupField' => 'groupid',
'usernameField' => 'contractor_doc_id',
'userpicField' => '' ) ),
'sessionControl' => array( 'lifeTime' => 15,
'sessionName' => 'FNnt4D7qPY1XyKf6dyOK',
'JWTSecret' => 'G0LCddvpGgIbjmvB0Xng' ),
'registration' => array( 'passwordValidation' => array( 'strong' => false,
'minimumLength' => 8,
'uniqueCharacters' => 4,
'digitsAndSymbols' => 2,
'upperAndLowerCase' => false ),
'remindMethod' => 1,
'hashAlgorithm' => 1,
'adminEmail' => '',
'caseInsensitiveLogin' => false,
'changePasswordPage' => true,
'changePwdPage' => true,
'hashPassword' => true,
'notifyAdmin' => false,
'notifyUser' => false,
'registerPage' => false,
'remindPage' => true,
'remindPasswordPage' => true,
'sendActivationLink' => false ),
'captchaSettings' => array( 'captchaType' => 0,
'siteKey' => '',
'secretKey' => '',
'passesCount' => 5 ),
'emailSettings' => array( 'fromEmail' => 'notificacion_conratistas@mincit.gov.co',
'usePHPDefinedSMTP' => false,
'useBuiltInMailer' => false,
'SMTPServer' => '172.18.0.22',
'SMTPPort' => 25,
'SMTPUser' => '',
'SMTPPassword' => '',
'securityProtocol' => 0 ),
'advancedSecurity' => array( 'allowGuestLogin' => false ),
'auditAndLocking' => array( 'loggingTable' => array( 'connId' => 'dbct_at_localhost',
'table' => 'gestioncontratistas_ver_103_audit' ),
'lockingTable' => array( 'connId' => 'dbct_at_localhost',
'table' => 'gestioncontratistas_ver_103_locking' ),
'tables' => array(  ),
'loggingMode' => 1,
'loggingFile' => 'audit.log',
'logSecurityActions' => true,
'lockAfterUnsuccessfulLogin' => true,
'enableLocking' => true ),
'twoFactorSettings' => array( 'available' => false,
'required' => false,
'enable' => false,
'remember' => false,
'types' => array(  ),
'twoFactorField' => '˂Create new˃',
'emailField' => 'contractor_email',
'phoneField' => '˂Create new˃',
'codeField' => '˂Create new˃',
'projectName' => 'GestionContratistas_v109' ),
'projectName' => 'GestionContratistas_v1091',
'loginDataSource' => 'contractor_master',
'loginForm' => 1,
'dynamicPermissions' => true,
'dpTablePrefix' => 'gestioncontratistas_ver_103_',
'dpTableConnId' => 'dbct_at_localhost',
'hardcodedLogin' => false,
'enabled' => true,
'advancedSecurityAvailable' => true,
'userGroupsAvailable' => true,
'defaultProviderCode' => '00',
'adOnlyLogin' => false,
'dbProvider' => array( 'type' => '%db',
'activationField' => 'active',
'active' => true,
'code' => '00',
'codeField' => '',
'emailField' => 'contractor_email',
'extUserIdField' => '',
'fullnameField' => 'contractor_nombresfull',
'label' => array( 'text' => 'Database',
'type' => 0 ),
'name' => 'db',
'passwordField' => 'contractor_pwd',
'phoneField' => 'phone1',
'resetDateField' => 'reset_date1',
'resetTokenField' => 'reset_token1',
'table' => array( 'connId' => 'dbct_at_localhost',
'table' => 'contractor_master' ),
'twoFactorField' => '',
'userGroupField' => 'groupid',
'usernameField' => 'contractor_doc_id',
'userpicField' => '' ),
'adAdminGroups' => array(  ),
'showUserSource' => false,
'dbProviderCodes' => array( '00' ),
'notifications' => array(  ) );
?>