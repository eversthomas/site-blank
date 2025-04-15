
<?php namespace ProcessWire; 

// Template file for pages using the “main navigation” template
// -------------------------------------------------------

$treeMenu = $modules->get("MarkupSimpleNavigation"); // load the module
$options = array(
    'parent_class' => 'parent',
    'current_class' => 'current',
    'has_children_class' => 'has_children',
    'levels' => true,
    'levels_prefix' => 'level-',
    'max_levels' => null,
    'firstlast' => false,
    'collapsed' => false,
    'show_root' => true,
    'selector' => '',
    'selector_field' => 'nav_selector',
    'outer_tpl' => '<ul>||</ul>',
    'inner_tpl' => '<ul>||</ul>',
    'list_tpl' => '<li%s>||</li>',
    'list_field_class' => '',
    'item_tpl' => '<a href="{url}">{title}</a>',
    'item_current_tpl' => '<a href="{url}">{title}</a>',
    'xtemplates' => '',
    'xitem_tpl' => '<a href="{url}">{title}</a>',
    'xitem_current_tpl' => '<span>{title}</span>',
    'date_format' => 'Y/m/d',
    'code_formatting' => false,
    'debug' => false
);
echo $treeMenu->render($options);
