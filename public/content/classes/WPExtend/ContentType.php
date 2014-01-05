<?php

namespace WPPlugins\WPExtend;

class ContentType {
    public $type;
    public $options = array();
    public $labels = array();

    /**
     * Creates a new ContentType object
     * @param string $type
     * @param array $options
     * @param array $labels
     */
    public function __construct($type, $options = array(), $labels = array()) {
        $this->type = $type;

        $default_options = array(
            'public' => true,
            'supports' => array('title', 'editor', 'thumbnail')
        );
        $required_labels = array(
            'singular_name' => ucwords($this->type),
            'plural_name' => ucwords($this->type)
        );

        $this->options = $options + $default_options;
        $this->labels = $labels + $required_labels;
        $this->options['labels'] = $labels + $this->default_labels();

        add_action('init', array($this, 'register'));
    }

    /**
     * Registers the content type using WP core function(s)
     * @return null
     */
    public function register() {
        register_post_type($this->type, $this->options);
    }

    /**
     * Creates intelligent default labels from the required singular and plural labels
     * @return array
     */
    public function default_labels() {
        
        return array(
            'name' => $this->labels['plural_name'],
            'singular_name' => $this->labels['singular_name'],
            'add_new' => 'Ajouter ' . $this->labels['singular_name'],
            'add_new_item' => 'Ajouter ' . $this->labels['singular_name'],
            'edit' => 'Editer',
            'edit_item' => 'Editer ' . $this->labels['singular_name'],
            'new_item' => 'Nouvelle ' . $this->labels['singular_name'],
            'view' => 'Voir la page ' . $this->labels['singular_name'],
            'view_item' => 'Voir ' . $this->labels['singular_name'],
            'search_items' => 'Recherche ' . $this->labels['plural_name'],
            'not_found' => 'Aucun(e) ' . strtolower($this->labels['plural_name']) . ' trouvé(e)',
            'not_found_in_trash' => 'Aucun(e) ' . strtolower($this->labels['plural_name']) . ' trouvé(e) dans la corbeille',
            'parent_item_colon' => 'Parent ' . $this->labels['singular_name']
        );
    
    }
}