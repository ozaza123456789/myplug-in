<? php
$addons = array(
"local_example" => array( // Plugin identifier
    'handlers' => array( // Different places where the plugin will display content.
        'localexample' => array( // Handler unique name (alphanumeric).
            'displaydata' => array(
                'title' => 'pluginname',
                'icon' => 'bluetooth',
                'class' => '',
				'priority' => '10000',
            ),

            'delegate' => 'CoreMainMenuDelegate', // Delegate (where to display the link to the plugin)
          //  'method' => 'mobile_test_view', // Main function in \local_example\output\mobile
        )
    ),
    'lang' => array(    // Language strings that are used in all the handlers.
        array('pluginname', 'local_example'),
       // array('example:viewexample', 'local_example')
    ),
));
?>