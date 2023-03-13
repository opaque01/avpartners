<?php

declare(strict_types=1);

namespace Od\Avpartners\Controller;


/**
 * This file is part of the "Avpartners" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 Walter Kruml <walter@opaque.at>, opaque design . Walter Kruml
 */

/**
 * CountriesController
 */
class CountriesController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * countriesRepository
     *
     * @var \Od\Avpartners\Domain\Repository\CountriesRepository
     */
    protected $countriesRepository = null;

    /**
     * @param \Od\Avpartners\Domain\Repository\CountriesRepository $countriesRepository
     */
    public function injectCountriesRepository(\Od\Avpartners\Domain\Repository\CountriesRepository $countriesRepository)
    {
        $this->countriesRepository = $countriesRepository;
    }

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $countries = $this->countriesRepository->findAll();
        $this->view->assign('countries', $countries);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \Od\Avpartners\Domain\Model\Countries $countries
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Od\Avpartners\Domain\Model\Countries $countries): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('countries', $countries);
        return $this->htmlResponse();
    }
}
