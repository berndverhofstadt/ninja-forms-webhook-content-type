<?php if ( ! defined( 'ABSPATH' ) || ! class_exists( 'NF_Abstracts_Action' )) exit;

/**
 * Class NF_Action_WebhookContentTypeExample
 */
final class NF_WebhookContentType_Actions_WebhookContentTypeExample extends NF_Abstracts_Action
{
    /**
     * @var string
     */
    protected $_name  = 'webhook-content-type';

    /**
     * @var array
     */
    protected $_tags = array();

    /**
     * @var string
     */
    protected $_timing = 'normal';

    /**
     * @var int
     */
    protected $_priority = '10';

    /**
     * Constructor
     */
    public function __construct()
{
    parent::__construct();

    $this->_nicename = __( 'Webhook Content Type Example Action', 'ninja-forms' );
}

    /*
    * PUBLIC METHODS
    */

    public function save( $action_settings )
    {
    
    }

    public function process( $action_settings, $form_id, $data )
    {
        return $data;
    }
}
