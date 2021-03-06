<?php
declare(strict_types=1);

namespace Framework\Models\BindingModels;

class RegisterBindingModel
{
    /**
     * @Required
     * @MinLength(3)
     * @MaxLength(30)
     * @Display(Username)
     */
    private $userName;

    /**
     * @Required
     * @MinLength(2)
     * @MaxLength(30)
     * @Display(Full name)
     */
    private $fullName;

    /**
     * @Required
     * @MinLength(6)
     * @MaxLength(30)
     * @Display(Password)
     */
    private $password;

    /**
     * @Required
     * @MinLength(6)
     * @MaxLength(30)
     * @Display(Confirm password)
     */
    private $confirmPassword;

    /**
     * @return string
     */
    public function getUserName() : string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function getFullName() : string {
        return $this->fullName;
    }

    /**
     * @param string $fullName
     */
    public function setFullName(string $fullName) {
        $this->fullName = $fullName;
    }

    /**
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getConfirmPassword() : string {
        return $this->confirmPassword;
    }

    /**
     * @param string $confirmPassword
     */
    public function setConfirmPassword(string $confirmPassword) {
        $this->confirmPassword = $confirmPassword;
    }
}