<?php 

declare(strict_types=1);

namespace App\Controller\Lov;

use App\Entity\Lov\CriteriaLov;
use App\Controller\Lov\AbstractLovController;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/criteria', name: 'criteria_')]
class CriteriaController extends AbstractLovController
{
    protected function getEntityClass(): string
    {
        return CriteriaLov::class;
    }
    
    protected function getSerializationGroup(): string
    {
        return 'default_lov';
    }

    protected function getEntityName(): string
    {
        return 'criteria';
    }

    protected function extractFilters(array $queryParams): array
    {
        return [
            'title' => $queryParams['title'] ?? null,
        ];
    }
}