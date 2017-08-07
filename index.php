<?php
    /**
     * XPHP Project
     * By xtl
     *
     */

    use X\Autoloader;
    use X\Error;
    use X\Route;
    use X\App;
    use XDO\Tool as XDOTool;
    use XDO\XDO;

    define("X",true);
    define("XPHP_VERSION","0.1.1-alpha");
    define("SysDir",dirname(__FILE__).'/');
    define("LibDir",SysDir.'Lib/');
    define("AppDir",SysDir.'App/');
    define("TemplateDir",SysDir.'Var/Template/');
    define("LangDir",SysDir.'Var/Lang/');
    define("DatDir",SysDir.'Var/Data/');
    define("RouteDir",SysDir.'Var/Route/');

    require(SysDir. 'Config.php');

    require(LibDir.'X/Autoloader.php');

    Autoloader::load("X\Error");

    @session_start();

    XDO::setDir(DatDir);
    XDO::$Cache = false; //Disable the cache

    foreach(XDOTool::listDir(RouteDir,0) as $v){
        Route::load(RouteDir. $v);
    }

    if(Route::$isLoad){
        App::Run(Route::$Application,Route::$Controller,Route::$Action,Route::$var);
    }else{
        Error::HTTP_E(404);
    }
