<?php namespace Alfa\Inc\admin;

class Admin 
{
    public function __construct()
    {
        add_action( 'admin_menu', array( $this,'alfa_custom_admin_menu' ) );
        add_action( 'admin_enqueue_scripts', array( $this,'alfa_admin_scripts' ) );
        
    }

    public function alfa_admin_scripts($page) 
    {
        error_log($page);
        if( 
            'toplevel_page_contacts_manager'===$page || 'contact-manager_page_add_people'===$page ||'admin_page_add_contact'===$page
        ) {
            wp_enqueue_style('alfa-custom-admin-css', ALFA_API_PLUGIN_URL.'assets/css/custom-admin.css');
        }

        if( 'admin_page_add_contact'===$page ) 
        {
            wp_enqueue_style('jquery-ccpicker-css', ALFA_API_PLUGIN_URL.'assets/css/jquery.ccpicker.css');
            wp_enqueue_script('jquery-ccpicker-js', ALFA_API_PLUGIN_URL.'assets/js/jquery.ccpicker.js',[], '1.0', true);
            wp_enqueue_script('admin-custom-js', ALFA_API_PLUGIN_URL.'assets/js/admin-custom.js', [], '1.0', true);
        }

    }

    public function alfa_custom_admin_menu() 
    {
        add_menu_page(
            __( 'Contact Manager','alfacm' ),
            __( 'Contact Manager', 'alfacm' ),
            'manage_options',
            'contacts_manager',
            array( $this, 'alfa_persons_admin_cb' ),
            'dashicons-admin-generic',
            3
        );

        add_submenu_page('contacts_manager','Add People','Add People','manage_options','add_people',array( $this,'alfa_add_people_cb'));
        add_submenu_page('add_people','Add contact','','manage_options','add_contact',array( $this,'alfa_add_contact_cb'));
    }

    public function alfa_persons_admin_cb()
    {
        $allcontacts= Peoples::alfa_get_peoples();
        require ALFA_API_PLUGIN_PATH.'inc/templates/ContactsTable.php';
    }

    public function alfa_add_people_cb()
    {
        require ALFA_API_PLUGIN_PATH.'inc/templates/AddPeopleForm.php';
        $addPeople=new AddPeople();
        $addPeople->alfa_insert_user_to_database($_POST);
    }

    public function alfa_add_contact_cb()
    {
        require ALFA_API_PLUGIN_PATH.'inc/templates/AddContactForm.php';

    }

}