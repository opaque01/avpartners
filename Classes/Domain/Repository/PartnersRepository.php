<?php

declare(strict_types=1);

namespace Od\Avpartners\Domain\Repository;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;

/**
 * This file is part of the "Avpartners" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 Walter Kruml <walter@opaque.at>, opaque design . Walter Kruml
 */

/**
 * The repository for Partners
 */
class PartnersRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
  public function findByCountry(int $countries)
  {
      $query = $this->createQuery();
      $query->matching($query->equals('country', $countries));
      return $query->execute();
  }

  protected $defaultOrderings = [
        'name' => QueryInterface::ORDER_ASCENDING
    ];

}
