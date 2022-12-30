<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Team\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Team\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Team\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UpdateUserRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'NxSys\\Library\\Clients\\Brex\\API\\Team\\Model\\UpdateUserRequest';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'NxSys\\Library\\Clients\\Brex\\API\\Team\\Model\\UpdateUserRequest';
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
        $object = new \NxSys\Library\Clients\Brex\API\Team\Model\UpdateUserRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('manager_id', $data) && $data['manager_id'] !== null) {
            $object->setManagerId($data['manager_id']);
            unset($data['manager_id']);
        } elseif (\array_key_exists('manager_id', $data) && $data['manager_id'] === null) {
            $object->setManagerId(null);
        }
        if (\array_key_exists('department_id', $data) && $data['department_id'] !== null) {
            $object->setDepartmentId($data['department_id']);
            unset($data['department_id']);
        } elseif (\array_key_exists('department_id', $data) && $data['department_id'] === null) {
            $object->setDepartmentId(null);
        }
        if (\array_key_exists('location_id', $data) && $data['location_id'] !== null) {
            $object->setLocationId($data['location_id']);
            unset($data['location_id']);
        } elseif (\array_key_exists('location_id', $data) && $data['location_id'] === null) {
            $object->setLocationId(null);
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
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('managerId') && null !== $object->getManagerId()) {
            $data['manager_id'] = $object->getManagerId();
        }
        if ($object->isInitialized('departmentId') && null !== $object->getDepartmentId()) {
            $data['department_id'] = $object->getDepartmentId();
        }
        if ($object->isInitialized('locationId') && null !== $object->getLocationId()) {
            $data['location_id'] = $object->getLocationId();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
