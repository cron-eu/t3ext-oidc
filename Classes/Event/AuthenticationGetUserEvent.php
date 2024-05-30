<?php

declare(strict_types=1);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace Causal\Oidc\Event;

use TYPO3\CMS\Core\Authentication\AbstractAuthenticationService;

final class AuthenticationGetUserEvent
{
    /**
     * @var array|bool
     */
    protected $user;

    protected AbstractAuthenticationService $authenticationService;

    /**
     * @param array|bool $user
     */
    public function __construct($user, AbstractAuthenticationService $authenticationService)
    {
        $this->user = $user;
        $this->authenticationService = $authenticationService;
    }

    /**
     * Array with user if authentication was successfull or false on failure.
     * @return array|bool
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param array|bool $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

    public function getAuthenticationService(): AbstractAuthenticationService
    {
        return $this->authenticationService;
    }
}
