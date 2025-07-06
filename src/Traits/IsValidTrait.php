<?php 

namespace App\Traits;
use Symfony\Component\Serializer\Annotation\Groups;

trait IsValidTrait
{
    /**
     * Indique si l'entité est valide.
     */
    #[\Doctrine\ORM\Mapping\Column(type: 'boolean', options: ['default' => true])]
    #[Groups(['user_list'])]
    private bool $isValid = true;

    /**
     * Récupère l'état de validité de l'entité.
     *
     * @return bool
     */
    public function isValid(): bool
    {
        return $this->isValid;
    }

    /**
     * Définit l'état de validité de l'entité.
     *
     * @param bool $isValid
     * @return self
     */
    public function setIsValid(bool $isValid): self
    {
        $this->isValid = $isValid;

        return $this;
    }
}
