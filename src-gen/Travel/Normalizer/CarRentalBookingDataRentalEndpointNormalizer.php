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

class CarRentalBookingDataRentalEndpointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\CarRentalBookingDataRentalEndpoint';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\CarRentalBookingDataRentalEndpoint';
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
        $object = new \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataRentalEndpoint();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($this->denormalizer->denormalize($data['location'], 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\CarRentalBookingDataRentalEndpointLocation', 'json', $context));
            unset($data['location']);
        }
        if (\array_key_exists('time', $data)) {
            $object->setTime($this->denormalizer->denormalize($data['time'], 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\CarRentalBookingDataRentalEndpointTime', 'json', $context));
            unset($data['time']);
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
        $data['location'] = $this->normalizer->normalize($object->getLocation(), 'json', $context);
        $data['time'] = $this->normalizer->normalize($object->getTime(), 'json', $context);
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
