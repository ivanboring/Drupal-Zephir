<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Drupal',
    'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'Bootstrap',
    'abstract' => 0,
    'final' => 1,
    'definition' => 
    array (
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
            2 => 'final',
          ),
          'type' => 'method',
          'name' => 'check_plain',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'text',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
              'line' => 5,
              'char' => 54,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'char',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'ch',
                  'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                  'line' => 6,
                  'char' => 10,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
              'line' => 7,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'string',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'output',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                    'line' => 7,
                    'char' => 21,
                  ),
                  'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                  'line' => 7,
                  'char' => 21,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
              'line' => 9,
              'char' => 5,
            ),
            2 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'text',
                'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                'line' => 9,
                'char' => 18,
              ),
              'value' => 'ch',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'switch',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'ch',
                    'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                    'line' => 10,
                    'char' => 14,
                  ),
                  'clauses' => 
                  array (
                    0 => 
                    array (
                      'type' => 'case',
                      'expr' => 
                      array (
                        'type' => 'char',
                        'value' => '\\\'',
                        'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                        'line' => 11,
                        'char' => 14,
                      ),
                      'statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'let',
                          'assignments' => 
                          array (
                            0 => 
                            array (
                              'assign-type' => 'variable',
                              'operator' => 'concat-assign',
                              'variable' => 'output',
                              'expr' => 
                              array (
                                'type' => 'string',
                                'value' => '&#039;',
                                'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                                'line' => 12,
                                'char' => 27,
                              ),
                              'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                              'line' => 12,
                              'char' => 27,
                            ),
                          ),
                          'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                          'line' => 13,
                          'char' => 10,
                        ),
                        1 => 
                        array (
                          'type' => 'break',
                          'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                          'line' => 14,
                          'char' => 8,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                      'line' => 14,
                      'char' => 8,
                    ),
                    1 => 
                    array (
                      'type' => 'case',
                      'expr' => 
                      array (
                        'type' => 'char',
                        'value' => '"',
                        'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                        'line' => 14,
                        'char' => 13,
                      ),
                      'statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'let',
                          'assignments' => 
                          array (
                            0 => 
                            array (
                              'assign-type' => 'variable',
                              'operator' => 'concat-assign',
                              'variable' => 'output',
                              'expr' => 
                              array (
                                'type' => 'string',
                                'value' => '&quot;',
                                'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                                'line' => 15,
                                'char' => 27,
                              ),
                              'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                              'line' => 15,
                              'char' => 27,
                            ),
                          ),
                          'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                          'line' => 16,
                          'char' => 10,
                        ),
                        1 => 
                        array (
                          'type' => 'break',
                          'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                          'line' => 17,
                          'char' => 8,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                      'line' => 17,
                      'char' => 8,
                    ),
                    2 => 
                    array (
                      'type' => 'case',
                      'expr' => 
                      array (
                        'type' => 'char',
                        'value' => '&',
                        'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                        'line' => 17,
                        'char' => 13,
                      ),
                      'statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'let',
                          'assignments' => 
                          array (
                            0 => 
                            array (
                              'assign-type' => 'variable',
                              'operator' => 'concat-assign',
                              'variable' => 'output',
                              'expr' => 
                              array (
                                'type' => 'string',
                                'value' => '&amp;',
                                'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                                'line' => 18,
                                'char' => 26,
                              ),
                              'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                              'line' => 18,
                              'char' => 26,
                            ),
                          ),
                          'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                          'line' => 19,
                          'char' => 10,
                        ),
                        1 => 
                        array (
                          'type' => 'break',
                          'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                          'line' => 20,
                          'char' => 8,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                      'line' => 20,
                      'char' => 8,
                    ),
                    3 => 
                    array (
                      'type' => 'case',
                      'expr' => 
                      array (
                        'type' => 'char',
                        'value' => '<',
                        'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                        'line' => 20,
                        'char' => 13,
                      ),
                      'statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'let',
                          'assignments' => 
                          array (
                            0 => 
                            array (
                              'assign-type' => 'variable',
                              'operator' => 'concat-assign',
                              'variable' => 'output',
                              'expr' => 
                              array (
                                'type' => 'string',
                                'value' => '&lt;',
                                'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                                'line' => 21,
                                'char' => 25,
                              ),
                              'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                              'line' => 21,
                              'char' => 25,
                            ),
                          ),
                          'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                          'line' => 22,
                          'char' => 10,
                        ),
                        1 => 
                        array (
                          'type' => 'break',
                          'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                          'line' => 23,
                          'char' => 8,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                      'line' => 23,
                      'char' => 8,
                    ),
                    4 => 
                    array (
                      'type' => 'case',
                      'expr' => 
                      array (
                        'type' => 'char',
                        'value' => '>',
                        'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                        'line' => 23,
                        'char' => 13,
                      ),
                      'statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'let',
                          'assignments' => 
                          array (
                            0 => 
                            array (
                              'assign-type' => 'variable',
                              'operator' => 'concat-assign',
                              'variable' => 'output',
                              'expr' => 
                              array (
                                'type' => 'string',
                                'value' => '&gt;',
                                'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                                'line' => 24,
                                'char' => 25,
                              ),
                              'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                              'line' => 24,
                              'char' => 25,
                            ),
                          ),
                          'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                          'line' => 25,
                          'char' => 10,
                        ),
                        1 => 
                        array (
                          'type' => 'break',
                          'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                          'line' => 26,
                          'char' => 11,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                      'line' => 26,
                      'char' => 11,
                    ),
                    5 => 
                    array (
                      'type' => 'default',
                      'statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'let',
                          'assignments' => 
                          array (
                            0 => 
                            array (
                              'assign-type' => 'variable',
                              'operator' => 'concat-assign',
                              'variable' => 'output',
                              'expr' => 
                              array (
                                'type' => 'variable',
                                'value' => 'ch',
                                'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                                'line' => 27,
                                'char' => 21,
                              ),
                              'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                              'line' => 27,
                              'char' => 21,
                            ),
                          ),
                          'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                          'line' => 28,
                          'char' => 10,
                        ),
                        1 => 
                        array (
                          'type' => 'break',
                          'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                          'line' => 29,
                          'char' => 4,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                      'line' => 29,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                  'line' => 30,
                  'char' => 3,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
              'line' => 31,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'output',
                'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
                'line' => 31,
                'char' => 16,
              ),
              'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
              'line' => 32,
              'char' => 2,
            ),
          ),
          'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
          'line' => 5,
          'char' => 29,
        ),
      ),
      'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
      'line' => 3,
      'char' => 11,
    ),
    'file' => '/var/extensions/drupal/drupal/bootstrap.zep',
    'line' => 3,
    'char' => 11,
  ),
);