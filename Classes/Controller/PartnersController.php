<?php

declare(strict_types=1);

namespace Od\Avpartners\Controller;

use TYPO3\CMS\Extbase\Annotation\IgnoreValidation;


/**
 * This file is part of the "Avpartners" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 Walter Kruml <walter@opaque.at>, opaque design . Walter Kruml
 */

/**
 * PartnersController
 */
class PartnersController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * partnersRepository
     *
     * @var \Od\Avpartners\Domain\Repository\PartnersRepository
     */
    protected $partnersRepository = null;

    /**
     * @param \Od\Avpartners\Domain\Repository\PartnersRepository $partnersRepository
     */
    public function injectPartnersRepository(\Od\Avpartners\Domain\Repository\PartnersRepository $partnersRepository)
    {
        $this->partnersRepository = $partnersRepository;
    }

    /**
     * Generate a list with all countries which are used by partners
     */
    protected function getActiveCountries()
    {
      $partners = $this->partnersRepository->findAll();
      $countriesFromPartners = [];

      $countryObject = array();
      foreach($partners as $partner) {
          $countryObject = $partner->getCountry();
          $countriesFromPartners[] = $countryObject;
      }

      $countriesWithPartners = $this->objectManager->get('Od\\Avpartners\\Domain\\Repository\\CountriesRepository')->findInCountries($countriesFromPartners);
      return $countriesWithPartners;
    }


    /**
     * Get the svg code from flexform
     */
    protected function generateSvg()
    {
      $highlightColor = $this->settings['highlightColor'];
      $svg = ($this->settings['svg']);
      $dom = new \DOMDocument();
      $dom->loadXML($svg);
      $dom->validateOnParse = true;

      $countries = $this->getActiveCountries();
      $countriesIsoCodes = array();
      foreach($countries as $country) {
          $countryIsoCodes = $country->getIsocode();

//          $id = $dom->getElementById($countryIsoCodes);
//          $id->setAttribute('fill',$highlightColor);
//          if ($id) {
//            $id->setAttribute('fill',$highlightColor);
//          }
//          foreach($dom->getElementById($countryIsoCodes) as $path) {
//            $path->setAttribute('fill',$highlightColor);
//          }
      }

      //$id = $dom->getElementById('AT-4');
      //$id->setAttribute('fill',$highlightColor);

      return $dom->saveXML();
    }


    /**
     * action list
     *
     * @param \Od\Avpartners\Domain\Model\Partners $partners
     * @param \Od\Avpartners\Domain\Model\Countries $countries
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(\Od\Avpartners\Domain\Model\Countries $countries = null): \Psr\Http\Message\ResponseInterface
    {
      if ($countries !== null) {
        $countryUid = $countries->getUid();
        $partners = $this->objectManager->get('Od\\Avpartners\\Domain\\Repository\\PartnersRepository')->findByCountry($countryUid);
      } else {
        $partners = $this->partnersRepository->findAll();
      }

      $countriesWithPartners = $this->getActiveCountries();
      $svg = $this->generateSvg();

      $this->view->assign('svg', $svg);
      $this->view->assign('countriesWithPartners', $countriesWithPartners);
      $this->view->assign('partners', $partners);
      return $this->htmlResponse();
    }



}
