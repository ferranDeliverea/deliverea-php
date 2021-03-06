<?php

namespace Deliverea\Model;

use Deliverea\Common\ToArrayTrait;

class Address extends AbstractDeliverea
{
    use ToArrayTrait;

    /** @var */
    private $address_id;

    /** @var string */
    private $nif;

    /** @var string */
    private $name;

    /** @var string */
    private $attn;

    /** @var string */
    private $street_type;

    /** @var string */
    private $street_name;

    /** @var string */
    private $street_number;

    /** @var string */
    private $address;

    /** @var string */
    private $floor;

    /** @var string */
    private $city;

    /** @var string */
    private $zip_code;

    /** @var string */
    private $country_code;

    /** @var string */
    private $phone;

    /** @var string */
    private $email;

    /** @var string */
    private $observations;

    public function __construct(
        $name,
        $street_type,
        $street_name,
        $street_number,
        $floor,
        $city,
        $zip_code,
        $country_code,
        $phone
    ) {
        $this->name = $name;
        $this->street_type = $street_type;
        $this->street_name = $street_name;
        $this->street_number = $street_number;
        $this->floor = $floor;
        $this->city = $city;
        $this->zip_code = $zip_code;
        $this->country_code = $country_code;
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getAddressId()
    {
        return $this->address_id;
    }

    /**
     * @param mixed $addressId
     */
    public function setAddressId($addressId)
    {
        $this->address_id = $addressId;
    }

    /**
     * @return string
     */
    public function getNif()
    {
        return $this->nif;
    }

    /**
     * @param string $nif
     */
    public function setNif($nif)
    {
        $this->nif = $nif;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getAttn()
    {
        return $this->attn;
    }

    /**
     * @param string $attn
     */
    public function setAttn($attn)
    {
        $this->attn = $attn;
    }

    /**
     * @return string
     */
    public function getStreetType()
    {
        return $this->street_type;
    }

    /**
     * @param string $street_type
     */
    public function setStreetType($street_type)
    {
        $this->street_type = $street_type;
    }

    /**
     * @return string
     */
    public function getStreetName()
    {
        return $this->street_name;
    }

    /**
     * @param string $street_name
     */
    public function setStreetName($street_name)
    {
        $this->street_name = $street_name;
    }

    /**
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->street_number;
    }

    /**
     * @param string $street_number
     */
    public function setStreetNumber($street_number)
    {
        $this->street_number = $street_number;
    }

    /**
     * @return string
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * @param string $floor
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }

    /**
     * @param string $zip_code
     */
    public function setZipCode($zip_code)
    {
        $this->zip_code = $zip_code;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * @param string $country_code
     */
    public function setCountryCode($country_code)
    {
        $this->country_code = $country_code;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * @param string $observations
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;
    }
}