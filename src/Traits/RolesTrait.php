<?php

namespace Dwo\Traits;

trait RolesTrait
{
    /** @var array|null */
    protected $roles;

    /**
     * @return array|null
     */
    public function getRoles(): ?array
    {
        return $this->roles;
    }

    /**
     * @param array|null $roles
     */
    public function setRoles(?array $roles)
    {
        $this->roles = $roles;
    }

    /**
     * @param string|array $role
     */
    public function addRole($role)
    {
        if (is_scalar($role)) {
            $role = (array) $role;
        }
        if (!is_array($role)) {
            throw new \UnexpectedValueException('first argument must be scalar or an array');
        }

        $this->roles = array_values(array_unique(array_merge($this->roles, $role)));
    }
}
