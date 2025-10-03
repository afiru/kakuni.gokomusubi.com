<?php namespace SimplyBook\Interfaces;

use SimplyBook\Managers\ControllerManager;

/**
 * This interface can be used to register a controller. Controllers will only
 * be accepted and registered by {@see ControllerManager} when they implement
 * this interface.
 */
interface ControllerInterface
{
    /**
     * This method should be used to register all hooks and filters. The
     * {@see ControllerManager} will make sure the method is called in the boot
     * process of the plugin.
     */
    public function register();
}