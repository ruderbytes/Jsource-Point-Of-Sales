<?php
class MyCUrlManager extends CUrlManager
{
    public function createUrl($route,$params=array(),$ampersand='&')
    {
        if(isset($_POST['_lang']))
        {
            Yiiapp()-setLanguage($_POST['_lang']);
            $route['language']=Yiiapp()-language;
        }
        elseif (!isset($route['language']))
        {
            $route['language']=Yiiapp()-language;
        }
        else
        {
            Yiiapp()-setLanguage($route['language']);
        }
        return parentcreateUrl($route, $params, $ampersand);
    }
}
?>