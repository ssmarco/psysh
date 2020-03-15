<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2020 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$config->setRuntimeDir(\sys_get_temp_dir() . '/psysh_test/withconfig/temp');

return [
    'useReadline'       => true,
    'usePcntl'          => false,
    'requireSemicolons' => false,
    'useUnicode'        => true,
    'errorLoggingLevel' => E_ALL & ~E_NOTICE,
];
