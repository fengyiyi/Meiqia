<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
/**
 * Meiqia
 * 
 * @package Meiqia
 * @author Lu
 * @version 1.0.0
 * @link http://lvlvl.cn
 */
class Meiqia_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     * 
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
        Helper::addPanel(3, "Meiqia/Main.php", _t("美恰"), _t("美恰"), 'administrator');
        Helper::addAction('Meiqia-add', 'Meiqia_Action');
        Typecho_Plugin::factory('Widget_Archive')->footer = array('Meiqia_Plugin', 'footer');
    }
    
    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate(){
        
        Helper::removeAction('Meiqia-add');
        Helper::removePanel(3, "Meiqia/Main.php");
    }
    
    /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form)
    {
        /** 分类名称 */
        $name = new Typecho_Widget_Helper_Form_Element_Text('word', NULL, '', _t('Meiqia ID'));
        $form->addInput($name);
    }
    
    /**
     * 个人用户的配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}
    
    /**
     * 插件实现方法
     * 
     * @access public
     * @return void
     */

    public static function footer(){
        $ppd = Helper::options()->pluginUrl ;
        echo '
<script type="text/javascript">
    (function(m, ei, q, i, a, j, s) {
        m[a] = m[a] || function() {
            (m[a].a = m[a].a || []).push(arguments)
        };
        j = ei.createElement(q),
            s = ei.getElementsByTagName(q)[0];
        j.async = true;
        j.charset = "UTF-8";
        j.src = i + "?v=" + new Date().getUTCDate();
        s.parentNode.insertBefore(j, s);
    })(window, document, "script", "//static.meiqia.com/dist/meiqia.js", "_MEIQIA");
    _MEIQIA("entId", '.htmlspecialchars(Typecho_Widget::widget('Widget_Options')->plugin('Meiqia')->word)
.');'. "\n".'</script>' . "\n";
    }
}
