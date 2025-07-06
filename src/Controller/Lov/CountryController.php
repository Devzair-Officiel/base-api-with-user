<?php 

declare(strict_types=1);

namespace App\Controller\Lov;

use App\Entity\Lov\CountryLov;
use App\Controller\Lov\AbstractLovController;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/countries', name: 'country_')]
class CountryController extends AbstractLovController
{
    protected function getEntityClass(): string
    {
        return CountryLov::class;
    }
    
    protected function getSerializationGroup(): string
    {
        return 'default_lov';
    }

    protected function getEntityName(): string
    {
        return 'countryLov';
    }

    protected function extractFilters(array $queryParams): array
    {
        return [
            'title' => $queryParams['title'] ?? null,
        ];
    }
}