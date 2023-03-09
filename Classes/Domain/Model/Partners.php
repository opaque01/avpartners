<?php

declare(strict_types=1);

namespace Od\Avpartners\Domain\Model;


/**
 * This file is part of the "Avpartners" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 Walter Kruml <walter@opaque.at>, opaque design . Walter Kruml
 */

/**
 * Company info
 */
class Partners extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

    /**
     * logo
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $logo = null;

    /**
     * address
     *
     * @var string|null
     */
    protected $address = '';

    /**
     * zip
     *
     * @var string|null
     */
    protected $zip = '';

    /**
     * city
     *
     * @var string|null
     */
    protected $city = '';

    /**
     * phone
     *
     * @var string|null
     */
    protected $phone = '';

    /**
     * fax
     *
     * @var string|null
     */
    protected $fax = '';

    /**
     * url
     *
     * @var string
     */
    protected $url = '';

    /**
     * email
     *
     * @var string|null
     */
    protected $email = '';

    /**
     * comment
     *
     * @var string|null
     */
    protected $comment = '';

    /**
     * categories
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Od\Avpartners\Domain\Model\Categories>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $categories = null;

    /**
     * country
     *
     * @var \Od\Avpartners\Domain\Model\Countries
     */
    protected $country = null;

    /**
     * __construct
     */
    public function __construct()
    {

        // Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }

    /**
     * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    public function initializeObject()
    {
        $this->categories = $this->categories ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns the logo
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Sets the logo
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
     * @return void
     */
    public function setLogo(\TYPO3\CMS\Extbase\Domain\Model\FileReference $logo)
    {
        $this->logo = $logo;
    }

    /**
     * Returns the url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets the url
     *
     * @param string $url
     * @return void
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
    }

    /**
     * Adds a Categories
     *
     * @param \Od\Avpartners\Domain\Model\Categories $category
     * @return void
     */
    public function addCategory(\Od\Avpartners\Domain\Model\Categories $category)
    {
        $this->categories->attach($category);
    }

    /**
     * Removes a Categories
     *
     * @param \Od\Avpartners\Domain\Model\Categories $categoryToRemove The Categories to be removed
     * @return void
     */
    public function removeCategory(\Od\Avpartners\Domain\Model\Categories $categoryToRemove)
    {
        $this->categories->detach($categoryToRemove);
    }

    /**
     * Returns the categories
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Od\Avpartners\Domain\Model\Categories>
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets the categories
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Od\Avpartners\Domain\Model\Categories> $categories
     * @return void
     */
    public function setCategories(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories)
    {
        $this->categories = $categories;
    }

    /**
     * Returns the address
     *
     * @return string|null address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     *
     * @param string|null $address
     * @return void
     */
    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    /**
     * Returns the zip
     *
     * @return string|null zip
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Sets the zip
     *
     * @param string|null $zip
     * @return void
     */
    public function setZip(string $zip)
    {
        $this->zip = $zip;
    }

    /**
     * Returns the city
     *
     * @return string|null city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets the city
     *
     * @param string|null $city
     * @return void
     */
    public function setCity(string $city)
    {
        $this->city = $city;
    }

    /**
     * Returns the phone
     *
     * @return string|null phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets the phone
     *
     * @param string|null $phone
     * @return void
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    /**
     * Returns the fax
     *
     * @return string|null fax
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets the fax
     *
     * @param string|null $fax
     * @return void
     */
    public function setFax(string $fax)
    {
        $this->fax = $fax;
    }

    /**
     * Returns the email
     *
     * @return string|null email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param string|null $email
     * @return void
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * Returns the comment
     *
     * @return string|null comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets the comment
     *
     * @param string|null $comment
     * @return void
     */
    public function setComment(string $comment)
    {
        $this->comment = $comment;
    }

    /**
     * Returns the country
     *
     * @return \Od\Avpartners\Domain\Model\Countries country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets the country
     *
     * @param \Od\Avpartners\Domain\Model\Countries $country
     * @return void
     */
    public function setCountry(\Od\Avpartners\Domain\Model\Countries $country)
    {
        $this->country = $country;
    }
}
