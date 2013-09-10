<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * table_ok_cancel_element
 *
 * Lets you determine whether an array index is set and whether it has a value.
 * If the element is empty it returns FALSE (or whatever you specify as the default value.)
 *
 * @access	public
 * @param	integer
 * @param	string
 * @return	string	depends on what the array contains
 */
if (!function_exists('table_ok_cancel_element')) {
    function table_ok_cancel_element($value)
    {
        if ($value == 1) {
            return '<span class="green"><i class="icon-ok bigger-120"></i></span>';
        } else {
            return '<span class="red"><i class="icon-remove bigger-120"></i></span>';
        }
    }
}

/* End of file utilities.php */
/* Location: ./application/helpers/utilities_helper.php */
