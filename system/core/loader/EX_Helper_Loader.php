<?php
/**
 * @package     EX_Framework
 * @author      Freetuts Dev Team
 * @email       ngthuc.com@gmail.com
 * @copyright   Copyright (c) 2015
 * @since       Version 1.0
 * @filesource  system/core/loader/EX_Helper_Loader.php
 */
class EX_Helper_Loader
{
    /**
     * Load helper
     *
     * @param   string
     * @desc    hàm load helper, tham số truyền vào là tên của helper
     */
    public function load($helper)
    {
        $helper = ucfirst($helper);
        require_once(PATH_SYSTEM . '/helper/' . $helper . '.php');
    }
}
