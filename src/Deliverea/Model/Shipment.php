<?php
namespace Deliverea\Model;

use Deliverea\Common\ToArrayTrait;

class Shipment extends AbstractDeliverea
{
    use ToArrayTrait;

    /** @var int */
    private $parcel_number;

    /** @var int */
    private $parcel_weight;

    /** @var int */
    private $parcel_height;

    /** @var int */
    private $parcel_width;

    /** @var int */
    private $parcel_length;

    /** @var int */
    private $parcel_volume;

    /** @var \DateTime */
    private $shipping_date;

    /** @var int */
    private $docs_number;

    /** @var string */
    private $service_type;

    /** @var string */
    private $carrier_code;

    /** @var string */
    private $service_code;

    /** @var string */
    private $shipping_client_ref;

    /** @var  string */
    private $shipping_dlvr_ref;

    /** @var string */
    private $shipping_carrier_ref;

    /** @var \DateTime */
    private $creation_date;

    /** @var string */
    private $return_dlvr_ref;

    /** @var bool */
    private $is_return = false;

    /**
     * @param $parcel_number
     * @param $shipping_client_ref
     * @param \DateTime $shipping_date
     * @param $service_type
     * @param $carrier_code
     * @param $service_code
     */
    public function __construct(
        $parcel_number,
        $shipping_client_ref,
        \DateTime $shipping_date,
        $service_type,
        $carrier_code,
        $service_code
    ) {
        $this->parcel_number = $parcel_number;
        $this->shipping_client_ref = $shipping_client_ref;
        $this->shipping_date = $shipping_date;
        $this->service_type = $service_type;
        $this->carrier_code = $carrier_code;
        $this->service_code = $service_code;
    }

    /**
     * @return int
     */
    public function getParcelNumber()
    {
        return $this->parcel_number;
    }

    /**
     * @param int $parcel_number
     */
    public function setParcelNumber($parcel_number)
    {
        $this->parcel_number = $parcel_number;
    }

    /**
     * @return int
     */
    public function getParcelWeight()
    {
        return $this->parcel_weight;
    }

    /**
     * @param int $parcel_weight
     */
    public function setParcelWeight($parcel_weight)
    {
        $this->parcel_weight = $parcel_weight;
    }

    /**
     * @return int
     */
    public function getParcelHeight()
    {
        return $this->parcel_height;
    }

    /**
     * @param int $parcel_height
     */
    public function setParcelHeight($parcel_height)
    {
        $this->parcel_height = $parcel_height;
    }

    /**
     * @return int
     */
    public function getParcelWidth()
    {
        return $this->parcel_width;
    }

    /**
     * @param int $parcel_width
     */
    public function setParcelWidth($parcel_width)
    {
        $this->parcel_width = $parcel_width;
    }

    /**
     * @return int
     */
    public function getParcelLength()
    {
        return $this->parcel_length;
    }

    /**
     * @param int $parcel_length
     */
    public function setParcelLength($parcel_length)
    {
        $this->parcel_length = $parcel_length;
    }

    /**
     * @return int
     */
    public function getParcelVolume()
    {
        return $this->parcel_volume;
    }

    /**
     * @param int $parcel_volume
     */
    public function setParcelVolume($parcel_volume)
    {
        $this->parcel_volume = $parcel_volume;
    }

    /**
     * @return \DateTime
     */
    public function getShippingDate()
    {
        return $this->shipping_date;
    }

    /**
     * @param \DateTime $shipping_date
     */
    public function setShippingDate($shipping_date)
    {
        $this->shipping_date = $shipping_date;
    }

    /**
     * @return string
     */
    public function getServiceType()
    {
        return $this->service_type;
    }

    /**
     * @param string $service_type
     */
    public function setServiceType($service_type)
    {
        $this->service_type = $service_type;
    }

    /**
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->carrier_code;
    }

    /**
     * @param string $carrier_code
     */
    public function setCarrierCode($carrier_code)
    {
        $this->carrier_code = $carrier_code;
    }

    /**
     * @return string
     */
    public function getServiceCode()
    {
        return $this->service_code;
    }

    /**
     * @param string $service_code
     */
    public function setServiceCode($service_code)
    {
        $this->service_code = $service_code;
    }

    /**
     * @return string
     */
    public function getShippingClientRef()
    {
        return $this->shipping_client_ref;
    }

    /**
     * @param string $shipping_client_ref
     */
    public function setShippingClientRef($shipping_client_ref)
    {
        $this->shipping_client_ref = $shipping_client_ref;
    }

    /**
     * @return int
     */
    public function getDocsNumber()
    {
        return $this->docs_number;
    }

    /**
     * @param int $docs_number
     */
    public function setDocsNumber($docs_number)
    {
        $this->docs_number = $docs_number;
    }

    /**
     * @return string
     */
    public function getShippingDlvrRef()
    {
        return $this->shipping_dlvr_ref;
    }

    /**
     * @param string $shipping_dlvr_ref
     */
    public function setShippingDlvrRef($shipping_dlvr_ref)
    {
        $this->shipping_dlvr_ref = $shipping_dlvr_ref;
    }

    /**
     * @return string
     */
    public function getShippingCarrierRef()
    {
        return $this->shipping_carrier_ref;
    }

    /**
     * @param string $shipping_carrier_ref
     */
    public function setShippingCarrierRef($shipping_carrier_ref)
    {
        $this->shipping_carrier_ref = $shipping_carrier_ref;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creation_date;
    }

    /**
     * @param \DateTime $creation_date
     */
    public function setCreationDate($creation_date)
    {
        $this->creation_date = $creation_date;
    }

    /**
     * @return mixed
     */
    public function getReturnDlvrRef()
    {
        return $this->return_dlvr_ref;
    }

    /**
     * @param mixed $return_dlvr_ref
     */
    public function setReturnDlvrRef($return_dlvr_ref)
    {
        $this->return_dlvr_ref = $return_dlvr_ref;
    }

    /**
     * @return boolean
     */
    public function getIsReturn()
    {
        return $this->is_return;
    }

    /**
     * @param boolean $is_return
     */
    public function setIsReturn($is_return)
    {
        $this->is_return = $is_return;
    }

}