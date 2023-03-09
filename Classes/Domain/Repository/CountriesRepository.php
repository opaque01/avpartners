<?php

declare(strict_types=1);

namespace Od\Avpartners\Domain\Repository;

/**
 * This file is part of the "Avpartners" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 Walter Kruml <walter@opaque.at>, opaque design . Walter Kruml
 */

/**
 * The repository for Countries
 */
class CountriesRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function findInCountries(array $countries)
    {
        $query = $this->createQuery();
        $query->matching($query->in('uid', $countries));
        return $query->execute();
    }
}