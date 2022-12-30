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

class SpendControlRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'NxSys\\Library\\Clients\\Brex\\API\\Team\\Model\\SpendControlRequest';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'NxSys\\Library\\Clients\\Brex\\API\\Team\\Model\\SpendControlRequest';
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
        $object = new \NxSys\Library\Clients\Brex\API\Team\Model\SpendControlRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('spend_limit', $data)) {
            $object->setSpendLimit($this->denormalizer->denormalize($data['spend_limit'], 'NxSys\\Library\\Clients\\Brex\\API\\Team\\Model\\Money', 'json', $context));
            unset($data['spend_limit']);
        }
        if (\array_key_exists('spend_duration', $data)) {
            $object->setSpendDuration($data['spend_duration']);
            unset($data['spend_duration']);
        }
        if (\array_key_exists('reason', $data) && $data['reason'] !== null) {
            $object->setReason($data['reason']);
            unset($data['reason']);
        } elseif (\array_key_exists('reason', $data) && $data['reason'] === null) {
            $object->setReason(null);
        }
        if (\array_key_exists('lock_after_date', $data) && $data['lock_after_date'] !== null) {
            $object->setLockAfterDate(\DateTime::createFromFormat('Y-m-d', $data['lock_after_date'])->setTime(0, 0, 0));
            unset($data['lock_after_date']);
        } elseif (\array_key_exists('lock_after_date', $data) && $data['lock_after_date'] === null) {
            $object->setLockAfterDate(null);
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
        $data['spend_limit'] = $this->normalizer->normalize($object->getSpendLimit(), 'json', $context);
        $data['spend_duration'] = $object->getSpendDuration();
        if ($object->isInitialized('reason') && null !== $object->getReason()) {
            $data['reason'] = $object->getReason();
        }
        if ($object->isInitialized('lockAfterDate') && null !== $object->getLockAfterDate()) {
            $data['lock_after_date'] = $object->getLockAfterDate()->format('Y-m-d');
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
