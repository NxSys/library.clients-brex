<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Travel\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Travel\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Travel\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\Address';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\Address';
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Travel\Model\Address();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('country', $data) && $data['country'] !== null) {
            $object->setCountry($data['country']);
            unset($data['country']);
        } elseif (\array_key_exists('country', $data) && $data['country'] === null) {
            $object->setCountry(null);
        }
        if (\array_key_exists('administrative_area', $data) && $data['administrative_area'] !== null) {
            $object->setAdministrativeArea($data['administrative_area']);
            unset($data['administrative_area']);
        } elseif (\array_key_exists('administrative_area', $data) && $data['administrative_area'] === null) {
            $object->setAdministrativeArea(null);
        }
        if (\array_key_exists('city', $data) && $data['city'] !== null) {
            $object->setCity($data['city']);
            unset($data['city']);
        } elseif (\array_key_exists('city', $data) && $data['city'] === null) {
            $object->setCity(null);
        }
        if (\array_key_exists('postal_code', $data) && $data['postal_code'] !== null) {
            $object->setPostalCode($data['postal_code']);
            unset($data['postal_code']);
        } elseif (\array_key_exists('postal_code', $data) && $data['postal_code'] === null) {
            $object->setPostalCode(null);
        }
        if (\array_key_exists('address_line_1', $data) && $data['address_line_1'] !== null) {
            $object->setAddressLine1($data['address_line_1']);
            unset($data['address_line_1']);
        } elseif (\array_key_exists('address_line_1', $data) && $data['address_line_1'] === null) {
            $object->setAddressLine1(null);
        }
        if (\array_key_exists('address_line_2', $data) && $data['address_line_2'] !== null) {
            $object->setAddressLine2($data['address_line_2']);
            unset($data['address_line_2']);
        } elseif (\array_key_exists('address_line_2', $data) && $data['address_line_2'] === null) {
            $object->setAddressLine2(null);
        }
        if (\array_key_exists('coordinates', $data)) {
            $object->setCoordinates($this->denormalizer->denormalize($data['coordinates'], 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\AddressCoordinates', 'json', $context));
            unset($data['coordinates']);
        }
        if (\array_key_exists('timezone', $data) && $data['timezone'] !== null) {
            $object->setTimezone($data['timezone']);
            unset($data['timezone']);
        } elseif (\array_key_exists('timezone', $data) && $data['timezone'] === null) {
            $object->setTimezone(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('country') && null !== $object->getCountry()) {
            $data['country'] = $object->getCountry();
        }
        if ($object->isInitialized('administrativeArea') && null !== $object->getAdministrativeArea()) {
            $data['administrative_area'] = $object->getAdministrativeArea();
        }
        if ($object->isInitialized('city') && null !== $object->getCity()) {
            $data['city'] = $object->getCity();
        }
        if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
            $data['postal_code'] = $object->getPostalCode();
        }
        if ($object->isInitialized('addressLine1') && null !== $object->getAddressLine1()) {
            $data['address_line_1'] = $object->getAddressLine1();
        }
        if ($object->isInitialized('addressLine2') && null !== $object->getAddressLine2()) {
            $data['address_line_2'] = $object->getAddressLine2();
        }
        if ($object->isInitialized('coordinates') && null !== $object->getCoordinates()) {
            $data['coordinates'] = $this->normalizer->normalize($object->getCoordinates(), 'json', $context);
        }
        if ($object->isInitialized('timezone') && null !== $object->getTimezone()) {
            $data['timezone'] = $object->getTimezone();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
