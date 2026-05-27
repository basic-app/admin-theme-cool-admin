<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\AdminThemeCoolAdmin\Publishers;

use BasicApp\Publisher\Publisher as BasePublisher;

class Publisher extends BasePublisher
{
    protected $source = VENDORPATH . 'basic-app/admin-theme-cool-admin/assets/';

    protected $destination = FCPATH . 'themes/admin-cool-admin/';

    protected $createDestination = true;

    public function publish(): bool
    {
        helper(['filesystem']);

        if (count(directory_map($this->destination)) > 0)
        {
            return true;
        }
        
        return $this->addPath('/')->merge(true);
    }
}