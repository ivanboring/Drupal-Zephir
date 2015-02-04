<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Drupal',
    'file' => '/var/extensions/drupal/drupal/common.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'Common',
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
          'name' => 'drupal_add_region_content',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'region',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 21,
                'char' => 77,
              ),
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 21,
              'char' => 77,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'data',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 21,
                'char' => 94,
              ),
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 21,
              'char' => 94,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'content',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 21,
              'char' => 109,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'and',
                'left' => 
                array (
                  'type' => 'not',
                  'left' => 
                  array (
                    'type' => 'empty',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'region',
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 22,
                      'char' => 21,
                    ),
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 22,
                    'char' => 21,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 22,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'not',
                  'left' => 
                  array (
                    'type' => 'empty',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'data',
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 22,
                      'char' => 35,
                    ),
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 22,
                    'char' => 35,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 22,
                  'char' => 35,
                ),
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 22,
                'char' => 35,
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
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'content',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'variable',
                          'value' => 'region',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 23,
                          'char' => 22,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'data',
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 23,
                        'char' => 30,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 23,
                      'char' => 30,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 24,
                  'char' => 3,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 25,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'content',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 25,
                'char' => 17,
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 26,
              'char' => 2,
            ),
          ),
          'docblock' => '*
    public drupal_static_data = null;
    public drupal_static_default = null;
    private static instance;

    public static final function getInstance() {
        if self::instance == null {
            let self::instance = new self;
        }

        return self::instance;
    }

	/*
	 * Around 40% slower than core, not implemented
	 *',
          'file' => '/var/extensions/drupal/drupal/common.zep',
          'line' => 21,
          'char' => 29,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
            2 => 'final',
          ),
          'type' => 'method',
          'name' => 'drupal_get_region_content',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'region',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 31,
                'char' => 77,
              ),
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 31,
              'char' => 77,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'delimiter',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => ' ',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 31,
                'char' => 101,
              ),
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 31,
              'char' => 101,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'content',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 31,
              'char' => 116,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'tempregion',
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 32,
                  'char' => 17,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 34,
              'char' => 4,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'region',
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 34,
                    'char' => 20,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 34,
                  'char' => 20,
                ),
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 34,
                'char' => 20,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'and',
                    'left' => 
                    array (
                      'type' => 'isset',
                      'left' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'content',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 35,
                          'char' => 20,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'region',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 35,
                          'char' => 27,
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 35,
                        'char' => 30,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 35,
                      'char' => 30,
                    ),
                    'right' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'is_array',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'content',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 35,
                              'char' => 48,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'region',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 35,
                              'char' => 55,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 35,
                            'char' => 56,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 35,
                          'char' => 56,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 35,
                      'char' => 58,
                    ),
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 35,
                    'char' => 58,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'implode',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'delimiter',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 36,
                              'char' => 29,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 36,
                            'char' => 29,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'content',
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 36,
                                'char' => 38,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'region',
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 36,
                                'char' => 45,
                              ),
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 36,
                              'char' => 46,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 36,
                            'char' => 46,
                          ),
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 36,
                        'char' => 47,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 37,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 38,
                  'char' => 3,
                ),
              ),
              'else_statements' => 
              array (
                0 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'array_keys',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'content',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 40,
                          'char' => 40,
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 40,
                        'char' => 40,
                      ),
                    ),
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 40,
                    'char' => 42,
                  ),
                  'value' => 'tempregion',
                  'reverse' => 0,
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'is_array',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'content',
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 41,
                                'char' => 24,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'tempregion',
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 41,
                                'char' => 35,
                              ),
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 41,
                              'char' => 36,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 41,
                            'char' => 36,
                          ),
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 41,
                        'char' => 38,
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
                              'assign-type' => 'array-index',
                              'operator' => 'assign',
                              'variable' => 'content',
                              'index-expr' => 
                              array (
                                0 => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'tempregion',
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 42,
                                  'char' => 28,
                                ),
                              ),
                              'expr' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'implode',
                                'call-type' => 1,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'delimiter',
                                      'file' => '/var/extensions/drupal/drupal/common.zep',
                                      'line' => 42,
                                      'char' => 49,
                                    ),
                                    'file' => '/var/extensions/drupal/drupal/common.zep',
                                    'line' => 42,
                                    'char' => 49,
                                  ),
                                  1 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'array-access',
                                      'left' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'content',
                                        'file' => '/var/extensions/drupal/drupal/common.zep',
                                        'line' => 42,
                                        'char' => 58,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'tempregion',
                                        'file' => '/var/extensions/drupal/drupal/common.zep',
                                        'line' => 42,
                                        'char' => 69,
                                      ),
                                      'file' => '/var/extensions/drupal/drupal/common.zep',
                                      'line' => 42,
                                      'char' => 70,
                                    ),
                                    'file' => '/var/extensions/drupal/drupal/common.zep',
                                    'line' => 42,
                                    'char' => 70,
                                  ),
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 42,
                                'char' => 71,
                              ),
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 42,
                              'char' => 71,
                            ),
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 43,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 44,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 45,
                  'char' => 3,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 46,
              'char' => 8,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'content',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 46,
                'char' => 17,
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 47,
              'char' => 2,
            ),
          ),
          'docblock' => '*
	 * Around 40% slower than core, not implemented
	 *',
          'file' => '/var/extensions/drupal/drupal/common.zep',
          'line' => 31,
          'char' => 29,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
            2 => 'final',
          ),
          'type' => 'method',
          'name' => 'drupal_get_query_parameters',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'query',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 52,
                'char' => 77,
              ),
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 52,
              'char' => 77,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'exclude',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'array',
                'left' => 
                array (
                  0 => 
                  array (
                    'value' => 
                    array (
                      'type' => 'string',
                      'value' => 'q',
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 52,
                      'char' => 99,
                    ),
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 52,
                    'char' => 99,
                  ),
                ),
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 52,
                'char' => 100,
              ),
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 52,
              'char' => 100,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'parent',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => '',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 52,
                'char' => 113,
              ),
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 52,
              'char' => 113,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'getarray',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 52,
                'char' => 134,
              ),
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 52,
              'char' => 134,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'key',
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 54,
                  'char' => 10,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 55,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'value',
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 55,
                  'char' => 12,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 56,
              'char' => 8,
            ),
            2 => 
            array (
              'type' => 'declare',
              'data-type' => 'string',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'string_key',
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 56,
                  'char' => 20,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 58,
              'char' => 4,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'empty',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'query',
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 58,
                  'char' => 18,
                ),
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 58,
                'char' => 18,
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
                      'operator' => 'assign',
                      'variable' => 'query',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'getarray',
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 59,
                        'char' => 24,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 59,
                      'char' => 24,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 60,
                  'char' => 3,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 62,
              'char' => 4,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'empty',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'exclude',
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 62,
                  'char' => 20,
                ),
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 62,
                'char' => 20,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'query',
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 63,
                    'char' => 16,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 64,
                  'char' => 3,
                ),
              ),
              'elseif_statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'empty',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'parent',
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 65,
                      'char' => 23,
                    ),
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 65,
                    'char' => 23,
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
                          'operator' => 'assign',
                          'variable' => 'exclude',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'array_flip',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'exclude',
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 66,
                                  'char' => 36,
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 66,
                                'char' => 36,
                              ),
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 66,
                            'char' => 37,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 66,
                          'char' => 37,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 67,
                      'char' => 3,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 69,
                  'char' => 7,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 69,
              'char' => 7,
            ),
            5 => 
            array (
              'type' => 'declare',
              'data-type' => 'array',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'params',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 69,
                    'char' => 20,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 69,
                  'char' => 20,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 70,
              'char' => 5,
            ),
            6 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'query',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 70,
                'char' => 27,
              ),
              'key' => 'key',
              'value' => 'value',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'empty',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'parent',
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 71,
                      'char' => 20,
                    ),
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 71,
                    'char' => 20,
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
                          'operator' => 'assign',
                          'variable' => 'string_key',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'string',
                              'value' => '',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 72,
                              'char' => 25,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'key',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 72,
                              'char' => 30,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 72,
                            'char' => 30,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 72,
                          'char' => 30,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 73,
                      'char' => 4,
                    ),
                  ),
                  'else_statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'string_key',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'concat',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'parent',
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 74,
                                  'char' => 29,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => '[',
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 74,
                                  'char' => 35,
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 74,
                                'char' => 35,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'key',
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 74,
                                'char' => 41,
                              ),
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 74,
                              'char' => 41,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => ']',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 74,
                              'char' => 46,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 74,
                            'char' => 46,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 74,
                          'char' => 46,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 75,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 77,
                  'char' => 5,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'isset',
                    'left' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'exclude',
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 77,
                        'char' => 20,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'string_key',
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 77,
                        'char' => 31,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 77,
                      'char' => 33,
                    ),
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 77,
                    'char' => 33,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'continue',
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 79,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 81,
                  'char' => 5,
                ),
                2 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'is_array',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 81,
                          'char' => 21,
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 81,
                        'char' => 21,
                      ),
                    ),
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 81,
                    'char' => 23,
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
                          'assign-type' => 'array-index',
                          'operator' => 'assign',
                          'variable' => 'params',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'variable',
                              'value' => 'key',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 82,
                              'char' => 19,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'scall',
                            'dynamic-class' => 0,
                            'class' => 'self',
                            'dynamic' => 0,
                            'name' => 'drupal_get_query_parameters',
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'value',
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 82,
                                  'char' => 62,
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 82,
                                'char' => 62,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'exclude',
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 82,
                                  'char' => 71,
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 82,
                                'char' => 71,
                              ),
                              2 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'string_key',
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 82,
                                  'char' => 83,
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 82,
                                'char' => 83,
                              ),
                              3 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'getarray',
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 82,
                                  'char' => 93,
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 82,
                                'char' => 93,
                              ),
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 82,
                            'char' => 94,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 82,
                          'char' => 94,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 83,
                      'char' => 4,
                    ),
                  ),
                  'else_statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'array-index',
                          'operator' => 'assign',
                          'variable' => 'params',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'variable',
                              'value' => 'key',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 85,
                              'char' => 19,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'value',
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 85,
                            'char' => 28,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 85,
                          'char' => 28,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 86,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 87,
                  'char' => 3,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 89,
              'char' => 8,
            ),
            7 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'params',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 89,
                'char' => 16,
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 90,
              'char' => 2,
            ),
          ),
          'docblock' => '*
	 * Around 30% faster than core
	 *',
          'file' => '/var/extensions/drupal/drupal/common.zep',
          'line' => 52,
          'char' => 29,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
            2 => 'final',
          ),
          'type' => 'method',
          'name' => 'drupal_get_query_array',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'query',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 95,
              'char' => 66,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'array',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'result',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 96,
                    'char' => 20,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 96,
                  'char' => 20,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 97,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'param',
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 97,
                  'char' => 12,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 98,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'query',
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 98,
                    'char' => 19,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 98,
                  'char' => 19,
                ),
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 98,
                'char' => 19,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'explode',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => '&',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 99,
                          'char' => 28,
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 99,
                        'char' => 28,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'query',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 99,
                          'char' => 35,
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 99,
                        'char' => 35,
                      ),
                    ),
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 99,
                    'char' => 37,
                  ),
                  'value' => 'param',
                  'reverse' => 0,
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
                          'operator' => 'assign',
                          'variable' => 'param',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'explode',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => '=',
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 100,
                                  'char' => 28,
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 100,
                                'char' => 28,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'param',
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 100,
                                  'char' => 35,
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 100,
                                'char' => 35,
                              ),
                              2 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'int',
                                  'value' => '2',
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 100,
                                  'char' => 38,
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 100,
                                'char' => 38,
                              ),
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 100,
                            'char' => 39,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 100,
                          'char' => 39,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 101,
                      'char' => 6,
                    ),
                    1 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'isset',
                        'left' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'param',
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 101,
                            'char' => 19,
                          ),
                          'right' => 
                          array (
                            'type' => 'int',
                            'value' => '1',
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 101,
                            'char' => 21,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 101,
                          'char' => 23,
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 101,
                        'char' => 23,
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
                              'assign-type' => 'array-index',
                              'operator' => 'assign',
                              'variable' => 'result',
                              'index-expr' => 
                              array (
                                0 => 
                                array (
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'param',
                                    'file' => '/var/extensions/drupal/drupal/common.zep',
                                    'line' => 102,
                                    'char' => 22,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'int',
                                    'value' => '0',
                                    'file' => '/var/extensions/drupal/drupal/common.zep',
                                    'line' => 102,
                                    'char' => 24,
                                  ),
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 102,
                                  'char' => 25,
                                ),
                              ),
                              'expr' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'rawurldecode',
                                'call-type' => 1,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'array-access',
                                      'left' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'param',
                                        'file' => '/var/extensions/drupal/drupal/common.zep',
                                        'line' => 102,
                                        'char' => 47,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'int',
                                        'value' => '1',
                                        'file' => '/var/extensions/drupal/drupal/common.zep',
                                        'line' => 102,
                                        'char' => 49,
                                      ),
                                      'file' => '/var/extensions/drupal/drupal/common.zep',
                                      'line' => 102,
                                      'char' => 50,
                                    ),
                                    'file' => '/var/extensions/drupal/drupal/common.zep',
                                    'line' => 102,
                                    'char' => 50,
                                  ),
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 102,
                                'char' => 51,
                              ),
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 102,
                              'char' => 51,
                            ),
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 103,
                          'char' => 5,
                        ),
                      ),
                      'else_statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'let',
                          'assignments' => 
                          array (
                            0 => 
                            array (
                              'assign-type' => 'array-index',
                              'operator' => 'assign',
                              'variable' => 'result',
                              'index-expr' => 
                              array (
                                0 => 
                                array (
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'param',
                                    'file' => '/var/extensions/drupal/drupal/common.zep',
                                    'line' => 105,
                                    'char' => 22,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'int',
                                    'value' => '0',
                                    'file' => '/var/extensions/drupal/drupal/common.zep',
                                    'line' => 105,
                                    'char' => 24,
                                  ),
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 105,
                                  'char' => 25,
                                ),
                              ),
                              'expr' => 
                              array (
                                'type' => 'string',
                                'value' => '',
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 105,
                                'char' => 31,
                              ),
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 105,
                              'char' => 31,
                            ),
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 106,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 107,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 108,
                  'char' => 3,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 109,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'result',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 109,
                'char' => 16,
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 110,
              'char' => 2,
            ),
          ),
          'docblock' => '*
	 * Around 35% faster than core
	 *',
          'file' => '/var/extensions/drupal/drupal/common.zep',
          'line' => 95,
          'char' => 29,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
            2 => 'final',
          ),
          'type' => 'method',
          'name' => 'doExplode',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'delimiter',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 112,
              'char' => 60,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'realstring',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 112,
              'char' => 79,
            ),
          ),
          'file' => '/var/extensions/drupal/drupal/common.zep',
          'line' => 112,
          'char' => 32,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
            2 => 'final',
          ),
          'type' => 'method',
          'name' => 'drupal_http_build_query',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'query',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 119,
              'char' => 69,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'parent',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => '',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 119,
                'char' => 89,
              ),
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 119,
              'char' => 89,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'array',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'params',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 121,
                    'char' => 23,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 121,
                  'char' => 23,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 122,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'key',
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 122,
                  'char' => 10,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 123,
              'char' => 5,
            ),
            2 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'value',
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 123,
                  'char' => 12,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 125,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'query',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 125,
                'char' => 33,
              ),
              'key' => 'key',
              'value' => 'value',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'parent',
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 126,
                    'char' => 20,
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
                          'operator' => 'assign',
                          'variable' => 'key',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'concat',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'parent',
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 127,
                                  'char' => 28,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => '[',
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 127,
                                  'char' => 34,
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 127,
                                'char' => 34,
                              ),
                              'right' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'rawurlencode',
                                'call-type' => 1,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'key',
                                      'file' => '/var/extensions/drupal/drupal/common.zep',
                                      'line' => 127,
                                      'char' => 52,
                                    ),
                                    'file' => '/var/extensions/drupal/drupal/common.zep',
                                    'line' => 127,
                                    'char' => 52,
                                  ),
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 127,
                                'char' => 54,
                              ),
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 127,
                              'char' => 54,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => ']',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 127,
                              'char' => 59,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 127,
                            'char' => 59,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 127,
                          'char' => 59,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 128,
                      'char' => 10,
                    ),
                  ),
                  'else_statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'key',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'rawurlencode',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'key',
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 129,
                                  'char' => 37,
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 129,
                                'char' => 37,
                              ),
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 129,
                            'char' => 38,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 129,
                          'char' => 38,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 130,
                      'char' => 10,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 132,
                  'char' => 11,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'is_array',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 132,
                          'char' => 27,
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 132,
                        'char' => 27,
                      ),
                    ),
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 132,
                    'char' => 29,
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
                          'assign-type' => 'variable-append',
                          'operator' => 'assign',
                          'variable' => 'params',
                          'expr' => 
                          array (
                            'type' => 'scall',
                            'dynamic-class' => 0,
                            'class' => 'self',
                            'dynamic' => 0,
                            'name' => 'drupal_http_build_query',
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'value',
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 133,
                                  'char' => 61,
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 133,
                                'char' => 61,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'key',
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 133,
                                  'char' => 66,
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 133,
                                'char' => 66,
                              ),
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 133,
                            'char' => 67,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 133,
                          'char' => 67,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 134,
                      'char' => 10,
                    ),
                  ),
                  'elseif_statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'empty',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 135,
                          'char' => 29,
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 135,
                        'char' => 29,
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
                              'assign-type' => 'variable-append',
                              'operator' => 'assign',
                              'variable' => 'params',
                              'expr' => 
                              array (
                                'type' => 'variable',
                                'value' => 'key',
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 136,
                                'char' => 29,
                              ),
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 136,
                              'char' => 29,
                            ),
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 137,
                          'char' => 10,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 138,
                      'char' => 13,
                    ),
                  ),
                  'else_statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'declare',
                      'data-type' => 'string',
                      'variables' => 
                      array (
                        0 => 
                        array (
                          'variable' => 'start',
                          'expr' => 
                          array (
                            'type' => 'string',
                            'value' => '',
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 139,
                            'char' => 28,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 139,
                          'char' => 28,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 140,
                      'char' => 13,
                    ),
                    1 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'start',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'key',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 140,
                              'char' => 27,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => '=',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 140,
                              'char' => 32,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 140,
                            'char' => 32,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 140,
                          'char' => 32,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 141,
                      'char' => 13,
                    ),
                    2 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable-append',
                          'operator' => 'assign',
                          'variable' => 'params',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'start',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 141,
                              'char' => 32,
                            ),
                            'right' => 
                            array (
                              'type' => 'fcall',
                              'name' => 'str_replace',
                              'call-type' => 1,
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'string',
                                    'value' => '%2F',
                                    'file' => '/var/extensions/drupal/drupal/common.zep',
                                    'line' => 141,
                                    'char' => 51,
                                  ),
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 141,
                                  'char' => 51,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'string',
                                    'value' => '/',
                                    'file' => '/var/extensions/drupal/drupal/common.zep',
                                    'line' => 141,
                                    'char' => 56,
                                  ),
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 141,
                                  'char' => 56,
                                ),
                                2 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'fcall',
                                    'name' => 'rawurlencode',
                                    'call-type' => 1,
                                    'parameters' => 
                                    array (
                                      0 => 
                                      array (
                                        'parameter' => 
                                        array (
                                          'type' => 'variable',
                                          'value' => 'value',
                                          'file' => '/var/extensions/drupal/drupal/common.zep',
                                          'line' => 141,
                                          'char' => 76,
                                        ),
                                        'file' => '/var/extensions/drupal/drupal/common.zep',
                                        'line' => 141,
                                        'char' => 76,
                                      ),
                                    ),
                                    'file' => '/var/extensions/drupal/drupal/common.zep',
                                    'line' => 141,
                                    'char' => 77,
                                  ),
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 141,
                                  'char' => 77,
                                ),
                              ),
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 141,
                              'char' => 78,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 141,
                            'char' => 78,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 141,
                          'char' => 78,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 142,
                      'char' => 10,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 143,
                  'char' => 9,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 144,
              'char' => 14,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'implode',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => '&',
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 144,
                      'char' => 27,
                    ),
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 144,
                    'char' => 27,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'params',
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 144,
                      'char' => 35,
                    ),
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 144,
                    'char' => 35,
                  ),
                ),
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 144,
                'char' => 36,
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 145,
              'char' => 5,
            ),
          ),
          'docblock' => '*
	 * Around 35% faster than core
	 *',
          'file' => '/var/extensions/drupal/drupal/common.zep',
          'line' => 119,
          'char' => 32,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
            2 => 'final',
          ),
          'type' => 'method',
          'name' => 'drupal_get_destination',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'destination',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 150,
              'char' => 72,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'string',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'path',
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 151,
                  'char' => 17,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 152,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'string',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'query',
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 152,
                  'char' => 18,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 154,
              'char' => 7,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'destination',
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 154,
                    'char' => 28,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 154,
                  'char' => 28,
                ),
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 154,
                'char' => 28,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'destination',
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 155,
                    'char' => 25,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 156,
                  'char' => 6,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 158,
              'char' => 7,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fetch',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'destination',
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 158,
                  'char' => 48,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => '_GET',
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 158,
                    'char' => 32,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'destination',
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 158,
                    'char' => 46,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 158,
                  'char' => 48,
                ),
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 158,
                'char' => 48,
              ),
              'else_statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'path',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'string',
                          'value' => '',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 161,
                          'char' => 21,
                        ),
                        'right' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => '_GET',
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 161,
                            'char' => 27,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'q',
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 161,
                            'char' => 31,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 161,
                          'char' => 32,
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 161,
                        'char' => 32,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 161,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 162,
                  'char' => 9,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'query',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'string',
                          'value' => '',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 162,
                          'char' => 22,
                        ),
                        'right' => 
                        array (
                          'type' => 'scall',
                          'dynamic-class' => 0,
                          'class' => 'self',
                          'dynamic' => 0,
                          'name' => 'drupal_http_build_query',
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'scall',
                                'dynamic-class' => 0,
                                'class' => 'self',
                                'dynamic' => 0,
                                'name' => 'drupal_get_query_parameters',
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'null',
                                      'file' => '/var/extensions/drupal/drupal/common.zep',
                                      'line' => 162,
                                      'char' => 92,
                                    ),
                                    'file' => '/var/extensions/drupal/drupal/common.zep',
                                    'line' => 162,
                                    'char' => 92,
                                  ),
                                  1 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'array',
                                      'left' => 
                                      array (
                                        0 => 
                                        array (
                                          'value' => 
                                          array (
                                            'type' => 'string',
                                            'value' => 'q',
                                            'file' => '/var/extensions/drupal/drupal/common.zep',
                                            'line' => 162,
                                            'char' => 98,
                                          ),
                                          'file' => '/var/extensions/drupal/drupal/common.zep',
                                          'line' => 162,
                                          'char' => 98,
                                        ),
                                      ),
                                      'file' => '/var/extensions/drupal/drupal/common.zep',
                                      'line' => 162,
                                      'char' => 99,
                                    ),
                                    'file' => '/var/extensions/drupal/drupal/common.zep',
                                    'line' => 162,
                                    'char' => 99,
                                  ),
                                  2 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'string',
                                      'value' => '',
                                      'file' => '/var/extensions/drupal/drupal/common.zep',
                                      'line' => 162,
                                      'char' => 103,
                                    ),
                                    'file' => '/var/extensions/drupal/drupal/common.zep',
                                    'line' => 162,
                                    'char' => 103,
                                  ),
                                  3 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => '_GET',
                                      'file' => '/var/extensions/drupal/drupal/common.zep',
                                      'line' => 162,
                                      'char' => 109,
                                    ),
                                    'file' => '/var/extensions/drupal/drupal/common.zep',
                                    'line' => 162,
                                    'char' => 109,
                                  ),
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 162,
                                'char' => 110,
                              ),
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 162,
                              'char' => 110,
                            ),
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 162,
                          'char' => 111,
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 162,
                        'char' => 111,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 162,
                      'char' => 111,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 163,
                  'char' => 8,
                ),
                2 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'not-equals',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'query',
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 163,
                        'char' => 18,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => '',
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 163,
                        'char' => 22,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 163,
                      'char' => 22,
                    ),
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 163,
                    'char' => 24,
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
                          'variable' => 'path',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'string',
                              'value' => '?',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 164,
                              'char' => 23,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'query',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 164,
                              'char' => 30,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 164,
                            'char' => 30,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 164,
                          'char' => 30,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 165,
                      'char' => 7,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 166,
                  'char' => 9,
                ),
                3 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'destination',
                      'expr' => 
                      array (
                        'type' => 'array',
                        'left' => 
                        array (
                          0 => 
                          array (
                            'key' => 
                            array (
                              'type' => 'string',
                              'value' => 'destination',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 166,
                              'char' => 39,
                            ),
                            'value' => 
                            array (
                              'type' => 'variable',
                              'value' => 'path',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 166,
                              'char' => 45,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 166,
                            'char' => 45,
                          ),
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 166,
                        'char' => 46,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 166,
                      'char' => 46,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 167,
                  'char' => 6,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 168,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'destination',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 168,
                'char' => 24,
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 169,
              'char' => 5,
            ),
          ),
          'docblock' => '*
     * Around 100% slower than core, so not implemented :)
     *',
          'file' => '/var/extensions/drupal/drupal/common.zep',
          'line' => 150,
          'char' => 32,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
            2 => 'final',
          ),
          'type' => 'method',
          'name' => 'drupal_parse_url',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'url',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 174,
              'char' => 61,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'array',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'queryoptions',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 175,
                    'char' => 29,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 175,
                  'char' => 29,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 176,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'array',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'options',
                  'expr' => 
                  array (
                    'type' => 'array',
                    'left' => 
                    array (
                      0 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'path',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 176,
                          'char' => 29,
                        ),
                        'value' => 
                        array (
                          'type' => 'null',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 176,
                          'char' => 35,
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 176,
                        'char' => 35,
                      ),
                      1 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'fragment',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 176,
                          'char' => 47,
                        ),
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => '',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 176,
                          'char' => 51,
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 176,
                        'char' => 51,
                      ),
                    ),
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 176,
                    'char' => 52,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 176,
                  'char' => 52,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 177,
              'char' => 8,
            ),
            2 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'parts',
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 177,
                  'char' => 15,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 178,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'queryparts',
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 178,
                  'char' => 20,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 179,
              'char' => 8,
            ),
            4 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'fragment',
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 179,
                  'char' => 18,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 181,
              'char' => 7,
            ),
            5 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-identical',
                'left' => 
                array (
                  'type' => 'fcall',
                  'name' => 'strpos',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'url',
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 181,
                        'char' => 19,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 181,
                      'char' => 19,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'string',
                        'value' => '://',
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 181,
                        'char' => 26,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 181,
                      'char' => 26,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 181,
                  'char' => 30,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'false',
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 181,
                  'char' => 38,
                ),
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 181,
                'char' => 38,
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
                      'operator' => 'assign',
                      'variable' => 'parts',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'explode',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => '?',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 182,
                              'char' => 30,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 182,
                            'char' => 30,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'url',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 182,
                              'char' => 35,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 182,
                            'char' => 35,
                          ),
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 182,
                        'char' => 36,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 182,
                      'char' => 36,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 183,
                  'char' => 9,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'options',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'path',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 183,
                          'char' => 25,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'parts',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 183,
                          'char' => 34,
                        ),
                        'right' => 
                        array (
                          'type' => 'int',
                          'value' => '0',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 183,
                          'char' => 36,
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 183,
                        'char' => 37,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 183,
                      'char' => 37,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 185,
                  'char' => 8,
                ),
                2 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'isset',
                    'left' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'parts',
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 185,
                        'char' => 21,
                      ),
                      'right' => 
                      array (
                        'type' => 'int',
                        'value' => '1',
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 185,
                        'char' => 23,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 185,
                      'char' => 25,
                    ),
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 185,
                    'char' => 25,
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
                          'operator' => 'assign',
                          'variable' => 'queryparts',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'explode',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => '#',
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 186,
                                  'char' => 36,
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 186,
                                'char' => 36,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'parts',
                                    'file' => '/var/extensions/drupal/drupal/common.zep',
                                    'line' => 186,
                                    'char' => 43,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'int',
                                    'value' => '1',
                                    'file' => '/var/extensions/drupal/drupal/common.zep',
                                    'line' => 186,
                                    'char' => 45,
                                  ),
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 186,
                                  'char' => 46,
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 186,
                                'char' => 46,
                              ),
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 186,
                            'char' => 47,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 186,
                          'char' => 47,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 187,
                      'char' => 16,
                    ),
                    1 => 
                    array (
                      'type' => 'fcall',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'parse_str',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'queryparts',
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 187,
                                'char' => 28,
                              ),
                              'right' => 
                              array (
                                'type' => 'int',
                                'value' => '0',
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 187,
                                'char' => 30,
                              ),
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 187,
                              'char' => 31,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 187,
                            'char' => 31,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'queryoptions',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 187,
                              'char' => 45,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 187,
                            'char' => 45,
                          ),
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 187,
                        'char' => 46,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 189,
                      'char' => 9,
                    ),
                    2 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'isset',
                        'left' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'queryparts',
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 189,
                            'char' => 27,
                          ),
                          'right' => 
                          array (
                            'type' => 'int',
                            'value' => '1',
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 189,
                            'char' => 29,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 189,
                          'char' => 31,
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 189,
                        'char' => 31,
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
                              'assign-type' => 'array-index',
                              'operator' => 'assign',
                              'variable' => 'options',
                              'index-expr' => 
                              array (
                                0 => 
                                array (
                                  'type' => 'string',
                                  'value' => 'fragment',
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 190,
                                  'char' => 31,
                                ),
                              ),
                              'expr' => 
                              array (
                                'type' => 'array-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'queryparts',
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 190,
                                  'char' => 45,
                                ),
                                'right' => 
                                array (
                                  'type' => 'int',
                                  'value' => '1',
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 190,
                                  'char' => 47,
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 190,
                                'char' => 48,
                              ),
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 190,
                              'char' => 48,
                            ),
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 191,
                          'char' => 8,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 192,
                      'char' => 7,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 193,
                  'char' => 6,
                ),
              ),
              'else_statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'parts',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'parse_url',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'string',
                                'value' => 'http://example.com/',
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 195,
                                'char' => 51,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'url',
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 195,
                                'char' => 56,
                              ),
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 195,
                              'char' => 56,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 195,
                            'char' => 56,
                          ),
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 195,
                        'char' => 57,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 195,
                      'char' => 57,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 196,
                  'char' => 9,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'options',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'path',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 196,
                          'char' => 25,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'substr',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'parts',
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 196,
                                'char' => 41,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'path',
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 196,
                                'char' => 48,
                              ),
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 196,
                              'char' => 49,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 196,
                            'char' => 49,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'int',
                              'value' => '1',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 196,
                              'char' => 52,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 196,
                            'char' => 52,
                          ),
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 196,
                        'char' => 53,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 196,
                      'char' => 53,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 197,
                  'char' => 8,
                ),
                2 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'isset',
                    'left' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'parts',
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 197,
                        'char' => 21,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'query',
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 197,
                        'char' => 29,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 197,
                      'char' => 31,
                    ),
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 197,
                    'char' => 31,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'fcall',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'parse_str',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'parts',
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 198,
                                'char' => 23,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'query',
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 198,
                                'char' => 31,
                              ),
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 198,
                              'char' => 32,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 198,
                            'char' => 32,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'queryoptions',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 198,
                              'char' => 46,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 198,
                            'char' => 46,
                          ),
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 198,
                        'char' => 47,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 199,
                      'char' => 7,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 201,
                  'char' => 8,
                ),
                3 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'fetch',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'fragment',
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 201,
                      'char' => 44,
                    ),
                    'right' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'parts',
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 201,
                        'char' => 31,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'fragment',
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 201,
                        'char' => 42,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 201,
                      'char' => 44,
                    ),
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 201,
                    'char' => 44,
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
                          'assign-type' => 'array-index',
                          'operator' => 'assign',
                          'variable' => 'options',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'string',
                              'value' => 'fragment',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 202,
                              'char' => 30,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'fragment',
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 202,
                            'char' => 42,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 202,
                          'char' => 42,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 203,
                      'char' => 7,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 204,
                  'char' => 6,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 205,
              'char' => 8,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'array-index',
                  'operator' => 'assign',
                  'variable' => 'options',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'string',
                      'value' => 'query',
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 205,
                      'char' => 25,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'queryoptions',
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 205,
                    'char' => 41,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 205,
                  'char' => 41,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 207,
              'char' => 7,
            ),
            7 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'isset',
                'left' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 207,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'query',
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 207,
                      'char' => 30,
                    ),
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 207,
                    'char' => 31,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'q',
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 207,
                    'char' => 35,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 207,
                  'char' => 37,
                ),
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 207,
                'char' => 37,
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
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'options',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'path',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 208,
                          'char' => 25,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'options',
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 208,
                            'char' => 36,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'query',
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 208,
                            'char' => 44,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 208,
                          'char' => 45,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'q',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 208,
                          'char' => 49,
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 208,
                        'char' => 50,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 208,
                      'char' => 50,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 209,
                  'char' => 11,
                ),
                1 => 
                array (
                  'type' => 'unset',
                  'expr' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'options',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 209,
                          'char' => 20,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'query',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 209,
                          'char' => 28,
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 209,
                        'char' => 29,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'q',
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 209,
                        'char' => 33,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 209,
                      'char' => 34,
                    ),
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 209,
                    'char' => 35,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 210,
                  'char' => 6,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 212,
              'char' => 11,
            ),
            8 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'options',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 212,
                'char' => 20,
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 213,
              'char' => 5,
            ),
          ),
          'docblock' => '*
	 * Around 25% faster than core
	 *',
          'file' => '/var/extensions/drupal/drupal/common.zep',
          'line' => 174,
          'char' => 32,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
            2 => 'final',
          ),
          'type' => 'method',
          'name' => 'drupal_goto',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'path',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => '',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 220,
                'char' => 62,
              ),
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 220,
              'char' => 62,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'options',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 220,
                'char' => 82,
              ),
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 220,
              'char' => 82,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'http_response_code',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'int',
                'value' => '302',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 220,
                'char' => 112,
              ),
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 220,
              'char' => 112,
            ),
          ),
          'docblock' => '*
	 * Around 100% slower than core, so not implemented
	 *',
          'file' => '/var/extensions/drupal/drupal/common.zep',
          'line' => 220,
          'char' => 32,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
            2 => 'final',
          ),
          'type' => 'method',
          'name' => 'drupal_strip_dangerous_protocols',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'uri',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 253,
              'char' => 77,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'allowed_protocols',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 253,
                'char' => 105,
              ),
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 253,
              'char' => 105,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'string',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'tempuri',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 254,
                    'char' => 25,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 254,
                  'char' => 25,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 255,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'string',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'returnuri',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 255,
                    'char' => 30,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 255,
                  'char' => 30,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 256,
              'char' => 12,
            ),
            2 => 
            array (
              'type' => 'declare',
              'data-type' => 'char',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'ch',
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 256,
                  'char' => 16,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 257,
              'char' => 15,
            ),
            3 => 
            array (
              'type' => 'declare',
              'data-type' => 'bool',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'foundcolon',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 257,
                    'char' => 35,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 257,
                  'char' => 35,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 258,
              'char' => 15,
            ),
            4 => 
            array (
              'type' => 'declare',
              'data-type' => 'bool',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'allok',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 258,
                    'char' => 30,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 258,
                  'char' => 30,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 260,
              'char' => 11,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'uri',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'strtolower',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'uri',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 260,
                          'char' => 33,
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 260,
                        'char' => 33,
                      ),
                    ),
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 260,
                    'char' => 34,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 260,
                  'char' => 34,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 262,
              'char' => 11,
            ),
            6 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'uri',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 262,
                'char' => 23,
              ),
              'value' => 'ch',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'allok',
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 263,
                    'char' => 22,
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
                          'variable' => 'returnuri',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'ch',
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 264,
                            'char' => 36,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 264,
                          'char' => 36,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 265,
                      'char' => 13,
                    ),
                  ),
                  'elseif_statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'or',
                        'left' => 
                        array (
                          'type' => 'or',
                          'left' => 
                          array (
                            'type' => 'equals',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'ch',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 266,
                              'char' => 24,
                            ),
                            'right' => 
                            array (
                              'type' => 'char',
                              'value' => '?',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 266,
                              'char' => 31,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 266,
                            'char' => 31,
                          ),
                          'right' => 
                          array (
                            'type' => 'equals',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'ch',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 266,
                              'char' => 37,
                            ),
                            'right' => 
                            array (
                              'type' => 'char',
                              'value' => '#',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 266,
                              'char' => 44,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 266,
                            'char' => 44,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 266,
                          'char' => 44,
                        ),
                        'right' => 
                        array (
                          'type' => 'equals',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'ch',
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 266,
                            'char' => 50,
                          ),
                          'right' => 
                          array (
                            'type' => 'char',
                            'value' => '/',
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 266,
                            'char' => 56,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 266,
                          'char' => 56,
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 266,
                        'char' => 56,
                      ),
                      'statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'if',
                          'expr' => 
                          array (
                            'type' => 'equals',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'foundcolon',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 267,
                              'char' => 32,
                            ),
                            'right' => 
                            array (
                              'type' => 'bool',
                              'value' => 'true',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 267,
                              'char' => 39,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 267,
                            'char' => 39,
                          ),
                          'statements' => 
                          array (
                            0 => 
                            array (
                              'type' => 'if',
                              'expr' => 
                              array (
                                'type' => 'isset',
                                'left' => 
                                array (
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'allowed_protocols',
                                    'file' => '/var/extensions/drupal/drupal/common.zep',
                                    'line' => 268,
                                    'char' => 47,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'tempuri',
                                    'file' => '/var/extensions/drupal/drupal/common.zep',
                                    'line' => 268,
                                    'char' => 55,
                                  ),
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 268,
                                  'char' => 57,
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 268,
                                'char' => 57,
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
                                      'variable' => 'returnuri',
                                      'expr' => 
                                      array (
                                        'type' => 'concat',
                                        'left' => 
                                        array (
                                          'type' => 'variable',
                                          'value' => 'tempuri',
                                          'file' => '/var/extensions/drupal/drupal/common.zep',
                                          'line' => 269,
                                          'char' => 49,
                                        ),
                                        'right' => 
                                        array (
                                          'type' => 'string',
                                          'value' => ':',
                                          'file' => '/var/extensions/drupal/drupal/common.zep',
                                          'line' => 269,
                                          'char' => 54,
                                        ),
                                        'file' => '/var/extensions/drupal/drupal/common.zep',
                                        'line' => 269,
                                        'char' => 54,
                                      ),
                                      'file' => '/var/extensions/drupal/drupal/common.zep',
                                      'line' => 269,
                                      'char' => 54,
                                    ),
                                  ),
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 270,
                                  'char' => 27,
                                ),
                                1 => 
                                array (
                                  'type' => 'let',
                                  'assignments' => 
                                  array (
                                    0 => 
                                    array (
                                      'assign-type' => 'variable',
                                      'operator' => 'assign',
                                      'variable' => 'tempuri',
                                      'expr' => 
                                      array (
                                        'type' => 'string',
                                        'value' => '',
                                        'file' => '/var/extensions/drupal/drupal/common.zep',
                                        'line' => 270,
                                        'char' => 41,
                                      ),
                                      'file' => '/var/extensions/drupal/drupal/common.zep',
                                      'line' => 270,
                                      'char' => 41,
                                    ),
                                  ),
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 271,
                                  'char' => 21,
                                ),
                              ),
                              'else_statements' => 
                              array (
                                0 => 
                                array (
                                  'type' => 'let',
                                  'assignments' => 
                                  array (
                                    0 => 
                                    array (
                                      'assign-type' => 'variable',
                                      'operator' => 'assign',
                                      'variable' => 'tempuri',
                                      'expr' => 
                                      array (
                                        'type' => 'string',
                                        'value' => '',
                                        'file' => '/var/extensions/drupal/drupal/common.zep',
                                        'line' => 272,
                                        'char' => 41,
                                      ),
                                      'file' => '/var/extensions/drupal/drupal/common.zep',
                                      'line' => 272,
                                      'char' => 41,
                                    ),
                                  ),
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 273,
                                  'char' => 21,
                                ),
                              ),
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 274,
                              'char' => 23,
                            ),
                            1 => 
                            array (
                              'type' => 'let',
                              'assignments' => 
                              array (
                                0 => 
                                array (
                                  'assign-type' => 'variable',
                                  'operator' => 'assign',
                                  'variable' => 'foundcolon',
                                  'expr' => 
                                  array (
                                    'type' => 'bool',
                                    'value' => 'false',
                                    'file' => '/var/extensions/drupal/drupal/common.zep',
                                    'line' => 274,
                                    'char' => 43,
                                  ),
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 274,
                                  'char' => 43,
                                ),
                              ),
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 275,
                              'char' => 17,
                            ),
                          ),
                          'else_statements' => 
                          array (
                            0 => 
                            array (
                              'type' => 'let',
                              'assignments' => 
                              array (
                                0 => 
                                array (
                                  'assign-type' => 'variable',
                                  'operator' => 'assign',
                                  'variable' => 'allok',
                                  'expr' => 
                                  array (
                                    'type' => 'bool',
                                    'value' => 'true',
                                    'file' => '/var/extensions/drupal/drupal/common.zep',
                                    'line' => 276,
                                    'char' => 37,
                                  ),
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 276,
                                  'char' => 37,
                                ),
                              ),
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 277,
                              'char' => 17,
                            ),
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 278,
                          'char' => 19,
                        ),
                        1 => 
                        array (
                          'type' => 'let',
                          'assignments' => 
                          array (
                            0 => 
                            array (
                              'assign-type' => 'variable',
                              'operator' => 'concat-assign',
                              'variable' => 'returnuri',
                              'expr' => 
                              array (
                                'type' => 'variable',
                                'value' => 'ch',
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 278,
                                'char' => 35,
                              ),
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 278,
                              'char' => 35,
                            ),
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 279,
                          'char' => 13,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 280,
                      'char' => 18,
                    ),
                    1 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'not-equals',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'ch',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 280,
                          'char' => 24,
                        ),
                        'right' => 
                        array (
                          'type' => 'char',
                          'value' => ':',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 280,
                          'char' => 30,
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 280,
                        'char' => 30,
                      ),
                      'statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'if',
                          'expr' => 
                          array (
                            'type' => 'equals',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'foundcolon',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 281,
                              'char' => 32,
                            ),
                            'right' => 
                            array (
                              'type' => 'bool',
                              'value' => 'true',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 281,
                              'char' => 39,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 281,
                            'char' => 39,
                          ),
                          'statements' => 
                          array (
                            0 => 
                            array (
                              'type' => 'if',
                              'expr' => 
                              array (
                                'type' => 'not',
                                'left' => 
                                array (
                                  'type' => 'isset',
                                  'left' => 
                                  array (
                                    'type' => 'array-access',
                                    'left' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'allowed_protocols',
                                      'file' => '/var/extensions/drupal/drupal/common.zep',
                                      'line' => 282,
                                      'char' => 48,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'tempuri',
                                      'file' => '/var/extensions/drupal/drupal/common.zep',
                                      'line' => 282,
                                      'char' => 56,
                                    ),
                                    'file' => '/var/extensions/drupal/drupal/common.zep',
                                    'line' => 282,
                                    'char' => 58,
                                  ),
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 282,
                                  'char' => 58,
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 282,
                                'char' => 58,
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
                                      'operator' => 'assign',
                                      'variable' => 'tempuri',
                                      'expr' => 
                                      array (
                                        'type' => 'string',
                                        'value' => '',
                                        'file' => '/var/extensions/drupal/drupal/common.zep',
                                        'line' => 283,
                                        'char' => 41,
                                      ),
                                      'file' => '/var/extensions/drupal/drupal/common.zep',
                                      'line' => 283,
                                      'char' => 41,
                                    ),
                                  ),
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 284,
                                  'char' => 21,
                                ),
                              ),
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 285,
                              'char' => 23,
                            ),
                            1 => 
                            array (
                              'type' => 'let',
                              'assignments' => 
                              array (
                                0 => 
                                array (
                                  'assign-type' => 'variable',
                                  'operator' => 'assign',
                                  'variable' => 'foundcolon',
                                  'expr' => 
                                  array (
                                    'type' => 'bool',
                                    'value' => 'false',
                                    'file' => '/var/extensions/drupal/drupal/common.zep',
                                    'line' => 285,
                                    'char' => 43,
                                  ),
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 285,
                                  'char' => 43,
                                ),
                              ),
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 286,
                              'char' => 17,
                            ),
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 287,
                          'char' => 19,
                        ),
                        1 => 
                        array (
                          'type' => 'let',
                          'assignments' => 
                          array (
                            0 => 
                            array (
                              'assign-type' => 'variable',
                              'operator' => 'concat-assign',
                              'variable' => 'tempuri',
                              'expr' => 
                              array (
                                'type' => 'variable',
                                'value' => 'ch',
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 287,
                                'char' => 33,
                              ),
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 287,
                              'char' => 33,
                            ),
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 288,
                          'char' => 13,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 289,
                      'char' => 16,
                    ),
                  ),
                  'else_statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'foundcolon',
                          'expr' => 
                          array (
                            'type' => 'bool',
                            'value' => 'true',
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 290,
                            'char' => 38,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 290,
                          'char' => 38,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 291,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 292,
                  'char' => 9,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 293,
              'char' => 11,
            ),
            7 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'concat-assign',
                  'variable' => 'returnuri',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'tempuri',
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 293,
                    'char' => 32,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 293,
                  'char' => 32,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 294,
              'char' => 14,
            ),
            8 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'returnuri',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 294,
                'char' => 25,
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 316,
              'char' => 5,
            ),
          ),
          'docblock' => '*
     * Around 15% slower, so not implemented;
     *',
          'file' => '/var/extensions/drupal/drupal/common.zep',
          'line' => 253,
          'char' => 32,
        ),
        10 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'drupal_attributes',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'attributes',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 325,
              'char' => 62,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'attribute',
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 326,
                  'char' => 22,
                ),
                1 => 
                array (
                  'variable' => 'data',
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 326,
                  'char' => 28,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 328,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'attributes',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 328,
                'char' => 43,
              ),
              'key' => 'attribute',
              'value' => 'data',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'equals',
                    'left' => 
                    array (
                      'type' => 'typeof',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'data',
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 329,
                        'char' => 29,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 329,
                      'char' => 29,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'array',
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 329,
                      'char' => 39,
                    ),
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 329,
                    'char' => 39,
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
                          'operator' => 'assign',
                          'variable' => 'data',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'join',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => ' ',
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 330,
                                  'char' => 36,
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 330,
                                'char' => 36,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'data',
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 330,
                                  'char' => 42,
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 330,
                                'char' => 42,
                              ),
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 330,
                            'char' => 43,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 330,
                          'char' => 43,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 331,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 332,
                  'char' => 15,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'data',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'attribute',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 332,
                              'char' => 34,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => '=\\"',
                              'file' => '/var/extensions/drupal/drupal/common.zep',
                              'line' => 332,
                              'char' => 42,
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 332,
                            'char' => 42,
                          ),
                          'right' => 
                          array (
                            'type' => 'scall',
                            'dynamic-class' => 0,
                            'class' => 'Bootstrap',
                            'dynamic' => 0,
                            'name' => 'check_plain',
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'data',
                                  'file' => '/var/extensions/drupal/drupal/common.zep',
                                  'line' => 332,
                                  'char' => 71,
                                ),
                                'file' => '/var/extensions/drupal/drupal/common.zep',
                                'line' => 332,
                                'char' => 71,
                              ),
                            ),
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 332,
                            'char' => 73,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 332,
                          'char' => 73,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => '\\"',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 332,
                          'char' => 79,
                        ),
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 332,
                        'char' => 79,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 332,
                      'char' => 79,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 333,
                  'char' => 15,
                ),
                2 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'attributes',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'variable',
                          'value' => 'attribute',
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 333,
                          'char' => 37,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'data',
                        'file' => '/var/extensions/drupal/drupal/common.zep',
                        'line' => 333,
                        'char' => 45,
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 333,
                      'char' => 45,
                    ),
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 334,
                  'char' => 9,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 336,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'typeof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'attributes',
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 336,
                    'char' => 31,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 336,
                  'char' => 31,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'array',
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 336,
                  'char' => 41,
                ),
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 336,
                'char' => 41,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'string',
                      'value' => ' ',
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 337,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'join',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'string',
                            'value' => ' ',
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 337,
                            'char' => 34,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 337,
                          'char' => 34,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'attributes',
                            'file' => '/var/extensions/drupal/drupal/common.zep',
                            'line' => 337,
                            'char' => 46,
                          ),
                          'file' => '/var/extensions/drupal/drupal/common.zep',
                          'line' => 337,
                          'char' => 46,
                        ),
                      ),
                      'file' => '/var/extensions/drupal/drupal/common.zep',
                      'line' => 337,
                      'char' => 47,
                    ),
                    'file' => '/var/extensions/drupal/drupal/common.zep',
                    'line' => 337,
                    'char' => 47,
                  ),
                  'file' => '/var/extensions/drupal/drupal/common.zep',
                  'line' => 338,
                  'char' => 9,
                ),
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 339,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'string',
                'value' => '',
                'file' => '/var/extensions/drupal/drupal/common.zep',
                'line' => 339,
                'char' => 18,
              ),
              'file' => '/var/extensions/drupal/drupal/common.zep',
              'line' => 340,
              'char' => 5,
            ),
          ),
          'file' => '/var/extensions/drupal/drupal/common.zep',
          'line' => 325,
          'char' => 26,
        ),
      ),
      'file' => '/var/extensions/drupal/drupal/common.zep',
      'line' => 3,
      'char' => 11,
    ),
    'file' => '/var/extensions/drupal/drupal/common.zep',
    'line' => 3,
    'char' => 11,
  ),
);