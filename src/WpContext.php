<?php
namespace Manychois\Wpx;

/**
 * Basic implementation of WpContextInterface which invokes corresponding WordPress functions.
 */
class WpContext implements WpContextInterface
{
	#region Manychois\Wpx\WpContextInterface Members

	public function __($text, $domain = 'default')
	{
		return \__($text, $domain);
	}

	public function add_filter($tag, $function_to_add, $priority = 10, $accepted_args = 1)
	{
		return \add_filter($tag, $function_to_add, $priority, $accepted_args);
	}

	public function comments_open($post_id = null)
	{
		return \comments_open($post_id);
	}

	public function get_avatar($id_or_email, $size = 96, $default = '', $alt = '', $args = null)
	{
		return \get_avatar($id_or_email, $size, $default, $alt, $args);
	}

	public function get_comments_number($post_id = 0)
	{
		return \get_comments_number($post_id);
	}

    public function get_option($option, $default = false)
    {
        return \get_option($option, $default);
    }

    public function get_the_ID()
    {
        return \get_the_ID();
    }

	public function get_nav_menu_locations()
	{
		return \get_nav_menu_locations();
	}

	public function get_post_type($post = null)
	{
		return \get_post_type($post);
	}

	public function paginate_comments_links($args = array())
	{
		return \paginate_comments_links($args);
	}

	public function paginate_links($args = '')
	{
		return \paginate_links($args);
	}

	public function post_password_required($post = null)
	{
		return \post_password_required($post);
	}

	public function post_type_supports($post_type, $feature)
	{
		return \post_type_supports($post_type, $feature);
	}

	public function remove_action($tag, $function_to_remove, $priority = 10)
	{
		return \remove_action($tag, $function_to_remove, $priority);
	}

	public function stripslashes_deep($value)
	{
		return \stripslashes_deep($value);
	}

	public function wp_get_nav_menu_items($menu, $args = array())
	{
		return \wp_get_nav_menu_items($menu, $args);
	}

	public function wp_get_nav_menu_object($menu)
	{
		return \wp_get_nav_menu_object($menu);
	}

	public function wp_link_pages($args = '')
	{
		return \wp_link_pages($args);
	}

	public function wp_list_comments($args = array(), $comments = null)
	{
		return \wp_list_comments($args, $comments);
	}


	public function wp_register_script($handle, $src, $deps = array(), $ver = false, $in_footer = false)
	{
		return \wp_register_script($handle, $src, $deps, $ver, $in_footer);
	}

	public function wp_register_style($handle, $src, $deps = array(), $ver = false, $media = 'all')
	{
		return \wp_register_style($handle, $src, $deps, $ver, $media);
	}

	/**
	 * @return \WP_Query
	 */
	public function get_global_wp_query()
	{
		global $wp_query;
		return $wp_query;
	}

	/**
	 * @return \wpdb
	 */
	public function get_global_wpdb()
	{
		global $wpdb;
		return $wpdb;
	}

	#endregion
}