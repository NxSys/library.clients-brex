<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Transactions\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Transactions\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Transactions\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class StatementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'NxSys\\Library\\Clients\\Brex\\API\\Transactions\\Model\\Statement';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'NxSys\\Library\\Clients\\Brex\\API\\Transactions\\Model\\Statement';
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
        $object = new \NxSys\Library\Clients\Brex\API\Transactions\Model\Statement();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('start_balance', $data)) {
            $object->setStartBalance($this->denormalizer->denormalize($data['start_balance'], 'NxSys\\Library\\Clients\\Brex\\API\\Transactions\\Model\\StatementStartBalance', 'json', $context));
            unset($data['start_balance']);
        }
        if (\array_key_exists('end_balance', $data)) {
            $object->setEndBalance($this->denormalizer->denormalize($data['end_balance'], 'NxSys\\Library\\Clients\\Brex\\API\\Transactions\\Model\\StatementEndBalance', 'json', $context));
            unset($data['end_balance']);
        }
        if (\array_key_exists('period', $data)) {
            $object->setPeriod($this->denormalizer->denormalize($data['period'], 'NxSys\\Library\\Clients\\Brex\\API\\Transactions\\Model\\StatementPeriod', 'json', $context));
            unset($data['period']);
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
        $data['id'] = $object->getId();
        if ($object->isInitialized('startBalance') && null !== $object->getStartBalance()) {
            $data['start_balance'] = $this->normalizer->normalize($object->getStartBalance(), 'json', $context);
        }
        if ($object->isInitialized('endBalance') && null !== $object->getEndBalance()) {
            $data['end_balance'] = $this->normalizer->normalize($object->getEndBalance(), 'json', $context);
        }
        $data['period'] = $this->normalizer->normalize($object->getPeriod(), 'json', $context);
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
