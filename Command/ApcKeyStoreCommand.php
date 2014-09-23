<?php

/*
 * This file is part of CacheToolBundle.
 *
 * (c) Samuel Gordalina <samuel.gordalina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CacheTool\Bundle\Command;

use CacheTool\Command\ApcKeyStoreCommand as BaseApcKeyStoreCommand;

class ApcKeyStoreCommand extends BaseApcKeyStoreCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        parent::configure();

        $this->setName('cachetool:apc:key:store');
    }
}
