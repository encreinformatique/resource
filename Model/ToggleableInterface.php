<?php

namespace EncreInformatique\Component\Resource\Model;

interface ToggleableInterface
{
    /**
     * Missing scalar typehint because it conflicts with AdvancedUserInterface.
     *
     * @return bool
     */
    public function isEnabled();

    /**
     * @param bool $enabled
     */
    public function setEnabled($enabled);

    public function enable();

    public function disable();
}
